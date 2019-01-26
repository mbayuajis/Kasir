<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class KasirController extends Controller
{
    public function index()
    {
    	return view('kasir/index');
    }

    public function belanjaan()
    {
    	return view('kasir/kasir');
    }
}
