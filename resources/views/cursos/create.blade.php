@extends('layouts.app')

@section('titulo', 'Nuevo Curso')

@section('contenido')
    <h1>Nuevo Curso</h1>

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul class="mb-0">
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('cursos.store') }}" method="POST">
        @csrf

        <div class="mb-3">
            <label for="nombre" class="form-label">Nombre</label>
            <input type="text" name="nombre" id="nombre"
                   class="form-control @error('nombre') is-invalid @enderror"
                   value="{{ old('nombre') }}" placeholder="Ej: 1°">
            @error('nombre')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

        <div class="mb-3">
            <label for="anio" class="form-label">Año</label>
            <input type="number" name="anio" id="anio"
                   class="form-control @error('anio') is-invalid @enderror"
                   value="{{ old('anio') }}" min="1" max="7">
            @error('anio')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

        <button type="submit" class="btn btn-primary">Guardar</button>
        <a href="{{ route('cursos.index') }}" class="btn btn-secondary">Cancelar</a>
    </form>
@endsection