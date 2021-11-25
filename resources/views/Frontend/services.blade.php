@extends('layouts.home')
@section('content')
 <div class="page-header">
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <h2>Our Services</h2>
                        </div>
                        <div class="col-12">
                            <a href="">Home</a>
                            <a href="">Services</a>
                        </div>
                    </div>
                </div>
            </div>
          
              <!-- Service Row Start -->
            <div class="service-row">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-md-6 d-md-none d-block">
                            <div class="service-row-img">
                                <img src="{{asset('custom/img/recruit.png')}}" alt="Service">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="service-row-text">
                                <h2 class="section-title"><b>Recruitment</b></h2>
                                <p>
                                    We link prospect employers to qualified and experienced employees both local and internation on various fields
                                </p>
                                <a class="btn" href="#">Read More</a>
                            </div>
                        </div>
                        <div class="col-md-6 d-md-block d-none">
                            <div class="service-row-img">
                                <img src="{{asset('custom/img/recruit.png')}}" alt="Service">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Service Row End -->


            <!-- Service Row Start -->
            <div class="service-row">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-md-6">
                            <div class="service-row-img">
                                <img src="{{asset('custom/img/counsel.jpg')}}" alt="Service">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="service-row-text">
                                <h2 class="section-title"><b>Counselling</b></h2>
                                <p>
                                    We have a team of experts that offer all round counselling to our employees on pre-depature of foreign jobs.
                                </p>
                                <a class="btn" href="#">Read More</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Service Row End -->


            <!-- Service Row Start -->
            <div class="service-row">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-md-6 d-md-none d-block">
                            <div class="service-row-img">
                                <img src="{{asset('custom/img/train.png')}}" alt="Service">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="service-row-text">
                                <h2 class="section-title"><b>Training</b></h2>
                                <p>
                                    We have skilled and experienced experts who are versed in various skills that offer basic training to our clients.
                                </p>
                                <a class="btn" href="#">Read More</a>
                            </div>
                        </div>
                        <div class="col-md-6 d-md-block d-none">
                            <div class="service-row-img">
                                <img src="{{asset('custom/img/train.png')}}" alt="Service">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Service Row End -->


            <!-- Service Row Start -->
            <div class="service-row">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-md-6">
                            <div class="service-row-img">
                                <img src="{{asset('custom/img/inter.png')}}" alt="Service">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="service-row-text">
                                <h2 class="section-title"><b>Re-Intergration</b></h2>
                                <p>
                                    This includes offering our clients Re-intergration especially after expiry of contracts both locally and internationally.
                                </p>
                                <a class="btn" href="#">Read More</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Service Row End -->

@endsection