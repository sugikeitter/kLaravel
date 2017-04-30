<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MyUser extends Model
{
    protected $table = 'my_user';
    protected $guarded = array('id');
}
