@extends('layouts.app')

@section('title', 'Cursos')

@section('content')
<div class="container">
<a href="{{ route('welcome') }}"  class="btn btn-dark btn-lg">  <i class="bi bi-arrow-left"></i> Volver
</a>
    <h1 class="text-center mb-4">Gestión de Cursos</h1>

   <form method="GET" action="{{ route('courses.index') }}" class="mb-4 p-4 border rounded shadow-sm" style="background-color: #f8f9fa;">
        <div class="row g-3 align-items-center">
            <!-- Selector de materia con color gris -->
            <div class="col-md-6">
                <select name="subject" class="form-select " aria-label="Filtrar por materia">
                    <option value="">Filtrar por materia</option>
                    @foreach($subjects as $subject)
                        <option value="{{ $subject->id }}" {{ request('subject') == $subject->id ? 'selected' : '' }}>
                            {{ $subject->name }}
                        </option>
                    @endforeach
                </select>
            </div>

            <!-- Botón de filtro con color gris -->
            <div class="col-md-6">
                <button type="submit" class="btn btn-outline-secondary" style=" width: 100%; margin-top: 10px;">Filtrar</button>
            </div>
        </div>
    </form>

    <a href="{{ route('courses.create') }}" class="btn btn-outline-secondary mb-3">Crear Nuevo Curso</a>

    <!-- Tabla de cursos -->
    <table class="table table-striped">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nombre</th>
                <th>Materia</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach($courses as $course)
            <tr>
                <td>{{ $course->id }}</td>
                <td>{{ $course->name }}</td>
                <td>{{ $course->subject->name }}</td>
                <td>
                    <a href="{{ route('courses.edit', $course->id) }}" class="btn btn-outline-dark btn-sm">Editar</a>
                    <form action="{{ route('courses.destroy', $course->id) }}" method="POST" style="display: inline-block;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-outline-danger btn-sm">Eliminar</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>

    <!-- Paginación -->
    {{ $courses->links() }}
</div>
@endsection
