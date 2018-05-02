<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Course;

class TestController extends Controller
{
    public function welcome()
    {
    	$courses = Course::all();
    	return view('welcome')->with(compact('courses'));
    }
}
