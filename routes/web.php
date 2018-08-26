<?php

use App\Topics;

Route::get('/subscribe', function () {
	$topics= App\Topics::all();

    return view('subscribe', compact('topics'));
});

Route::get('/thanks', function () {
	$topics= App\Topics::all();
	return view('thanks', compact('topics'));
});

Route::get('/', function () {
	$topics= App\Topics::all();
    return view('home', compact('topics'));
});

Route::get('/categories', function () {
	$topics= Topics::all();
 	return view('categories.categories', compact('topics'));
});

Route::get('/categories/{topics}', function ($topic) {
   
    // dd($topics);

	$topics= Topics::all();
	// $id= Topics::pluck('topic');
	$id = DB::table('topics')->find($topic);


 	return view('categories.topic', compact('topics', 'id'));
});
