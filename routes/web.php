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

Route::get('/', 'HomePageController@index')->name('homepage');
Route::get('sensordata/insert', 'SensordataController@store')->name('sensor_store');

Auth::routes();

Route::get('home', 'HomeController@index')->name('home');
Route::get('maintenances', 'MaintenanceController@index')->name('maintenances');
Route::get('projects', 'ProjectsController@index')->name('projects');