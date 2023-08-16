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
/*
Route::get('/', function () {
    return view('welcome');
});
*/
Route::get('/', function () {
    return 'головна сторінка сайту';
})->name('base');

Route::get('/posts', function () {
    return ' список постів';
})->name('postsAll');

Route::get('/post/1', function () {
    return ' перший пост';
})->name('post');
//3
Route::get('/test', function () {
    return ' test';
})->name('testAll');
Route::get('/dir/test ', function () {
    return ' /dir/test ';
})->name('dirTest');
//4
Route::get('/post/{id}', function ($id) {
    return 'пост ' . $id;
})->name('postId');
//5 /user/:name
Route::get('/user/{name}', function ($name) {
    return 'додано ' . $name;
})->name('nameIn');
//6
Route::get('/post/{catId}/{postId}', function ($catId, $postId) {
    return $catId . ' ' . $postId;
})->name('postCatId');
//7 /user/:surname/:name/
Route::get('/post/{surname}/{name}', function ($surname, $name) {
    return $surname . ' ' . $name;
})->name('nameSurnameName');
//8 /city/:city
Route::get('/city/{city}', function ($city) {
    return  'Місто ' . $city;
})->name('city');
//9 /user/:id
Route::get('/user/{id}', function ($id) {
    return 'додано ' . $id;
})->name('userId');
//10 /user/:id/:name
Route::get('/user/{id}/{name}', function ($id,$name) {
    return 'додано ' . $id. ' '. $name;
})->name('userIdName');
//11 /posts/:date
Route::get('/posts/{date}', function ($date) {
    return 'додано ' . $date;
})->name('postInDate');
//12 /:year/:month/:day
Route::get('/{year}/{month}/{day}', function ($year, $month, $day) {
    return 'Внесено дакту '. $year. ' year '. $month. ' month '. $day. ' day';
})->name('data');

Route::get('/admin/users', function ($id) {
    return 'all';
})->name('adminUser');
Route::get('/admin/user/{id}', function ($id) {
    return $id;
})->name('adminUserId');
