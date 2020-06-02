<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Dossier extends Model
{
    protected $fillable = ['lienDos','etatDos','nbrDoc','idDemande'];
}
