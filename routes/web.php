<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\KandidatController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\KelasController;
use App\Http\Controllers\PemilihanController;
use App\Http\Controllers\SessionController;
use App\Http\Controllers\SuaraController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\VisiMisiController;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;
use Symfony\Component\Routing\Annotation\Route as AnnotationRoute;



Route::middleware(['guest'])->group(function () {
    Route::get('/', [SessionController::class, 'index'])->name('login');
    Route::post('/login', [SessionController::class, 'login_action']);

    Route::get('/register', [SessionController::class, 'register']);
    Route::post('/register/create', [SessionController::class, 'register_action']);

    Route::get('/admin/login', [SessionController::class, 'admin_login']);
    Route::post('/admin/login', [SessionController::class, 'admin_login_action']);
});



Route::middleware(['auth'])->group(function () {
    Route::get('/home', function () {
        return redirect('/dashboard');
    });



    Route::get('/dashboard', [DashboardController::class, 'index']);
    Route::get('/vote', [DashboardController::class, 'vote']);
    Route::post('/vote/create', [DashboardController::class, 'vote_action']);


    Route::get('/kelas', [KelasController::class, 'index']);
    Route::get('/kelas/create', [KelasController::class, 'create']);
    Route::post('/kelas/create', [KelasController::class, 'create_action']);
    Route::get('/kelas/{id}/update', [KelasController::class, 'update']);
    Route::post('/kelas/{id}/update', [KelasController::class, 'update_action']);
    Route::get('/kelas/{id}/delete', [KelasController::class, 'delete']);

    Route::get('/kandidat', [KandidatController::class, 'index']);
    Route::get('/kandidat/create', [KandidatController::class, 'create']);
    Route::post('/kandidat/create', [KandidatController::class, 'create_action']);
    Route::get('/kandidat/{id}/update', [KandidatController::class, 'update']);
    Route::post('/kandidat/{id}/update', [KandidatController::class, 'update_action']);
    Route::get('/kandidat/{id}/delete', [KandidatController::class, 'delete']);

    Route::get('/visi-misi', [VisiMisiController::class, 'index']);
    Route::get('/visi-misi/create', [VisiMisiController::class, 'create']);
    Route::post('/visi-misi/create', [VisiMisiController::class, 'create_action']);
    Route::get('/visi-misi/{id}/update', [VisiMisiController::class, 'update']);
    Route::post('/visi-misi/{id}/update', [VisiMisiController::class, 'update_action']);
    Route::get('/visi-misi/{id}/delete', [VisiMisiController::class, 'delete']);

    Route::get('/suara', [SuaraController::class, 'index']);
    Route::get('/suara/create', [SuaraController::class, 'create']);
    Route::post('/suara/create', [SuaraController::class, 'create_action']);
    Route::get('/suara/{id}/update', [SuaraController::class, 'update']);
    Route::post('/suara/{id}/update', [SuaraController::class, 'update_action']);
    Route::get('/suara/{id}/delete', [SuaraController::class, 'delete']);

    Route::get('/user', [UserController::class, 'index']);
    Route::get('/user/create', [UserController::class, 'create']);
    Route::post('/user/create', [UserController::class, 'create_action']);
    Route::get('/user/{id}/update', [UserController::class, 'update']);
    Route::post('/user/{id}/update', [UserController::class, 'update_action']);
    Route::get('/user/{id}/delete', [UserController::class, 'delete']);



    Route::get('/logout', [SessionController::class, 'logout']);
});
