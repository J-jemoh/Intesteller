 
@extends('layouts.home')
@section('content')
 <!-- Hero Start -->
            <div class="hero bg-secondary">
                <div class="container-fluid">
                    <div class="row align-items-center">
                        <div class="col-md-6">
                            <h2>INTESTELLER</h2>
                            <h2><span>RECRUITMENT</span> AGENCY</h2>
                            <p>Experience the best recruitment,talent management and retention solutions in Kenya</p>
                            <a class="btn" href="#about-us">Learn More About us</a>
                        </div>
                        <div class="col-md-6">
                            <img src="{{asset('custom/img/hero.png')}}" alt="Image">
                        </div>
                    </div>
                </div>
            </div>
            <!-- About Start -->
            <div class="about" id="about-us">
                <div class="container-fluid">
                    <div class="row align-items-center">
                        <div class="col-md-6">
                            <div id="video-section">
                                <div class="youtube-player" data-id="jssO8-5qmag"></div>
                                
                                <script>
                                    document.addEventListener("DOMContentLoaded",
                                        function() {
                                            var div, n,
                                                v = document.getElementsByClassName("youtube-player");
                                            for (n = 0; n < v.length; n++) {
                                                div = document.createElement("div");
                                                div.setAttribute("data-id", v[n].dataset.id);
                                                div.innerHTML = labnolThumb(v[n].dataset.id);
                                                div.onclick = labnolIframe;
                                                v[n].appendChild(div);
                                            }
                                        });

                                    function labnolThumb(id) {
                                        var thumb = '<img src="{{asset('custom/img/homepage.jpg')}}">',
                                            play = '<div class="play"></div>';
                                        return thumb.replace("ID", id) + play;
                                    }

                                    function labnolIframe() {
                                        var iframe = document.createElement("iframe");
                                        var embed = "https://www.youtube.com/embed/ID?autoplay=1";
                                        iframe.setAttribute("src", embed.replace("ID", this.dataset.id));
                                        iframe.setAttribute("frameborder", "0");
                                        iframe.setAttribute("allowfullscreen", "1");
                                        this.parentNode.replaceChild(iframe, this);
                                    }
                                </script>
                            </div>
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
                            <a class="btn" href="">Learn More</a>
                        </div>
                    </div>
                </div>
            </div>
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
            <div class="container-fluid">
            	<div class="section-header">
                        <h2>REGISTERED WITH</h2>
                        <p>List all registered companies. </p>
                    </div>
            </div>

@endsection