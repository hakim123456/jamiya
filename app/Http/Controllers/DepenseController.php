<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Depense;
class DepenseController extends Controller
{
    public function index()
    {
        $depenses = Depense::all();
        $somme_depense = Depense::sum('somme_depense');
        return view('depenses.index', compact('depenses','somme_depense'));
    }

    public function create()
    {
        return view('depenses.create');
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'numéro_opération_depense' => 'required',
            'type_opération_depense' => 'required',
            'date_opearation_depense' => 'required|date',
            'ref_depense' => 'nullable',
            'numero_recu_depense' => 'nullable',
            'somme_depense' => 'nullable|numeric',
        ]);

        Depense::create($validatedData);

        return redirect()->route('depenses.index')
            ->with('success', 'تمت الاضافة بنجاح');
    }

    public function show(Depense $depense)
    {
        return view('depenses.show', compact('depense'));
    }

    public function edit(Depense $depense)
    {
        return view('depenses.edit', compact('depense'));
    }

    public function update(Request $request, Depense $depense)
    {
        $validatedData = $request->validate([
            'numéro_opération_depense' => 'required',
            'type_opération_depense' => 'required',
            'date_opearation_depense' => 'required|date',
            'ref_depense' => 'nullable',
            'numero_recu_depense' => 'nullable',
            'somme_depense' => 'nullable|numeric',
        ]);

        $depense->update($validatedData);

        return redirect()->route('depenses.index')
            ->with('success', 'تم تحيين المصاريف بنجاح');
    }

    public function destroy(Depense $depense)
    {
        $depense->delete();

        return redirect()->route('depenses.index')
            ->with('success', 'تم الحذف بنجاح');
    }
}

