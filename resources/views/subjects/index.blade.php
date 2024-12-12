@extends('layouts.app')

@section('title', 'Materias')

@section('content')
<div class="container">
<a href="{{ route('welcome') }}"  class="btn btn-dark btn-lg">  <i class="bi bi-arrow-left"></i> Volver
</a>
    <h1 class="text-center mb-4">Gestión de Materias</h1>
    <a href="{{ route('subjects.create') }}" class="btn btn-outline-success mb-3">Crear Nueva Materia</a>
    <table class="table table-striped">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nombre</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach($subjects as $subject)
            <tr>
                <td>{{ $subject->id }}</td>
                <td>{{ $subject->name }}</td>
                <td>
                    <a href="{{ route('subjects.edit', $subject->id) }}" class="btn btn-outline-dark btn-sm">Editar</a>
                    <form action="{{ route('subjects.destroy', $subject->id) }}" method="POST" style="display: inline-block;">
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
