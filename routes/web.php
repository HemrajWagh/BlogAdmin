<?php


// User Routes
Route::group(['namespace'=>'User'],function(){

Route::get('/','HomeController@index');

Route::get('post','PostController@index')->name('post');

});



//Admin Routes
Route::group(['namespace'=>'Admin'],function(){

Route::get('admin/home','HomeController@index')->name('admin.home');

//Users routes
Route::resource('admin/user','UserController');	
// Post routes
Route::resource('admin/post','PostController');
// Tag routes
Route::resource('admin/tag','TagController');
// Category routes
Route::resource('admin/category','CategoryController');

});














 

// Route::get('admin/home',function(){
//     return view('admin.home');
// })->name('post');


// Route::get('admin/post',function(){
//     return view('admin.post.post');
// });

// Route::get('admin/tag',function(){
//     return view('admin.tag.tag');
// });

// Route::get('admin/category',function(){
//     return view('admin.category.category');
// });



