<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

 Route::get('/', function () {
     return view('welcome');
 });

Auth::routes();

 Route::get('/home', [App\Http\Controllers\Admin\HomeController::class, 'index'])->name('home');

/* ---------------------------------- RUTA DE INFORMES ----------------------------------------*/

 //REPORTE BASE
Route::get('/reporteBase', [App\Http\Controllers\InformesController::class, 'reporteBase'])->name('Informe.reporteBase');
//profesor materia
Route::get('/profesoresMaterias', [App\Http\Controllers\InformesController::class, 'profMaterias'])->name('Informe.profMaterias');
//Maetrias reprobadas
Route::get('/MateriasReprobadas', [App\Http\Controllers\InformesController::class, 'matReprobadas'])->name('Informe.materiasReprobadas');
//index de horario
Route::get('/Horarios', [App\Http\Controllers\InformesController::class, 'horarios'])->name('Informe.horarioIndex');
//horario prof
Route::get('/HorarioProfesor', [App\Http\Controllers\InformesController::class, 'horarios'])->name('Informe.horarioProfesor');
//horario alumn
Route::get('/HorarioAlumno', [App\Http\Controllers\InformesController::class, 'horarios'])->name('Informe.horarioAlumno');
//horario aulas
Route::get('/HorarioAula', [App\Http\Controllers\InformesController::class, 'horarios'])->name('Informe.horarioAula');
//LISTA DE ASISTENCIA
Route::get('/ListaAsistencia', [App\Http\Controllers\InformesController::class, 'listaAsistencia'])->name('Informe.listaAsistencia');
//ASPIRANTES
Route::get('/GraficaAspirantes', [App\Http\Controllers\InformesController::class, 'aspirantes'])->name('Informe.aspirantesGrafica');
//CANDIDATOS RECURSAMIENTO
Route::get('/CandidatosRecursamiento', [App\Http\Controllers\InformesController::class, 'recursamiento'])->name('Informe.candidatosReursamiento');
//CALIF. POR UNIDAD
Route::get('/CalificacionPorUnidad', [App\Http\Controllers\InformesController::class, 'califXUnidad'])->name('Informe.calificacionXUnidad');
// BECAS ASIGNADAS
Route::get('/BecasAsignadas', [App\Http\Controllers\InformesController::class, 'becasAsignadas'])->name('Informe.becasAsignadas');
//asigXOfertar
Route::get('/AsignaturaPorOfertar', [App\Http\Controllers\InformesController::class, 'asigXOfertar'])->name('Informe.asignaturaXOfertar');
// alumnos con baja
Route::get('/AlumnosBaja', [App\Http\Controllers\InformesController::class, 'alumnosBaja'])->name('Informe.alumnosBaja');
// alumnos reinscritos
Route::get('/AlumnosReinscritos', [App\Http\Controllers\InformesController::class, 'alumnosReinscrito'])->name('Informe.alumnosReinscritos');

/* ---------------------------------- RUTA DE TRAMITES ----------------------------------------*/

// Index kardex
Route::get('/Kardex', [App\Http\Controllers\TramitesController::class, 'kardex'])->name('Tramite.kardex');
//descargar kardex
Route::get('/descargar', [App\Http\Controllers\PDFController::class, 'descargar'])->name('descargarPDF');
// historial academico
Route::get('/HistorialAcademico', [App\Http\Controllers\TramitesController::class, 'historialAcademico'])->name('Tramite.historial');
// formato de registro
Route::get('/FormatoDeRegistro', [App\Http\Controllers\TramitesController::class, 'formatoRegistro'])->name('Tramite.registro');
// certificado
 Route::get('/Certificado', [App\Http\Controllers\TramitesController::class, 'certificado'])->name('Tramite.certificado');
// constancia de estudios
Route::get('/ConstanciaDeEstudios', [App\Http\Controllers\TramitesController::class, 'constanciaEstudios'])->name('Tramite.constancia');
// documentos recibidos
Route::get('/DocumentosRecibidos', [App\Http\Controllers\TramitesController::class, 'docRecibidos'])->name('Tramite.docRecibidos');