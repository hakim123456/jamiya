<?php

namespace App\Http\Controllers;

use App\Models\Adherent;
use Illuminate\Http\Request;

class AdherentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
{
    $adherents = Adherent::all();
    return view('adherents.index', compact('adherents'));
}
public function create()
{
    return view('adherents.create');
}

public function store(Request $request)
{
    $validatedData = $request->validate([
        'numero_adherent' => 'required|integer',
        'cin_adherent' => 'required|string',
        'prenom_adherent' => 'required|string',
        'numero_tel_adherent' => 'required|integer',
        'imada' => 'required|string',
        'tajamou3' => 'required|string',
        'inscription' => 'required|boolean',
        'date_inscription' => 'required|date',
        'num_robenet' => 'required|integer',
        'ref_compteur' => 'required|string',
        'allt' => 'required|string',
        'long' => 'required|string',
        'description' => 'nullable|string',
    ]);

    Adherent::create($validatedData);

    return redirect()->route('adherents.index')->with('success', 'Adherent created successfully.');
}

public function show(Adherent $adherent)
{
    return view('adherents.show', compact('adherent'));
}

public function edit(Adherent $adherent)
{
    return view('adherents.edit', compact('adherent'));
}

public function update(Request $request, Adherent $adherent)
{
    $validatedData = $request->validate([
        'numero_adherent' => 'required|integer',
        'cin_adherent' => 'required|string',
        'prenom_adherent' => 'required|string',
        'numero_tel_adherent' => 'required|integer',
        'imada' => 'required|string',
        'tajamou3' => 'required|string',
        'inscription' => 'required|boolean',
        'date_inscription' => 'required|date',
        'num_robenet' => 'required|integer',
        'ref_compteur' => 'required|string',
        'allt' => 'required|integer',
        'long' => 'required|integer',
        'description' => 'nullable|string',
    ]);

    $adherent->update($validatedData);

    return redirect()->route('adherents.index')->with('success', 'Adherent updated successfully.');
}

public function destroy(Adherent $adherent)
{
    $adherent->delete();

    return redirect()->route('adherents.index')->with('success', 'Adherent deleted successfully.');
}
}
