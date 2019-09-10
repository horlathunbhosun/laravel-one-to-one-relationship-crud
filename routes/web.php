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

use App\User;
use App\Address;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/insert', function(){
    $user = User::findOrfail(1);

    $address = new address(['name'=> '36, ojekunle street okekoto agege lago']);

    $user->address()->save($address);
});


Route::get('/update', function(){
        $address = Address::whereUserId(1)->first();
        $address->name = '45 okearo street okekoto agege lagos';

        $address->save();
});


Route::get('/read', function(){
    $user = User::findOrfail(1);
    echo $user->address->name;
});


Route::get('/delete', function(){
    $user = User::findOrfail(1);
    $user->address->delete();

    return "done";
});
