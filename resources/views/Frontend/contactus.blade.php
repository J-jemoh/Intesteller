@extends('layouts.home')
@section('content')
<div class="page-header">
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <h2>Contact Us</h2>
                        </div>
                        <div class="col-12">
                            <a href="{{route('homepage')}}">Home</a>
                            <a href="#">Contact Us</a>
                        </div>
                    </div>
                </div>
            </div>
            @include('flash-message.flash-message')
            <div class="container">
            	<div class="row">
            		<div class="col-lg-8">
            		<div class="card">
            			<div class="card-header"><b>Send us the enquiry below</b></div>
            			<div class="card-body">
            				<form method="post" action="{{route('savecontact')}}">
            					@csrf
							  <div class="mb-3">
							    <label for="exampleInputEmail1" class="form-label">Email address</label>
							    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" required name="email">
							    <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
							  </div>
							  <div class="mb-3">
							    <label for="exampleInputPassword1" class="form-label">Phone Number</label>
							    <input type="text" class="form-control" id="exampleInputPassword1" name="phonenumber" required>
							  </div>
							   <div class="mb-3">
							    <label for="exampleInputPassword1" class="form-label">Subject</label>
							    <input type="text" class="form-control" id="exampleInputPassword1" name="subject" required>
							  </div>
							   <div class="mb-3">
							    <label for="exampleInputPassword1" class="form-label">Message</label>
							   <textarea name="message" class="form-control" rows="5" required></textarea>
							  </div>
							  
							  <button type="submit" class="btn btn-primary">Submit Enquiry</button>
							</form>
            			</div>
            		</div>
            	</div>
            	<div class="col-lg-4">
            		<div class="card">
            			<div class="card-header"><b>HOW TO REACH US</b></div>
            			<div class="card-body">
            				<div class="editor-info">
            					<div class="editor-item">
                                    
                                    <div class="editor-text">
                                        <h3><b>Human Resource</b></h3>
                                        <p><i class="fa fa-map-marker-alt"></i>Westlands, Nairobi, Kenya</p>
		                                <p><i class="fa fa-phone-alt"></i>+254-700-355-226</p>
		                                <p><i class="fa fa-envelope"></i>info@intesteller.org</p>
                                        <a href="mailto:info@intesteller.org">Email Now</a>
                                    </div>
                                </div>
            				</div>
            			</div>
            			<div class="card">
            				<div class="card-header"><b>Our directions</b></div>
            				<div class="mapouter"><div class="gmap_canvas"><iframe width="300" height="300" id="gmap_canvas" src="https://maps.google.com/maps?q=Westlands,%20Nairobi%20Kenya&t=&z=13&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe><a href="https://123movies-to.org"></a><br><style>.mapouter{position:relative;text-align:right;height:300px;width:300px;}</style><a href="https://www.embedgooglemap.net">google maps embedded</a><style>.gmap_canvas {overflow:hidden;background:none!important;height:300px;width:300px;}</style></div></div>
            			</div>
            		</div>
            	</div>
            	</div>
            </div>


@endsection