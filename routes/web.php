<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\FileUpload;
use App\Http\Controllers\userController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
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

Auth::routes();
Route::get('/home', [HomeController::class,'index'])->name('home');
Route::get('admin/homeadmin', [HomeController::class,'handleAdmin'])->name('admin.route')->middleware('admin');

Route::get('/cour',function(){
    return view('cour');
});


//Quiz
Route::get('Arch', function () {
    return view('Arch');
})->name('Arch');
Route::get('etd', function () {
    return view('etd');
})->name('etd');
/*Route::get('etudiant', function () {
    return view('etudiant');
})->name('etudiant');
*/


Route::get('C',function(){
    return view('C');
})->name('C');
Route::get('Cplus',function(){
    return view('Cplus');
})->name('Cplus');
Route::get('Cplus',function(){
    return view('Cplus');
})->name('Cplus');
Route::get('electro',function(){
    return view('electro');
})->name('electro');
Route::get('Algo',function(){
    return view('Algo');
})->name('Algo');

//admin page

Route::resource('users', userController::class);

//add cour

Route::get('/upload-file', [FileUpload::class,'createForm']);
Route::post('/upload-file', [FileUpload::class,'fileUpload'])->name('homes');
Route::get('/etudiant', [FileUpload::class,'index'])->name('etudiant');
Route::get('/home', [FileUpload::class,'indexof'])->name('home');

Route::resource('cours', FileUpload::class);