<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Personne extends Model
{
    protected $fillable = ['NomPers','prenomPers','datenesPers','adrPers','telPers','mailPers'];
}
