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
    return new NewsResource(News::findOrFail($id));
});

Route::get('/api/noticias', function () {
return NewsResource::collection(News::all());
});

Route::get('/api/noticias/{page}', function ($page) {
    return NewsResource::collection(News::paginate($page));
});


Route::get('/api/categoria/{id}/{page}', function ($id) {
    return new CategoryResource(Categories::findOrFail($id));
});

Route::get('/api/categoria', function () {
return CategoryResource::collection(Categories::all());
});
