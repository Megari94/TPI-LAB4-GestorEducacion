<?php

namespace App\Http\Controllers;

use App\Models\Course;
use App\Models\Subject;
use Illuminate\Http\Request;

class CourseController extends Controller
{
    public function index(Request $request)
    {
        $subjects = Subject::all();

        $courses = Course::query();

        if ($request->has('subject') && $request->subject != '') {
            $courses = $courses->where('subject_id', $request->subject);
        }

        $courses = $courses->paginate(10);

        return view('courses.index', compact('courses', 'subjects'));
    }

    public function create()
    {
        $subjects = Subject::all();
        return view('courses.create', compact('subjects'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'subject_id' => 'required|exists:subjects,id',
        ]);

        Course::create($request->all());
        return redirect()->route('courses.index')->with('success', 'Curso creado con éxito.');
    }

    public function edit($id)
    {
        $course = Course::findOrFail($id);
        $subjects = Subject::all();
        return view('courses.edit', compact('course', 'subjects'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'subject_id' => 'required|exists:subjects,id',
        ]);

        $course = Course::findOrFail($id);
        $course->update($request->all());
        return redirect()->route('courses.index')->with('success', 'Curso actualizado con éxito.');
    }

    public function destroy($id)
    {
        $course = Course::findOrFail($id);
        $course->delete();
        return redirect()->route('courses.index')->with('success', 'Curso eliminado con éxito.');
    }
}
