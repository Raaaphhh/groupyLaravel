<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UtilisateurController;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [UtilisateurController::class, 'create']);

Route::get('/utilisateur/create', [UtilisateurController::class, 'create']);
Route::post('/utilisateur/store', [UtilisateurController::class, 'store']);