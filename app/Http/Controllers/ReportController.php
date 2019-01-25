<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class ReportController extends Controller
{
    public function index()
    {
    	// dd(Auth::user());
    	return view('report/index');
    }
}
