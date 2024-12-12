<?php

namespace App\Http\Controllers;

use App\Models\CourseStudents;
use App\Models\Student;
use App\Models\Course;
use App\Models\Commission;
use Illuminate\Http\Request;

class CourseStudentController extends Controller
{
    public function index()
    {
        $inscriptions = CourseStudents::with('student', 'course', 'commission')->get();
        return view('course_students.index', compact('inscriptions'));
    }

    public function create()
    {
        $students = Student::all();
        $courses = Course::all();
        $commissions = Commission::all();
        return view('course_students.create', compact('students', 'courses', 'commissions'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'student_id' => 'required|exists:students,id',
            'course_id' => 'required|exists:courses,id',
            'commission_id' => 'required|exists:commissions,id',
        ]);

        $existing = CourseStudents::where('student_id', $request->student_id)
            ->where('course_id', $request->course_id)
            ->where('commission_id', $request->commission_id)
            ->first();

        if ($existing) {
            return back()->withErrors('El estudiante ya está inscrito en esta comisión.');
        }

        CourseStudents::create($request->all());
        return redirect()->route('course_students.index')->with('success', 'Inscripción creada correctamente.');
    }

    public function edit($id)
    {
        $inscription = CourseStudents::findOrFail($id);
        $students = Student::all();
        $courses = Course::all();
        $commissions = Commission::all();
        return view('course_students.edit', compact('inscription', 'students', 'courses', 'commissions'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'student_id' => 'required|exists:students,id',
            'course_id' => 'required|exists:courses,id',
            'commission_id' => 'required|exists:commissions,id',
        ]);

        $inscription = CourseStudents::findOrFail($id);

        $existing = CourseStudents::where('student_id', $request->student_id)
            ->where('course_id', $request->course_id)
            ->where('commission_id', $request->commission_id)
            ->first();

        if ($existing && $existing->id !== $inscription->id) {
            return back()->withErrors('El estudiante ya está inscrito en esta comisión.');
        }

        $inscription->update($request->all());
        return redirect()->route('course_students.index')->with('success', 'Inscripción actualizada correctamente.');
    }

    public function destroy($id)
    {
        $inscription = CourseStudents::findOrFail($id);
        $inscription->delete();
        return redirect()->route('course_students.index')->with('success', 'Inscripción eliminada correctamente.');
    }
}
