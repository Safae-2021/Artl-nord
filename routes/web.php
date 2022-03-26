<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\TemplateController;



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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/',[TemplateController::class,'showAcceuil'] );
Route::get('/about',[TemplateController::class,'showAbout'] );
Route::get('/formation',[TemplateController::class,'showFormation'] );
Route::get('/location',[TemplateController::class,'showLocation'] );
Route::get('/actualites',[TemplateController::class,'showActualites'] );
Route::get('/contact',[TemplateController::class,'showContact'] );
Route::get('/article',[TemplateController::class,'showArticle'] )-> name("article");
Route::get('/article2',[TemplateController::class,'showArticle2'] )-> name("article2");


Route::get('/nav', function () {
    return view('navex');
});

Route::get('/timer', function () {
    return view('timer');
});


Route::get('/mega', function () {
    return view('megamenu');
});

Route::get('/comment', function () {
    return view('comment');
});