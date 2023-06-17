<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Facture extends Model
{
    use HasFactory;
    protected $table = 'factures'; // Spécifiez le nom de la table si elle est différente du nom pluriel du modèle

    protected $fillable = [
        'numero_operation',
        'nom_prenom_adherent',
        'date_releve_compteur',
        'nouveau_releve',
        'ancien_releve',
        'quantite_consommee',
        'prix_metre',
        'frais_relative_consommation',
        'frais_fixe_consommation',
        'frais_total_consommation',
        'autres_frais',
        'montant_demande',
        'montant_paye',
        'reste_a_payer',
        'num_facture',
        'num_recu_paiement',
    ];
}
