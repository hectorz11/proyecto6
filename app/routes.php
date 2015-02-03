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

Route::get('/',array('as'=>'index','uses'=>'AlbumsController@getList'));

Route::get('/createalbum',array('as'=>'create_album_form','uses'=>'AlbumsController@getForm'));

Route::post('/createalbum',array('as'=>'create_album','uses'=>'AlbumsController@postCreate'));

Route::get('/deletealbum/{id}',array('as'=>'delete_album','uses'=>'AlbumsController@getDelete'));

Route::get('/album/{id}',array('as'=>'show_album','uses'=>'AlbumsController@getAlbum'));

Route::get('/addimage/{id}',array('as'=>'add_image','uses'=>'ImagesController@getForm'));

Route::post('/addimage',array('as'=>'add_image_to_album','uses'=>'ImagesController@postAdd'));

Route::get('/deleteimagen/{id}',array('as'=>'delete_image','uses'=>'ImagesController@getDelete'));

Route::get('/moveimage',array('as'=>'move_image','uses'=>'ImagesController@postMove'));