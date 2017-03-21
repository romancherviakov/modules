<?php

namespace App\Modules\User\Controllers;

use App\Http\Controllers\Controller;

class IndexController extends Controller
{
    public function index()
    {
        return view('User::user');
    }
}