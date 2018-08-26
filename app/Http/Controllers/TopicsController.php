<?php

namespace App\Http\Controllers;

use App\Topics;

use DB;

class TopicsController extends Controller
{
    
    public function home()
    {
		$topics= Topics::all();
		return view('home', compact('topics'));;
    }	

    public function subscribe()
    {
		$topics= Topics::all();

	    return view('subscribe', compact('topics'));
    }

    public function thanks()
    {
		$topics= Topics::all();
		return view('thanks', compact('topics'));
    }

    public function categories()
    {
    	$topics= Topics::all();
 		return view('categories.categories', compact('topics'));
    }

    public function id($topic)
    {
		
		$topics= Topics::all();
		// $id= Topics::pluck('topic');
		$id= DB::table('topics')->find($topic);
	    // dd($topics);

	 	return view('categories.topic', compact('id', 'topics'));

    }
}
