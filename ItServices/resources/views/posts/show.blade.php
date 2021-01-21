@extends('layouts.app')

@section('content')
    <div class="bg-white pt-5">
        <div class="container">
             <img class="w-full object-cover" src="{{asset('/storage/net/'.$post->image)}}">
            <br><br>
             <p class="font-weight-bold ">{{$post->post_name}}</p>
            <br><br>
            {{ $post->description }}
        </div>
    </div>
    <div class="recent articles mt-5">
        <div class="container">
            <div class="" style="display:inline-flex">
                <h2>Recent articles</h2>
                <a  style="float: right" href="{{url('pages/articles')}}">Read more</a>
            </div>
            @include('pages.recent_post')
        </div>
    </div>
@endsection
