@extends('layouts.app')

@section('title', 'Bienvenido')

@section('content')
<div class="container">
    <h1 class="text-center mb-4">Sistema de Gestión Escolar</h1>

    <div class="row g-4">
        <!-- Estudiantes -->
        <div class="col-md-4">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title" style="font-size: 1rem;">Estudiantes</h3>
                </div>
                <div class="card-body">
                    <a href="{{ route('students.index') }}" class="btn btn-outline-primary w-100">Gestionar Estudiantes</a>
                </div>
            </div>
        </div>

        <!-- Materias -->
        <div class="col-md-4">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title" style="font-size: 1rem;">Materias</h3>
                </div>
                <div class="card-body">
                    <a href="{{ route('subjects.index') }}" class="btn btn-outline-primary w-100">Gestionar Materias</a>
                </div>
            </div>
        </div>

        <!-- Cursos -->
        <div class="col-md-4">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title" style="font-size: 1rem;">Cursos</h3>
                </div>
                <div class="card-body">
                    <a href="{{ route('courses.index') }}" class="btn btn-outline-primary w-100">Gestionar Cursos</a>
                </div>
            </div>
        </div>
    </div>

    <div class="row g-4 mt-4">
        <!-- Comisiones -->
        <div class="col-md-4">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title" style="font-size: 1rem;">Comisiones</h3>
                </div>
                <div class="card-body">
                    <a href="{{ route('commissions.index') }}" class="btn btn-outline-primary w-100">Gestionar Comisiones</a>
                </div>
            </div>
        </div>

        <!-- Profesores -->
        <div class="col-md-4">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title" style="font-size: 1rem;">Profesores</h3>
                </div>
                <div class="card-body">
                    <a href="{{ route('professors.index') }}" class="btn btn-outline-primary w-100">Gestionar Profesores</a>
                </div>
            </div>
        </div>

        <!-- Inscripciones -->
        <div class="col-md-4">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title" style="font-size: 1rem;">Inscripciones</h3>
                </div>
                <div class="card-body">
                    <a href="{{ route('course_students.index') }}" class="btn btn-outline-primary w-100">Gestionar Inscripciones</a>
                </div>
            </div>
        </div>

        <div class="col-md-4">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title" style="font-size: 1rem;">Reporte</h3>
                </div>
                <div class="card-body">
                    <a href="{{ route('reports.index') }}" class="btn btn-outline-primary w-100">Gestionar Reportes</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
