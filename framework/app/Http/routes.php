<?php
//Landing
Route::get('/', function () {
    return view('index');
});

//Construct
Route::get('/home', 'HomeController@index');

//middleware
Route::group(array('middleware'=>'auth'), function() {

	//Register petugas
	Route::get("/user/register", "UserController@create");
	Route::post("/user/store", "UserController@store");

	//User Management
	Route::get("/users", "UserController@index");
	Route::get("/user", "UserController@petugasUser");
	Route::get("/user/{id}/edit", "UserController@edit");
	Route::post("/user/{id}/update", "UserController@update");
	Route::get("/user/{id}/delete", "UserController@delete");

	//Profile Management
	Route::get("/petugas", "ProfileController@index");
	Route::get("/profile", "ProfileController@petugasProfile");
	Route::get("/profile/{id}", "ProfileController@show")->where("id", "\d+");
	Route::get("/profile/{id}/edit", "ProfileController@edit");
	Route::post("/profile/{id}/update", "ProfileController@update");

	//Member Management
	Route::get("/members", "MhsController@index");
	Route::get("/members/{id}", "MhsController@show")->where("id", "\d+");
	Route::get("/members/{id}/edit", "MhsController@edit");
	Route::post("/members/{id}/update", "MhsController@update");
	Route::get("/members/{id}/delete", "MhsController@delete");
	Route::get("/members/{id}/pinjam", "MhsController@pinjam");
	Route::post("/members/{id}/prosespinjam", "MhsController@prosesPinjam");

	//Buku Management
	Route::get("/books", "BukuController@index");
	Route::get("/book/create", "BukuController@create");
	Route::post("/book/store", "BukuController@store");
	Route::get("/books/{id}/edit", "BukuController@edit");
	Route::post("/books/{id}/update", "BukuController@update");
	Route::get("/books/{id}/delete", "BukuController@delete");

	//info
		Route::get('/success', function() {
			return view('info.success');
		});
});

//Register Mahasiswa
Route::get("/mhs/register", "MhsController@create");
Route::post("/mhs/store", "MhsController@store");

//autentifikasi
Route::get('/auth/login', ['as'=>'user_auth_login', 'uses'=>'AuthController@loginForm']);
Route::post('/proses-login', ['as'=>'user_auth_proses', 'uses'=>'AuthController@prosesLogin']);
Route::get('/auth/logout', "AuthController@logout");

//info
Route::get('/abort', function() {
	return view('info.abort');
});
Route::get('/escape', function() {
	return view('info.escape');
});

Route::get('/registered', function() {
	return view('info.registered');
});

//Guest's Pages
Route::get("/contact", "ProfileController@contact");
Route::get("/listbooks", "BukuController@show");