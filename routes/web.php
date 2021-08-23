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

/*Route::get('/', function () {
    return view('welcome');
});*/



/*================= STAR  ================*/

Route::get('/liste_job_favoris','EcommerceController@liste_job_favoris')->name('liste_job_favoris');

Route::get('/','ClientController@home')->name('home');
Route::get('/application','ClientController@application')->name('application');
Route::get('/design','ClientController@design')->name('design');
Route::get('/videosurveillance','ClientController@videosurveillance')->name('videosurveillance');
Route::post('contacter', 'ClientController@contacter')->name('contact.client');
Route::get('nos_realisation', 'ClientController@nos_realisation')->name('nos_realisation');
Route::get('all_project', 'ClientController@all_project')->name('all_project');
Route::get('projet_by_categorie-{categorie}','ClientController@projet_by_categorie')->name('categorie');
Route::get('detail_projet-{projet}','ClientController@detail_projet')->name('projet');
Route::get('/contact','ClientController@contact')->name('contact');



/*================= END  ================*/

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
