<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Auth;
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

/*Route::get('/', function () {
    return view('welcome');
});*/

Route::get('/',[AuthController::class,'login']);
Route::post('/authenticate',[AuthController::class,'authenticate']);


Route::middleware(['admin'])->group(function () {
    Route::get('dashboard',[\App\Http\Controllers\ClubController::class,'dashboard']);

    Route::resource('teams',\App\Http\Controllers\TeamController::class);

    Route::resource('players',\App\Http\Controllers\PlayersController::class);

});
Route::get('add-club',function (){

    if(Auth::check()){
        if(Auth::user()->role_id==1) {
            $data = array(
                array('name' => "A", 'location' => "Location-1", 'created_by' => Auth::user()->id),
                array('name' => "B", 'location' => "Location-2", 'created_by' => Auth::user()->id),
                array('name' => "C", 'location' => "Location-3", 'created_by' => Auth::user()->id),
                array('name' => "D", 'location' => "Location-4", 'created_by' => Auth::user()->id),
            );

            \App\Models\Club::insert($data);
        }
    }

});
