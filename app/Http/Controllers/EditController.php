<?php

namespace App\Http\Controllers;

use App\Cat;
use App\User;
use Auth;
use Flash;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validate;
use App\Http\Requests\InfoRequest;
use Intervention\Image\ImageManagerStatic as Image;

class EditController extends Controller
{
    //
    /**
     * Display a listing of the resource.
     */
    public function __construct()
    {
        $this->middleware('auth')->except(['index','show']);
    }

    /*
     * 用户资料编辑页面
     * 根据用户ID 查询出用户的信息返回给前端
     * @return view
     */
    public function showEdit()
    {
        $id = Auth::id();
        $infos = User::where('id',$id)->get();
        return view('user.useredit',compact('infos','id'));
    }

    /*
    * save the info from user edit
    * InfoRequest.php来验证输入
    * @param $id \InfoRequest $request
    */
    public function saveEdit($id, InfoRequest $request)
    {
        $user = User::findOrFail($id);
        //$this->authorize('saveEdit',$user);//用户授权
        if($request->performUpdate($user))
            flash('修改成功')->success()->important();
        else
            flash('修改失败')->error()->important();
        return redirect(route('user.edit_page'));
    }


    public function showAvatarEdit()
    {
        $avatar = Auth::user()->avatar;
        $id = Auth::user()->id;
        return view('user.edit.avatar_edit',compact('id','avatar'));
    }


    public function avatarUpload(Request $request)
    {
        $id = $request->user_id;
        if($img = $request->file('photo')){
            //限制图片大小
            if($originalName = $img->getClientSize()<2048576){
                $ext = $ext = $img->getClientOriginalExtension();
                $dir = 'uploads/avatars/'.$id.'/';
                if(! is_dir($dir))
                    mkdir($dir);
                $filePath = $dir . date('YmdHis') . uniqid() . '.' . $ext;
                /* 裁剪图片 加水印->insert('images/new_avatar.jpg', 'bottom-right', 15, 10)*/
                $avatar = Image::make($img)->fit(200);
                if($avatar->save($filePath)) {
                    try {
                        $user = User::find($id);
                        $user->avatar = $filePath;
                        $user->save();
                        flash('修改成功')->success()->important();
                    } catch (ImageUploadException $exception) {
                        flash('修改失败')->error()->important();
                    }
                }
                 return back();
            }else
                flash('请选择小于2M的图片')->error()->important();
            return back();
        }
    }
}
