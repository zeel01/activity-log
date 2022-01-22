<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ActivityController;
use Illuminate\Http\Request;

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

Route::get('/', [ActivityController::class, 'index']);

Route::resource('activities', ActivityController::class)
	->names([
		'new' => 'activities.create'
	])
	->missing(function (Request $request) {
		return Redirect::route('activities.index');
	});