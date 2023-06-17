<?php

namespace App\Http\Controllers;
use App\Models\Adherent;
use App\Models\Facture;
use Illuminate\Http\Request;

class FactureController extends Controller
{
    public function index()
    {
        $factures = Facture::all();
        $adherents = Adherent::all();
       return view('factures.index', compact('factures', 'adherents'));
    }
    public function index2()
    {
        $factures = Facture::all();
        $adherents = Adherent::all();
       return view('factures.index2', compact('factures', 'adherents'));
    }

    public function create($id)
    {
        $adherent = Adherent::findOrFail($id);
        return view('factures.create', compact('adherent'));
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            // 'numero_operation' => 'integer'
          'nom_prenom_adherent' => 'max:255',
            'date_releve_compteur' => 'date',
            'nouveau_releve' => 'integer',
            'ancien_releve' => 'integer',
            'quantite_consommee' => 'integer',
            'prix_metre' => 'integer',
            'frais_relative_consommation' => 'integer',
            'frais_fixe_consommation' => 'integer',
            'frais_total_consommation' => 'integer',
            'autres_frais' => 'integer',
            'montant_demande' => 'integer',
            'montant_paye' => 'integer',
            'reste_a_paye' => 'integer',
            'num_facture' => 'integer',
            'num_recu_paiement' => 'integer',
        ]);

        Facture::create($validatedData);

        return redirect()->route('factures.index2')
            ->with('success', 'Facture created successfully.');
    }

    public function show(Facture $facture)
    {
        return view('factures.show', compact('facture'));
    }

    public function edit(Facture $facture)
    {
        return view('factures.edit', compact('facture'));
    }

    public function update(Request $request, Facture $facture)
    {
        $validatedData = $request->validate([
            'numero_operation' => 'integer',
            'nom_prenom_adherent' => 'max:255',
            'date_releve_compteur' => 'date',
            'nouveau_releve' => 'integer',
            'ancien_releve' => 'integer',
            'quantite_consomme' => 'integer',
            'prix_metre' => 'integer',
            'frais_relative_consommation' => 'integer',
            'frais_fixe_consommation' => 'integer',
            'frais_total_consommation' => 'integer',
            'autres_frais' => 'integer',
            'montant_demande' => 'integer',
            'montant_paye' => 'integer',
            'reste_a_paye' => 'integer',
            'num_facture' => 'integer',
            'num_recu_paiement' => 'integer',
        ]);

        $facture->update($validatedData);

        return redirect()->route('factures.index')
            ->with('success', 'Facture updated successfully.');
    }

    public function destroy(Facture $facture)
    {
        $facture->delete();

        return redirect()->route('factures.index')
            ->with('success', 'Facture deleted successfully.');
    }
}

