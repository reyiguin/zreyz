<?php

//Route::any('Admin/admin_home', array('as'=>'Admin.admin_home', 'uses'=>'IpostmoAdminController@admin_home'));
//Route::any('Admin/admin_control', array('as'=>'Admin.admin_control', 'uses'=>'IpostmoAdminController@admin_control'));
//Route::post('Admin/loginprocess_admin', array('as'=>'Admin.loginprocess_admin', 'uses'=>'IpostmoAdminController@loginprocess_admin'));
//Route::any('/', array('as'=>'index', 'uses'=>'IpostMoController@index'));
Route::any('login', array('as'=>'login', 'uses'=>'IpostMoController@login'));
Route::any('signup', array('as'=>'signup', 'uses'=>'IpostMoController@signup'));
Route::any('home', array('as'=>'home', 'uses'=>'IpostMoController@home'));
/*

Route::any('category/{category_id}', array('as'=>'index', 'uses'=>'IpostMoController@index'));
Route::any('category-search/{category}/{search_key}', array('as'=>'index', 'uses'=>'IpostMoController@index'));
Route::any('item/{item_id}', array('as'=>'index', 'uses'=>'IpostMoController@index'));
Route::any('search/{search_key}', array('as'=>'index', 'uses'=>'IpostMoController@index'));
Route::any('users/dashboard', array('as'=>'index', 'uses'=>'IpostMoController@index'));
Route::any('post/create', array('as'=>'index', 'uses'=>'IpostMoController@index'));
Route::any('post/edit/{post_id}', array('as'=>'index', 'uses'=>'IpostMoController@index'));
Route::any('users/profile/{user_id}', array('as'=>'index', 'uses'=>'IpostMoController@index'));
*/

//Route::any('index', array('as'=>'index', 'uses'=>'IpostMoController@index'));