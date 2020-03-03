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
Route::get(     'members/aniversariantes/{mes}/etiquetas',  'Member\CustomMemberController@etiquetasAniversariantes')->name('members.niver.etiquetas');
Route::get(     'members/deleted',  'Member\CustomMemberController@indexDeleted')->name('members.deleted');
Route::get(     'members/deleted/{id}',  'Member\CustomMemberController@restore')->name('members.restore');
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

/** Identidades */
Route::get('identidades/vencidas', 'Identidade\IdentidadeController@vencidas')->name('vencidas');
Route::get('identidade/{id}/pdf',      'Identidade\identidadeController@pdf')->name('pdf');
Route::get('identidade/{id}/imprimir',      'Identidade\identidadeController@print')->name('imprimir');
Route::post('identidade/procurar',      'Identidade\identidadeController@find')->name('id.find');
Route::resource('identidades',      'Identidade\identidadeController');
//Route::get('imprimir', function() { return view('print.id'); })->name('imprimirso');