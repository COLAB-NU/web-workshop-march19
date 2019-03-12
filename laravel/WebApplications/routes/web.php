<?php

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
/*Route::get('/hello', function () {
    // return view('welcome');
    return 'Hello world';
 });
 
 Route::get('/user/{id}/{name}', function($id, $name){
    return 'This is my id :'.$id.' and name:'.$name;
 });
 Route::get('/about', function () {
    return view('pages.about');
   
 });
 */



 Route::get('/','pagesControl@index');
 Route::get('/about','pagesControl@about');
 Route::get('/services','pagesControl@services');
 Route::resource('posts','postControl');
?>