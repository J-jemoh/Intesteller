 
@extends('layouts.home')
@section('content')
 <!-- Hero Start -->
            <div class="hero bg-secondary">
                <div class="container-fluid">
                    <div class="row align-items-center">
                        <div class="col-md-6">
                            <h2>INTERSTELLAR</h2>
                            <h2><span class="text-warning">RECRUITMENT</span> AGENCY</h2>
                            <p class="text-white">Experience the best recruitment,talent management and retention solutions in Kenya</p>
                            <a class="btn" href="#about-us">Learn More About us</a>
                        </div>
                        <div class="col-md-6">
                            <img src="{{asset('custom/img/recruitment1.png')}}" alt="Image">
                        </div>
                    </div>
                </div>
            </div>
            <!-- About Start -->
            <div class="about" id="about-us">
                <div class="container-fluid">
                    <div class="row align-items-center">
                        <div class="col-md-6">
                            <img src="{{asset('custom/img/whoweare.png')}}"/>
                          
                        </div>
                        <div class="col-md-6">
                            <h2 class="section-title">Who we are</h2>
                             <p>
                                Interstellar Recruitment Agency is a certified liability company registered in Kenya. It provides <b>Recruitment, Training, Counselling and Re-integration </b> services both locally and internationally across different fields.
                            </p>
                            <p>
                                We have an experienced team skilled in various fields offering training, counselling and recruitment services accross the globe. Our quality work and services to our clients have made us a leading agency in recruitment, training and counselling both locally and internationally. 
                            </p>
                            <p><b>We pride ourselves in transforming yuor business through our expertise in multiple fields and our quality work.</b></p>
                            <a class="btn" href="">Learn More</a>
                        </div>
                    </div>
                </div>
            </div>
               <!-- Call to Action Start -->
            <div class="call-to-action">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-md-9">
                            <h2>Are you ready to transform your business?</h2>
                            <p>
                                We are here to assist you achieve all your goals and objectives by connecting you to your perfect career/professionals.
                            </p>
                        </div>
                        <div class="col-md-3">
                            <a class="btn" href="{{route('contactus')}}">Contact Us</a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Call to Action End -->
             <!-- Service Start -->
            <div class="service">
                <div class="container-fluid">
                    <div class="section-header">
                        <h2>Our Services</h2>
                        <p>We offer amazing services which fit your business needs and add value and provide growth to your business.</p>
                    </div>
                    <div class="row">
                        <div class="col-lg-3 col-md-6">
                            <div class="service-item">
                                <h3><b>Recruitment</b></h3>
                                <img src="{{asset('custom/img/recruitment.png')}}" alt="Service">
                                <p>We link prospect employers to qualified and experienced employees both local and internation on various fields</p>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6">
                            <div class="service-item">
                                <h3><b>Counselling</b></h3>
                                <img src="{{asset('custom/img/counselling.png')}}" alt="Service">
                                <p>We have a team of experts that offer all round counselling to our employees on pre-depature of foreign jobs. </p>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6">
                            <div class="service-item">
                                <h3><b>Training</b></h3>
                                <img src="{{asset('custom/img/training.png')}}" alt="Service">
                                <p>We have skilled and experienced experts who are versed in various skills that offer basic training to our clients.</p>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6">
                            <div class="service-item">
                                <h3><b>Re-intergration</b></h3>
                                <img src="{{asset('custom/img/reintergration.png')}}" alt="Service">
                                <p>This includes offering our clients Re-intergration especially after expiry of contracts both locally and internationally. </p>
                            </div>
                        </div>
                      
                    </div>
                </div>
            </div>
            <!-- Service End -->
            <div class="container">
            	<div class="section-header">
                        <h2>REGISTERED WITH</h2>
                        <p>We are accredited with the following institutions </p>
                    </div>
                   <div class="row ">
                   		<div class="col-lg-3">
                   			<img src="{{asset('custom/img/n1.png')}}" class="img-thumbnail" alt="..." style="height: 70%;width: 100%;">
                   		</div>
                   		<div class="col-lg-3">
                   			<img src="{{asset('custom/img/n2.png')}}" class="img-thumbnail" alt="..." style="height: 70%; width: 100%;">
                   		</div>
                   		<div class="col-lg-3"></div>
                   </div>  
            </div>

@endsection