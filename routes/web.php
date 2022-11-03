<?php

use App\Http\Controllers\moltenController;
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

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/test', function () {

    return view('test', [
        "title" => 'Dashboard'
    ]);
});


Route::get('/dashboard', [moltenController::class, 'dashboard']);
// Route::get('/detail/{molten}', [moltenController::class, 'detail']);
// Route::put('/detail/update/', [moltenController::class, 'update']);

Route::resource('/detail', moltenController::class);
