<?php

use App\Http\Controllers\WelcomeController;
use App\Http\Controllers\CommentaireController;

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


Route::get('/', [WelcomeController::class, 'index'])->name('welcome');
Route::get('/categories/{categorie}', [WelcomeController::class, 'parCategorie'])->name('categorie');
Route::get('/seneve-TV/categories/{categorie}', [WelcomeController::class, 'tvCategorie'])->name('tvcategorie');
Route::post('/commenter' ,[CommentaireController::class,'store'])->name('commenter');
Route::post('/repondre' ,[ReponseController::class,'store'])->name('repondre');
Route::get('/articles/{categorie}/{article}', [WelcomeController::class, 'articles'])->name('article');
// Route::get('seneveTV/videos/{categorie}/{article}', [WelcomeController::class, 'videos'])->name('video');
Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});
