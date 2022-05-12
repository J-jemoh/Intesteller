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
                                        <p><i class="fa fa-map-marker-alt text-primary"></i> <b>Nderi street Nyeri</b> P. O Box 5033-00100 Nyeri Kenya</p>
                                        <p><i class="fa fa-map-marker-alt text-primary"></i> <b>Murang'a Hospital Road</b> 410-10200 Murang'a Kenya</p>
		                                <p><i class="fa fa-phone-alt text-primary"></i> +254-724-624-935</p>
		                                <p><i class="fa fa-envelope text-primary"></i> info@interstellar.org</p>
                                        <a href="mailto:info@intesteller.org"> Email Now</a>
                                    </div>
                                </div>
            				</div>
            			</div>
            			<div class="card">
            				
            			</div>
            		</div>
            	</div>
            	</div>
                

</div>
<br>
<div class="container">
    <div class="row">
                    <div class="col-lg-6">
                        <b>1. Nderi street Nyeri P. O Box 5033-00100 Nyeri Kenya</b>
                       <div class="mapouter "><div class="gmap_canvas d-block"><iframe width="500" height="500" id="gmap_canvas" src="https://maps.google.com/maps?q=Nderi%20street%20Nyeri%20%20&t=&z=13&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe><a href="https://www.whatismyip-address.com"></a><br><style>.mapouter{position:relative;text-align:right;height:100%;width:100%;}</style><a href="https://www.embedgooglemap.net">embedgooglemap.net</a><style>.gmap_canvas {overflow:hidden;background:none!important;height:100%;width:100%;}</style></div></div>
                    
                </div>
                <div class="col-lg-6">
                    <b>2. Murang'a Hospital Road 410-10200 Murang'a Kenya</b>
                       <div class="mapouter"><div class="gmap_canvas"><iframe width="500" height="500" id="gmap_canvas" src="https://maps.google.com/maps?q=410-10200%20Murang'a%20Kenya&t=&z=11&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe><a href="https://123movies-to.org">123 movies</a><br><style>.mapouter{position:relative;text-align:right;height:500px;width:500px;}</style><a href="https://www.embedgooglemap.net"></a><style>.gmap_canvas {overflow:hidden;background:none!important;height:500px;width:500px;}</style></div></div>
                    </div>
            </div>
</div>
@endsection