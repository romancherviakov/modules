<?php

namespace App\Modules\Employee\Controllers;

use App\Http\Controllers\Controller;

class IndexController extends Controller
{
    public function index()
    {
        return view('Employee::employee');
    }
}