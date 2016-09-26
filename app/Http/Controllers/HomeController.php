<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\User;
use Illuminate\Http\Request;
use App\Post;
use Auth;


class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $res=User::find(Auth::user()->id)->posts;
        return view('home',['posts'=> $res]);
    }

    public function upd(Request $request)
    {
        $post = new Post();
        $post->user_id = Auth::user()->id;
        $post->content = $request->s;
        $post->save();
        $res=User::find(Auth::user()->id)->posts;
        return view('home',['posts'=> $res]);
    }
}
