<?php

Route::get('/employees', ['as' => 'employees-general', 'uses' => 'App\Modules\Employee\Controllers\IndexController@index']);