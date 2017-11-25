<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */
    //引用trait
    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = '/user/edit';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    /**
     * 重写username
     * @return
     */

     public function username()
     {
         return 'login';
     }

     /**
      * 重写credenttials
      *
      */
     public function credentials(Request $request)
     {
         $login = $request->get('login');
         $field = filter_var($login, FILTER_VALIDATE_EMAIL) ? 'email' : 'name';
         return [
             $field => $login,
             'password' => $request->get('password'),
         ];
     }
}
