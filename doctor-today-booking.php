<?php include('inc/header-doctor-after-login.php'); ?> 
	
	<section class="angel_health_content dr-dashboard">
		<div class="container">
			<div class="row">
				<div class="col-md-4">
				
				<?php include('inc/doctor-sidebar.php'); ?> 
				
				
				</div>
					
					
				<div class="col-md-8">
				
				<div class="doctor-staus">
				
				<h4>Dashboard</h4>
				
				<div class="row">
				<div class="col-md-4">
				
				<div class="progress1">
					<div class="loader">
						<div class="progress blue"> <span class="progress-left"> <span class="progress-bar"></span>
						</span> <span class="progress-right"> <span class="progress-bar"></span> </span>
						<div class="progress-value"><img src="images/patient.png"></div>
						</div>
					</div>
					
					<div class="loader-content">
						<h5>Total Patient</h5>
						<h4>1500</h4>
						<p>Till Today</p>
					</div>
				</div>
				</div>
				
				<div class="col-md-4">
				
				<div class="progress1">
					<div class="loader">
						<div class="progress green"> <span class="progress-left"> <span class="progress-bar"></span>
						</span> <span class="progress-right"> <span class="progress-bar"></span> </span>
						<div class="progress-value"><img src="images/patient1.png"></div>
						</div>
					</div>
					
					<div class="loader-content">
						<h5>Total Patient</h5>
						<h4>1500</h4>
						<p>Till Today</p>
					</div>
				</div>
				</div>
				
				<div class="col-md-4">
				
				<div class="progress1">
					<div class="loader">
						<div class="progress dark-blue"> <span class="progress-left"> <span class="progress-bar"></span>
						</span> <span class="progress-right"> <span class="progress-bar"></span> </span>
						<div class="progress-value"><img src="images/patient2.png"></div>
						</div>
					</div>
					
					<div class="loader-content">
						<h5>Total Patient</h5>
						<h4>1500</h4>
						<p>Till Today</p>
					</div>
				</div>
				</div>
				
				
				</div>
				
				
				<h4>Patient Appointments</h4> 

			<div class="nav_patient mt-4">
			
			<ul class="nav_patient_tab">
			<li><a href="doctor-dashboard.php" >Upcoming</a></li>
			<li><a href="doctor-today-booking.php" class="active" >Today</a></li>
			</ul>
			
			</div>
       
				
				
		<div class="booking-area table-responsive">
		
		<table class="table table-hover">
		  <thead>
			<tr>
			  <th scope="col">Patient Name</th>
			  <th scope="col">Appt Date</th>
			  <th scope="col">Purpose</th>
			  <th scope="col">Type</th>
			  <th scope="col">Paid Amount</th>
			  <th scope="col">Status</th>
			</tr>
		  </thead>
		  <tbody>
			<tr>
			  <td>
				  <div class="user_detail">
				  <div class="user_img"><img src="images/dr_img.png"></div>
				  <div class="user_detail">
					<p>George Anderson<span>#PT0016</span></p>
				  </div>
				  </div>
			  </td>
			  
			  <td><p class="apt_date">14 Nov 2019<span>10:00 AM</span></p></td>
			  <td>General</td>
			  <td>Patient</td>
			  <td>$200</td>
			  <td>
				  <p class="apt-btn">
				  <a href="#" class="acpt_req" data-toggle="modal" data-target="#exampleModal"><i class="fa fa-check" aria-hidden="true"></i> Accept</a>
				  <a href="#" class="cancel_req" data-toggle="modal" data-target="#exampleModal1"><i class="fa fa-times" aria-hidden="true"></i> Cancel</a>
				  </p>
			  </td>
			</tr>
			
			<tr>
			  <td>
				  <div class="user_detail">
				  <div class="user_img"><img src="images/dr_img.png"></div>
				  <div class="user_detail">
					<p>George Anderson<span>#PT0016</span></p>
				  </div>
				  </div>
			  </td>
			  
			  <td><p class="apt_date">14 Nov 2019<span>10:00 AM</span></p></td>
			  <td>General</td>
			  <td>Patient</td>
			  <td>$200</td>
			  <td>
				  <p class="apt-btn">
				  <a href="#" class="acpt_req" data-toggle="modal" data-target="#exampleModal"><i class="fa fa-check" aria-hidden="true"></i> Accept</a>
				  <a href="#" class="cancel_req" data-toggle="modal" data-target="#exampleModal1"><i class="fa fa-times" aria-hidden="true"></i> Cancel</a>
				  </p>
			  </td>
			</tr>
			
			<tr>
			  <td>
				  <div class="user_detail">
				  <div class="user_img"><img src="images/dr_img.png"></div>
				  <div class="user_detail">
					<p>George Anderson<span>#PT0016</span></p>
				  </div>
				  </div>
			  </td>
			  
			  <td><p class="apt_date">14 Nov 2019<span>10:00 AM</span></p></td>
			  <td>General</td>
			  <td>Patient</td>
			  <td>$200</td>
			  <td>
				  <p class="apt-btn">
				  <a href="#" class="acpt_req" data-toggle="modal" data-target="#exampleModal"><i class="fa fa-check" aria-hidden="true"></i> Accept</a>
				  <a href="#" class="cancel_req" data-toggle="modal" data-target="#exampleModal1"><i class="fa fa-times" aria-hidden="true"></i> Cancel</a>
				  </p>
			  </td>
			</tr>
			
			<tr>
			  <td>
				  <div class="user_detail">
				  <div class="user_img"><img src="images/dr_img.png"></div>
				  <div class="user_detail">
					<p>George Anderson<span>#PT0016</span></p>
				  </div>
				  </div>
			  </td>
			  
			  <td><p class="apt_date">14 Nov 2019<span>10:00 AM</span></p></td>
			  <td>General</td>
			  <td>Patient</td>
			  <td>$200</td>
			  <td>
				  <p class="apt-btn">
				  <a href="#" class="acpt_req" data-toggle="modal" data-target="#exampleModal"><i class="fa fa-check" aria-hidden="true"></i> Accept</a>
				  <a href="#" class="cancel_req" data-toggle="modal" data-target="#exampleModal1"><i class="fa fa-times" aria-hidden="true"></i> Cancel</a>
				  </p>
			  </td>
			</tr>
			
			<tr>
			  <td>
				  <div class="user_detail">
				  <div class="user_img"><img src="images/dr_img.png"></div>
				  <div class="user_detail">
					<p>George Anderson<span>#PT0016</span></p>
				  </div>
				  </div>
			  </td>
			  
			  <td><p class="apt_date">14 Nov 2019<span>10:00 AM</span></p></td>
			  <td>General</td>
			  <td>Patient</td>
			  <td>$200</td>
			  <td>
				  <p class="apt-btn">
				  <a href="#" class="acpt_req" data-toggle="modal" data-target="#exampleModal"><i class="fa fa-check" aria-hidden="true"></i> Accept</a>
				  <a href="#" class="cancel_req" data-toggle="modal" data-target="#exampleModal1"><i class="fa fa-times" aria-hidden="true"></i> Cancel</a>
				  </p>
			  </td>
			</tr>
			
			<tr>
			  <td>
				  <div class="user_detail">
				  <div class="user_img"><img src="images/dr_img.png"></div>
				  <div class="user_detail">
					<p>George Anderson<span>#PT0016</span></p>
				  </div>
				  </div>
			  </td>
			  
			  <td><p class="apt_date">14 Nov 2019<span>10:00 AM</span></p></td>
			  <td>General</td>
			  <td>Patient</td>
			  <td>$200</td>
			  <td>
				  <p class="apt-btn">
				  <a href="#" class="acpt_req" data-toggle="modal" data-target="#exampleModal"><i class="fa fa-check" aria-hidden="true"></i> Accept</a>
				  <a href="#" class="cancel_req" data-toggle="modal" data-target="#exampleModal1"><i class="fa fa-times" aria-hidden="true"></i> Cancel</a>
				  </p>
			  </td>
			</tr>
			
			<tr>
			  <td>
				  <div class="user_detail">
				  <div class="user_img"><img src="images/dr_img.png"></div>
				  <div class="user_detail">
					<p>George Anderson<span>#PT0016</span></p>
				  </div>
				  </div>
			  </td>
			  
			  <td><p class="apt_date">14 Nov 2019<span>10:00 AM</span></p></td>
			  <td>General</td>
			  <td>Patient</td>
			  <td>$200</td>
			  <td>
				  <p class="apt-btn">
				  <a href="#" class="acpt_req" data-toggle="modal" data-target="#exampleModal"><i class="fa fa-check" aria-hidden="true"></i> Accept</a>
				  <a href="#" class="cancel_req" data-toggle="modal" data-target="#exampleModal1"><i class="fa fa-times" aria-hidden="true"></i> Cancel</a>
				  </p>
			  </td>
			</tr>
			

			
			
		  </tbody>
		</table>
		
		
		
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