<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

//Create and register Agent
Route::get('/registeragent', 'AgentsController@index');
Route::post('/registeragentprocess', 'AgentsController@register');
Route::get('/createagent/{id}', 'AgentsController@create');
Route::post('/createagentprocess/{id}', 'AgentsController@store');

//Create and register Customer
Route::get('/registercustomer', 'CustomerController@index');
Route::post('/registercustomerprocess', 'CustomerController@register');
Route::get('/createcustomer/{id}', 'CustomerController@create');
Route::post('/createcustomerprocess/{id}', 'CustomerController@store');

//Create product
Route::get('/createproduct', 'PaketController@index');
Route::post('/createproduct/submit', 'PaketController@store');

//Dashboard
Route::get('/dashboard', 'DashboardController@index');

//CRUD Agent
Route::get('/agent', 'AgentsController@showAll');
Route::get('/agent/{id}','AgentsController@show');
Route::post('/agentupdate/{id}','AgentsController@edit');
Route::get('/agentdelete/{id}','AgentsController@destroy');

//CRUD Customer
Route::get('/addcustomer/{id}', 'CustomerController@addNew');
Route::post('/addcustomerprocess/{id}', 'CustomerController@add');
Route::get('/customer', 'CustomerController@showAll');
Route::get('/customer/{id}', 'CustomerController@show');
Route::post('/customerupdate/{id}', 'CustomerController@edit');
Route::get('/customerdelete/{id}', 'CustomerController@destroy');

//CRUD Product
Route::get('/product', function(){
	return view('product');
});
