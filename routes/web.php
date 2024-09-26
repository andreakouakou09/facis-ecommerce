<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\AdminProfileController;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\CategorieController;
use App\Http\Controllers\CommandeController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PanierController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

/****** FRONTEND ******/

Route::get('/', [HomeController::class, 'index']);
Route::get('/a-propos', [HomeController::class, 'apropos']);
Route::get('/produits', [HomeController::class, 'produits'])->name('produits');
Route::get('/services', [HomeController::class, 'services'])->name('services');
Route::get('/actualites', [HomeController::class, 'actualites']);
Route::get('/contact', [HomeController::class, 'contact'])->name('contact');
Route::post('/contact_store', [HomeController::class, 'contact_store'])->name('contact_store');
Route::post('/appointement_store', [HomeController::class, 'appointement_store'])->name('appointement_store');


///PANIER
Route::get('/addToCart/{id}', [PanierController::class, 'addToCart'])->middleware(['auth', 'verified'])->name('add_to_cart');
Route::get('/monpanier', [PanierController::class, 'panier'])->middleware(['auth', 'verified'])->name('panier');
Route::post('/panier/update-quantity/{id}', [PanierController::class, 'updateQuantity'])->name('panier.updateQuantity');
Route::delete('/panier/{id}', [PanierController::class, 'removeFromPanier'])->name('panier.remove');

Route::post('/confirm_commande', [PanierController::class, 'confirm_commande'])->name('confirm_commande');


/****** BACKEND ******/

Route::resource('categories', CategorieController::class);
Route::resource('articles', ArticleController::class);
Route::get('admin/contacts', [AdminController::class, 'liste_contact'])->name('contacts.index');
Route::get('admin/appointements', [AdminController::class, 'liste_appointement'])->name('appointements.index');

//COMMANDES
Route::get('/commandes', [CommandeController::class, 'index'])->name('commandes.index');

Route::get('/commandes_show', [CommandeController::class, 'show'])->name('commandes.show');

// Route::get('/mes-commandes', [CommandeController::class, 'mesCommandes'])->name('mes.commandes')->middleware('auth');
Route::get('/mes-commande/{id}', [CommandeController::class, 'show_mesCommandes'])->name('mes.commande.show')->middleware('auth');





Route::get('/dashboard', [CommandeController::class, 'mesCommandes'])->middleware(['auth', 'verified'])->name('dashboard');

// Route::get('/mes-commandes', [CommandeController::class, 'mesCommandes'])->name('mes.commandes')->middleware('auth');


Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});


Route::middleware('auth:admin')->group(function () {
    Route::get('/admin/profile', [AdminProfileController::class, 'edit'])->name('admin.profile.edit');
    Route::patch('/admin/profile', [AdminProfileController::class, 'update'])->name('admin.profile.update');
    Route::delete('/admin/profile', [AdminProfileController::class, 'destroy'])->name('admin.profile.destroy');
});


require __DIR__.'/auth.php';

require __DIR__.'/admin-auth.php';
