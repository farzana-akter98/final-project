<?php
Route::get('/','User\IndexController@index');
Route::group(['prefix' => 'user'],function () {
    Route::get('about','User\AboutController@index');
    Route::get('gallery','User\GalleryController@index');
    // Route::get('blogs','User\AllBlogController@index');
    // Route::get('blog','User\SingleBlogController@index');
    Route::get('place','User\PlaceController@index');
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
    Route::get('all-blogcategory','Admin\BlogCategoryController@index');
    Route::get('createblogcategory','Admin\BlogCategoryController@create');
    Route::post('storeblogcategory','Admin\BlogCategoryController@store');
    Route::get('deleteblogcategory/{id}','Admin\BlogCategoryController@delete');
    Route::get('update_pageblogcategory/{id}','Admin\BlogCategoryController@update_page');
    Route::post('updateblogcategory','Admin\BlogCategoryController@update');
    /*-------------- End Blog Category-------------*/

    /*--------------Blog Post-------------*/
    Route::get('all-blogpost','Admin\BlogPostController@index');
    Route::get('createblogpost','Admin\BlogPostController@create');
    Route::post('storeblogpost','Admin\BlogPostController@store');
    Route::get('deleteblogpost/{id}','Admin\BlogPostController@delete');
    Route::get('update_pageblogpost/{id}','Admin\BlogPostController@update_page');
    Route::post('updateblogpost','Admin\BlogPostController@update');
    /*-------------- End Blog Post-------------*/

    /*-------------- Hotel -------------*/
    Route::get('all-hotel','Admin\HotelController@index');
    Route::get('createhotel','Admin\HotelController@create');
    Route::post('storehotel','Admin\HotelController@store');
    Route::get('deletehotel/{id}','Admin\HotelController@delete');
    Route::get('update_pagehotel/{id}','Admin\HotelController@update_page');
    Route::post('updatehotel','Admin\HotelController@update');
    /*-------------- End Hotel -------------*/

    /*-------------- Shopping Mall -------------*/
    Route::get('all-mall','Admin\ShoppingMallController@index');
    Route::get('createmall','Admin\ShoppingMallController@create');
    Route::post('storemall','Admin\ShoppingMallController@store');
    Route::get('deletemall/{id}','Admin\ShoppingMallController@delete');
    Route::get('update_pagemall/{id}','Admin\ShoppingMallController@update_page');
    Route::post('updatemall','Admin\ShoppingMallController@update');
    /*-------------- End Shopping Mall -------------*/

    /*-------------- Grocery Shop -------------*/
    Route::get('all-grocery','Admin\GroceryShopController@index');
    Route::get('creategrocery','Admin\GroceryShopController@create');
    Route::post('storegrocery','Admin\GroceryShopController@store');
    Route::get('deletegrocery/{id}','Admin\GroceryShopController@delete');
    Route::get('update_pagegrocery/{id}','Admin\GroceryShopController@update_page');
    Route::post('updategrocery','Admin\GroceryShopController@update');
    /*-------------- End Grocery Shop -------------*/



    /*-------------- Famous Cloth -------------*/
    Route::get('all-fcloth','Admin\FamousClothController@index');
    Route::get('createfcloth','Admin\FamousClothController@create');
    Route::post('storefcloth','Admin\FamousClothController@store');
    Route::get('deletefcloth/{id}','Admin\FamousClothController@delete');
    Route::get('update_pagefcloth/{id}','Admin\FamousClothController@update_page');
    Route::post('updatefcloth','Admin\FamousClothController@update');
    /*-------------- End Famous Cloth -------------*/


    /*-------------- Traditional Aliment -------------*/
    Route::get('all-tfood','Admin\TraditionalAlimentController@index');
    Route::get('createtfood','Admin\TraditionalAlimentController@create');
    Route::post('storetfood','Admin\TraditionalAlimentController@store');
    Route::get('deletetfood/{id}','Admin\TraditionalAlimentController@delete');
    Route::get('update_pagetfood/{id}','Admin\TraditionalAlimentController@update_page');
    Route::post('updatetfood','Admin\TraditionalAlimentController@update');
    /*-------------- End Traditional Aliment -------------*/
});