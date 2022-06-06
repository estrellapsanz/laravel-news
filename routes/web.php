<?php

use App\Models\News;
use App\Http\Resources\NewsResource;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\NewsController;
use App\Http\Resources\CategoryResource;
use App\Models\Categories;

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


Route::get('/', [NewsController::class, 'news'])->name('news');

Route::get('/news/{id?}', [NewsController::class, 'news'])->name('news');

//for the API
Route::get('/api/noticia/{id}', function ($id) {
    return NewsResource::collection(News::newsById(($id)));
});

Route::get('/api/noticias', function () {
return NewsResource::collection(News::all());
});

Route::get('/api/noticias/{page}', function ($page) {
    return NewsResource::collection(News::paginate($page));
});

Route::get('/api/categoria/{id}/{page}', function ($id,$page) {
    return  NewsResource::collection(News::newsByCategory($id,$page));
});
