<?php

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



Route::get('/admin','VilleController@index');

Route::resource('/ville','VilleController');
Route::resource('/categorie/boutique','CategorieBoutiqueController');
Route::resource('/categorie/produit','CategorieProduitController');
Route::resource('/user','UtilisateurController');
Route::resource('/boutique','BoutiqueController');
Route::resource('/produit','ProduitController');

Auth::routes();

Route::get('/', 'HomeController@index')->name('home');
Route::post('/search','HomeController@search')->name('search');
Route::get('/voirplus/{id}','HomeController@voirplus')->name('voir_plus');
Route::get('/contact', function(){
  return view('/contact');
});
Route::get('/home','HomeController@hom');
