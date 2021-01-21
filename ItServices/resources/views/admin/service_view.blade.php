@extends('layouts.admin')

@section('components')
    <div class="container">

        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0 text-dark">Service list</h1>
                    </div><!-- /.col -->

                </div><!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>
        <!-- /.content-header -->
        @if (session('status'))
            <div class="alert alert-success" role="alert">
                {{ session('status') }}

            </div>
        @endif
        @foreach($services as $service)
        <div class="card">
            <div class="card-header" >
                    {{$service->service_name}}
            </div>
            <div class="card-body">

                <img  src="{{asset('/storage/net/'.$service->image)}}"/>
                <br><br>
                {{$service->description}}
                <br><br>
                <ul>
                    <li>{{$service->view_point1}}</li>
                    <li>{{$service->view_point2}}</li>
                    <li>{{$service->view_point3}}</li>
                    <li>{{$service->view_point4}}</li>
                    <li>{{$service->view_point5}}</li>
                    <li>{{$service->view_point6}}</li>
                </ul>
            </div>
            <div class="card-footer" >
                {!!Form::open(["action" => ["AdminController@destroy",$service->id],"method"=>"POST" ,"class"=>"float-right"]) !!}
                {{Form::hidden("_method","DELETE")}}
                {{ Form::button('Delete service', ['type' => 'Delete', 'class' => 'btn btn-danger btn-md'] )  }}

                {!!Form::close()!!}
            </div>
        </div>
        @endforeach
        <nav>
            <ul class="pagination justify-content-center">
                {{$services->links()}}
            </ul>
        </nav>
    </div>
@endsection
