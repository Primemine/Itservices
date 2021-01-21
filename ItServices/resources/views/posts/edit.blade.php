@extends('layouts.admin')

@section('components')
    <div class="container pt-4 pb-4">
        <div class="max-w-lg rounded overflow-hidden shadow-sm bg-white">
            <div class="card-header ">
                <h3 class="font-weight: 700">Edit Post</h3>
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-9 offset-1">
                        {!! Form::open(["action"=>"PostsController@store","method"=>"POST","enctype"=>"multpart/form-data",'files'=> true]) !!}
                        <div class="form-group">
                            {!! Form::label('') !!}
                            {!! Form::text('post_name',$post->post_name,["class"=>"form-control","id"=>"service_name"]) !!}
                        </div>
                        <div class="form-group" style="width:200px;">
                            {{Form::label("")}}
                            <img src="{{asset('/storage/net/'.$post->image)}}">
                            {{Form::file("item_image",["class"=>"form-control"])}}

                        </div>
                        <div class="form-group">
                            {!! Form::label('Service description') !!}
                            {!! Form::textarea('description',$post->description,["id"=>"article-ckeditor","class"=>"form-control","id"=>"parent_id"]) !!}
                        </div>
                        {{Form::hidden("_method","PUT")}}
                        {{Form::submit("Submit",["class"=>"btn btn-success",'style'=>"float:right"])}}
                        {!! Form::close() !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
