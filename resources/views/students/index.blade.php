@extends('layouts.app')

@section('content')
<div class="container">
    <a href="{{ route('welcome') }}"  class="btn btn-dark btn-lg">  <i class="bi bi-arrow-left"></i> Volver
    </a>
    <h1>Lista de Estudiantes</h1>

    <form method="GET" action="{{ route('students.index') }}" class="mb-4 p-4 border rounded shadow-sm" style="background-color: #f8f9fa;">
        <div class="row g-3 align-items-center">
            <!-- Campo de búsqueda por nombre -->
            <div class="col-md-4">
                <input type="text" name="name" class="form-control" placeholder="Buscar por nombre" value="{{ request('name') }}">
            </div>
            
            <!-- Selector de curso -->
            <div class="col-md-4">
                <select name="course" class="form-select">
                    <option value="">Todos los cursos</option>
                    @foreach($courses as $course)
                        <option value="{{ $course->id }}" {{ request('course') == $course->id ? 'selected' : '' }}>
                            {{ $course->name }}
                        </option>
                    @endforeach
                </select>
            </div>

            <!-- Botón de filtro -->
            <div class="col-md-4">
                <button type="submit" class="btn btn-outline-secondary w-100">Filtrar</button>
            </div>
        </div>
    </form>

    <a href="{{ route('students.create') }}" class="btn btn-outline-secondary mb-3">Crear Estudiante</a>

    <!-- Tabla de estudiantes -->
    <table class="table">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nombre</th>
                <th>Email</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach($students as $student)
            <tr>
                <td>{{ $student->id }}</td>
                <td>{{ $student->name }}</td>
                <td>{{ $student->email }}</td>
                <td>
                    <a href="{{ route('students.edit', $student) }}" class="btn btn-outline-dark btn-sm">Editar</a>
                    <form action="{{ route('students.destroy', $student) }}" method="POST" style="display: inline-block;">
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
    {{ $students->links() }}
</div>
@endsection
