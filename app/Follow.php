<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Follow extends Model
{
    //=




//关注用户
    public function followThisUser($user)
    {
        return $this->followers()->toggle($user);
    }

}

//
