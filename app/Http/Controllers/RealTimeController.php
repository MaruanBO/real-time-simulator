<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RealTimeController extends Controller
{
    
	public function getIndex(){

		return view('index');
	}

	public function getSimulator(){

		return view('simulator/simulator');
	}
}
