<?php

use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Route;
use App\Models\level;
use App\Http\Controllers\moltenController;


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
    $sql = level::all();
    $mesin47 = $sql->find(47);
    $mesin48 = $sql->find(48);
    $mesin51 = $sql->find(51);
    $mesin52 = $sql->find(52);
    $mesin53 = $sql->find(53);
    return view('test', [
        "title" => 'Dashboard',
        "molt1" => $mesin47,
        "molt2" => $mesin48,
        "molt3" => $mesin51,
        "molt4" => $mesin52,
        "molt5" => $mesin53,
    ]);
});


Route::get('/dashboard', [moltenController::class, 'dashboard']);
Route::get('/testjam', [moltenController::class, 'test']);
// Route::get('/detail/{molten}', [moltenController::class, 'detail']);
// Route::put('/detail/update/', [moltenController::class, 'update']);

Route::resource('/detail', moltenController::class);
