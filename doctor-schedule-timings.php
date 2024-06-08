<?php include('inc/header-doctor-after-login.php'); ?> 
	
	<section class="angel_health_content dr-dashboard">
		<div class="container">
			<div class="row">
				<div class="col-md-4">
				
				<?php include('inc/doctor-sidebar.php'); ?> 
				
				
				</div>
					
					
				<div class="col-md-8">
				
				<div class="doctor-staus">
				
				<h4>Schedule Timings</h4>
				
				<div class="area_wh_bg">
				
				<div class="row">
				
				<div class="col-md-12">
				
				<div class="sechudle-time">
				
				<h4>Schedule Timings</h4>
				<h5>Timing Slot Duration</h5>
				
				<div class="form-group select_time mt-4">
					<select class="form-control">
					 <option selected>Select time</option>
					  <option>10</option>
					  <option>20</option>
					  <option>30</option>
					  <option>40</option>
					  <option>50</option>
					</select>
				</div>
				
				
				<ul class="select-day">
				<li><a href="" class="active">Sunday</a></li>
				<li><a href="">Monday</a></li>
				<li><a href="">Tuesday</a></li>
				<li><a href="">Wednesday</a></li>
				<li><a href="">Thrusday</a></li>
				<li><a href="">Friday</a></li>
				<li><a href="">Saturday</a></li>
				</ul>
				
				<div class="time_slots">
				
				<h5>Time Slots<span> <a href="" data-toggle="modal" data-target="#exampleModaltimeslot"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</span></a></h5>
				
				<ul class="time_slots_list mt-4">
				<li><a href="">8:00 pm - 11:30 pm  <i class="fa fa-times" aria-hidden="true"></i></a></li>
				<li><a href="">8:00 pm - 11:30 pm  <i class="fa fa-times" aria-hidden="true"></i></a></li>
				<li><a href="">8:00 pm - 11:30 pm  <i class="fa fa-times" aria-hidden="true"></i></a></li>
				<li><a href="">8:00 pm - 11:30 pm  <i class="fa fa-times" aria-hidden="true"></i></a></li>
				<li><a href="">8:00 pm - 11:30 pm  <i class="fa fa-times" aria-hidden="true"></i></a></li>
				
				</ul>
				
				
				
				</div>
				
				
				
				</div>
				
				
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
<div class="modal fade" id="exampleModaltimeslot" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog tm_slot_pat" role="document">
    <div class="modal-content req_accept_pp time_sltt">
      <div class="modal-header ">
        
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true"><img src="images/close-circle.svg"></span>
        </button>
      </div>
      <div class="modal-body">
	  <h5 class="modal-title" >Edit Time Slots</h5>
      
	  <div class="row mt-4">
	  
	  <div class="col-md-5">
		  <div class="form-group select_time">
			<select class="form-control">
			 <option selected="">Start time</option>
			  <option>10</option>
			  <option>20</option>
			  <option>30</option>
			  <option>40</option>
			  <option>50</option>
			</select>
		 </div>
	  </div>
	  
	   <div class="col-md-5">
	   
	    <div class="form-group select_time">
			<select class="form-control">
			 <option selected="">End time</option>
			  <option>10</option>
			  <option>20</option>
			  <option>30</option>
			  <option>40</option>
			  <option>50</option>
			</select>
		 </div>
	   
	   </div>
	   <div class="col-md-2"></div>
	  
	  </div>
	  
	   <div class="row">
	  
	  <div class="col-md-5">
		  <div class="form-group select_time">
			<select class="form-control">
			 <option selected="">Start time</option>
			  <option>10</option>
			  <option>20</option>
			  <option>30</option>
			  <option>40</option>
			  <option>50</option>
			</select>
		 </div>
	  </div>
	  
	   <div class="col-md-5">
	   
	    <div class="form-group select_time">
			<select class="form-control">
			 <option selected="">End time</option>
			  <option>10</option>
			  <option>20</option>
			  <option>30</option>
			  <option>40</option>
			  <option>50</option>
			</select>
		 </div>
	   
	   </div>
	   <div class="col-md-2">
	   
	   <div class="delete_time"><a href="#" class="dlt_iicon"><i class="fa fa-trash-o" aria-hidden="true"></i></a></div>
	   
	   </div>
	  
	  </div>
	  
	  <div class="row">
	  
	  <div class="col-md-5">
		  <div class="form-group select_time">
			<select class="form-control">
			 <option selected="">Start time</option>
			  <option>10</option>
			  <option>20</option>
			  <option>30</option>
			  <option>40</option>
			  <option>50</option>
			</select>
		 </div>
	  </div>
	  
	   <div class="col-md-5">
	   
	    <div class="form-group select_time">
			<select class="form-control">
			 <option selected="">End time</option>
			  <option>10</option>
			  <option>20</option>
			  <option>30</option>
			  <option>40</option>
			  <option>50</option>
			</select>
		 </div>
	   
	   </div>
	   <div class="col-md-2">
	   
	   <div class="delete_time"><a href="#" class="dlt_iicon"><i class="fa fa-trash-o" aria-hidden="true"></i></a></div>
	   
	   </div>
	  
	  </div>
	  
	  <p class="add_mr_tm"><a href="#"><i class="fa fa-plus-circle" aria-hidden="true"></i> Add More</a></p>
	  
	   
	   <p> <a href="#" class="custombtn mr-3" data-dismiss="modal">Save Changes</a>  </p>
	   
	  
	   
      </div>
    </div>
  </div>
</div>




	
<?php include('inc/footer.php'); ?> 