<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Operation extends Model
{
    use HasFactory;

    protected $fillable = [
        'numéro_opération',
        'type_opération',
        'date_opearation',
        'ref',
        'numero_recu',
        'somme',
    ];

    protected $casts = [
        'numéro_opération' => 'integer',
        'date_opearation' => 'date',
        'type_opération' => 'string',
        'ref' => 'string',
        'numero_recu' => 'string',
        'somme' => 'integer',
    ];

    public static $rules = [
        'numéro_opération' => 'required|integer',
        'type_opération' => 'required|string|max:255',
        'date_opearation' => 'nullable|date',
        'ref' => 'nullable|string|max:255',
        'numero_recu' => 'nullable|string|max:255',
        'somme' => 'nullable|numeric',
    ];
}
