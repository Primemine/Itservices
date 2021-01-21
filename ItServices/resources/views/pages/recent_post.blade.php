<div class="grid grid-cols-1 sm:grid-cols-3 md:grid-cols-3 lg:grid-cols-4 xl:grid-cols-4 gap-2">
    @foreach(\App\Post::orderBy('created_at','desc')->take(4)->get() as $post)
        <div class="card shadow-md  hover:shadow-lg">
            <div class="card-body">
                <div class="">
                    <img class="w-full object-cover" src="{{asset('/storage/net/'.$post->image)}}">
                </div>
                <div class="pt-2">
                    <p class="font-weight-bold ">{{$post->post_name}}</p>
                </div>
                <div class=""><b>viewers</b> &nbsp;{{visits($post)->count()}}</div>
                <a href={{url('posts',$post->slug)}}>read more</a>
            </div>
        </div>
    @endforeach
</div>

