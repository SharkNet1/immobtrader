<?php

use Illuminate\Support\Facades\Route;

Route::resource('/', 'loginController');

Route::resource('/accueil', 'accueilController');

Route::resource('/agent', 'agentController');

Route::resource('/procedure', 'procedureController');

Route::resource('/bien', 'bienController');

Route::resource('/fournisseur', 'fournisseurController');

Route::resource('/statistique', 'statistiqueController');

Route::resource('/messagerie', 'messagerieController');

Route::resource('/note', 'noteController');

Route::resource('/tache', 'tacheController');

Route::resource('/mail', 'mailController');

Route::get('/login',function(){
    session_start();
    if (isset($_SESSION['ID'])){
        session_destroy();
    }
    return view('login');
});

