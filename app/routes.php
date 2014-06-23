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
	return View::make('home');
});

Route::get('history', function()
{
	return View::make('history');
});


Route::get('leadership', function()
{
    return View::make('leadership');
});


Route::get('staff', function()
{
    return View::make('staff');
});

Route::get('cv', function()
{
    return View::make('cv');
});

Route::get('services', function()
{
    return View::make('services');
});

Route::get('projects', function()
{
    return View::make('projects');
});

Route::get('contact', function()
{
    return View::make('contact');
});

Route::get('orportunities', function()
{
    return View::make('orportunities');
});