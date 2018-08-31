<?php

namespace App\Http\Controllers;

use App\Posts;

use DB;

class PostsController extends Controller
{
    /*

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

    public function confirm()
    {
        $topics= Posts::all();
        

        
        return view('confirm', compact('topics'));
    }

    public function id($topic)
    {
        
        $topics= Posts::all();
        // $id= Posts::pluck('topic');
        $id= DB::table('posts')->find($topic);
        // dd($topics);

        return view('articles.article', compact('id', 'topics'));
    }







    */

    public function articles()
    {
        $posts= Posts::all();
        return view('articles', compact('posts'));
    }

    public function index(Posts $posts)
    {
       
        return view('index', compact('posts'));;
    } 
    
    public function create()
    {
      
        $topics= Posts::all();
        return view('create', compact('topics'));;
    }   


    public function store()
    {
        $this->validate( request(), [
                'title' => 'required|min:2',
                'topic' => 'required|min:2',
                'body' => 'required|min:2'
            ]);

        Posts::create([
            'title' => request('title'),
            'topic' => request('topic'),
            'body' => request('body')
        ]);

        //Redirect

        return redirect ('/');
    }

    public function show(Posts $post)

    {
        $posts=Posts::all();
        return view('posts.show', compact('post', 'posts'));
    }



     

}
