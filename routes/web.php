<?php
Route::get('/','User\IndexController@index');
Route::group(['prefix' => 'user'],function () {
    Route::get('about','User\AboutController@index');
    // Route::get('gallery','User\GalleryController@index');
    // Route::get('blogs','User\AllBlogController@index');
    // Route::get('blog','User\SingleBlogController@index');
    // Route::get('place','User\PlacesController@index');
    Route::get('contact','User\ContactController@index');
});
Route::group(['prefix' => 'admin'],function () {
    Route::get('dashboard','Admin\DashboardController@index');
    
    /*----------------- Location--------------- */
    Route::get('all-location','Admin\LocationController@index');
    Route::get('createlocation','Admin\LocationController@create');
    Route::post('storelocation','Admin\LocationController@store');
    Route::get('update_pagelocation/{id}','Admin\LocationController@update_page');
    Route::post('update_pagelocation','Admin\LocationController@update');
    Route::get('deletelocation/{id}','Admin\LocationController@delete');
    /*----------------- End Location--------------- */
    
    /*--------------Blog Category-------------*/
    Route::get('all-BlogCategory','Admin\BlogCategoryController@index');
    Route::get('createBlogCategory','Admin\BlogCategoryController@create');
    Route::post('storeBlogCategory','Admin\BlogCategoryController@store');
    Route::get('deleteBlogCategory/{id}','Admin\BlogCategoryController@delete');
    Route::get('update_pageBlogCategory/{id}','Admin\BlogCategoryController@update_page');
    Route::post('updateBlogCategory','Admin\BlogCategoryController@update');
    /*-------------- End Blog Category-------------*/

    /*--------------Blog Post-------------*/
    Route::get('all-BlogPost','Admin\BlogPostController@index');
    Route::get('createBlogPost','Admin\BlogPostController@create');
    Route::post('storeBlogPost','Admin\BlogPostController@store');
    Route::get('deleteBlogPost/{id}','Admin\BlogPostController@delete');
    Route::get('update_pageBlogPost/{id}','Admin\BlogPostController@update_page');
    Route::post('updateBlogPost','Admin\BlogPostController@update');
    /*-------------- End Blog Post-------------*/
});