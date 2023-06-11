<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Depense extends Model
{
    use HasFactory;
    protected $table = 'depenses'; // Specify the table name if it's different from the model's pluralized name

    protected $fillable = [
        'numéro_opération_depense',
        'type_opération_depense',
        'date_opearation_depense',
        'ref_depense',
        'numero_recu_depense',
        'somme_depense',
    ];
    protected $casts = [
        'numéro_opération_depense' => 'integer',
        'date_opearation_depense' => 'date',
        'type_opération_depense' => 'string',
        'ref_depense' => 'string',
        'numero_recu_depense' => 'string',
        'somme' => 'integer',
    ];

    public static $rules = [
        'numéro_opération_depense' => 'required|integer',
        'type_opération_depense' => 'required|string|max:255',
        'date_opearation_depense' => 'nullable|date',
        'ref_depense' => 'nullable|string|max:255',
        'numero_recu_depense' => 'nullable|string|max:255',
        'somme' => 'nullable|numeric',
    ];
}
