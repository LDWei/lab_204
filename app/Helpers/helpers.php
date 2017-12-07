<?php
use App\User;
/**
 * Created by PhpStorm.
 * User: passenger
 * Date: 2017/11/19
 * Time: 12:24
 */


if (!function_exists('isAdmin')) {
    function isAdmin($user)
    {
        return $user != null && $user instanceof User && $user->admin == 1;
    }
}


if (!function_exists('getAvatar')) {
    function getAvatar($user_id)
    {
        $url = User::find($user_id)->avatar;

    }
}

if (!function_exists('dateCarben')) {
    function dateCarben($date)
    {
        return $date->getTimestamp();

    }
}