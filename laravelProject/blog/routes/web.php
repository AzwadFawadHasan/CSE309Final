<?php

use Illuminate\Support\Facades\Route;
use Symfony\Component\HttpFoundation\Request;

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

Route::get('/hello', function(){
    return response('<h1>Hello World</h1>', 200)
    ->header('Content-Type', 'text/plain')
    ->header('foo','Bar');//response helper takes in the content and also the status. by default status = 200 meaning //everything is running smooth

    
    //we can add Headers to this
    // by using arrows ->
});


Route::get('/posts/{id}', function($id){
    dd($id);//die dump helper used for debugging 
    //ddd used for die dump debugging
    return response('Post '.$id);

})->where('id', '[0-9]+');//adding a constraint to id
// here we want to only accept numbers from 0-9


Route::get('/search', function(Request $request){

});