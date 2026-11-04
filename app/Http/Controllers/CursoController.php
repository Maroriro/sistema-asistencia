<?php

namespace App\Http\Controllers;

use App\Models\Curso;
use Illuminate\Http\Request;

class CursoController extends Controller
{
    public function index()
    {
        $cursos = Curso::orderBy('anio')->get();
        return view('cursos.index', compact('cursos'));
    }

    public function create()
    {
        return view('cursos.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nombre' => 'required|string|max:50',
            'anio'   => 'required|integer|min:1|max:7',
        ]);

        Curso::create([
            'nombre' => $request->nombre,
            'anio'   => $request->anio,
            'activo' => true,
        ]);

        return redirect()->route('cursos.index')
            ->with('success', 'Curso creado correctamente.');
    }

    public function show(Curso $curso)
    {
        return view('cursos.show', compact('curso'));
    }

    public function edit(Curso $curso)
    {
        return view('cursos.edit', compact('curso'));
    }

    public function update(Request $request, Curso $curso)
    {
        $request->validate([
            'nombre' => 'required|string|max:50',
            'anio'   => 'required|integer|min:1|max:7',
        ]);

        $curso->update([
            'nombre' => $request->nombre,
            'anio'   => $request->anio,
            'activo' => $request->has('activo'),
        ]);

        return redirect()->route('cursos.index')
            ->with('success', 'Curso actualizado correctamente.');
    }

    public function destroy(Curso $curso)
    {
        $curso->update(['activo' => false]);

        return redirect()->route('cursos.index')
            ->with('success', 'Curso desactivado correctamente.');
    }
}