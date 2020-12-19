<?php

/*

*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/admin', "ProductsController@index")->name("Adminindex");

Route::get('/admin/create', "ProductsController@create")->name("Admincreate");

Route::post("/admin/store", "ProductsController@store")->name("adminstore");

Route::post("/admin/delete", "ProductsController@delete")->name("admindelete");

Route::get("/admin/show/{id}", "ProductsController@show")->name("adminshow");

Route::post("/admin/show/comments", "ProductsController@store_comment")->name("store_comment");

Route::get("/admin/edit/{id}", "ProductsController@edit")->name("adminedit");

Route::post("/admin/update", "ProductsController@update")->name("update");
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
