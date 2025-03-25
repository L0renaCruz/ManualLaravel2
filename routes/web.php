<?php
use App\Http\Controllers\InicioController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/inicio',function(){
    return view('inicio');
});
Route::get('/vista1',function(){
    return view('vista1');
});
Route::get('/vista2',function(){
    return view('vista2');
});
Route::get('/vista3',function(){
    return view('vista3');
});

Route::get('/home',[InicioController::class,'index']);
