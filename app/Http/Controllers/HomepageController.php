<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Khill\Lavacharts\Lavacharts;

class HomepageController extends Controller
{
     public function index()
    {
    	// Page principale du projet

    	// Retrouver les températures des dernières 24 heures
    	$datas = \App\Sensordata::ShowLast24h()->get();

        return view('homepage',compact('datas'));
    }
}
