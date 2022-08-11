<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8"/>
  <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"/>
  <meta name="description" content=""/>
  <meta name="author" content=""/>
  <title>Ruang ZIS | Login</title>
  <!-- loader-->
  <link href="{{asset('assets1/css/pace.min.css')}}" rel="stylesheet"/>
  <script src="{{asset('assets1/js/pace.min.js')}}"></script>
  <!--favicon-->
  <link rel="icon" href="{{asset('assets1/images/log.webp')}}" type="image/log">
  <!-- Bootstrap core CSS-->
  <link href="{{asset('assets1/css/bootstrap.min.css')}}" rel="stylesheet"/>
  <!-- animate CSS-->
  <link href="{{asset('assets1/css/animate.css')}}" rel="stylesheet" type="text/css"/>
  <!-- Icons CSS-->
  <link href="{{asset('assets1/css/icons.css')}}" rel="stylesheet" type="text/css"/>
  <!-- Custom Style-->
  <link href="{{asset('assets1/css/app-style.css')}}" rel="stylesheet"/>
  
</head>

<body class="bg-theme bg-theme1">

<!-- start loader -->
   <div id="pageloader-overlay" class="visible incoming"><div class="loader-wrapper-outer"><div class="loader-wrapper-inner" ><div class="loader"></div></div></div></div>
   <!-- end loader -->

<!-- Start wrapper-->
 <div id="wrapper">
 <div class="loader-wrapper"><div class="lds-ring"><div></div><div></div><div></div><div></div></div></div>
	<div class="card card-authentication1 mx-auto my-5">
		<div class="card-body">
		 <div class="card-content p-2">
		 	<div class="text-center">
		 		<img src="{{asset('assets1/images/logo-icon.png')}}" alt="logo icon">
         <a href="{{url('/admin')}}"><b>Admin</b>LTE</a>
		 	</div>
		  <div class="card-title text-uppercase text-center py-3">Sign In</div>
		    <form action="{{route('login')}}" method="post">
          @csrf
			  <div class="form-group">
			  <label for="exampleInputUsername" class="sr-only">Email</label>
			   <div class="position-relative has-icon-right">
				  <input type="text" name="email" id="exampleInputemail" class="form-control input-shadow" placeholder="Enter email">
				  <div class="form-control-position">
					  <i class="icon-user"></i>
				  </div>
			   </div>
			  </div>
			  <div class="form-group">
			  <label for="exampleInputPassword" class="sr-only">Password</label>
			   <div class="position-relative has-icon-right">
				  <input type="password" name="password" id="exampleInputPassword" class="form-control input-shadow" placeholder="Enter Password">
				  <div class="form-control-position">
					  <i class="icon-lock"></i>
				  </div>
			   </div>
			  </div>
			 <button type="submit" class="btn btn-light btn-block">Sign In</button>
			
			  
	
    
     <!--Start Back To Top Button-->
    <a href="javaScript:void();" class="back-to-top"><i class="fa fa-angle-double-up"></i> </a>
    <!--End Back To Top Button-->
	
	<!--start color switcher-->

   
  <!--end color switcher-->
	
	</div><!--wrapper-->
	
  <!-- Bootstrap core JavaScript-->
  <script src="{{asset('assets1/js/jquery.min.js')}}"></script>
  <script src="{{asset('assets1/js/popper.min.js')}}"></script>
  <script src="{{asset('assets1/js/bootstrap.min.js')}}"></script>
	
  <!-- sidebar-menu js -->
  <script src="{{asset('assets1/js/sidebar-menu.js')}}"></script>
  
  <!-- Custom scripts -->
  <script src="{{asset('assets1/js/app-script.js')}}"></script>
  
</body>
</html>
