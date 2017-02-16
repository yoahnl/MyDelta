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
Route::get('admin/delete', 'AdminController@Delete')->middleware('auth');
Route::post('admin/delete', 'AdminController@DeleteData')->middleware('auth');
Route::get('admin/createassociation', 'AdminController@CreateNewAssociation')->middleware('auth');
Route::post('admin/createassociation', 'AdminController@AddNewAssociation')->middleware('auth');
Route::get('admin/modif', 'AdminController@GetAssociationName')->middleware('auth');
Route::post('admin/modif', 'AdminController@ModifAssociation')->middleware('auth');
Route::post('admin/modifdone', 'AdminController@ModifAssociationDone')->middleware('auth');
Auth::routes();


