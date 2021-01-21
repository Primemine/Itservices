<?php

namespace App\Http\Controllers;

use App\Post;
use App\Servirce;
use App\Visitor;
use Cviebrock\EloquentSluggable\Services\SlugService;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Image;
use SweetAlert;


class AdminController extends Controller
{
   public function __construct()
   {

       $this->middleware('auth', ["except"=>[]]);
    }


    /*
     * viewing all the post
     */
    public function index(){
        return view('admin.index');
    }
    /*
     * for creating service
     */
    public function service(){
        return view('admin.service');
    }

    /*
     * for viewing all the services
     */
    public function list(){
        $services=Servirce::orderBy('created_at','desc')->paginate(10);
        return view('admin.service_view')->with([
            'services'=>$services
        ]);
    }

    /*
     * for viewing all the users
     */
    public function users(){
        return view('admin.users');
    }
    /*
     * for storing the services in database
     */
    public function store(Request $request){
        $this->validate($request,[
            'service_name'=>'required',
            'image'=>'required',
            'description'=>'required',
            'view_point1'=>'nullable',
            'view_point2'=>'nullable',
            'view_point3'=>'nullable',
            'view_point4'=>'nullable',
            'view_point5'=>'nullable',
            'view_point6'=>'nullable',
            'slug'=>'nullValue'
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
            $thumbnailImage->resize(64,64,function($constraint){
                $constraint->aspectRatio();
            });
            $thumbnailImage->save($thumbnailPath.time().$originalImage->getClientOriginalName());
        }

        $service=new Servirce;
        $service->service_name=$request->input('service_name');
        $service->image=time().$originalImage->getClientOriginalName();
        $service->description=$request->input('description');
        $service->view_point1=$request->input('view_point1');
        $service->view_point2=$request->input('view_point2');
        $service->view_point3=$request->input('view_point3');
        $service->view_point4=$request->input('view_point4');
        $service->view_point5=$request->input('view_point5');
        $service->view_point6=$request->input('view_point6');
        $service->slug=SlugService::createSlug(Servirce::class,'slug',$request->service_name);


        $service->save();

        return view('admin/service_view');
    }
    /*
     * for deleting a service
     */
    public function destroy($id){
        $service=Servirce::find($id);
        $service->delete();
        return view('admin/service');//->with('services',$services);
    }
    /*
     * showing individual service
     */
    public function show($id){
        $service=Servirce::find($id);
        return view('admin.show');
    }

    /*
     * for saving user comments
     */

}

