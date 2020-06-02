<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Note extends Model
{
    protected $fillable = ['libNote','contNote','etatNote','dateNote','idAgent'];
}
