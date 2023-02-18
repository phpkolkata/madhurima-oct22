<?php

use App\Http\Controllers\PageController;
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
    // logic area
    $name = "raj";
    return view('welcome',["nm"=>$name]);
});

Route::get('test', function () {
    $name = "raj";
    return view('test',["nm"=>$name]);
});

Route::get('/age', function(){
    $age = 3;
    return view('age',["age"=>$age]);
});


Route::get('pages/page1',[PageController::class, 'page1']);

Route::get('pages/page2',[PageController::class, 'page2'] );
