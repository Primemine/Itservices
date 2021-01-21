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
                <h3 class="font-weight: 700">Create Service</h3>
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-9 offset-1">
                        {!! Form::open(["action"=>"AdminController@store","method"=>"POST","enctype"=>"multpart/form-data",'files'=> true]) !!}
                            <div class="form-group">
                                {!! Form::label('Service name') !!}
                                {!! Form::text('service_name','',["class"=>"form-control","id"=>"service_name"]) !!}
                            </div>
                        <div class="form-group">
                            <div class="file-loading">
                                <input id="file-0d" class="file" type="file" data-theme="fas" name="image">
                            </div>
                        </div>
                        <div class="form-group">
                                {!! Form::label('Service description') !!}
                                {!! Form::textarea('description','',["id"=>"editor","class"=>"form-control"]) !!}

                            <div class="card-body pad">
                            <h3>View Points of the service</h3>
                            <div class="form-group">
                                {!! Form::label('View point description') !!}
                                {!! Form::text('view_point1','',["class"=>"form-control","id"=>"view_point1"]) !!}
                            </div>
                            <div class="form-group">
                                {!! Form::label('View point description') !!}
                                {!! Form::text('view_point2','',["class"=>"form-control","id"=>"view_point2"]) !!}
                            </div>
                            <div class="form-group">
                                {!! Form::label('View point description') !!}
                                {!! Form::text('view_point3','',["class"=>"form-control","id"=>"view_point3"]) !!}
                            </div>
                            <div class="form-group">
                                {!! Form::label('View point description') !!}
                                {!! Form::text('view_point4','',["class"=>"form-control","id"=>"view_point4"]) !!}
                            </div>
                            <div class="form-group">
                                    {!! Form::label('View point description') !!}
                                    {!! Form::text('view_point5','',["class"=>"form-control","id"=>"view_point5"]) !!}
                                </div>
                            <div class="form-group">
                                    {!! Form::label('View point description') !!}
                                    {!! Form::text('view_point6','',["class"=>"form-control","id"=>"view_point6"]) !!}
                            </div>
                            <div class="form-group">
                            {{Form::submit("add Service",["class"=>"btn btn-success btn-group-sm float-right mt-4"])}}
                            </div>
                        {!! Form::close() !!}

                    </div>
                </div>
            </div>
        </div>

    </div>

@endsection
