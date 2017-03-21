<?php

Route::get('/users', ['as' => 'users-general', 'uses' => 'App\Modules\User\Controllers\IndexController@index']);