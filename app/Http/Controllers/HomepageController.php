<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Khill\Lavacharts\Lavacharts;

class HomepageController extends Controller
{
     public function index()
    {
    	// Page principale du projet
        return view('homepage');
    }
}
