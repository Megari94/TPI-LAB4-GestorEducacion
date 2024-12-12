<?php

namespace App\Http\Controllers;

use App\Models\Commission;
use App\Models\Course;
use Illuminate\Http\Request;

class CommissionController extends Controller
{
    public function index(Request $request)
    {
        $courses = Course::all();

        $commissions = Commission::query();

        if ($request->has('course_id') && $request->course_id != '') {
            $commissions = $commissions->where('course_id', $request->course_id);
        }

        if ($request->has('horario') && $request->horario != '') {
            $commissions = $commissions->where('horario', 'like', '%' . $request->horario . '%');
        }

        $commissions = $commissions->paginate(10);

        return view('commissions.index', compact('commissions', 'courses'));
    }

    public function create()
    {
        $courses = Course::all();
        return view('commissions.create', compact('courses'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'aula' => 'required|string|max:255',
            'horario' => 'required|string|max:255',
            'course_id' => 'required|exists:courses,id',
        ]);

        Commission::create($request->all());
        return redirect()->route('commissions.index')->with('success', 'Comisión creada con éxito.');
    }

    public function edit($id)
    {
        $commission = Commission::findOrFail($id);
        $courses = Course::all();
        return view('commissions.edit', compact('commission', 'courses'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'aula' => 'required|string|max:255',
            'horario' => 'required|string|max:255',
            'course_id' => 'required|exists:courses,id',
        ]);

        $commission = Commission::findOrFail($id);
        $commission->update($request->all());
        return redirect()->route('commissions.index')->with('success', 'Comisión actualizada con éxito.');
    }

    public function destroy($id)
    {
        $commission = Commission::findOrFail($id);
        $commission->delete();
        return redirect()->route('commissions.index')->with('success', 'Comisión eliminada con éxito.');
    }
}
