@extends('layouts.app')

@section('titulo', 'Editar Curso')

@section('contenido')
    <h1>Editar Curso</h1>

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul class="mb-0">
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('cursos.update', $curso) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="mb-3">
            <label for="nombre" class="form-label">Nombre</label>
            <input type="text" name="nombre" id="nombre"
                   class="form-control @error('nombre') is-invalid @enderror"
                   value="{{ old('nombre', $curso->nombre) }}">
            @error('nombre')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

        <div class="mb-3">
            <label for="anio" class="form-label">Año</label>
            <input type="number" name="anio" id="anio"
                   class="form-control @error('anio') is-invalid @enderror"
                   value="{{ old('anio', $curso->anio) }}" min="1" max="7">
            @error('anio')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

        <div class="mb-3 form-check">
            <input type="checkbox" name="activo" id="activo" class="form-check-input"
                   value="1" {{ old('activo', $curso->activo) ? 'checked' : '' }}>
            <label for="activo" class="form-check-label">Activo</label>
        </div>

        <button type="submit" class="btn btn-primary">Guardar cambios</button>
        <a href="{{ route('cursos.index') }}" class="btn btn-secondary">Cancelar</a>
    </form>
@endsection