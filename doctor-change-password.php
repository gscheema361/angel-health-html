<?php include('inc/header-doctor-after-login.php'); ?> 
	
	<section class="angel_health_content dr-dashboard">
		<div class="container">
			<div class="row">
				<div class="col-md-4">
				
				<?php include('inc/doctor-sidebar.php'); ?> 
				
				
				</div>
					
					
				<div class="col-md-8">
				
				<div class="doctor-staus">
				
				<h4>Change Password</h4>
				
				<div class="area_wh_bg">
				
				<div class="row">
				
				<div class="col-md-12">
				
				
				<form class="social_media">
				
				<div class="input-group mb-4">
				  <input type="text" class="form-control" placeholder="Old Password">
				</div>
				
				<div class="input-group mb-4">
				  <input type="text" class="form-control" placeholder="New Password">
				</div>
				
				<div class="input-group mb-4">
				  <input type="text" class="form-control" placeholder="Confirm Password">
				</div>
				
				
				<p><a href="" class="custombtn save_smm">Save Changes</a></p>
				
				
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