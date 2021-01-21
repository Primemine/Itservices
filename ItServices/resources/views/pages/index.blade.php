@extends('layouts.app')

@section('content')
    <div class="mb-0 border-radius-0">
    <!--img src="{{asset('/storage/net/banner2.jpg')}}"-->
        <div id="banner-area" class="banner-area">
            <div class="banner-text">
                <div class="container">
                    <div class="row">
                        <div class="col-xs-12">
                            <div class="banner-heading ">
                                <h1 class="banner-title pl-5">ItPack</h1>
                                <div class="breadcrumb pl-5">
                                    <!--li>Home</li>
                                    <li>Services</li-->
                                    <a href="#" class="btn btn-outline-warning btn-group-lg text-center">Contact us</a>
                                </div>
                            </div>
                        </div><!-- Col end -->
                    </div><!-- Row end -->
                </div><!-- Container end -->
            </div><!-- Banner text end -->
        </div><!-- Banner area end -->
    </div>
    <div class="bg-white border-bottom">
        <div class="container">
            <div class="row pt-5">
                <div class="col-md-9">
                    <h4>
                        <p>We provide transformative solutions by leveraging our extensive
                            consulting team comprised of project managers, workplace technology
                            experts, infrastructure engineers, cabling designers and Revit/CAD drafters.
                        </p>
                        <h1>description</h1>
                    </h4>
                </div>
                <div class="col-md-3">
                    <h4>
                        <p>We provide transformative solutions by leveraging our extensive
                            consulting team comprised of project managers, workplace technology
                        </p>
                        <h1>contacts</h1>
                    </h4>
                </div>
            </div>
            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-2">

                @foreach($services as $service)
                    <div class="card  hover:shadow-lg  border-none mt-5 mb-5" >
                        <div class="card-body">
                            <div class="">
                                <img class="mx-auto" src="{{asset('/storage/net/'.$service->image)}}">
                            </div>
                            <div class="pt-3">
                                <p class="font-weight-bold text-center">{{$service->service_name}}</p>
                            </div>
                            <div class="text-center">
                                <a style="color: #3b5998" href="{{url('pages',$service->slug)}}">Learn more </a>
                            </div>
                            <div class="ml-5 pt-3">
                                <ul style="list-style-type: disc;line-height: 1.75rem">
                                    <li>{{$service->view_point1}}</li>
                                    <li>{{$service->view_point2}}</li>
                                    <li>{{$service->view_point3}}</li>

                                </ul>
                            </div>
                        </div>
                    </div>
                @endforeach



            </div>
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
    </div>
@endsection
