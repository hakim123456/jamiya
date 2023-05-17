<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Adherent extends Model
{
    use HasFactory;
    protected $fillable = [
        'numero_adherent',
        'cin_adherent',
        'prenom_adherent',
        'numero_tel_adherent',
        'imada',
        'tajamou3',
        'inscription',
        'date_inscription',
        'num_robenet',
        'ref_compteur',
        'allt',
        'long',
        'description',
    ];
}
