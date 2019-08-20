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

use App\Contact;
use App\User;


Route::get('/', function () {
    return view('welcome');
});

Route::resource('contacts', 'ContactController');

Route::get('contacts/{job_title}', 'ContactController@show');

//Json & Array Api & Creation
Route::get('/j.txt', function()
{
    $users = App\User::all();
    
    $output = json_encode(array('kitten' => $users));
	
    return $output;
 
});


Route::get('/array1.txt', function()
{
       $users = App\User::all();

       return $users->toArray();
 
});


Route::get('/j1.txt', function()
{
       $user = App\User::find(1);

       return $user->toJson(JSON_PRETTY_PRINT);
 
});


Route::get('/uploadmedia', 'UploadMediaController@index');
Route::post('/postmedia', 'UploadMediaController@post')->name('upload.media');
Route::get('/downloadmedia', 'UploadMediaController@download')
    ->name('download');


Auth::routes();

Auth::routes(['verify' => true]);

Route::get('/profile', 'HomeController@index')->name('profile');

Route::get('/logout', 'HomeController@logout')->name('logout');


Route::get('/home', function () {
    // Only verified users may enter...
})->middleware('verified');


Route::get('/pdfview', 'ContactController@pdfview')->name('pdfview');

// Making Questions Examples
Route::get('/make-question', 'QuestionController@create')->name('make-question');
Route::post('/store-question', 'QuestionController@store')->name('store-question');
Route::get('/show-user-question', 'QuestionController@show')->name('show-question');
Route::get('/show-my-question', 'QuestionController@showmyques')->
    name('show-my-question');
Route::get('/edit/{id}', 'QuestionController@edit')->name('edit');
Route::patch('/update/{id}','QuestionController@update')->name('update');
Route::delete('/delete/{id}', 'QuestionController@delete')->name('delete');

// Search & Filtering queries
Route::get('/search', 'QuestionController@search')->name('search');

// Session Examples
Route::get('session/get','SessionController@accessSessionData');
Route::get('session/set','SessionController@storeSessionData');
Route::get('session/remove','SessionController@deleteSessionData');




// Android REST api

$router->post('product','ProductController@createProduct');   //for creating product

$router->get('product/{id}','ProductController@updateProduct'); //for updating product

$router->post('product/{id}','ProductController@deleteProduct');  // for deleting product

$router->get('product','ProductController@index'); // for retrieving product