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

//Route::get('/oi', function () {
//    return "<h1>Olá, mundo!</h1>";
//});
//
//Route::get('/product', function () {
//    return \App\Product::all(); // select * from products
//    $store = \App\Store::find(10);
//    $product = $store->products()->create([
//        'name' => 'Picanha Porcão 1kg',
//        'description' => 'Picanha qualidade da churrascaria Porcão, peça de 1Kg',
//        'body' => 'Texto apelativo pra você comprar',
//        'price' => 89.90,
//        'slug' => 'picanha-porcao-1kg',
//    ]);
//    $product = \App\Product::find(81);
//    dd($product->categories()->sync([1,2]));
//    return $product;
//});
//
//Route::get('/store', function () {
//    $store = \App\Store::find(10); // select * from products
//
//    return $store->products;
//});
//
//Route::get('/user', function () {
    //================ Active record =======================
//    $user = new \App\User;
//    $user->name = 'Kvothe Bloodless';
//    $user->email = 'kvothe@university.com';
//    $user->password = bcrypt('Denna');
//    $user->save();
//
//    ================ Mass assignment =======================
//    $user = \App\User::create([
//        'name' => 'Hermione Granger',
//        'email' => 'hermione@hogwarts.com',
//        'password' => bcrypt('Roney'),
//    ]);
//
//    ================== Mass update ======================
//    $user = \App\User::find(22);
//    $user->update([
//        'email' => 'granger.h@hogwarts.com',
//    ]);
//
//    return \App\User::where('name', 'Kvothe Bloodless')->get();
//    return \App\User::all(); //retorna uma Collection
//    $user = \App\User::find(10);
//    $user->store()->update([
//        'name' => 'Embraza Steakhouse',
//        'description' => 'Boutique de carnes nobres e delivery',
//        'phone' => '55 21 970252816',
//        'mobile_phone' => '55 21 970282828',
//        'slug' => 'embraza-steakhouse',
//    ]);
//
//    return $user->store;
//
//    return \App\User::find();
//
//});
//
//Route::get('/category', function(){
//
//    \App\Category::create([
//       'name' => 'Carne',
//        'description' => null,
//        'slug' => 'carne',
//    ]);
//
//    \App\Category::create([
//        'name' => 'Frango',
//        'description' => null,
//        'slug' => 'frango',
//    ]);
//
//    return \App\Category::all();
//
//});

Route::prefix('admin')->namespace('Admin')->group(function(){

    Route::prefix('stores')->group(function(){

        Route::get('/', 'StoreController@index');
        Route::get('/create', 'StoreController@create');
        Route::post('/store', 'StoreController@store');

    });
});
