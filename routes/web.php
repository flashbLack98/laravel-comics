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

Route::get('/', function () {
    return view('home.index');
});

Route::get('/comics', function () {
    $comicsData = config('comics');
    $data = [];
    foreach ($comicsData as $index => $comic) {
        $comic['id'] = $index;
        $data[]=$comic;
    }
    return view('pages.comics', ['comics' => $comicsData]);
})->name('comics');



Route::get('/comics.{id?}', function ($id) {
    $data = config('comics');
    if($id >= 0 && $id < count($data)){
        $comic = $data[$id];
        
        return view('pages.comicDetails',['comic' => $comic]);
    }
     
})->name('comicDetails');