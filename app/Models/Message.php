<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Message extends Model
{
    protected $fillable = ['libMess','contMess','emMess','desMess','typeMess','etatMess'];
}
