<?php

use Illuminate\Support\Facades\Route;
use Termwind\Components\Dd;

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

$controller_path = 'App\Http\Controllers';

// Main Page Route

// pages


Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
$controller_path = 'App\Http\Controllers';

    Route::get('/', $controller_path . '\pages\HomePage@index')->name('pages-home');
    Route::get('/page-2', $controller_path . '\pages\Page2@index')->name('pages-page-2');

    //Users
    Route::get('/users', $controller_path . '\pages\Users@index')->name('pages-users');
    Route::get('/users/create', $controller_path . '\pages\Users@create')->name('users.create');
    Route::post('/users/store', $controller_path . '\pages\Users@store')->name('users.store');
    Route::get('/users/show/{user_id}', $controller_path . '\pages\Users@show')->name('pages.users.show');
    Route::post('/users/update', $controller_path . '\pages\Users@update')->name('pages.users.update');
    Route::get('/users/destroy/{user_id}', $controller_path . '\pages\Users@destroy')->name('pages.users.destroy');

    //Types
    Route::get('/types', $controller_path . '\pages\Types@index')->name('pages-types');
    Route::get('/types/create', $controller_path . '\pages\Types@create')->name('types.create');
    Route::post('/types/store', $controller_path . '\pages\Types@store')->name('types.store');
    Route::get('/types/show/{type_id}', $controller_path . '\pages\Types@show')->name('pages.types.show');
    Route::post('/types/update', $controller_path . '\pages\Types@update')->name('pages.types.update');
    Route::get('/types/destroy/{type_id}', $controller_path . '\pages\Types@destroy')->name('pages.types.destroy');
    Route::get('/types/switch/{type_id}', $controller_path . '\pages\Types@switch')->name('pages.types.switch');

    //Modes
    Route::get('/modes', $controller_path . '\pages\Modes@index')->name('pages-modes');
    Route::get('/modes/create', $controller_path . '\pages\Modes@create')->name('modes.create');
    Route::post('/modes/store', $controller_path . '\pages\Modes@store')->name('modes.store');
    Route::get('/modes/show/{type_id}', $controller_path . '\pages\Modes@show')->name('pages.modes.show');
    Route::post('/modes/update', $controller_path . '\pages\Modes@update')->name('pages.modes.update');
    Route::get('/modes/destroy/{type_id}', $controller_path . '\pages\Modes@destroy')->name('pages.modes.destroy');
    Route::get('/modes/switch/{type_id}', $controller_path . '\pages\Modes@switch')->name('pages.modes.switch');

    
});
