@extends('layouts.app')

@section('titulo', 'Dashboard')

@section('contenido')
    <h1>Bienvenido al Sistema</h1>
    <p class="lead">Plataforma Institucional de Gestión y Control de Asistencia Escolar</p>

    <div class="row mt-4">
        <div class="col-md-3">
            <div class="card text-white bg-primary mb-3">
                <div class="card-body">
                    <h5 class="card-title">Estudiantes</h5>
                    <p class="card-text fs-3">0</p>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card text-white bg-success mb-3">
                <div class="card-body">
                    <h5 class="card-title">Docentes</h5>
                    <p class="card-text fs-3">0</p>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card text-white bg-warning mb-3">
                <div class="card-body">
                    <h5 class="card-title">Preceptores</h5>
                    <p class="card-text fs-3">0</p>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card text-white bg-danger mb-3">
                <div class="card-body">
                    <h5 class="card-title">Asistencias hoy</h5>
                    <p class="card-text fs-3">0</p>
                </div>
            </div>
        </div>
    </div>
@endsection