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


Route::get('/', 'HomePageController@homePageBannerImage');

Route::get('/about-us', 'AboutPageController@aboutPage');

Route::get('/services', 'ServicePageController@servicePage');
Route::get('/service/details/{id}', 'ServicePageController@serviceDetails');

Route::get('/projects', 'ProjectPageController@projectPage');
Route::get('/project/details/{id}', 'ProjectPageController@projectDetails');

Route::get('/gallery', 'GalleryPageController@galleryPage');

Route::get('/contact', 'ContactPageController@contactPage');

Route::get('/carrer', 'CarrerPageController@carrerPage');


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
