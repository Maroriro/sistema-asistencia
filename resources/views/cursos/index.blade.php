@extends('layouts.app')

@section('titulo', 'Cursos')

@section('contenido')
    <div class="d-flex justify-content-between align-items-center mb-3">
        <h1>Cursos</h1>
        <a href="{{ route('cursos.create') }}" class="btn btn-primary">+ Nuevo Curso</a>
    </div>

    @if (session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <table class="table table-striped table-hover">
        <thead class="table-dark">
            <tr>
                <th>ID</th>
                <th>Nombre</th>
                <th>Año</th>
                <th>Estado</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($cursos as $curso)
                <tr>
                    <td>{{ $curso->id }}</td>
                    <td>{{ $curso->nombre }}</td>
                    <td>{{ $curso->anio }}</td>
                    <td>
                        @if ($curso->activo)
                            <span class="badge bg-success">Activo</span>
                        @else
                            <span class="badge bg-secondary">Inactivo</span>
                        @endif
                    </td>
                    <td>
                        <a href="{{ route('cursos.show', $curso) }}" class="btn btn-sm btn-info">Ver</a>
                        <a href="{{ route('cursos.edit', $curso) }}" class="btn btn-sm btn-warning">Editar</a>
                        @if ($curso->activo)
                            <form action="{{ route('cursos.destroy', $curso) }}" method="POST" class="d-inline"
                                  onsubmit="return confirm('¿Desactivar este curso?')">
                                @csrf
                                @method('DELETE')
                                <button class="btn btn-sm btn-danger">Desactivar</button>
                            </form>
                        @endif
                    </td>
                </tr>
            @empty
                <tr>
                    <td colspan="5" class="text-center">No hay cursos cargados.</td>
                </tr>
            @endforelse
        </tbody>
    </table>
@endsection