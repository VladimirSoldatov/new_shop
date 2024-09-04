<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PhotoController extends Controller
{
      function index()
	{
		return view('photo.index');
	}
}
