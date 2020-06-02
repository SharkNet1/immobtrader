<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Tache extends Model
{
    protected $fillable = ['libTache','descTache','impTache','debTache','finTache','etatTache','idAgent'];
}