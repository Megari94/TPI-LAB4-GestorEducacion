@extends('layouts.app')

@section('title', 'Reportes')

@section('content')
<div class="container my-5">
    <!-- Botón Volver -->
    <a href="{{ route('welcome') }}" class="btn btn-dark btn-lg">  <i class="bi bi-arrow-left"></i> Volver
    </a>

    <h1 class="text-center mb-4">Gestión de Reportes</h1>

    <!-- Fila para los reportes -->
    <div class="row g-4">
        <!-- Reporte de Estudiantes Inscritos -->
        <div class="col-md-6 mb-4">
            <div class="card shadow-sm">
                <div class="card-body text-center">
                    <h2 class="card-title mb-3">Reporte de Estudiantes Inscritos</h2>
                    <a href="{{ route('reports.students') }}" class="btn btn-outline-secondary btn-lg w-100">Ver Reporte</a>
                </div>
            </div>
        </div>

        <!-- Reporte de Cursos por Materia -->
        <div class="col-md-6 mb-4">
            <div class="card shadow-sm">
                <div class="card-body text-center">
                    <h2 class="card-title mb-3">Reporte de Cursos por Materia</h2>
                    <a href="{{ route('reports.courses_by_subject') }}" class="btn btn-outline-secondary btn-lg w-100">Ver Reporte</a>
                </div>
            </div>
        </div>
    </div>

    <div class="row g-4">
        <!-- Reporte de Comisiones y Horarios -->
        <div class="col-md-6 mb-4">
            <div class="card shadow-sm">
                <div class="card-body text-center">
                    <h2 class="card-title mb-3">Reporte de Comisiones y Horarios</h2>
                    <a href="{{ route('reports.commissions_and_schedules') }}" class="btn btn-outline-secondary btn-lg w-100">Ver Reporte</a>
                </div>
            </div>
        </div>

        <!-- Reporte de Asistencia de Profesores -->
        <div class="col-md-6 mb-4">
            <div class="card shadow-sm">
                <div class="card-body text-center">
                    <h2 class="card-title mb-3">Reporte de Asistencia de Profesores</h2>
                    <a href="{{ route('reports.professors_attendance') }}" class="btn btn-outline-secondary btn-lg w-100">Ver Reporte</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
