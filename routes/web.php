<?php

use Illuminate\Support\Facades\Route;

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


Auth::routes();

Route::get('/', 'MainController@index')->name('main');

Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});


// years
Route::get('/years2011', 'YearsController@years2011')->name('main11');
Route::get('/years2011/telekom_hit', 'YearsController@telekom_hit_2011');
Route::get('/years2011/telekom_idea', 'YearsController@telekom_idea_2011');

Route::get('/years2012', 'YearsController@years2012')->name('main12');
Route::get('/years2012/telekom_hit', 'YearsController@telekom_hit_2012');
Route::get('/years2012/telekom_idea', 'YearsController@telekom_idea_2012');

Route::get('/years2013', 'YearsController@years2013')->name('main13');
Route::get('/years2013/telekom_hit', 'YearsController@telekom_hit_2013');
Route::get('/years2013/telekom_idea', 'YearsController@telekom_idea_2013');

Route::get('/years2014', 'YearsController@years2014')->name('main14');
Route::get('/years2014/telekom_hit', 'YearsController@telekom_hit_2014');
Route::get('/years2014/telekom_idea', 'YearsController@telekom_idea_2014');
Route::get('/years2014/telekom_unior', 'YearsController@telekom_unior_2014');

Route::get('/years2015', 'YearsController@years2015')->name('main15');
Route::get('/years2015/telekom_idea_2015', 'YearsController@telekom_idea_2015');
Route::get('/years2015/telekom_hit_2015', 'YearsController@telekom_hit_2015');
Route::get('/years2015/telekom_it_2015', 'YearsController@telekom_it_2015');
Route::get('/years2015/telekom_legal_2015', 'YearsController@telekom_legal_2015');
Route::get('/years2015/telekom_belarus_2015', 'YearsController@telekom_belarus_2015');
Route::get('/years2015/telekom_unior_2015', 'YearsController@telekom_unior_2015');
Route::get('/years2015/telekom_center_2015', 'YearsController@telekom_center_2015');




Route::get('/years2016', 'YearsController@years2016')->name('main15');
Route::get('/years2017', 'YearsController@years2017')->name('main17');
Route::get('/years2018', 'YearsController@years2018')->name('main18');
Route::get('/years2019', 'YearsController@years2019')->name('main19');
Route::get('/years2020', 'YearsController@years2020')->name('main20');