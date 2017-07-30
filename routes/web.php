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
Route::get('/', function ()
{
    return view('welcome');
})->middleware('auth');

Route::get('contact', function ()
{
    return view('contact');
});



Route::get('association', 'AssociationController@GetAssociation');
Route::get('contact', 'AdminController@Contact');
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
Route::get('admin/newcompany', 'AdminController@NewCompany')->middleware('auth');
Route::post('admin/newcompany', 'AdminController@CreateCompany')->middleware('auth');
Route::get('admin/tocompanyall', 'AdminController@AssociationToCompany')->middleware('auth');
Route::get('admin/setcompany', 'AdminController@SetAssociationToCompany')->middleware('auth');
Route::post('admin/setcompany', 'AdminController@GetAssociationToCompany')->middleware('auth');
Route::get('company/{id}', 'CompanyController@ShowCompany');
Route::get('company', 'CompanyController@ShowAllCompany');
Route::post('contact','AdminController@SendMailToSupport');
Route::get('faq',
    function ()
    {
        return view('other.faq');
    }
    );
Route::get('about-us',
    function ()
    {
        return view('other.about-us');
    }
    );
Auth::routes();



Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});


// Test for Stripe


Route::get('stripe', 'AddMoneyController@getStripeTest');
Route::post('stripe', 'AddMoneyController@postStripeTest');

Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});





















