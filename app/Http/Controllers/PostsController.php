<?php

namespace App\Http\Controllers;

use App\Posts;

use DB;

class PostsController extends Controller
{
    
    public function home()
    {
		$topics= Posts::all();
		return view('home', compact('topics'));;
    }	

    public function subscribe()
    {
		$topics= Posts::all();

	    return view('subscribe', compact('topics'));
    }

    public function thanks()
    {
		$topics= Posts::all();
		return view('thanks', compact('topics'));
    }

    public function create()
    {
        $topics= Posts::all();
        return view('create', compact('topics'));;
    }   

    public function categories()
    {
    	$topics= Posts::all();
 		return view('categories.categories', compact('topics'));
    }

    public function articles()
    {
        $topics= Posts::all();
        return view('articles.articles', compact('topics'));
    }

    public function id($topic)
    {
		
		$topics= Posts::all();
		// $id= Posts::pluck('topic');
		$id= DB::table('posts')->find($topic);
	    // dd($topics);

	 	return view('categories.topic', compact('id', 'topics'));
    }

    public function store()
    {
        Posts::create([
            'title' => request('title'),
            'topic' => request('topic'),
            'body' => request('body')
        ]);

        //Redirect

        return redirect('/');
    }

}
