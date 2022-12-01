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
    return view('welcome');
});

Route::get('/hello', function () {
    return response('<h1> welcome </h1>', 200)-> header('Content-Type', 'text/plain')
    -> header('foo', 'bar')
    ;//we can add headers to this response
    //giving text/plain gives out plaintext

});

Route::get('/posts/{id}', function ($id) {
    return response('Post'.$id);
    

});

Route::get('/posts/{id}', function ($id) {
    return response('Post'.$id);
    

})-> where('id','[0-9]+');//adding a constraint so all numbers are only accepted

