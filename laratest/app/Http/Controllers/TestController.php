<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestController extends Controller
{
   	function index()
	{
		$r = rand(0,1000); //just a random value //from 0 to 999
		$countries = array("Argentina","Belgiun","Canada","Denmark");
		//an array
		return view('test.index',array('p1'=>$r,'p2'=>$countries));
	}
}
