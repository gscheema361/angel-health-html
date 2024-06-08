<?php include('inc/header.php'); ?> 
	
	<section class="angel_health_content dr-dashboard">
		<div class="container">
			<div class="row">
				<div class="col-md-4">
				
				<?php include('inc/doctor-sidebar.php'); ?> 
				
				
				</div>
					
					
				<div class="col-md-8">
				
				<div class="doctor-staus">
				
				<h4>Invoices</h4>
				
				<div class="area_wh_bg">
				
				<div class="row">
				<div class="col-md-6">
					<div class="invoice_design">
						<p>Invoice From  </p>
						<p class="normal">Dr. Fred Ortego <br>806 Twin Willow Lane, Old Forge,<br>
						Newyork, USA</p>
					</div>
				
				</div>
				
				<div class="col-md-6">
					<div class="invoice_design right_d">
						<p>Order : <label>#00124</label></p>
						<p >Issued : <label>20/07/2019</label></p>
					</div>
				</div>	
				</div>
				
				<div class="row mt-4">
				<div class="col-md-6">
					<div class="invoice_design">
						<p>Invoice From  </p>
						<p class="normal">Debit Card <br>XXXXXXXXXXXX-2541<br>
						HDFC Bank</p>
					</div>
				
				</div>
				
				<div class="col-md-6">
					<div class="invoice_design right_d">
						<p>Invoice To</p>
						<p class="normal">Walter Roberson <br>299 Star Trek Drive, Panama City,<br>
						Florida, 32405, USA</p>
					</div>
				</div>	
				</div>
			
				<div class="row mt-4">
				<div class="col-md-12">
					<table class="table table-bordered">
					  <thead>
						<tr>
						  <th scope="col">Description</th>
						  <th scope="col">Quantity</th>
						  <th scope="col">VAT</th>
						  <th scope="col">Total</th>
						</tr>
					  </thead>
					  <tbody>
						<tr>
						  <td>General Consultation</td>
						  <td>1</td>
						  <td>$0</td>
						  <td>$100</td>
						</tr>
						<tr>
						  <td>Video Call Booking</td>
						  <td>1</td>
						  <td>$0</td>
						  <td>$250</td>
						</tr>
					  </tbody>
					</table>
				
				</div>

				</div>
				
				<div class="row mt-4">
				<div class="col-md-7">
					
				</div>
				
				<div class="col-md-5">
					<div class="invoice_design right_r">
						<p>Subtotal:<span>$350</span></p>
						
						<p>Discount:<span>-$10</span></p>
						
						<p>Total Amount:<span>$315</span></p>
						
					</div>
				</div>	
				</div>
				
				<div class="row mt-4">

				
				<div class="col-md-12">
					<div class="invoice_design">
						<p>Other information </p>
					</div>
					
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus sed dictum ligula, cursus blandit risus. Maecenas eget metus 
non tellus dignissim aliquam ut a ex. Maecenas sed vehicula dui, ac suscipit lacus. Sed finibus leo vitae lorem interdum, eu 
scelerisque tellus fermentum. Curabitur sit amet lacinia lorem. Nullam finibus pellentesque libero.</p>
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