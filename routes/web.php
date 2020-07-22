<?php

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

Route::get('/home', 'HomeController@index')->name('home');


//GESTION DES ARTICLES
Route::get('local/acceuil-articles', 'Local\ArticleController@index');
Route::get('local/ajouter-article', 'Local\ArticleController@create');
Route::get('local/afficher-article/{id}', 'Local\ArticleController@show');
Route::get('local/modifier-article/{id}', 'Local\ArticleController@edit');
Route::post('local/store-article', 'Local\ArticleController@store');
Route::post('local/save-article', 'Local\ArticleController@save');
Route::get('local/activer-article/{id}', 'Local\ArticleController@activer');
Route::get('local/desactiver-article/{id}', 'Local\ArticleController@desactiver');


Route::get('articles', 'AllController@articles');
//



//GESTION DES CATEGORIES
Route::get('admin/acceuil-categories','Admin\CategorieController@index');
Route::get('admin/ajouter-categorie', 'Admin\CategorieController@create');
Route::get('admin/afficher-categorie/{id}', 'Admin\CategorieController@show');
Route::get('admin/modifier-categorie/{id}', 'Admin\CategorieController@edit');
Route::post('admin/store-categorie', 'Admin\CategorieController@store');
Route::post('admin/save-categorie', 'Admin\CategorieController@save');
Route::get('admin/activer-categorie/{id}', 'Admin\CategorieController@activer');
Route::get('admin/desactiver-categorie/{id}', 'Admin\CategorieController@desactiver');


Route::get('categories', 'AllController@categories');
//



//GESTION DES NOTES
Route::get('local/acceuil-notes', 'Local\NoteController@index');
Route::get('local/ajouter-note', 'Local\NoteController@create');
Route::get('local/afficher-note/{id}', 'Local\NoteController@show');
Route::get('local/modifier-note/{id}', 'Local\NoteController@edit');
Route::post('local/store-note', 'Local\NoteController@store');
Route::post('local/save', 'Local\NoteController@save');
Route::get('local/activer-categorie/{id}', 'Local\NoteController@activer');
Route::get('local/desactiver-categorie/{id}', 'Local\NoteController@desactiver');
//ETUDIANTS
Route::get('etudiant/afficher-note', 'Etudiant\NoteController@index');

//



//GESTION DES FILIERES
Route::get('local/acceuil-filieres', 'Local\FiliereController@index');
Route::get('local/ajouter-filiere', 'Local\FiliereController@create');
Route::get('local/modifier-filiere/{id}', 'Local\FiliereController@edit');
Route::post('local/acceuil-filiere', 'Local\FiliereController@store');
Route::post('local/save', 'Local\FiliereController@save');
