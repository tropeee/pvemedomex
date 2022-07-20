<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProposalController;
use App\Http\Controllers\CandidateController;
use App\Http\Controllers\AfiliacionController;
use App\Models\Secretary;

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

Route::resource('afiliaciones', AfiliacionController::class)->only(['store']);

Route::resource('atenciones', 'App\Http\Controllers\AtencionController')->only(['store']);

Route::get('/', function () {
    
    $secretario = Secretary::all();
    // return $secretario;
    return view('home-fullpage', compact('secretario'));
})->name('Inicio');

Route::get('/estructura', [CandidateController::class, 'secretarios'])->name('Estructura');
 //Route::get('/secretarios/{slug}', [CandidateController::class, 'showsecretarios'])->name('Estructura.show');

Route::get('/historia', function () {
    return view('historia');
})->name('Historia');

Route::get('/noticias', function () {
    return view('noticias.noticias');
})->name('Noticias');

Route::get('/comunicados', function () {
    return view('comunicados.comunicados');
})->name('Comunicados');

Route::get('/noticias/7-abril-2021', function () {
    return view('noticias.noticia1');
})->name('Noticia1');

Route::get('/comunicados/6-febrero-2020', function () {
    return view('comunicados.comunicado1');
})->name('Comunicado1');

Route::get('/afiliacion', function () {
    return view('afiliacion');
})->name('Afiliacion');

Route::get('/atencion-ciudadana', function () {
    return view('atencion');
})->name('Atencion');

Route::get('/el-ecologista', function () {
    return view('ecologista');
})->name('Ecologista');

Route::get('/guias', function () {
    return view('guias');
})->name('Guias');

Route::get('/convocatorias', function () {
    return view('convocatorias.convocatorias');
})->name('Convocatorias');

Route::get('/convocatoria-1', function () {
    return view('convocatorias.conv1');
})->name('Conv1');

// interes publico
Route::get('/interes-publico', function () {
    return view('transparencia.interes-publico');
})->name('Interes-Publico');


// Transparencia -----------------------------------------------------------------------------|
Route::get('/gestion-documental', function () {
    return view('transparencia.archivo');
})->name('Archivo');

Route::get('/proteccion-de-datos-personales', function () {
    return view('transparencia.proteccion-datos');
})->name('Proteccion-Datos');

Route::get('/portal-de-transparencia', function () {
    return view('transparencia.portal-transparencia');
})->name('Transparencia');

Route::get('/normatividad', function () {
    return view('normatividad');
})->name('Normatividad');

Route::get('/tablas-de-aplicabilidad', function () {
    return view('tablas-de-aplicabilidad');
})->name('Tablas-de-aplicabilidad');

Route::get('/avisos-de-privacidad', function () {
    return view('avisos-de-privacidad');
})->name('Avisos-de-privacidad');

Route::get('/unidad-de-transparencia', function () {
    return view('transparencia.unidad-transparencia');
})->name('Unidad-Transparencia');

Route::get('/avisos-de-privacidad', function () {
    return view('transparencia.avisos-privacidad');
})->name('Avisos-Privacidad');

Route::get('/formatos', function () {
    return view('transparencia.formatos');
})->name('Formatos');

Route::get('/propuestas', function () {
    return view('propuestas');
})->name('Propuestas');

Route::get('/proactividad', function () {
    return view('transparencia.proactividad');
})->name('Proactividad');

// Transparencia -----------------------------------------------------------------------------|


// Candidatos --------------------------------------------------------------------------------|
Route::get('/candidatas-y-candidatos', [CandidateController::class, 'index'])->name('Candidatos');

// Route::get('/ctest', [CandidateController::class, 'test']);

Route::get('/candidatas-y-candidatos/{slug}', [CandidateController::class, 'show'])->name('Candidatos.Show');

// Secretarios --------------------------------------------------------------------------------|
Route::get('/secretarias-y-secretarios/{slug}', [CandidateController::class, 'showsecre'])->name('Secretarios.Show');

Route::resource('propuestas', 'App\Http\Controllers\ProposalController')->only(['store']);
Route::post('contacto-candidato',[ProposalController::class, 'store'])->name('proposal.store');
// Candidatos --------------------------------------------------------------------------------|
