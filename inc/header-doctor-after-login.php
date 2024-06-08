<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style-dr.css">
	<link rel="stylesheet" href="css/style.css">
	<link rel="stylesheet" href="css/responsive.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <title>Angel-Health</title>
  </head>
  <body>

	<header>
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<nav class="navbar navbar-expand-lg navbar-light">
  <a class="navbar-brand" href="#"><img src="images/logo.png"></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent" >
    <ul class="navbar-nav ml-auto ">
      <li class="nav-item active">
        <a class="nav-link" href="index.php">Home </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="about.php">About</a>
      </li>
	   <li class="nav-item">
        <a class="nav-link" href="find-doctor.php">Find Doctor </a>
      </li>
	   <li class="nav-item">
        <a class="nav-link" href="health-news.php">Health News</a>
      </li> 
	  <li class="nav-item">
        <a class="nav-link" href="contact-us.php">Contact</a>
      </li>
     
    </ul>
	
	<div class="after_login mt-0  ml-auto">
					
					<div class="dropdown">
						  <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
							<img src="images/dr_img.png" class="img-fluid"> Dr. Ruby Perrin
						  </button>
						  <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
							<a class="dropdown-item" href="doctor-dashboard.php">Dashboard</a>
							<a class="dropdown-item" href="doctor-profile-setting.php">Profile Settings</a>
							<a class="dropdown-item" href="index.php">Logout</a>
						  </div>
						</div>
				</div>
	
   
  </div>
</nav>
				</div> 
				<!--<div class="col-md-3">
				<div class="after_login mt-3">
					
					<div class="dropdown">
						  <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
							<img src="images/dr_img.png" class="img-fluid"> Dr. Ruby Perrin
						  </button>
						  <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
							<a class="dropdown-item" href="doctor-dashboard.php">Dashboard</a>
							<a class="dropdown-item" href="doctor-profile-setting.php">Profile Settings</a>
							<a class="dropdown-item" href="index.php">Logout</a>
						  </div>
						</div>
				</div>
			</div> -->				
			</div>
		</div>
	</header>  <!-- End-Header-->
	
	
	
	<script>
	
	const drop = document.querySelector(".drop");
const dropBox = document.querySelector(".drop-box");
var state = false;
drop.addEventListener('click',show);
function show(){
    if(!state){
        document.querySelector(".drop i").classList.add("active");
        dropBox.classList.add("active");
        state = true;
    }else{
        document.querySelector(".drop i").classList.remove("active");
        dropBox.classList.remove("active");
        state = false;
    }
}
	
	</script>