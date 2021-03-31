<?php

namespace App\Http\Controllers;

use App\Models\Tramites;
use Barryvdh\DomPDF\PDF;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;

class TramitesController extends Controller
{
    //VALIDAR LA RESTRICCION A TODOS LOS METODOS de usuario autenticado
    public function __construct()
    {
        $this->middleware('auth');//ejecutar el middleware para aplicar el auth
    }
    //finde la validacion de todos los metodos




    /**
     *public function index(){}}*/

    // public function create()
    // {
    //     //
    // }

    public function store(Request $request)//el store guarda en la base de datos
     {
         //
     }
     
    // public function show(Tramites $tramites)
    // {
    //     //
    // }

    // public function edit(Tramites $tramites)
    // {
    //     //
    // }

    // public function update(Request $request, Tramites $tramites)
    // {
    //     //
    // }

   
    // public function destroy(Tramites $tramites)
    // {
    //     //
    // }

    public function kardex()
    {
         return view('admin.tramites.kardexindex');
    }

    

    public function certificado()
    {
        //
        return view('admin.tramites.certificado');
    }

    public function constanciaEstudios()
    {
        //
        return view('admin.tramites.constancia');
    }

    public function formatoRegistro()
    {
        //
        return view('admin.tramites.registro');
    }

    public function historialAcademico()
    {
        //retornamos a la vista
        return view('admin.tramites.historial');
    }

    public function docRecibidos()
    {
        //retornamos a la vista
        return view('admin.tramites.docRecibidos');
    }
















}
