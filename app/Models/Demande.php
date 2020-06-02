<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Demande extends Model
{
    protected $fillable = ['dateDemande','etatDemande','idClient','idDemarche'];
}