<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use App\Http\Requests\Request;
use App\User;
class InfoRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public $allowed_fields = [
        'gitHub', 'real_name', 'city', 'sex',
        'job', 'weChat', 'selfWeb',
        'email','qq','tell'
    ];

    public function authorize()
    {
        return true;
    }


    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'gitHub'     => 'nullable|url',
            'weChat'     => 'nullable|string',
            'email'      => 'email|unique:users,email,' . $this->id,
            'qq'         => 'nullable|digits_between:1,10',
            'tell'       => 'nullable|digits:11',
            'city'       => 'nullable|string',
            'job'        => 'nullable|string',
        ];
    }
            //
            //准备用验证后钩子来检测邮箱已经存在的，
            //因为当用户没有修改邮箱号的时候|unique:users,email,
            //就会报邮箱已经存在，用户就无法修改其他信息，所以在第一轮要放过邮箱的唯一验证。（当时想法）
            //'email'      => 'email|unique:users,email,' . $this->id,   <--laravel社区的做法
            //
            //    public function withValidator($validator)
            //    {
            //        $validator->after(function ($validator) {
            //            if ($this->somethingElseIsInvalid()) {
            //                $validator->errors()->add('field', '邮箱已经存在');
            //            }
            //        });
            //    }
            //    public function somethingElseIsInvalid(User $user)
            //    {
            //        $old_email = $user->email;
            //
            //    }

    public function performUpdate(User $user)
    {
        $data = $this->only($this->allowed_fields);
        $user->update($data);
        return $user;
    }



    public function messages()
    {
        return [
            'gitHub.url' => '请输入正确的地址',
            'email.email' => '请输入正确的邮箱',
            'email.unique' => '邮箱已经存在',
            'tell.digits' => '请输入正确的电话',
        ];
    }
}
