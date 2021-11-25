@extends('layouts.home')
@section('content')
<!-- Page Header Start -->
            <div class="page-header">
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <h2>About Us</h2>
                        </div>
                        <div class="col-12">
                            <a href="">Home</a>
                            <a href="">About Us</a>
                        </div>
                    </div>
                </div>
            </div>
             <!-- About Start -->
            <div class="about">
                <div class="container-fluid">
                    <div class="row align-items-center">
                        <div class="col-md-6">
                            <img src="{{asset('custom/img/aboutus.jpg')}}" alt="Image">
                        </div>
                        <div class="col-md-6">
                            <h2 class="section-title">Who we are</h2>
                            <p>
                                Intesteller Recruitment Agency is a certified liability company registered in Kenya. It provides <b>Recruitment, Training, Counselling and Re-integration </b> services both locally and internationall across different fields.
                            </p>
                            <p>
                                We have an experienced team skilled in various fields offering training, counselling and recruitment services accross the globe for over 20 years. Our quality work and services to our clients have made us a leading agency in recruitment, training and counselling both locally and internationally. 
                            </p>
                            <p><b>We pride ourselves in transforming yuor business through our expertise in multiple fields and our quality work.</b></p>
                            <a class="btn" href="#">Learn More</a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- About End -->
             <!-- Team Start -->
            <div class="team">
                <div class="container-fluid">
                    <div class="section-header">
                        <h2>Our Team</h2>
                        <p>Brief introduction about our team</p>
                    </div>
                    <div class="row">
                        <div class="col-sm-6 col-lg-3 ">
                            <div class="team-item">
                                <div class="team-img">
                                    <img src="{{asset('custom/img/female.png')}}" alt="Team">
                                </div>
                                <div class="team-text">
                                    <h3><b class="text-primary">Mrs Esther Maina</b></h3>
                                    <p><b>Director HR and customer service</b></p>
                                </div>
                                <div class="team-social">
                                    <a href="#"><i class="fab fa-facebook-f"></i></a>
                                    <a href="#"><i class="fab fa-twitter"></i></a>
                                    <a href="#"><i class="fab fa-linkedin-in"></i></a>
                                    <a href="#"><i class="fab fa-pinterest"></i></a>
                                    <a href="#"><i class="fab fa-youtube"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-lg-3 ">
                            <div class="team-item">
                                <div class="team-img">
                                    <img src="{{asset('custom/img/female1.png')}}" alt="Team">
                                </div>
                                <div class="team-text">
                                    <h3><b class="text-primary">Dr Leah M Njiru</b></h3>
                                    <p><b>Director adm and public relations</b></p>
                                </div>
                                <div class="team-social">
                                    <a href="#"><i class="fab fa-facebook-f"></i></a>
                                    <a href="#"><i class="fab fa-twitter"></i></a>
                                    <a href="#"><i class="fab fa-linkedin-in"></i></a>
                                    <a href="#"><i class="fab fa-pinterest"></i></a>
                                    <a href="#"><i class="fab fa-youtube"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-lg-3 ">
                            <div class="team-item">
                                <div class="team-img">
                                    <img src="{{asset('custom/img/female.png')}}" alt="Team">
                                </div>
                                <div class="team-text">
                                    <h3><b class="text-primary">Dr Rosemary wairimu</b></h3>
                                    <p><b>Director strategy and innovation</b></p>
                                </div>
                                <div class="team-social">
                                    <a href="#"><i class="fab fa-facebook-f"></i></a>
                                    <a href="#"><i class="fab fa-twitter"></i></a>
                                    <a href="#"><i class="fab fa-linkedin-in"></i></a>
                                    <a href="#"><i class="fab fa-pinterest"></i></a>
                                    <a href="#"><i class="fab fa-youtube"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-lg-3 ">
                            <div class="team-item">
                                <div class="team-img">
                                    <img src="{{asset('custom/img/male.png')}}" alt="Team">
                                </div>
                                <div class="team-text">
                                    <h3><b class="text-primary">Mr Nathenge Gitonga</b></h3>
                                    <p><b>Director Diplomatic relations</b></p>
                                </div>
                                <div class="team-social">
                                    <a href="#"><i class="fab fa-facebook-f"></i></a>
                                    <a href="#"><i class="fab fa-twitter"></i></a>
                                    <a href="#"><i class="fab fa-linkedin-in"></i></a>
                                    <a href="#"><i class="fab fa-pinterest"></i></a>
                                    <a href="#"><i class="fab fa-youtube"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Team End -->

@endsection