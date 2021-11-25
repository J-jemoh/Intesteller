@extends('layouts.home')
@section('content')

<div class="container ">
	<div class="row">
  		<div class="col-md-3">
  			<div class="card">
  				<img src="{{asset('custom/img/male.png')}}" class="img-thumbnail" alt="...">
  				<form>
  					<input type="file" name="profile" required>
  				</form>
  			</div>
  			<br>
  			<div class="card">
  				<div class="card-header"><b>Activities</b></div>
  				<div class="card-body">
  					<ul class="list-group list-group-flush">
					  <li class="list-group-item"><a href="#">Facebook</a></li>
					  <li class="list-group-item"><a href="#">Twitter</a></li>
					  <li class="list-group-item"><a href="#">Linkedln</a></li>
					  <li class="list-group-item"><a href="#">Instagram</a></li>
					  <li class="list-group-item"><a href="#">Gmail</a></li>
					</ul>
  				</div>
  			</div>
  		</div>
  		<div class="col-md-9">
  			<div class="card">
  				<form method="post" action="#">
  				@csrf
  				<div class="card-header"><b>Personal details</b></div>
  				<div class="card-body">
  				<div class="row">
  					<div class="col-md-6">
  						<div class="mb-3">
						    <label for="exampleInputEmail1" class="form-label"><b>Email address</b></label>
						    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="email" value="{{Auth::user()->email}}">
						  </div>
						 

  					</div>
  					<div class="col-md-6">
  						 <div class="mb-3">
						    <label for="exampleInputPassword1" class="form-label"><b>Name</b></label>
						    <input type="text" class="form-control" id="exampleInputPassword1" name="name" value="{{Auth::user()->name}}">
						  </div>
  					</div>
  				</div>
  				
  			</div>
  			<div class="card-header"><b>Other details</b></div>
  				<div class="card-body">
  				<div class="row">
  					<div class="col-md-6">
  						<div class="mb-3">
						    <label for="exampleInputEmail1" class="form-label"><b>Phone Number</b></label>
						    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="phonenumber" value="{{Auth::user()->phonenumber}}">
						  </div>
						 

  					</div>
  					<div class="col-md-6">
  						 <div class="mb-3">
						    <label for="exampleInputPassword1" class="form-label"><b>Location</b></label>
						    <input type="text" class="form-control" id="exampleInputPassword1" name="location" value="{{Auth::user()->location}}">
						  </div>
  					</div>
  				</div>
  				<button type="submit" class="btn btn-primary">Update profile</button>
  			</div>

  			</form>
  			</div>
  		</div>
    </div>
</div>

@endsection