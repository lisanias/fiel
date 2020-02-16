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
    return view('auth.login');
});

Auth::routes();

/** Home */
Route::get('home', 'HomeController@index')->name('home');

/** Admin */
Route::resource('admin/user', 'User\AdminUserController');
Route::post('admin/user/passwor/{id}/update', 'User\AdminUserController@updatePassword')->name('update.password');

/** Membros (Members) */
Route::get(     'members/aniversariantes/{mes?}',  'Member\CustomMemberController@aniversariantes')->name('members.niver');
Route::post(    'members/find', 'Member\CustomMemberController@find')->name('member.find');
Route::get(     'members/new',  'Member\CustomMemberController@new')->name('member.new');
Route::resource('members',      'Member\MemberController');

/** Endereços (Address) */
Route::resource('address', 'Address\AddressController')->except(['index', 'create', 'store']);
Route::resource('members.address', 'Member\AddressController')->only('create', 'store');
Route::resource('igrejas.address', 'Igreja\AddressController')->only('create', 'store');

/** Igrejas */
Route::post('igrejas/find', 'Igreja\CustomIgrejaController@find')->name('igrejas.find');
Route::resource('igrejas', 'Igreja\IgrejaController');

/** Telefone (Phone) */
Route::resource('phones', 'Phone\PhoneController')->except(['index', 'create', 'store']);
Route::resource('members.phones', 'Phone\PhoneController')->only('create', 'store');

/** Id Ministerial */
Route::get('imprimir', function() {
	return view('members.id');
})->name('imprimir');

/** Aniversariantes */

