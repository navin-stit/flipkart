<?php

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
    return view('homePage');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

///// Log Activity Controller /////
Route::get('activity-log', 'ActivityLog@showActivityLog')->name('activity-log');
Route::post('add-data', 'ActivityLog@add_rooms')->name('add-data');
Route::post('add-defects','ActivityLog@addDefects')->name('add-defects');
Route::get('rooms-detail','ActivityLog@showRooms')->name('rooms-detail');
Route::delete('delete-room','ActivityLog@destroy');
Route::get('edit-details', 'ActivityLog@editRooms')->name('edit-details');
Route::post('update', 'ActivityLog@updateRooms')->name('update');

Route::get('sidenav','ActivityLog@sidenav')->name('sidenav');
