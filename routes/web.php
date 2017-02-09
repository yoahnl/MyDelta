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
Route::get('home', function ()
{
    return view('welcome');
});
Route::get('/', function ()
{
    return view('welcome');
});

Route::get('test','UserInterfaceController@test')->middleware('auth');
Route::get('UserPanel','UserInterfaceController@UserPanel')->middleware('auth');
Route::get('association', 'AssociationController@GetAssociation');
Route::get('give/{id}', 'AssociationController@GiveToAssociation')->middleware('auth');
Auth::routes();


