@extends('layouts.app')

@section('content')
    <div class="mb-0 border-radius-0">
        <div id="banner-area" class="banner-area">
            <div class="banner-text">
                <div class="container">
                    <div class="row">
                        <div class="col-xs-12">
                            <div class="banner-heading ">
                                <h1 class="banner-title pl-2" style="--font-family-monospace: 1%">aboTechnologies</h1>
                                <div class="breadcrumb pl-5">
                                    <a href="#" class="btn btn-outline-warning btn-group-lg text-center">Contact us</a>
                                </div>
                            </div>
                        </div><!-- Col end -->
                    </div><!-- Row end -->
                </div><!-- Container end -->
            </div><!-- Banner text end -->
        </div><!-- Banner area end -->
    </div>
    <div class="bg-white border-bottom pb-5">
        <div class="container">
               <div class="row pt-3">
                   <div class="col-md-10 offset-1">
                       <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-2 lg:grid-cols-4 xl:grid-cols-4 gap-2 pt-5">

                           @foreach($services as $service)
                               <div class="card  hover:shadow-lg  border-none" >
                                   <div class="card-body">
                                       <div class="">
                                           <img class="mx-auto" src="{{asset('/storage/net/'.$service->image)}}">
                                       </div>
                                       <div class="pt-3 text-center">
                                           <h2 class="service_name tracking-wider font-weight-bold text-2xl font-sans">{{ $service->service_name }}</h2>
                                       </div>
                                       <div class="text-center">
                                           <a style="color: #3b5998" href="{{url('pages',$service->slug)}}">Learn more </a>
                                       </div>
                                       <div class="ml-5 pt-3">
                                           <ul class="list-disc">
                                               <li class="text-gray-600">{{$service->view_point1}}</li>
                                               <li class="text-gray-600">{{$service->view_point2}}</li>
                                               <li class="text-gray-600">{{$service->view_point3}}</li>
                                               <li class="text-gray-600">{{$service->view_point3}}</li>
                                           </ul>
                                       </div>
                                   </div>
                               </div>
                           @endforeach
                       </div>
                   </div>
               </div>
        </div>
    </div>
    <div class="container">
        <div class="row offset-2">
            <div >
                <h2 class="service_name tracking-widest font-weight-bold text-4xl font-sans pl-9">Contacts</h2><div class="horizontal_line"></div>
            </div>
            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-2 lg:grid-cols-4 xl:grid-cols-4 gap-1 pt-5">
                <div class="card border-none bg-transparent" >
                    <div class="card-body">
                        <div class="">
                            <img class="mx-auto" src="{{asset('/storage/icons/mobile-phone.png')}}">
                        </div>
                        <div class="pt-3 text-center">
                            <h4 class="tracking-widest font-weight-bold font-sans text-gray-600">Phone: +255 758522473</h4><br>
                            <h4 class="tracking-widest font-weight-bold font-sans text-gray-600">Phone: +255 758522473</h4>
                        </div>
                    </div>
                </div>
                <div class="card  border-none bg-transparent" >
                    <div class="card-body">
                        <div class="">
                            <img class="mx-auto" src="{{asset('/storage/icons/email.png')}}">
                        </div>
                        <div class="pt-3 text-center">
                            <h4 class="tracking-widest font-weight-bold font-sans text-gray-600">Email: <a href="">info@abotechnologies.com</a></h4>
                        </div>
                    </div>
                </div>
                <div class="card  border-none bg-transparent" >
                    <div class="card-body">
                        <div class="">
                            <img class="mx-auto" src="{{asset('/storage/icons/help.png')}}">
                        </div>
                        <div class="pt-3 text-center">
                            <h4 class="tracking-widest font-weight-bold font-sans text-gray-600">Phone: +255 758522468</h4>
                        </div>
                    </div>
                </div>
                <div class="card   border-none bg-transparent" >
                    <div class="card-body">
                        <div class="">
                            <img class="mx-auto " src="{{asset('/storage/icons/location.png')}}">
                        </div>
                        <div class="pt-3 text-center">

                            <h4 class="tracking-widest font-weight-bold font-sans text-gray-600"> Nkuhungu,Dodoma</h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="bg-white mt-5 border-top -mb-12" >
        <div class="container">
            <div class="row offset-2">
                @foreach( $services as $service)
                    <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-2 lg:grid-cols-2 xl:grid-cols-2 gap-2 pt-5 pb-5 site_content">
                        <div class="lead">
                            <div class="pb-4">
                                <h2 class="service_name tracking-widest font-weight-bold text-4xl font-sans">{{ $service->service_name }}</h2> <div class="horizontal_line"></div>
                            </div>
                            <p class="text-gray-600 text-base tracking-wider">{!! $service->description !!} </p><br>
                            <ul class="list-disc pl-5">
                                <li class="text-gray-600">{{ $service->view_point1 }}</li>
                                <li class="text-gray-600">{{ $service->view_point2 }}</li>
                                <li class="text-gray-600">{{ $service->view_point3 }}</li>
                                <li class="text-gray-600">{{ $service->view_point4 }}</li>
                                <li class="text-gray-600">{{ $service->view_point5 }}</li>
                            </ul>
                        </div>
                        <div class="py-40">
                            <img class="mx-auto" src="{{asset('/storage/net/'.$service->image)}}">
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
@endsection
