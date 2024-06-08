<?php include('inc/header-patient-after-login.php'); ?> 
	
	<section class="angel_health_content patient-dashboard">
		<div class="container">
			<div class="row">
				<div class="col-md-4">
				
				<?php include('inc/patient-sidebar.php'); ?> 
				
				
				</div>
					
					
				<div class="col-md-8">
				
				<div class="doctor-staus">
				
				<h4>Profile Settings</h4>
				
				<div class="area_wh_bg">
				
				<div class="row">
				
				<div class="col-md-12">
				
				
				<form class="pf-setting-dr">
				
				<div class="dr_user_up d-flex align-items-center">
				
				<div class="dr_img_upld">
					<img src="images/dr_img.png">
				</div>
				
				<div class="dr_up_btn">
				<p><a href="" class="custombtn1 save_smm"><i class="fa fa-upload" aria-hidden="true"></i> Upload Photo</a></p>
				
				<p>Allowed JPG, GIF or PNG. Max size of 2MB</p>
				
				
				</div>
				
				
				</div>
				
				<div class="dr_prsnl_info">
				
				<div class="row mt-5">
					<div class="col-sm-6">
					  <input type="text" class="form-control" placeholder="Username">
					</div>
					<div class="col-sm-6">
					  <input type="email" class="form-control" placeholder="Email">
					</div>
				</div>
				
				<div class="row">
					<div class="col-sm-6">
					  <input type="text" class="form-control" placeholder="First Name">
					</div>
					<div class="col-sm-6">
					  <input type="text" class="form-control" placeholder="Last Name">
					</div>
				</div>
				
				<div class="row">
					<div class="col-sm-6">
					  <input type="tel" class="form-control" placeholder="Phone Number">
					</div>
					<div class="col-sm-6">
					  <select class="form-control">
						<option selected>Select Gender</option>
						<option>Gender</option>
						<option>Male</option>
					  </select>
					</div>
				</div>
				
				
				<h4>About Me</h4>
				 
				<div class="row mb-4">
					<div class="col-sm-12">
					  <textarea class="form-control" rows="8">About</textarea>
					</div>
					
				</div>
				
				<h4>Clinic Info</h4>
				
				<div class="row">
					<div class="col-sm-6">
					  <input type="text" class="form-control" placeholder="Clinic Name">
					</div>
					<div class="col-sm-6">
					  <input type="text" class="form-control" placeholder="Clinic Address">
					</div>
				</div>
				
				
				</div>
				
				
				
				
				<p class="mt-4"><a href="" class="custombtn save_smm">Save Changes</a></p>
				
				
				</form>
				
				
				</div>
				
				</div>
				
				
				
				</div>
				
				</div>
				
				
				
					
					
				</div>
					
					
					
				</div>
			</div>
		</div>
	</section>  <!--end-section-->
	


<!--popup 1-->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content req_accept_pp">
      <div class="modal-header ">
        
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true"><img src="images/close-circle.svg"></span>
        </button>
      </div>
      <div class="modal-body">
	  <h5 class="modal-title" >Accept</h5>
       <p>Are you sure want to accept this patient?</p>
	   
	   <p> <a href="#" class="custombtn mr-3" data-dismiss="modal">Yes</a>  <a href="#" class="custombtn1" data-dismiss="modal">No</a></p>
	   
	  
	   
      </div>
    </div>
  </div>
</div>


<!--popup 2-->

<div class="modal fade" id="exampleModal1" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content req_accept_pp">
      <div class="modal-header ">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true"><img src="images/close-circle.svg"></span>
        </button>
      </div>
      <div class="modal-body">
	  <h5 class="modal-title" >Decline</h5>
       <p>Are you sure want to cancel this patient?</p>
	   
	   <p> <a href="#" class="custombtn mr-3" data-dismiss="modal">Yes</a>  <a href="#" class="custombtn1" data-dismiss="modal">No</a></p>
	   
	  
	   
      </div>
    </div>
  </div>
</div>

	
<?php include('inc/footer.php'); ?> 