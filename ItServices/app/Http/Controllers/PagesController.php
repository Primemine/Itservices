<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Servirce;
use App\Post;


class PagesController extends Controller
{
    public function __construct()
    {

        $this->middleware('auth', ["except"=>['index','show','list','articles']]);
    }

    /*
     * for showing all the post at the landing page
     */
    public function index(){
        $services =Servirce::all();
        $post=Post::orderBy('created_at','desc')->take(4)->get();
        return view('pages/index')->with([
            'services'=>$services ,
            'post'=>$post,
        ]);
    }

    /*
     * for showing a one post
     */
    public function show($slug){
        $service=Servirce::where('slug', $slug)->firstOrFail();
        $posts=Post::orderBy('created_at','desc')->take(4)->get();
        return view('pages.show')->with([
            'service'=>$service,
            'posts'=>$posts,
        ]);
    }
    /*
     * for articles
     */
    public function articles(){
        $posts=Post::all();
        return view('pages.articles')->with('posts',$posts);
    }

}
