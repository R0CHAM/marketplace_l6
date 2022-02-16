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

Route::get('/oi', function () {
    return "<h1>Olá, mundo!</h1>";
});

Route::get('/products', function () {
    $products = \App\Product::all(); // select * from products

    return $products;
});

Route::get('/users', function () {
    //================ Active record =======================
//    $user = new \App\User;
//    $user->name = 'Kvothe Bloodless';
//    $user->email = 'kvothe@university.com';
//    $user->password = bcrypt('Denna');
//    $user->save();

//    ================ Mass assignment =======================
//    $user = \App\User::create([
//        'name' => 'Hermione Granger',
//        'email' => 'hermione@hogwarts.com',
//        'password' => bcrypt('Roney'),
//    ]);

//    ================== Mass update ======================
//    $user = \App\User::find(22);
//    $user->update([
//        'email' => 'granger.h@hogwarts.com',
//    ]);
    return \App\User::all();

//    return \App\User::where('name', 'Kvothe Bloodless')->get();
//    return \App\User::all(); //retorna uma Collection



});
