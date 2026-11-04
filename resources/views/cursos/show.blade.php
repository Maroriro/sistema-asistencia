@extends('layouts.app')

@section('titulo', 'Ver Curso')

@section('contenido')
    <h1>Detalle del Curso</h1>

    <div class="card">
        <div class="card-body">
            <p><strong>ID:</strong> {{ $curso->id }}</p>
            <p><strong>Nombre:</strong> {{ $curso->nombre }}</p>
            <p><strong>Año:</strong> {{ $curso->anio }}</p>
            <p><strong>Estado:</strong>
                @if ($curso->activo)
                    <span class="badge bg-success">Activo</span>
                @else
                    <span class="badge bg-secondary">Inactivo</span>
                @endif
            </p>
            <p><strong>Creado:</strong> {{ $curso->created_at->format('d/m/Y H:i') }}</p>
            <p><strong>Actualizado:</strong> {{ $curso->updated_at->format('d/m/Y H:i') }}</p>
        </div>
    </div>

    <div class="mt-3">
        <a href="{{ route('cursos.edit', $curso) }}" class="btn btn-warning">Editar</a>
        <a href="{{ route('cursos.index') }}" class="btn btn-secondary">Volver</a>
    </div>
@endsection