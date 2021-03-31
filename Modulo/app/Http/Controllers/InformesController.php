<?php

namespace App\Http\Controllers;

use App\Models\Informes;
use Illuminate\Http\Request;

class InformesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Informes  $informes
     * @return \Illuminate\Http\Response
     */
    public function show(Informes $informes)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Informes  $informes
     * @return \Illuminate\Http\Response
     */
    public function edit(Informes $informes)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Informes  $informes
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Informes $informes)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Informes  $informes
     * @return \Illuminate\Http\Response
     */
    public function destroy(Informes $informes)
    {
        //
    }

    //reporte base
    public function reporteBase()
    {
        //retornamos a la vista
        return view('admin.informes.reporteBase');
    }

    //profesor materia
    public function profMaterias()
    {
        //retornamos a la vista
        return view('admin.informes.profMaterias');
    }

    //materias reprobadas
    public function matReprobadas()
    {
        //retornamos a la vista
        return view('admin.informes.materiasReprobadas');
    }

    //
    public function horarios()
    {
        //retornamos a la vista
        return view('admin.informes.horarioIndex'); //<--------- Falta agregar metodos para visualizar los horario de alumnos, profes y aulas
    }

    //
    public function listaAsistencia()
    {
        //retornamos a la vista
        return view('admin.informes.listaAsistencia');
    }

    //
    public function aspirantes()
    {
        //retornamos a la vista
        return view('admin.informes.aspirantesGrafica');
    }

    //
    public function recursamiento()
    {
        //retornamos a la vista
        return view('admin.informes.candidatosRecursamiento');
    }
    
    //
    public function califxUnidad()
    {
        //retornamos a la vista
        return view('admin.informes.calificacionXUnidad');
    }

    //
    public function becasAsignadas()
    {
        //retornamos a la vista
        return view('admin.informes.becasAsignadas');
    }

    //
    public function asigXOfertar()
    {
        //retornamos a la vista
        return view('admin.informes.asignaturaXOfertar');
    }

    //
    public function alumnosBaja()
    {
        //retornamos a la vista
        return view('admin.informes.alumnosBaja');
    }

    //
    public function alumnosReinscritos()
    {
        //retornamos a la vista
        return view('admin.informes.alumnosReinscritos');
    }











}
