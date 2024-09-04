<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestController extends Controller
{
    function index()
	{
		$point = rand(0,100);
		$countries = array("Russia", "England", "Africa", "Europe");
		//return view('test.index',array('p1'=>$point, 'p2'=>$countries));
		return view('dashboard', array('page' => 'Main page'));
	}
}
