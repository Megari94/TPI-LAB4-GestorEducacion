@extends('layouts.app')

@section('title', 'Editar Profesor')

@section('content')
<div class="container">
    <h1 class="text-center mb-4">Editar Profesor</h1>
    <form action="{{ route('professors.update', $professor->id) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="mb-3">
            <label for="name" class="form-label">Nombre del Profesor</label>
            <input type="text" class="form-control" id="name" name="name" value="{{ $professor->name }}" required>
        </div>

        <div class="mb-3">
            <label for="commissions" class="form-label">Seleccionar Comisiones</label>
            <select name="commissions[]" id="commissions" class="form-select" multiple>
                @foreach($commissions as $commission)
                    <option value="{{ $commission->id }}" 
                            {{ $professor->commissions->contains($commission->id) ? 'selected' : '' }}>
                        {{ $commission->aula }} - {{ $commission->horario }}
                    </option>
                @endforeach
            </select>
        </div>

        <button type="submit" class="btn btn-outline-success">Actualizar</button>
        <a href="{{ route('professors.index') }}" class="btn btn-outline-danger">Cancelar</a>
    </form>
</div>

@section('styles')
<style>
    /* Cambiar el color de fondo del seleccionador */
    select.form-select {
        background-color: #f1f1f1;  /* Gris claro */
        color: #000;  /* Texto negro */
    }

    /* Cambiar el color cuando se selecciona una opción */
    select.form-select option:checked {
        background-color: #e9ecef; /* Gris claro */
        color: #000; /* Texto negro */
    }

    /* Eliminar el color azul predeterminado de la selección */
    select.form-select:focus {
        box-shadow: none;
        border-color: #ccc;  /* Gris oscuro */
    }
</style>
@endsection

@endsection
