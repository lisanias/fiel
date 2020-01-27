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
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::resource('/admin/user', 'User\AdminUserController');
Route::post('admin/user/passwor/{id}/update', 'User\AdminUserController@updatePassword')->name('update.password');
/*Route::post('admin/user/passwor/{id}/update', function() {
	return 'opa, chegou aqui';
})->name('update.password');*/

Route::resource('/members', 'Member\MemberController');
Route::post('/members/find', 'Member\FindMemberController@find')->name('member.find');
Route::get('/members/new/dados', 'Member\FindMemberController@dadosBase')->name('member.new.dados');

Route::resource('/endereco', 'Address\AddressController');

Route::resource('/telefone', 'Phone\PhoneController');

Route::get('/imprimir', function() {
	return view('members.id');
})->name('imprimir');

