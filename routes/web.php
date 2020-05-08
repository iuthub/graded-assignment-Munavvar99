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

Route::get('/', [
    'uses'=>'LandingPageController@getIndex',
    'as'=>'index'
]);

Route::get('/about', function () {
    return view('about',['rate'=>1234]);
});
Route::get('/privacy-policy', function () {
    return view('policy',['rate'=>1234]);
});

Route::get('/contact', [
    'uses'=>'FeedbackController@showForm',
    'as'=>'feedback.form'
]);
Route::get('/post/{id}',[
    'uses'=>'LandingPageController@getPost',
    'as'=>'post.get'
]);

Route::get('post/{id}/like', [
    'uses' => 'HomeController@getLikePost',
    'as' => 'post.like'
]);
Route::get('/category/{category}',[
    'uses'=>'LandingPageController@getCategory',
    'as'=>'category'
]);
Route::post('/contact',[
    'uses'=>'FeedbackController@saveFeedback',
    'as'=>'feedback.save'
]);

Auth::routes();

//Route::get('/home', 'HomeController@index')->name('home');
Route::group(['prefix' => 'home','middleware'=>['auth']],function(){
    Route::get('',[
        'uses'=>'HomeController@index',
        'as'=>'home.index'
    ]);

    Route::get('/succeed',[
        'uses'=>'HomeController@index',
        'as'=>'home.succeed'
    ]);

    Route::get('/rejected',[
        'uses'=>'HomeController@rejected',
        'as'=>'home.rejected'
    ]);

    Route::get('/waiting',[
        'uses'=>'HomeController@waiting',
        'as'=>'home.waiting'
    ]);

    Route::get('/create',[
        'uses'=>'HomeController@getUserCreate',
        'as'=>'home.create'
    ]);
    Route::post('/create',[
        'uses'=>'HomeController@postUserCreate',
        'as'=>'home.create'
    ]);


});

Route::prefix('admin')->group(function(){
    Route::get('/','AdminController@getAdmin')->name('admin.home');
    Route::get('/statics','AdminController@getStatistics')->name('admin.statics');
    Route::get('/accept/{id}','AdminController@acceptProduct')->name('admin.accept');
    Route::get('/reject/{id}','AdminController@rejectProduct')->name('admin.reject');
});

Route::get('/wishes',[
        'uses'=>'HomeController@getWishesList',
        'as'=>'home.wishes'
    ]);

    Route::get('/delete/{id}',[
        'uses'=>'HomeController@getUserDelete',
        'as'=>'home.delete'
    ]);
    Route::get('/wishes',[
        'uses'=>'HomeController@getWishesList',
        'as'=>'home.wishes'
    ]);
    Route::get('/wishes',[
        'uses'=>'HomeController@getWishesList',
        'as'=>'home.wishes'
    ]);


Route::get('/search/{key}', [
    'uses'=>'SearchController@showResultsPage',
    'as'=>'show.results'
]);
