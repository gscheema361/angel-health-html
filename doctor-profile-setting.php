<?php include('inc/header-doctor-after-login.php'); ?> 
	
	<section class="angel_health_content dr-dashboard">
		<div class="container">
			<div class="row">
				<div class="col-md-4">
				
				<?php include('inc/doctor-sidebar.php'); ?> 
				
				
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
				
				
				<div class="clinic_img d-flex align-items-center"><p>Drop files here to upload</p></div>
				
				<div class="cleanic_img mt-4 mb-4">
				
				<img src="images/feature-01.png" class="img-fluid"> <img src="images/feature-01.png" class="img-fluid">
				
				
				</div>
				
				<h4>Contact Details</h4>
				
				<div class="row">
					<div class="col-sm-12">
					  <input type="text" class="form-control" placeholder="Address Line 1">
					</div>
				
				</div>
				
				<div class="row">
					<div class="col-sm-12">
					  <input type="text" class="form-control" placeholder="Address Line 2">
					</div>
				
				</div>
				
				
				<div class="row">
					<div class="col-sm-6">
					  <input type="text" class="form-control" placeholder="City">
					</div>
					<div class="col-sm-6">
					  <input type="text" class="form-control" placeholder="State / Province">
					</div>
				</div>
				
				<div class="row">
					<div class="col-sm-6">
					  <input type="text" class="form-control" placeholder="Country">
					</div>
					<div class="col-sm-6">
					  <input type="text" class="form-control" placeholder="Postal Code">
					</div>
				</div>
				
				<h4>Pricing</h4>
				
				
				<div class="row">
				<div class="col-sm-12">
					<div class="form-check form-check-inline">
					  <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1">
					  <label class="form-check-label" for="inlineRadio1">Free</label>
					</div>
					<div class="form-check form-check-inline">
					  <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2">
					  <label class="form-check-label" for="inlineRadio2">Custom Price (per hour)</label>
					</div>
					</div>
				</div>
				
				<div class="row">
					<div class="col-sm-6">
					  <input type="text" class="form-control" placeholder="20">
					  <small class="form-text text-muted">Custom price you can add</small>
					</div>
					<div class="col-sm-6">
					  
					</div>
				</div>
				
				
				<h4 class="mt-3">Services and Specialization</h4>
				
				<div class="row">
					<div class="col-sm-12">
					  <input type="text" class="form-control" placeholder="Services">
					  <small class="form-text text-muted">Note : Type & Press enter to add new services</small>
					</div>
					
					<div class="col-sm-12">
					  <input type="text" class="form-control" placeholder="Specialization">
					  <small class="form-text text-muted">Note : Type & Press enter to add new specialization</small>
					</div>
				</div>
				
				
				<h4 class="mt-3">Education</h4>
				
				<div class="row">
					<div class="col-sm-6">
					  <input type="text" class="form-control" placeholder="Degree">
					</div>
					
					<div class="col-sm-6">
					  <input type="text" class="form-control" placeholder="College/Institute">
					</div>
					
					<div class="col-sm-6">
					  <input type="text" class="form-control" placeholder="Year of Completion">
					</div>
					
					<div class="col-sm-6">
					 
					</div>
					
					<p class="add_more"><a href="#"><i class="fa fa-plus-circle" aria-hidden="true"></i> Add More</a></p>
					
				</div>
				
				
				<h4 class="mt-3">Experience</h4>
				
				<div class="row">
					<div class="col-sm-6">
					  <input type="text" class="form-control" placeholder="Hospital Name">
					</div>
					
					<div class="col-sm-6">
					  <input type="text" class="form-control" placeholder="Designation">
					</div>
					
					<div class="col-sm-6">
					  <input type="text" class="form-control" placeholder="From">
					</div>
					
					<div class="col-sm-6">
					 <input type="text" class="form-control" placeholder="To">
					</div>
					
					<p class="add_more"><a href="#"><i class="fa fa-plus-circle" aria-hidden="true"></i> Add More</a></p>
					
				</div>
				
				
				<h4 class="mt-3">Awards</h4>
				
				<div class="row">
					<div class="col-sm-6">
					  <input type="text" class="form-control" placeholder="Awards">
					</div>
					
					<div class="col-sm-6">
					  <input type="text" class="form-control" placeholder="Year">
					</div>
					
					
					<p class="add_more"><a href="#"><i class="fa fa-plus-circle" aria-hidden="true"></i> Add More</a></p>
					
				</div>
				
				<h4 class="mt-3">Registrations</h4>
				
				<div class="row">
					<div class="col-sm-6">
					  <input type="text" class="form-control" placeholder="Registrations">
					</div>
					
					<div class="col-sm-6">
					  <input type="text" class="form-control" placeholder="Year">
					</div>
					
					
					<p class="add_more"><a href="#"><i class="fa fa-plus-circle" aria-hidden="true"></i> Add More</a></p>
					
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