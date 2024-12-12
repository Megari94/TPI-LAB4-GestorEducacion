<?php

namespace App\Http\Controllers;
use App\Models\Student;
use App\Models\Course;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function index(Request $request)
    {
        $courses = Course::all();

        $students = Student::query();

        if ($request->has('name') && $request->name != '') {
            $students = $students->where('name', 'like', '%' . $request->name . '%');
        }

        if ($request->has('course') && $request->course != '') {
            $students = $students->whereHas('courses', function($query) use ($request) {
                $query->where('courses.id', $request->course);
            });
        }

        $students = $students->paginate(10);

        return view('students.index', compact('students', 'courses'));
    }


    public function create()
    {
        return view('students.create');
    }

    
    public function store(Request $request)
{
    $request->validate([
        'name' => 'required|string|max:255',
        'email' => 'required|email|unique:students,email',
    ]);

    Student::create($request->only(['name', 'email']));

    return redirect()->route('students.index')->with('success', 'Estudiante creado correctamente.');
}


    public function show(string $id)
    {
        //
    }

    public function edit(Student $student)
{
    return view('students.edit', ['student' => $student]);
}


   
    public function update(Request $request, Student $student)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:students,email,' . $student->id,
        ]);
    
        $student->update($request->only(['name', 'email']));
    
        return redirect()->route('students.index')->with('success', 'Estudiante actualizado correctamente.');
    }
    

   
    public function destroy(Student $student)
{
    $student->delete();

    return redirect()->route('students.index')->with('success', 'Estudiante eliminado correctamente.');
}

}
