<?php include('inc/header.php'); ?> 


<section>
	<div class="container">
		<div class="row">
			<div class="col-md-12 dr-top-dtl">
				<div class="row">
					<div class="col-md-3">
					<div class="dr-tl-pic">
						<img class="img-fluid" src="images/dr-1.png">
					</div>
				</div>
				<div class="col-md-4">
					<div class="dr-tl-txt">
						<h4>Dr. Ruby Perrin</h4>
						<p>MBBS, MD - General Medicine, DNB - Cardiology</p>
						<div class="social">
							<span>
								<i class="fa fa-star" aria-hidden="true"></i>
								<i class="fa fa-star" aria-hidden="true"></i>
								<i class="fa fa-star" aria-hidden="true"></i>
								<i class="fa fa-star" aria-hidden="true"></i>
								<i class="fa fa-star" aria-hidden="true"></i>
							<span>  (35)
						</div>
						<label class="flora"> <i class="fa fa-map-marker" aria-hidden="true"></i> Florida, USA <span>Get Directions </span> </label>
					</div>
				</div>
				<div class="col-md-5">
						<div class="social-feed">
							<div class="right-hrs">
								<label> <i class="fa fa-map-marker" aria-hidden="true"></i> 35 Feedback </label>
								<label> <i class="fa fa-comment" aria-hidden="true"></i> Florida, USA </label>
								<label> <i class="fa fa-tag" aria-hidden="true"></i>  $260 per hour </label>  
							</div>
							<ul class="fed-list">
								<li><i class="fa fa-heart" aria-hidden="true"></i></li>
								<li><i class="fa fa-comment" aria-hidden="true"></i></li>
								<li><i class="fa fa-phone" aria-hidden="true"></i></li>
								<li><i class="fa fa-video-camera" aria-hidden="true"></i></li>
								<li class="books"> <button type="button" onclick="location.href='book-appointment.php';">BOOK APPOINTMENT</button> </li>
							</ul>
						</div>
				</div>
				</div>
			</div>
			
			
			<div class="col-md-12 all-review-tabs">
				
					<ul class="nav nav-tabs" role="tablist">
						<li class="nav-item">
							<a class="nav-link active" data-toggle="tab" href="#tabs-1" role="tab">Overview</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" data-toggle="tab" href="#tabs-2" role="tab">Reviews</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" data-toggle="tab" href="#tabs-3" role="tab">Business Hours</a>
						</li>
					</ul> <!-- Tab panes -->
					<div class="tab-content">
						<div class="tab-pane active" id="tabs-1" role="tabpanel">
							
							<div class="fst-about">
								<h2>About Me</h2>
								<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut 
									enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure 
									dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non 
									proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
							</div>
							
							
							<div class="doctor_timeline mt-4">
							<h5 class="mb-3">Education</h5>
								<div class="history-tl-container">
								  <ul class="tl">
									<li class="tl-item" ng-repeat="item in retailer_history">
									 
									  <div class="item-title">American Dental Medical University</div>
									  <div class="item-detail">BDS<br> 1998 - 2003</div>
									</li>
									<li class="tl-item" ng-repeat="item in retailer_history">
									  
									  <div class="item-title">American Dental Medical University</div>
									  <div class="item-detail">MDS<br>2003-2005</div>
									</li>
									

								  </ul>

								</div>

							</div>
							
							
							<div class="doctor_timeline mt-3">
							<h5 class="mb-3">Work & Experience</h5>
								<div class="history-tl-container">
								  <ul class="tl">
									<li class="tl-item" ng-repeat="item in retailer_history">
									 
									  <div class="item-title">Glowing Smiles Family Dental Clinic</div>
									  <div class="item-detail">2010 - Present (5 years)</div>
									</li>
									<li class="tl-item" ng-repeat="item in retailer_history">
									  
									  <div class="item-title">Comfort Care Dental Clinic</div>
									  <div class="item-detail">2007 - 2010 (3 years)</div>
									</li>
									
									<li class="tl-item" ng-repeat="item in retailer_history">
									  
									  <div class="item-title">Dream Smile Dental Practice</div>
									  <div class="item-detail">2005 - 2007 (2 years)</div>
									</li>
									

								  </ul>

								</div>

							</div>
							
							
							<div class="doctor_service mt-4">
							
							<h5 class="mb-3">Services</h5>
							
							<ul class="services_tab mt-5">
							<li><a href="#" class="service_tabs">Tooth cleaning</a></li>
							
							<li><a href="#" class="service_tabs">Root Canal Therapy</a></li>
							
							<li><a href="#" class="service_tabs">Implants</a></li>
							
							<li><a href="#" class="service_tabs">Composite Bonding</a></li>
							
							<li><a href="#" class="service_tabs">Fissure Sealants</a></li>
							
							<li><a href="#" class="service_tabs">Surgical Extractions</a></li>
							
							</ul>
							
							</div>
							
							<div class="doctor_service mt-3">
							
							<h5 class="mb-3">Specializations</h5>
							
							<ul class="services_tab mt-5">
							<li><a href="#" class="service_tabs">Children Care</a></li>
							
							<li><a href="#" class="service_tabs">Dental Care</a></li>
							
							<li><a href="#" class="service_tabs">Oral and Maxillofacial Surgery</a></li>
							
							<li><a href="#" class="service_tabs">Orthodontist</a></li>
							
							<li><a href="#" class="service_tabs">Periodontist</a></li>
							
							<li><a href="#" class="service_tabs">Prosthodontics</a></li>
							
							</ul>
							
							</div>
							
							
							
							
						</div>  <!--end-first-tab-->
						
						
						
						
						
						
						
						
						
						
						
						
						
						
						
						
						
						
						
						
						
						
						
						<div class="tab-pane" id="tabs-2" role="tabpanel">
						
							<div class="scd-coment-box">
								<div class="comment_1st_user">	
									<div class="row">
									<div class="col-md-1">
										<div class="User_cmt_img"><img src="images/doctor-thumb-01.png" class="img-fluid"></div>
									</div>
									<div class="col-md-11">
										<div class="User_cmt_text">
										<h4>Richard Wilson
										<span>
										<a href="#"><i class="fa fa-star" aria-hidden="true"></i></a>
										<a href="#"><i class="fa fa-star" aria-hidden="true"></i></a>
										<a href="#"><i class="fa fa-star" aria-hidden="true"></i></a>
										<a href="#"><i class="fa fa-star" aria-hidden="true"></i></a>
										<a href="#"><i class="fa fa-star" aria-hidden="true"></i></a>
										</span>
										</h4>
										<p class="cmt_date">Reviewed 2 Days ago</p>
										
										<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minimveniam, 
										   quis nostrud exercitation. Curabitur non nulla sit amet nisl tempus</p>
										   
										<p class="reply_cmt"><i class="fa fa-reply" aria-hidden="true"></i> Reply</p>
										
										</div>
									</div>
									</div>
								</div>
								
								
								<div class="comment_2nd_user">	
									<div class="row">
									<div class="col-md-1">
										<div class="User_cmt_img"><img src="images/dr_img.png" class="img-fluid"></div>
									</div>
									<div class="col-md-11">
										<div class="User_cmt_text">
										<h4>Richard Wilson
										<span>
										<a href="#"><i class="fa fa-star" aria-hidden="true"></i></a>
										<a href="#"><i class="fa fa-star" aria-hidden="true"></i></a>
										<a href="#"><i class="fa fa-star" aria-hidden="true"></i></a>
										<a href="#"><i class="fa fa-star" aria-hidden="true"></i></a>
										<a href="#"><i class="fa fa-star" aria-hidden="true"></i></a>
										</span>
										</h4>
										<p class="cmt_date">Reviewed 2 Days ago</p>
										
										<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minimveniam, 
										   quis nostrud exercitation. Curabitur non nulla sit amet nisl tempus</p>
										   
										<p class="reply_cmt"><i class="fa fa-reply" aria-hidden="true"></i> Reply</p>
										
										</div>
									</div>
									</div>
								</div>
								
								<hr class="dotted_line">
								
								
								<div class="comment_1st_user">	
									<div class="row">
									<div class="col-md-1">
										<div class="User_cmt_img"><img src="images/doctor-thumb-01.png" class="img-fluid"></div>
									</div>
									<div class="col-md-11">
										<div class="User_cmt_text">
										<h4>Richard Wilson
										<span>
										<a href="#"><i class="fa fa-star" aria-hidden="true"></i></a>
										<a href="#"><i class="fa fa-star" aria-hidden="true"></i></a>
										<a href="#"><i class="fa fa-star" aria-hidden="true"></i></a>
										<a href="#"><i class="fa fa-star" aria-hidden="true"></i></a>
										<a href="#"><i class="fa fa-star" aria-hidden="true"></i></a>
										</span>
										</h4>
										<p class="cmt_date">Reviewed 2 Days ago</p>
										
										<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minimveniam, 
										   quis nostrud exercitation. Curabitur non nulla sit amet nisl tempus</p>
										   
										<p class="reply_cmt"><i class="fa fa-reply" aria-hidden="true"></i> Reply</p>
										
										</div>
									</div>
									</div>
								</div>
								
								
								<hr class="dotted_line">
								
								
								<div class="comment_1st_user">	
									<div class="row">
									<div class="col-md-1">
										<div class="User_cmt_img"><img src="images/doctor-thumb-01.png" class="img-fluid"></div>
									</div>
									<div class="col-md-11">
										<div class="User_cmt_text">
										<h4>Richard Wilson
										<span>
										<a href="#"><i class="fa fa-star" aria-hidden="true"></i></a>
										<a href="#"><i class="fa fa-star" aria-hidden="true"></i></a>
										<a href="#"><i class="fa fa-star" aria-hidden="true"></i></a>
										<a href="#"><i class="fa fa-star" aria-hidden="true"></i></a>
										<a href="#"><i class="fa fa-star" aria-hidden="true"></i></a>
										</span>
										</h4>
										<p class="cmt_date">Reviewed 2 Days ago</p>
										
										<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minimveniam, 
										   quis nostrud exercitation. Curabitur non nulla sit amet nisl tempus</p>
										   
										<p class="reply_cmt"><i class="fa fa-reply" aria-hidden="true"></i> Reply</p>
										
										</div>
									</div>
									</div>
								</div>
								
							<p class="mt-5"><a href="" class="custombtn save_smm">Snow All feedback</a></p>	
							
							<hr class="dotted_line">
							
							<h5>Write a review for <span>Dr. Ruby Perrin</span></h5>
							
							<p class="give_rating">
							<span>
								<a href="#"><i class="fa fa-star" aria-hidden="true"></i></a>
								<a href="#"><i class="fa fa-star" aria-hidden="true"></i></a>
								<a href="#"><i class="fa fa-star" aria-hidden="true"></i></a>
								<a href="#"><i class="fa fa-star" aria-hidden="true"></i></a>
								<a href="#"><i class="fa fa-star" aria-hidden="true"></i></a>
							</span>
							</p>
							
							<div class="form-group mt-3">
								<textarea class="form-control add_cmt_text" rows="5">Your review</textarea>
							  </div>
							
							<p class="mt-4"><a href="" class="custombtn save_smm">Add Review</a></p>	
								
							</div> 	
						
						</div> <!--end-second-tab-->
						
						
						
						
						
						
						
						
						
						<div class="tab-pane" id="tabs-3" role="tabpanel">
							<div class="doctor_timetable">
							
							<p class="dr_tm_hd">Today<span>Open Now</span></p>
							<p class="dr_dt_tm">5 Nov 2019<span>07:00 AM - 09:00 PM</span></p>
							
							<hr>
							
							<p class="dr_tm_dd">Monday<span>07:00 AM - 09:00 PM</span></p>
							
							<p class="dr_tm_dd">Tuesday<span>07:00 AM - 09:00 PM</span></p>
							
							<p class="dr_tm_dd">Wednesday<span>07:00 AM - 09:00 PM</span></p>
							
							<p class="dr_tm_dd">Thursday<span>07:00 AM - 09:00 PM</span></p>
							
							<p class="dr_tm_dd">Friday<span>07:00 AM - 09:00 PM</span></p>
							
							<p class="dr_tm_dd">Saturday<span>07:00 AM - 09:00 PM</span></p>
							
							<p class="dr_tm_dd">Sunday<span class="col-red">Closed</span></p>
							
								
							</div>
							
							
							
						</div><!--end-third-tab-->
						
					</div>
				
			</div>
			
			
		</div>
	</div>
</section>








<?php include('inc/footer.php'); ?> 
