<?php

namespace App\Http\Controllers;

use App\Models\Professor;
use App\Models\Commission;
use Illuminate\Http\Request;

class ProfessorController extends Controller
{
    public function index()
    {
        $professors = Professor::all();
        return view('professors.index', compact('professors'));
    }

    public function create()
{
    $commissions = Commission::all();

    return view('professors.create', compact('commissions'));
}


    public function store(Request $request)
{
    $request->validate([
        'name' => 'required|string|max:255',
        'commissions' => 'required|array',  
        'commissions.*' => 'exists:commissions,id',  
    ]);

    $professor = Professor::create([
        'name' => $request->name,
    ]);

    $professor->commissions()->attach($request->commissions);

    return redirect()->route('professors.index')->with('success', 'Profesor creado con éxito.');
}

    public function edit($id)
    {
        $professor = Professor::findOrFail($id);
        $commissions = Commission::all();
        return view('professors.edit', compact('professor', 'commissions'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'commissions' => 'required|array',  
            'commissions.*' => 'exists:commissions,id',
        ]);
    
        $professor = Professor::findOrFail($id);
        $professor->update([
            'name' => $request->name,
        ]);
    
        $professor->commissions()->sync($request->commissions);
    
        return redirect()->route('professors.index')->with('success', 'Profesor actualizado con éxito.');
    }
    

    public function destroy($id)
    {
        $professor = Professor::findOrFail($id);
        $professor->delete();
        return redirect()->route('professors.index')->with('success', 'Profesor eliminado con éxito.');
    }
}
