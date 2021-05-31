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


Auth::routes(['verify' => true]);

//pages
Route::get('/', 'MainController@index')->name('main');
Route::get('/statistics', 'MainController@stats')->name('stats');
Route::get('/allspeakers', 'MainController@allspeakers');
Route::get('/photos', 'MainController@photos');
Route::get('/online', 'MainController@online')->middleware('verified');

//profile
Route::get('/home', 'HomeController@index')->name('home')->middleware('verified');
Route::get('/setting_profile/{id}', 'UserController@setting_profile')->name('setting_user')->middleware('verified');
Route::put('/setting_profile/{id}', 'UserController@updateCurrentUser')->name('updateCurrentUser')->middleware('verified');
Route::post('/update_user_avatar', 'UserController@updateCurrentUserAvatar')->name('updateCurrentUserAvatar')->middleware('verified');
//AllUsers
Route::get('/allUsers', 'UserController@allUsers')->name('allUsers')->middleware('verified');
Route::get('/allUsers/show/{id}', 'UserController@allUsersShow')->name('allUserShow')->middleware('verified');
Route::get('/allUsers/edit/{id}', 'UserController@allUsersShowEdit')->name('allUsersShowEdit')->middleware('verified');
Route::put('/allUsers/edit/{id}', 'UserController@allUsersEdit')->name('allUsersEdit')->middleware('verified');
Route::delete('/allUsers/delete/{id}', 'UserController@allUsersDelete')->name('allUsersDelete')->middleware('verified');
Route::get('/search', 'UserController@search');
//project 
Route::resource('projects','ProjectController')->middleware('verified');
Route::post('/createProject', 'ProjectController@createProject')->name('createProject')->middleware('verified');
Route::post('/updateProject', 'ProjectController@updateProject')->name('updateProject')->middleware('verified');
Route::get('/showProject', 'ProjectController@showProject')->name('showProject')->middleware('verified');
Route::post('/sendProject', 'ProjectController@sendProject')->name('sendProject')->middleware('verified');
Route::put('project/draftProject/{id}', 'ProjectController@draftProject')->name('draftProject')->middleware('verified');
Route::put('project/accepted/{id}', 'ProjectController@acceptedProject')->name('acceptedProject')->middleware('verified');
Route::post('project/notificationProject/{id}', 'ProjectController@notificationProject')->name('notificationProject')->middleware('verified');
//experts
Route::put('/getRoleUser', 'ExpertController@getRoleUser')->name('getRoleUser')->middleware('verified');
Route::get('/expertsProject', 'ExpertController@expertsProject')->name('expertsProject')->middleware('verified');
Route::get('/expertsProjectView', 'ExpertController@expertsProjectView')->name('expertsProjectView')->middleware('verified');
Route::get('/expertsProjectViewProject', 'ExpertController@expertsProjectViewProject')->name('expertsProjectViewProject')->middleware('verified');
Route::post('/projectLink', 'ExpertController@projectLink')->name('projectLink')->middleware('verified');
Route::get('/projectLinkView', 'ExpertController@projectLinkView')->name('projectLinkView')->middleware('verified');
Route::get('/expertpageviews/{id}', 'ExpertController@expertpageviews')->name('expertpageviews')->middleware('verified');
Route::post('/expertpageviewsDeleted/{id}', 'ExpertController@expertpageviewsDeleted')->name('expertpageviewsDeleted')->middleware('verified');
Route::put('/expertRatings/{id}', 'ExpertController@expertRatings')->name('expertRatings')->middleware('verified');
//locale
Route::get('/locale/{locale}', function ($locale) {
    Session::put('locale',$locale);
    return redirect()-> back();
});

//voyager
Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});

//news
Route::get('/api/news', 'MainController@news');
Route::get('/news{id}', 'MainController@newssolo');

//mail
Route::get('/exportUser', 'ExportController@exportUser');
Route::get('/exportProject', 'ExportController@exportProject');

Route::get('/api/allUserLogo', 'UserController@allUserLogo');
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
Route::get('/years2016/telekom_b2b_2016', 'YearsController@telekom_b2b_2016');
Route::get('/years2016/telekom_idea_2016', 'YearsController@telekom_idea_2016');
Route::get('/years2016/telekom_ideaunior_2016', 'YearsController@telekom_ideaunior_2016');
Route::get('/years2016/telekom_hackaton_2016', 'YearsController@telekom_hackaton_2016');
Route::get('/years2016/telekom_ideacenter_2016', 'YearsController@telekom_ideacenter_2016');
Route::get('/years2016/telekom_legal_2016', 'YearsController@telekom_legal_2016');


Route::get('/years2017', 'YearsController@years2017')->name('main17');
Route::get('/years2017/telekom_rostov_2017', 'YearsController@telekom_rostov_2017');
Route::get('/years2017/telekom_yarik_2017', 'YearsController@telekom_yarik_2017');
Route::get('/years2017/telekom_spirit_2017', 'YearsController@telekom_spirit_2017');
Route::get('/years2017/telekom_cup_2017', 'YearsController@telekom_cup_2017');
Route::get('/years2017/telekom_idea_2017', 'YearsController@telekom_idea_2017');


Route::get('/years2018', 'YearsController@years2018')->name('main18');
Route::get('/years2018/telekom_amur_2018', 'YearsController@telekom_amur_2018');
Route::get('/years2018/telekom_hub_2018', 'YearsController@telekom_hub_2018');
Route::get('/years2018/telekom_unior_2018', 'YearsController@telekom_unior_2018');
Route::get('/years2018/telekom_idea_2018', 'YearsController@telekom_idea_2018');
Route::get('/years2018/telekom_hack_2018', 'YearsController@telekom_hack_2018');
Route::get('/years2018/telekom_it_2018', 'YearsController@telekom_it_2018');


Route::get('/years2019', 'YearsController@years2019')->name('main19');
Route::get('/years2019/telekom_si_2019', 'YearsController@telekom_si_2019');
Route::get('/years2019/telekom_school_2019', 'YearsController@telekom_school_2019');
Route::get('/years2019/telekom_cup_2019', 'YearsController@telekom_cup_2019');
Route::get('/years2019/telekom_raise_2019', 'YearsController@telekom_raise_2019');


Route::get('/years2020', 'YearsController@years2020')->name('main20');
Route::get('/years2020/telekom_si_2020', 'YearsController@telekom_si_2020');
Route::get('/years2020/regional_it_hack_2020', 'YearsController@regional_it_hack_2020');
Route::get('/years2020/it_start_2020', 'YearsController@it_start_2020');


Route::get('/social_idea_2021', 'YearsController@social_idea_2021')->name('main21');
Route::get('/years2021/it_start_2021', 'YearsController@it_start_2021');

//oldnews
Route::get('/oldnews', 'MainController@oldnews');
Route::get('/oldnews_in_{id}', 'MainController@oldnews_in');