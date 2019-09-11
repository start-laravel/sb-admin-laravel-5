<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::get('/', function()
{
	return view('home');
});

Route::get('/charts', function()
{
	return view('mcharts');
});

Route::get('/tables', function()
{
	return view('table');
});

Route::get('/forms', function()
{
	return view('form');
});

Route::get('/grid', function()
{
	return view('grid');
});

Route::get('/buttons', function()
{
	return view('buttons');
});


Route::get('/icons', function()
{
	return view('icons');
});

Route::get('/panels', function()
{
	return view('panel');
});

Route::get('/typography', function()
{
	return view('typography');
});

Route::get('/notifications', function()
{
	return view('notifications');
});

Route::get('/blank', function()
{
	return view('blank');
});

Route::get('/login', function()
{
	return view('login');
});

Route::get('/documentation', function()
{
	return view('documentation');
});
