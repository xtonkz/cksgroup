<!------ Include the above in your HEAD tag ---------->
<!DOCTYPE html>
<html>
<head>
	<title>{{ $title }}</title>
  <link rel="icon" type="image/x-icon" href="images/company_logo/favicon.png">
   <!--Made with love by Mutiullah Samim -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
	<!--Bootsrap 4 CDN-->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
  <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
  <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
  <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <!--Fontawesome CDN-->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
  
	<!--Custom styles-->
  <link id="pagestyle" href="css/login.css" rel="stylesheet" />
  <link rel="stylesheet" href="assets/vendors/mdi/css/materialdesignicons.min.css">
</head>
<body>
<div class="container">
	<div class="d-flex justify-content-center h-100">
		<div class="card">
			<div class="card-header">
				<h3>Login</h3>
				<div class="d-flex justify-content-end social_icon">
					<img src="images/company_logo/cks_logo.png" alt="logo">
				</div>
			</div>
			<div class="card-body">
			@if ($message = Session::get('success'))
              	<div class="alert alert-success alert-dismissible fade show mt-1" role="alert" id="alert_upload">  
                <strong>{{ $message }}</strong>
                <button type="button" class="btn btn-close sm" data-dismiss="alert" aria-label="Close">
                    <strong></strong>
                </button>  
            	</div>
            @endif
            @if($errors->any())
                @foreach($errors->all() as $err)
                    <div class="alert alert-danger alert-dismissible fade show mt-1" role="alert">
                        <strong>{{ $err }}</strong>
                        <button type="button" class="btn btn-close btn-outline-danger sm" data-dismiss="alert" aria-label="Close"><i class="mdi mdi-close-octagon"></i></button>
                    </div>
                  @endforeach
            @endif
				<form action="login" method="POST" id="loginForm" name="loginForm" class="loginForm">
					@csrf
					<div class="input-group form-group">
						<div class="input-group-prepend">
							<span class="input-group-text"><i class="fas fa-user-secret"></i></span>
						</div>
						<input type="text" id="email" name="email" class="form-control" placeholder="email" autocomplete="off" required>
						
					</div>
					<div class="input-group form-group">
						<div class="input-group-prepend">
							<span class="input-group-text"><i class="fas fa-key"></i></span>
						</div>
						<input type="password" id="password" name="password" class="form-control" placeholder="password" required>
					</div>
					<!-- <div class="row align-items-center remember">
						<input type="checkbox">Remember Me
					</div> -->
					<div class="form-group">
						<button type="submit" class="btn btn-success float-right"><i class="fas fa-hand-point-right" aria-hidden="true"></i>{{ __('Login') }}</button>
                        <i class="fas fa-hand-point-left float-left d-inline" style="color:antiquewhite;padding-top:3px;padding-right:2px" aria-hidden="true"></i><a href="/">Back to Home</a>
					</div>
				</form>
			</div>
			 <div class="card-footer">
				{{-- <div class="d-flex justify-content-center links">
					Belum Mempunyai Akun?<a href="signup.html">Daftar</a>
				</div>
				<div class="d-flex justify-content-center">
					<a href="#">Forgot your password?</a>
				</div> --}}
                
			</div>
		</div>
	</div>

    
    
            
        
    
</div>
</body>

</html>