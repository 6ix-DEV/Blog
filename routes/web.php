<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\PostController;    
use App\Http\Controllers\CommentaireController;



Route::get('/', function () {
    return view('welcome');
});

Route::get('/posts', [ProfileController::class, 'index'])->name('profile.index');

    //ROUTE POST:
//Route Index Pour Lister Les postes.
    Route::get('/posts', [PostController::class, 'index'])->name('post.index');
//Route Create Pour le formulaire.
    Route::get('/posts/create', [PostController::class, 'create'])->name('posts.create');
//Route Store Pour l'enregistremet des données
    Route::post('/posts', [PostController::class, 'store'])->name('post.store');



        //ROUTE COMMENTAIRE:
//Route Index Pour Lister Les postes.
    Route::get('/commentaires', [CommentaireController::class, 'index'])->name('commentaire.index');
//Route Create Pour le formulaire.
    Route::get('/commentaires/create', [CommentaireController::class, 'create'])->name('commentaire.create');
//Route Store Pour l'enregistremet des données
    Route::post('/commentaires', [CommentaireController::class, 'store'])->name('commentaire.store');

Route::get('/dashboard', function () {
    return view('dashboard');

})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    
    

    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
