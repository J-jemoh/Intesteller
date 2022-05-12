@extends('layouts.home')
@section('content')
<div class="page-header">
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <h2>JOB SEEKERS </h2>
                        </div>
                        <div class="col-12">
                            <a href="{{route('homepage')}}">Home</a>
                            <a href="#"> Job seekers</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container">
            	<div class="row">
            		<div class="col-md-6">
            			<h1><b>Discover new opportunities in your career</b></h1>
            			<p>Create an account with us and explore more job opportunuties</p>
            			<p><a class="btn btn-success" href="{{route('register')}}">Create an account</a></p>
            		</div>
            		<div class="col-md-6">
            			<img src="{{asset('custom/img/job.png')}}" class="img-responsive" style="width: 100%; text-align: center;height: 100%;">
            		</div>
            	</div>
            	
            		<div class="card card-body bg-info">
            			<div class="row">
            			<div class="col-lg-6">
            				<h4 class="text-white">Are you interested in Working locally or internationally?</h4>
            			</div>
            			<div class="col-lg-4">
            				<a href="{{route('register')}}" class="btn btn-secondary">Start your journey with us.</a>
            			</div>
            		</div>
            	</div>
            	<br>
            	<div class="row">
            		<div class="col-md-6">
            			<img src="{{asset('custom/img/counsel.jpg')}}" class="img-responsive" style="width: 100%; text-align: center;">
            		</div>
            		<div class="col-md-6">
            			<h2><b class="text-primary">How can Intestellar help you</b></h2>
            			<ul class="list-group list-group-flush">
						  <li class="list-group-item"><i class="fa fa-arrow-right"></i> Discover and explore jobs that will develop your professional skills</li>
						  <li class="list-group-item"><i class="fa fa-arrow-right"></i> Connect you to your dream employers, you only need to create an account and update your academic and professional qualifications.</li>
						  <li class="list-group-item"><i class="fa fa-arrow-right"></i> Access to top employers</li>
						  <li class="list-group-item"><i class="fa fa-arrow-right"></i> Get career advise from career expertise.</li>
						  
						</ul>
            			
            			
            		</div>
            		
            	</div>
            </div>
@endsection