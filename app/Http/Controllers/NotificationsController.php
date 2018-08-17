<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;

class NotificationsController extends Controller
{
    //
    public function __construct()
    {
        $this->middleware('auth')->except(['index','show']);
    }

    public function index()
    {
        $user = Auth::user();
        $user->message_count=0;
        $user->save();
        return view('user.notifications.index',compact('user'));
    }
}
