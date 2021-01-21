<?php

namespace App\Http\Controllers;

use App\Post;
use Cviebrock\EloquentSluggable\Services\SlugService;
use Image;
use Illuminate\Http\Request;
use UxWeb\SweetAlert\SweetAlert;
use Laravelista\Comments\Commentable;



class PostsController extends Controller



{

    public function __construct()
    {

        $this->middleware('auth', ["except"=>['index','show',]]);
    }



    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index()
    {
        $posts =Post::orderBy('updated_at','desc')->paginate(10);
        return view('posts.index')->with([
            'posts'=>$posts,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function create()
    {
        return view('posts/create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\View\View
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(Request $request)
    {

        $this->validate($request,[
            'name'=>'required',
            'email'=>'required',
            'phone_number'=>'required',
            'message'=>'required',
            'slug'=>'nullValue'
        ]);
        $post=new Post;
        $post->name=$request->input('name');
        $post->email=$request->input('email');
        $post->phone_number=$request->input('phone_number');
        $post->message=$request->input('message');
        $post->slug=SlugService::createSlug(Post::class,'slug',$request->message);
        $post->save();
        return view('/');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function show($slug)
    {
        $post=Post::where('slug',$slug)->firstOrFail();
        return view('posts.show')->with('post',$post);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function edit($id)
    {
        $post =Post::find($id);
        return view('posts.edit')->with('post',$post);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function update(Request $request, $id)
    {
        $this->validate($request,[
            'post_name'=>'required',
            'image'=>'required',
            'description'=>'required',

        ]);

        if ($request->hasFile('image')) {
            $originalImage= $request->file('image');
            $thumbnailImage = Image::make($originalImage);

            // Define upload path
            $thumbnailPath = public_path('/storage/net/');
            $originalPath = public_path('/storage/');

            // Save Orginal Image
            $thumbnailImage->save($originalPath.time().$originalImage->getClientOriginalName());

            // Resize and save image
            $thumbnailImage->resize(259,194,function($constraint){
                $constraint->aspectRatio();
            });
            $thumbnailImage->save($thumbnailPath.time().$originalImage->getClientOriginalName());
        }

        $post=new Post;
        $post->post_name=$request->input('post_name');
        $post->image=time().$originalImage->getClientOriginalName();
        $post->description=$request->input('description');


        $post->save();

        return view('posts.index')->with('success','Post created');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function destroy($id)
    {
        SweetAlert::success('Success Message', 'post Deleted');

        $post=Post::find($id);
        $post->delete();
        return view('posts.index');
    }
}
