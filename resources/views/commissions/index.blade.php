@extends('layouts.app')

@section('title', 'Comisiones')

@section('content')
<div class="container">
<a href="{{ route('welcome') }}"  class="btn btn-dark btn-lg">  <i class="bi bi-arrow-left"></i> Volver
</a>
    <h1 class="text-center mb-4">Gestión de Comisiones</h1>
    <a href="{{ route('commissions.create') }}" class="btn btn-outline-secondary mb-3">Crear Nueva Comisión</a>
    
    <!-- Formulario de filtrado con fondo gris claro -->
    <form method="GET" class="mb-3 p-4 border rounded" style="background-color: #f8f9fa;">
        <div class="row g-3 align-items-center">
            <!-- Selector de curso con fondo gris claro y borde gris -->
            <div class="col-md-3">
                <select name="course_id" class="form-select" style="background-color: #f1f1f1; border-color: #d1d1d1;">
                    <option value="">Seleccionar Curso</option>
                    @foreach($courses as $course)
                        <option value="{{ $course->id }}" {{ request('course_id') == $course->id ? 'selected' : '' }}>
                            {{ $course->name }}
                        </option>
                    @endforeach
                </select>
            </div>

            <!-- Campo de texto para filtrar por horario con fondo gris claro -->
            <div class="col-md-3">
                <input type="text" name="horario" class="form-control" placeholder="Filtrar por horario" value="{{ request('horario') }}" style="background-color: #f1f1f1; border-color: #d1d1d1;">
            </div>

            <!-- Botón de filtro con fondo gris -->
            <div class="col-md-3">
                <button type="submit" class="btn btn-outline-secondary" style=" width: 100%;">Filtrar</button>
            </div>
        </div>
    </form>


    <table class="table table-striped">
        <thead>
            <tr>
                <th>ID</th>
                <th>Aula</th>
                <th>Horario</th>
                <th>Curso</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach($commissions as $commission)
            <tr>
                <td>{{ $commission->id }}</td>
                <td>{{ $commission->aula }}</td>
                <td>{{ $commission->horario }}</td>
                <td>{{ $commission->course->name }}</td>
                <td>
                    <a href="{{ route('commissions.edit', $commission->id) }}" class="btn btn-outline-dark btn-sm">Editar</a>
                    <form action="{{ route('commissions.destroy', $commission->id) }}" method="POST" style="display: inline-block;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-outline-danger btn-sm">Eliminar</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
