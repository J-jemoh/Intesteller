@extends('layouts.admin')
@section('content')
<div class="app-content pt-3 p-md-3 p-lg-4">
 <div class="container-xl">
 	<h1 class="app-page-title">Dashboard</h1><hr style="border: solid 1px #000;">
 	 <div class="card alert alert-dismissible shadow-sm mb-4 border-left-decoration" role="alert">
				    <div class="inner">
					    <div class="app-card-body p-3 p-lg-4">
						    <h3 class="mb-3">Welcome, {{Auth::guard('admin')->user()->name}}!</h3>
						    <div class="row gx-5 gy-3">
						        <div class="col-12 col-lg-9">
							        
							        <div>You can perform all operations within the system at ease without any interruptions. You can download the guideline to use. </div>
							    </div><!--//col-->
							    <div class="col-12 col-lg-3">
								    <a class="btn app-btn-primary" href="https://themes.3rdwavemedia.com/bootstrap-templates/admin-dashboard/portal-free-bootstrap-admin-dashboard-template-for-developers/"><i class="fas fa-download"></i>Free Download</a>
							    </div><!--//col-->
						    </div><!--//row-->
						    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
					    </div><!--//app-card-body-->
					    
				    </div><!--//inner-->
			    </div><!--//app-card-->
			     <div class="row g-4 mb-4">
				    <div class="col-6 col-lg-3">
					    <div class="app-card app-card-stat shadow-sm h-100">
						    <div class="app-card-body p-3 p-lg-4">
							    <h4 class="stats-type mb-1">Total Sales</h4>
							    <div class="stats-figure">$12,628</div>
							    <div class="stats-meta text-success">
								<i class="fa fa-arrow-up"></i> 20%</div>
						    </div><!--//app-card-body-->
						    <a class="app-card-link-mask" href="#"></a>
					    </div><!--//app-card-->
				    </div><!--//col-->
				    
				    <div class="col-6 col-lg-3">
					    <div class="app-card app-card-stat shadow-sm h-100">
						    <div class="app-card-body p-3 p-lg-4">
							    <h4 class="stats-type mb-1">Expenses</h4>
							    <div class="stats-figure">$2,250</div>
							    <div class="stats-meta text-success">
							<i class="fa fa-arrow-down"></i> 5% </div>
						    </div><!--//app-card-body-->
						    <a class="app-card-link-mask" href="#"></a>
					    </div><!--//app-card-->
				    </div><!--//col-->
				    <div class="col-6 col-lg-3">
					    <div class="app-card app-card-stat shadow-sm h-100">
						    <div class="app-card-body p-3 p-lg-4">
							    <h4 class="stats-type mb-1">Projects</h4>
							    <div class="stats-figure">23</div>
							    <div class="stats-meta">
								    Open</div>
						    </div><!--//app-card-body-->
						    <a class="app-card-link-mask" href="#"></a>
					    </div><!--//app-card-->
				    </div><!--//col-->
				    <div class="col-6 col-lg-3">
					    <div class="app-card app-card-stat shadow-sm h-100">
						    <div class="app-card-body p-3 p-lg-4">
							    <h4 class="stats-type mb-1">Invoices</h4>
							    <div class="stats-figure">6</div>
							    <div class="stats-meta">New</div>
						    </div><!--//app-card-body-->
						    <a class="app-card-link-mask" href="#"></a>
					    </div><!--//app-card-->
				    </div><!--//col-->
			    </div><!--//row-->
			    <div class="container-xl">
			    	<div class="row">
			    		<div class="col-lg-12">
			    			<div class="card">
			    				<div class="card-header"><b>Latest Enquiries</b></div>
			    				<div class="card-body table-responsive">
			    					<table class="table table-condensed table-striped " id="admin_enquiries">
			    						<thead>
			    							<tr>
			    								<th>ID</th>
			    								<th>Email</th>
			    								<th>Phone Number</th>
			    								<th>Message</th>
			    								<th>Date sent</th>
			    								<th>Action</th>
			    								<th>Status</th>
			    							</tr>
			    						</thead>
			    						<tbody>
			    							@foreach($contactus as $enquiries)
			    							<tr>
			    								<td>{{$enquiries->id}}</td>
			    								<td>{{$enquiries->email}}</td>
			    								<td>{{$enquiries->phonenumber}}</td>
			    								<td>{{$enquiries->message}}</td>
			    								<td>{{$enquiries->created_at}}</td>
			    								<td>
			    									<div class="btn-group" role="group" aria-label="Basic mixed styles example">
													  <a href="#" class="btn btn-success"><i class="fa fa-eye text-white" aria-hidden="true"></i></a>
													  <a href="#" class="btn btn-primary"><i class="fa fa-trash text-white" aria-hidden="true"></i></a>
													  <a href="#" class="btn btn-warning"><i class="fa fa-edit" aria-hidden="true"></i></a>
													</div>
			    								</td>
			    								<td><span class="badge bg-success">Resolved</span></td>
			    							</tr>
			    							@endforeach
			    						</tbody>
			    					</table>
			    				</div>
			    				<div class="card-footer"><b>Latest Enquiries</b></div>
			    			</div>
			    		</div>
			    		
			    	</div>
			    	<br>
			    	<div class="row">
			    		<div class="col-lg-8">
			    			<div class="card">
			    				<div class="card-header"><b>Latest Employers</b></div>
			    				<div class="card-body table-responsive">
			    					<table class="table table-condensed">
			    						<thead>
			    							<th>Serial No</th>
			    							<th>Name</th>
			    							<th>Registration Number</th>
			    							<th>Contact Person</th>
			    							<th>Contact Phone</th>
			    							<th>Registration Date</th>
			    						</thead>
			    					</table>
			    				</div>
			    				<div class="card-footer"><b>Latest Employers</b></div>
			    			</div>
			    		</div>
			    		<div class="col-lg-4">
			    			<div class="card">
			    				<div class="card-header"><b>Latest users</b></div>
			    				<div class="card-body">
			    					<table class="table table-condensed">
			    					<thead>
			    						<tr>
			    							<th>Status</th>
			    							<th>Username</th>
			    							<th>User Email</th>
			    						</tr>
			    					</thead>
			    					<tbody>
			    						@foreach($users as $user)
			    						<tr>
			    							<td><span class="badge rounded-pill bg-success text-dark">active</span></td>
			    							<td>{{$user->name}}</td>
			    							<td>{{$user->email}}</td>
			    						</tr>
			    						@endforeach
			    					</tbody>
			    					</table>

			    				</div>
			    				<div class="card-footer"><b>Latest users</b></div>
			    			</div>
			    		</div>
			    	</div>
			    </div>

 </div>
</div>

@endsection