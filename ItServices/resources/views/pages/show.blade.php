@extends('layouts.app')

@section('content')
    <div class="mb-0 border-radius-0">
        <div id="index-area" class="index-area">
            <div class="banner-text">
                <div class="container">
                    <div class="row">
                        <div class="col-xs-12">
                            <div class="banner-heading ">
                                <h1 class="category-title pl-5">{{$service->service_name}}</h1>
                            </div>
                        </div><!-- Col end -->
                    </div><!-- Row end -->
                </div><!-- Container end -->
            </div><!-- Banner text end -->
        </div><!-- Banner area end -->
    </div>

    <div class="bg-white pb-5">
        <div class="container">
            <div class="row">
                <div class="col-md-9 offset-3">
                    <h5>
                        <p>{{$service->description}}</p>
                    </h5>
                    <h5>
                        <p>{{$service->view_point1}}</p>
                        <p>{{$service->view_point2}}</p>
                        <p>{{$service->view_point3}}</p>
                        <p>{{$service->view_point4}}</p>
                        <p>{{$service->view_point5}}</p>
                        <p>{{$service->view_point6}}</p>
                    </h5>
                </div>
            </div>
        </div>
    </div>
@endsection
