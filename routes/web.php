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

Route::get('test','UserInterfaceController@test');
Route::get('association', 'AssociationController@GetAssociation');
Route::get('association/{id}', 'AssociationController@SortAssociation');
Route::get('give/{id}', 'AssociationController@GiveToAssociation');
Route::post('give/{id}', 'AssociationController@VerifAndAcceptDonation');
Route::post('newsletter/{id}', 'AssociationController@PutEmail');
Route::get('admin', 'AdminController@show')->middleware('auth');
Route::get('admin/create', 'AdminController@CreateNewCodes')->middleware('auth');
Route::post('admin/create', 'AdminController@GenerateCode')->middleware('auth');
Route::get('admin/allcodes', 'AdminController@ShowCodes')->middleware('auth');
Route::get('admin/download', 'AdminController@DownloadCodes')->middleware('auth');
Route::post('admin/getshit', 'AdminController@MakeShit')->middleware('auth');
Auth::routes();


