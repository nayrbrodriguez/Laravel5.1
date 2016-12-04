<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/
//1 routing homepage (/) with array
// Route::get('/', function () {				
// 	$header = ['bryan','rodriguez','eslabra'];
//     return view('welcome', compact('header'));
// });

//2 routing about/blahblah return what you insert with blahblah 1st argument
// Route::get('about/{link}', function($programmers){		
// 		return "About Programmers $programmers";
// });



// Route::get('/','Pagescontroller@home'); //3 Routing the controller/function

// Route::get('about','Pagescontroller@about'); //4 Routing the controller/function

//5 returning whats the URL of the page
 Route::get('about/directions', array('as' => 'asd', function(){
 		$URL = URL::route('asd');
 		return "The {$URL}";
 }));

// 6 redirecting to the existing page route 
// Route::get('menu', function(){
// 	return Redirect::to ('/');
// 	// return Redirect::Route('/'); 

// });

//7 route with Middleware
// Route::get('menu', array('middleware' => 'auth.basic'), function(){
// 	return view('welcome');

// });