<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
       
        <meta charset="utf-8">
        <title>INTERSTELLAR - RECRUITMENT Agency</title>
        <meta content="width=device-width, initial-scale=1.0" name="viewport">
        <meta content="Bootstrap Agency Template" name="keywords">
        <meta content="Bootstrap Agency Template" name="description">
          <!-- Styles -->
       <!--  <link rel="stylesheet" href="{{ asset('css/app.css') }}"> -->
        <!-- Favicon -->
        <link href="{{asset('custom/img/Interstellar.png')}}" rel="icon">

        <!-- Google Font -->
        <link href="https://fonts.googleapis.com/css2?family=Raleway:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet"> 
        
        <!-- CSS Libraries -->
        <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet">
        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
        <link href="{{asset('custom/lib/slick/slick.css')}}" rel="stylesheet">
        <link href="{{asset('custom/libs/slick/slick-theme.css')}}" rel="stylesheet">
        <link href="{{asset('custom/lib/lightbox/css/lightbox.min.css')}}" rel="stylesheet">

       <link rel="stylesheet" type="text/css" href="{{asset('custom/DataTables/datatables.min.css')}}"/>
 
		
        <!-- Template Stylesheet -->
        <link href="{{asset('custom/css/style.css')}}" rel="stylesheet">

    </head>
    <body class="wrapper">
        <div class="min-h-screen bg-gray-100">
            <div class="header">
                <div class="container-fluid">
                    <div class="row align-items-center">
                        <div class="col-lg-2">
                            <div class="brand ">
                                <a href="#">
                                    <img src="{{asset('custom/img/Interstellar.png')}}" alt="Logo">

                                </a>
                            </div>
                        </div>
                        <div class="col-lg-10">
                            <div class="topbar">
                                <div class="topbar-col">
                                    <a href="tel:+012 345 67890"><i class="fa fa-phone-alt"></i><b>+254-724-624-935</b></a>
                                </div>
                                <div class="topbar-col">
                                    <a href="mailto:info@interstellar"><i class="fa fa-envelope"></i><b>info@interstellar.org</b></a>
                                </div>
                                <div class="topbar-col">
                                    <div class="topbar-social">
                                        <a href=""><i class="fab fa-twitter"></i></a>
                                        <a href=""><i class="fab fa-facebook-f"></i></a>
                                        <a href=""><i class="fab fa-youtube"></i></a>
                                        <a href=""><i class="fab fa-instagram"></i></a>
                                        <a href=""><i class="fab fa-linkedin-in"></i></a>
                                    </div>
                                </div>
                            </div>
                            <div class="navbar navbar-expand-lg bg-light navbar-light">
                                <a href="#" class="navbar-brand">MENU</a>
                                <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                                    <span class="navbar-toggler-icon"></span>
                                </button>

                                <div class="collapse navbar-collapse justify-content-between" id="navbarCollapse">
                                    <div class="navbar-nav mx-auto">
                                        <a href="{{route('homepage')}}" class="nav-item nav-link active"><b>HOME</b></a>
                                        <a href="{{route('about-us')}}" class="nav-item nav-link"><b>ABOUT US</b></a>
                                        <a href="{{route('services')}}" class="nav-item nav-link"><b>OUR SERVICES</b></a>
                                        <a href="{{route('job.advert')}}" class="nav-item nav-link"><b>EMPLOYERS</b></a>
                                        <a href="{{route('home.jobseeker')}}" class="nav-item nav-link"><b>JOB SEEKERS</b></a>
                                        <li class="nav-item dropdown">
								        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
								          <b>TRAINING</b>
								        </a>
								        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
								          <a class="dropdown-item" href="{{route('training.local')}}"><b>Local</b></a>
								          <a class="dropdown-item" href="#"><b>International</b></a>
								          
								         
								        </div>
								      </li>
                                        <a href="{{route('contactus')}}" class="nav-item nav-link"><b>CONTACT US</b></a>

                                        @guest
                                        <a href="{{route('login')}}" class="btn float-right"><i class="fa fa-sign-in" aria-hidden="true"></i>Login/Sign up</a>
                                        @else
                                        <div class="dropdown show">
										  <a class="btn btn-secondary dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
										    {{Auth::user()->name}}
										  </a>

										  <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
										    <a class="dropdown-item" href="{{route('user.account')}}"><b class="text-danger">My Account</b></a>
										    <a class="dropdown-item" href="#"><b class="text-danger">Settings</b></a>
										    <a class="dropdown-item" href="{{route('logout')}}"
								            onclick="event.preventDefault();document.getElementById('logout-form').submit();" data-toggle="modal"
								            data-target="#logoutModal"><b class="text-danger">Log Out</b></a>
								            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
									            @csrf
									          </form>
										  </div>
										</div>
                                        @endguest
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Page Content -->
            <main>
                 @yield('content')
            </main>
            
        </div>
        @include('footer.footer')
        
         <!-- JavaScript Libraries -->
        <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
        <script src="{{asset('custom/lib/slick/slick.min.js')}}"></script>
        <script src="{{asset('custom/lib/isotope/isotope.pkgd.min.js')}}"></script>
        <script src="{{asset('custom/lib/lightbox/js/lightbox.min.js')}}"></script>

        <!-- Template Javascript -->
        <script src="{{asset('custom/js/main.js')}}"></script>
        <script type="text/javascript" src="{{asset('custom/DataTables/datatables.min.js')}}"></script>
        <script >
		$(document).ready( function () {
		    $('#enquiries').DataTable();
		} );
		</script>
    </body>
</html>
