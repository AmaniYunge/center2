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


/**
 * managing Board members Details
 */
Route::get('admin/board_member',array('uses'=>'BoardController@index'));

Route::get('admin/board_member/add',array('uses'=>'BoardController@create'));

Route::get('admin/board_member/list',array('uses'=>'BoardController@lists'));

Route::get('admin/board_member/edit/{id}',array('uses'=>'BoardController@edit'));

Route::post('admin/board/add',array('uses'=>'BoardController@store'));

Route::post('admin/board/delete/{id}',array('uses'=>'BoardController@destroy'));

Route::post('admin/board/edit/{id}',array('uses'=>'BoardController@update'));


/**
 * managing Board members CV
 */
Route::get('admin/cv',array('uses'=>'CvController@index'));

Route::get('admin/cv/add',array('uses'=>'CvController@create'));