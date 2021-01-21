@extends('layouts.admin')

@section('components')
    <div class="container">

        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0 text-dark">Post list</h1>
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
    @foreach( \App\Post::orderBy('created_at','desc')->get() as $post)
        <div class="card">
            <div class="card-header" style="background-color: #0e8ce4"></div>
            <div class="card-body">
                    <b>{{$post->post_name}}</b><br><br>
                <img  src="{{asset('/storage/net/'.$post->image)}}"/><br><br>
                <p>{{$post->description}}</p>
            </div>
            <div class="card-footer" style="background-color: #0e8ce4">
                {!!Form::open(["action" => ["PostsController@edit",$post->id],"method"=>"GET","class"=>"float-left"]) !!}
                {{ Form::button('Edit Post', ['type' => 'Edit', 'class' => 'btn btn-success btn-md'] )  }}
                {!!Form::close()!!}

                {!!Form::open(["action" => ["PostsController@destroy",$post->id],"method"=>"POST" ,"class"=>"float-right"]) !!}
                {{Form::hidden("_method","DELETE")}}
                {{ Form::button('Delete Post', ['type' => 'Delete', 'class' => 'btn btn-danger btn-md'] )  }}
                {!!Form::close()!!}
            </div>
        </div>
    @endforeach
        @include('sweetalert::alert')
        <nav>
            <ul class="pagination justify-content-center">

            </ul>
        </nav>
    </div>
@endsection
