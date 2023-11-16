<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index(){
        if(fullAccess())
        return view('adminDashboard');
    else
        return view('dashboard');
    }
}
