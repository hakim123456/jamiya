<?php

namespace App\Http\Controllers;
use App\Models\Adherent;
use App\Models\Facture;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
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

        $facture = Facture::create($validatedData);

        return redirect()->route('factures.show' , $facture->id)
            ->with('success', 'Facture created successfully.');
    }

    public function show(Facture $facture)
    {
      
        return view('factures.show', compact('facture'));
    }
    public function show_date (Facture $facture)
    {
      
        return view('factures.show_date', compact('facture'));
    }
    
    public function result_date(Request $request)
{
  $start_date = $request->input('start_date');
  $end_date = $request->input('end_date');

  // Retrieve dates between the selected range from the database
  $dates = DB::table('factures')
              ->whereBetween('date_releve_compteur', [$start_date, $end_date])
              ->get();

  return view('factures.result_date', compact('dates'));
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

