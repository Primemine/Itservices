@extends('layouts.admin')

@section('components')
    @if (session('status'))
        <div class="alert alert-success" role="alert">
            {{ session('status') }}

        </div>
    @endif

    <div class="container pt-4 pb-4">
        <div class="max-w-lg rounded overflow-hidden shadow-sm bg-white">
            <div class="card-header ">
                <h3 class="font-weight: 700">Create Post</h3>
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-9 offset-1">
                        {!! Form::open(["action"=>"PostsController@store","method"=>"POST","enctype"=>"multpart/form-data",'files'=> true]) !!}
                        <div class="form-group">
                            {!! Form::label('title','Service name') !!}
                            {!! Form::text('post_name','',["class"=>"form-control","id"=>"post_name"]) !!}
                        </div>
                        <div class="form-group">
                            <div class="file-loading">
                                <input id="file-0d" class="file" type="file" data-theme="fas" name="image">
                            </div>
                        </div>
                        <div class="form-group">
                            {!! Form::label('title','Service description') !!}
                            {!! Form::textarea('description','',["id"=>"article-ckeditor","class"=>"form-control","id"=>"description"]) !!}
                        </div>

                        <div class="form-group">
                            {{Form::submit("add Post",["class"=>"btn btn-success btn-group-sm float-right mt-4"])}}
                        </div>
                        {!! Form::close() !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
