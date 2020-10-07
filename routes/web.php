<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;


Route::get('/','Home\HomeController@index');;

Auth::routes();


Route::group(['prefix' => 'home'], function () {
    Route::group(['as' => 'home'], function () {
        Route::get('', 'HomeController@index')->name('.home');
        Route::get('blog', 'Blog\BlogController@insert')->name('.insertBlog');
        Route::get('listBlog', 'Blog\BlogController@index')->name('.listBlog');
    });
});

Route::group(['prefix' => 'blog'], function () {
    Route::group(['as' => 'blog'], function () {
        Route::post('insert', 'Blog\BlogController@create')->name('.create');
        Route::delete('{id}', 'Blog\BlogController@delete')->name('.delete');
    });
});
