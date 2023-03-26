<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\IndexController;
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

//  ---------middleware  protected ---------

Route::get('/group',[IndexController::class,'group'])->middleware('guard');
Route::get('/index',[IndexController::class,'index'])->middleware('guard');
// ----------------------
Route::get('/', function () {
    return view('welcome');
});
Route::get('/login', function (){
    session()->put('user_id',1);
    print_r(session()->all());
     return redirect('/');
});
Route::get('/logout', function (){
    session()->forget('user_id');
    print_r(session()->all());
     return redirect('/');
});
Route::get('no-access',function (){
    echo "you are not allowed to access the page";
    die;
});
Route::get('/profile',function (){
    return "Welcome to your profile";
});
