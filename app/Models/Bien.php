<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Bien extends Model
{
    protected $fillable = ['libBien','adrBien','descripBien','etatBien','idProp','idVend','idFour'];

}
