<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdmUserData;
use App\User;
use App\Role;


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

   
    $user=Auth::user();
    if ($user && $user->esAdmin()){
       
       
        
        echo "Eres usuario Administrador";
        // return view('admin',['AdmUserData@index']);
    }else{
        echo "Eres Usuario Estandar";
    }

     return view('welcome');

});

// //agrego array a la ruta
Auth::routes(['verify'=> true]);
 //agrego middleware para protegerla, de tal manera que los usuarios solo accedan despues de verificar email
 Route::get('/home', 'HomeController@index')->name('home')->middleware('verified');

 Route::get('/demo', function () {
    return view('demo');
 });

Route::get('/create','UserDbController@create');

Route::get('/admin','UserDbController@index');







