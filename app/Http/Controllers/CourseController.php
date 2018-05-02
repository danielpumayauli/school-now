<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Course;

class CourseController extends Controller
{
    public function show($id){
    	$course = Course::find($id);
    	//$images = $product->images;
    	
    	//Dividir la colección de imágenes en 2 grupos
    	
    	// $imagesLeft = collect();
    	// $imagesRight = collect();
    	// foreach ($images as $key => $image) {
    	// 	if($key%2==0)
    	// 		$imagesLeft->push($image);
    	// 	else
    	// 		$imagesRight->push($image);
    	// }


        return view('courses.show')->with(compact('course'));
    }
}
