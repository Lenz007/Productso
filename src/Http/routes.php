<?php

//Route::group(['middleware' => ['web']], function () {

	//Route::get('category/{slug?}', 'PrsoCategoryController@show');


	Route::get('category/{slug?}', 'Lenz007\productso\Http\Controllers\PrsoCategoryController@show');
//});

