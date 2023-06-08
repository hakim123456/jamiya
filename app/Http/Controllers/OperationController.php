<?php

namespace App\Http\Controllers;

use App\Models\Operation;
use Illuminate\Http\Request;

class OperationController extends Controller
{
    public function index()
    {
        $operations = Operation::all();
        $sum = Operation::sum('somme');
        return view('operations.index', compact('operations','sum'));
        }

    public function create()
    {
        return view('operations.create');
    }

    public function store(Request $request)
{
    $validatedData = $request->validate([
        'numéro_opération' => 'required|integer',
        'type_opération' => 'required|string',
        'date_opearation' => 'required|date',
        'ref' => 'nullable|string',
        'numero_recu' => 'nullable|string',
        'somme' => 'nullable|numeric',
    ]);

    Operation::create($validatedData);

    return redirect()->route('operations.index')->with('success', 'Operation created successfully.');
}


    public function edit(Operation $operation)
    {
        return view('operations.edit', compact('operation'));
    }

    public function update(Request $request, Operation $operation)
    {
        $request->validate(Operation::$rules);

        $operation->update($request->all());

        return redirect()->route('operations.index');
    }

    public function destroy(Operation $operation)
    {
        $operation->delete();

        return redirect()->route('operations.index');
    }
   
}
