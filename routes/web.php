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



    Broadcast::routes();


    $this->put('notifications-all-read', 'NotificationController@markAllAsRead');

    $this->put('notifications-read', 'NotificationController@markAsRead');

    $this->get('notifications', 'NotificationController@notifications')->name('notifications');

    $this->post('comment', 'Posts\CommentController@store')->name('comment.store');
    $this->resource('posts', 'Posts\PostController');

    Route::get('/', function () {
        return view('welcome');
    });




Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
