<?php include('inc/header.php'); ?> 
	
	<section class="angel_health_content login_page">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<div class="login_area">
					
						<div class="login_header mb-4 mt-2">
							<p><a href="login-patient.php" class="active">Login Patients</a> <label> <a href="login-doctor.php" >Login Doctor</a></label></p>
						</div>
						
						<div class="login_input_field">
							<form class="login_form">
							
							<div class="input-group mb-4">
								  <div class="input-group-prepend">
									<span class="input-group-text icon_img"><img src="images/icon-email.svg" class="img-fluid" alt="user-icon"></span>
								  </div>
								  <input type="Email" class="form-control" placeholder="Email" >
							</div>
							
							<div class="input-group mb-4">
								  <div class="input-group-prepend">
									<span class="input-group-text icon_img"><img src="images/icon-lock.svg" class="img-fluid" alt="user-icon"></span>
								  </div>
								  <input type="password" class="form-control" placeholder="Password" >
							</div>
							
							<div class="frgt-password">
								<p class="text-right"><a href="forgot-password.php">Forgot Password?</a></p>
							</div>
							
							
							<div class="login_btn mt-4">
								<a href="index.php" class="login_button">Login</a>
							</div>
							
							
							<div class="social_login mt-5">
								<a href="#" class="fb_lgn"><i class="fa fa-facebook" aria-hidden="true"></i></a>
								<a href="#" class="ggl_lgn"><i class="fa fa-google" aria-hidden="true"></i></a>
							</div>
							
							<div class="act-or-not mt-4">
								<p>Don't have an account? <a href="signup-patient.php">Register</a></p>
							</div>
							
							
							</form>
						</div>
						
					</div>
					</div>
				</div>
			</div>
		</div>
	</section>  <!--end-section-->
	

	
<?php include('inc/footer.php'); ?> 