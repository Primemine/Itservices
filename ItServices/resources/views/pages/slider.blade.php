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
    <div class="bg-white">
        <div class="container">
            <div class="row pt-5">
                <div class="col-md-9">
                    <h3>
                        <p>We provide transformative solutions by leveraging our extensive
                            consulting team comprised of project managers, workplace technology
                            experts, infrastructure engineers, cabling designers and Revit/CAD drafters.
                            You'll see the same team members from the inception of your project through
                            completion. For thirty years, Align has exceeded client expectations and continually
                            refined our delivery methodologies while remaining at the forefront of real
                            estate and technology innovations.</p>
                        <h1>description</h1>
                    </h3>
                </div>
                <div class="col-md-3">
                    <h3>
                        <p>We provide transformative solutions by leveraging our extensive
                            consulting team comprised of project managers, workplace technology
                        </p>
                        <h1>contacts</h1>
                    </h3>
                </div>
            </div>
            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-2">
                <div class="card  hover:shadow-lg  border-none mt-5 h-full" >
                    <div class="card-body">
                        <div class="">
                            <a href="{{url('pages/index')}}"> <img class="mx-auto" src="{{asset('/storage/net/database3.png')}}"></a>
                        </div>
                        <div class="pt-3">
                            <p class="font-weight-bold text-center">Workplace Technology</p>
                        </div>
                        <div class="text-center">
                            <a style="color: #3b5998" href="{{url('pages/index')}}">Learn more </a>
                        </div>
                        <div class="ml-5 pt-3">
                            <ul style="list-style-type: disc;line-height: 1.75rem">
                                <li>IT Design & Vendor Mgmt</li>
                                <li>Smart Office & Digital Experience</li>
                                <li>Smart Office & Digital Experience</li>

                            </ul>
                        </div>
                    </div>
                </div>
                <div class="card  hover:shadow-lg  border-none mt-5 h-full">
                    <div class="card-body">
                        <div class="">
                            <img class="mx-auto" src="{{asset('/storage/net/network.png')}}">
                        </div>
                        <div class="pt-3">
                            <p class="font-weight-bold text-center">Workplace Technology</p>
                        </div>
                        <div class="text-center">
                            <a style="color: #3b5998" href="{{url('pages/index')}}">Learn more </a>
                        </div>
                        <div class="ml-5 pt-3">
                            <ul style="list-style-type: disc;line-height: 1.75rem">
                                <li>IT Design & Vendor Mgmt</li>
                                <li>Smart Office & Digital Experience</li>
                                <li>Smart Office & Digital Experience</li>

                            </ul>
                        </div>
                    </div>
                </div>
                <div class="card  hover:shadow-lg  border-none mt-5 h-full">
                    <div class="card-body">
                        <div class="">
                            <img class="mx-auto" src="{{asset('/storage/net/harddisk.png')}}">
                        </div>
                        <div class="pt-3">
                            <p class="font-weight-bold text-center">Workplace Technology</p>
                        </div>
                        <div class="text-center">
                            <a style="color: #3b5998" href="{{url('pages/index')}}">Learn more </a>
                        </div>
                        <div class="ml-5 pt-3">
                            <ul style="list-style-type: disc;line-height: 1.75rem">
                                <li>IT Design & Vendor Mgmt</li>
                                <li>Smart Office & Digital Experience</li>
                                <li>Smart Office & Digital Experience</li>

                            </ul>
                        </div>
                    </div>
                </div>
                <div class="card  hover:shadow-lg  border-none mt-5 h-full">
                    <div class="card-body">
                        <div class="">
                            <img class="mx-auto" src="{{asset('/storage/net/webpage.png')}}">
                        </div>
                        <div class="pt-3">
                            <p class="font-weight-bold text-center">Workplace Technology</p>
                        </div>
                        <div class="text-center">
                            <a style="color: #3b5998" href="{{url('pages/index')}}">Learn more </a>
                        </div>
                        <div class="ml-5 pt-3">
                            <ul style="list-style-type: disc;line-height: 1.75rem">
                                <li>IT Design & Vendor Mgmt</li>
                                <li>Smart Office & Digital Experience</li>
                                <li>Smart Office & Digital Experience</li>

                            </ul>
                        </div>
                    </div>
                </div>

                <div class="card  hover:shadow-lg  border-none mt-5 mb-5 h-full" >
                    <div class="card-body">
                        <div class="">
                            <img class="mx-auto" src="{{asset('/storage/net/laptop.png')}}">
                        </div>
                        <div class="pt-3">
                            <p class="font-weight-bold text-center">Workplace Technology</p>
                        </div>
                        <div class="text-center">
                            <a style="color: #3b5998" href="{{url('pages/index')}}">Learn more </a>
                        </div>
                        <div class="ml-5 pt-3">
                            <ul style="list-style-type: disc;line-height: 1.75rem">
                                <li>IT Design & Vendor Mgmt</li>
                                <li>Smart Office & Digital Experience</li>
                                <li>Smart Office & Digital Experience</li>

                            </ul>
                        </div>
                    </div>
                </div>
                <div class="card  hover:shadow-lg  border-none mt-5 mb-5 h-full">
                    <div class="card-body">
                        <div class="">
                            <img class="mx-auto" src="{{asset('/storage/net/antivirus.png')}}">
                        </div>
                        <div class="pt-3">
                            <p class="font-weight-bold text-center">Workplace Technology</p>
                        </div>
                        <div class="text-center">
                            <a style="color: #3b5998" href="{{url('pages/index')}}">Learn more </a>
                        </div>
                        <div class="ml-5 pt-3">
                            <ul style="list-style-type: disc;line-height: 1.75rem">
                                <li>IT Design & Vendor Mgmt</li>
                                <li>Smart Office & Digital Experience</li>
                                <li>Smart Office & Digital Experience</li>

                            </ul>
                        </div>
                    </div>
                </div>
                <div class="card  hover:shadow-lg  border-none mt-5 mb-5 h-full">
                    <div class="card-body">
                        <div class="">
                            <img class="mx-auto" src="{{asset('/storage/net/coding.png')}}">
                        </div>
                        <div class="pt-3">
                            <p class="font-weight-bold text-center">Workplace Technology</p>
                        </div>
                        <div class="text-center">
                            <a style="color: #3b5998" href="{{url('pages/index')}}">Learn more </a>
                        </div>
                        <div class="ml-5 pt-3">
                            <ul style="list-style-type: disc;line-height: 1.75rem">
                                <li>IT Design & Vendor Mgmt</li>
                                <li>Smart Office & Digital Experience</li>
                                <li>Smart Office & Digital Experience</li>

                            </ul>
                        </div>
                    </div>
                </div>
                <div class="card  hover:shadow-lg  border-none mt-5 mb-5 h-full">
                    <div class="card-body">
                        <div class="">
                            <img class="mx-auto" src="{{asset('/storage/net/webpage.png')}}">
                        </div>
                        <div class="pt-3">
                            <p class="font-weight-bold text-center">Workplace Technology</p>
                        </div>
                        <div class="text-center">
                            <a style="color: #3b5998" href="{{url('pages/index')}}">Learn more </a>
                        </div>
                        <div class="ml-5 pt-3">
                            <ul style="list-style-type: disc;line-height: 1.75rem">
                                <li>IT Design & Vendor Mgmt</li>
                                <li>Smart Office & Digital Experience</li>
                                <li>Smart Office & Digital Experience</li>

                            </ul>
                        </div>
                    </div>
                </div>

                <div class="card  hover:shadow-lg  border-none mt-5 " >
                    <div class="card-body">
                        <div class="">
                            <img class="mx-auto" src="{{asset('/storage/net/database3.png')}}">
                        </div>
                        <div class="pt-3">
                            <p class="font-weight-bold text-center">Workplace Technology</p>
                        </div>
                        <div class="text-center">
                            <a style="color: #3b5998" href="{{url('pages/index')}}">Learn more </a>
                        </div>
                        <div class="ml-5 pt-3">
                            <ul style="list-style-type: disc;line-height: 1.75rem">
                                <li>IT Design & Vendor Mgmt</li>
                                <li>Smart Office & Digital Experience</li>
                                <li>Smart Office & Digital Experience</li>

                            </ul>
                        </div>
                    </div>
                </div>
                <div class="card  hover:shadow-lg  border-none mt-5 ">
                    <div class="card-body">
                        <div class="">
                            <img class="mx-auto" src="{{asset('/storage/net/network.png')}}">
                        </div>
                        <div class="pt-3">
                            <p class="font-weight-bold text-center">Workplace Technology</p>
                        </div>
                        <div class="text-center">
                            <a style="color: #3b5998" href="{{url('pages/index')}}">Learn more </a>
                        </div>
                        <div class="ml-5 pt-3">
                            <ul style="list-style-type: disc;line-height: 1.75rem">
                                <li>IT Design & Vendor Mgmt</li>
                                <li>Smart Office & Digital Experience</li>
                                <li>Smart Office & Digital Experience</li>

                            </ul>
                        </div>
                    </div>
                </div>
                <div class="card  hover:shadow-lg  border-none mt-5 ">
                    <div class="card-body">
                        <div class="">
                            <img class="mx-auto" src="{{asset('/storage/net/harddisk.png')}}">
                        </div>
                        <div class="pt-3">
                            <p class="font-weight-bold text-center">Workplace Technology</p>
                        </div>
                        <div class="text-center">
                            <a style="color: #3b5998" href="{{url('pages/index')}}">Learn more </a>
                        </div>
                        <div class="ml-5 pt-3">
                            <ul style="list-style-type: disc;line-height: 1.75rem">
                                <li>IT Design & Vendor Mgmt</li>
                                <li>Smart Office & Digital Experience</li>
                                <li>Smart Office & Digital Experience</li>

                            </ul>
                        </div>
                    </div>
                </div>
                <div class="card  hover:shadow-lg  border-none mt-5 ">
                    <div class="card-body">
                        <div class="">
                            <img class="mx-auto" src="{{asset('/storage/net/webpage.png')}}">
                        </div>
                        <div class="pt-3">
                            <p class="font-weight-bold text-center">Workplace Technology</p>
                        </div>
                        <div class="text-center">
                            <a style="color: #3b5998" href="{{url('pages/index')}}">Learn more </a>
                        </div>
                        <div class="ml-5 pt-3">
                            <ul style="list-style-type: disc;line-height: 1.75rem">
                                <li>IT Design & Vendor Mgmt</li>
                                <li>Smart Office & Digital Experience</li>
                                <li>Smart Office & Digital Experience</li>

                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="recent articles mt-5">
        <div class="container">
            <div class="" style="display:inline-flex">
                <h2>Recent articles</h2>
                <!--a  style="float: right" href="{{url('pages/articles')}}">Read more</a-->
            </div>
            @include('pages.recent_post')

        </div>
    </div>
@endsection
