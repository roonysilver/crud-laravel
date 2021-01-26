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

Route::get('/usercontroller/path',[
    'middleware' => 'First',
    'uses' => 'UserController@showPath'
]);
Route::resource('user', 'UserController', [
    'middleware' => 'First',
]);
// Route::resource('user', 'UserController')->middleware('First');

Route::resource('my', 'MyController');

// Route::controller('test', 'ImplicitController');

// class MyClass {
//     public $foo = 'bar';
// }

// Route::get('/myclass', 'ImplicitController@index');

Route::get('foo/bar', 'UriController@index');

Route::get('/register', function () {
    return view('register');
});
Route::post('/user/register', array('uses' => 'UserRegistration@postRegister'));

Route::get('/cookie/set', 'CookieController@setCookie');
Route::get('/cookie/get', 'CookieController@getCookie');

Route::get('/header', function() {
    return response("Hello", 200)->header('Content-Type','text/html');
});

Route::get('/cookie', function () {
    return response("Hello everybody", 200)->header('Content-Type', 'text/html')
    ->withcookie('name', 'Virat Gandhi'); 
});


Route::get('/json', function () {
    return response()->json(['name' => 'Virat Grandhi', 'state' => 'Gujarat']);
});

Route::get('/test', ['as' => 'testing', function() {
    return view('test');
}]);

Route::get('redirect', function () {
    return redirect()->route('testing');
});

// Route::get('/test2', function () {
//     return view('test2');
// });

Route::get('page', function () {
    return view('child');
});

Route::resource('employee', 'Employee');

Route::get('insert', "StudInsertController@insertForm");
Route::post('create', "StudInsertController@insert");
Route::post('create', "StudInsertController@valid");

Route::get('view', 'StudInsertController@index');
Route::get('edit/{id}', 'StudInsertController@show');
Route::post('edit/{id}','StudInsertController@update');
Route::get('delete/{id}', 'StudInsertController@delete');

Route::get('sentemail', 'StudInsertController@basic_email');

Route::get('home', 'base@index');

Route::resource('cars', 'CarController');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
