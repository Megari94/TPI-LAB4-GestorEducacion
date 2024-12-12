<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf;
use App\Models\Student;
use App\Models\Course;
use App\Models\Commission;
use App\Models\Professor;

class ReportController extends Controller
{
    public function index()
    {
        return view('reports.index');
    }

    public function students()
    {
        $students = Student::with(['courses', 'commissions'])->get(); 
        return view('reports.students_report', compact('students'));
    }

    public function coursesBySubject()
    {
        $courses = Course::with('subject')->get(); 
        return view('reports.courses_by_subject_report', compact('courses'));
    }

    public function commissionsAndSchedules()
{
    $commissions = Commission::with(['professors', 'course'])->get();
    return view('reports.commissions_and_schedules_report', compact('commissions'));
}

    public function professorsAttendance()
    {
        $professors = Professor::with('commissions')->get(); 
        return view('reports.professors_attendance_report', compact('professors'));
    }

 
    public function studentsReportPdf()
{
    $students = Student::with(['courses', 'commissions'])->get();
    $pdf = Pdf::loadView('pdf.students_report', compact('students'));
    return $pdf->download('reporte_estudiantes.pdf');
}

public function coursesBySubjectReportPdf()
{
    $courses = Course::with('subject')->get();
    $pdf = Pdf::loadView('pdf.courses_by_subject_report', compact('courses'));
    return $pdf->download('reporte_cursos.pdf');
}

public function commissionsAndSchedulesReportPdf()
{
    $commissions = Commission::with(['professors', 'course'])->get();
    $pdf = Pdf::loadView('pdf.commissions_and_schedules_report', compact('commissions'));
    return $pdf->download('reporte_comisiones.pdf');
}

public function professorsAttendanceReportPdf()
{
    $professors = Professor::with('commissions')->get();
    $pdf = Pdf::loadView('pdf.professors_attendance_report', compact('professors'));
    return $pdf->download('reporte_profesores.pdf');
}
}
