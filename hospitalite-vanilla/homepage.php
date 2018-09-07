<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}" class="no-js">
<head>
	<!-- Mobile Specific Meta -->
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<!-- Favicon-->
	<link rel="shortcut icon" href="img/fav.png">
	<!-- Author Meta -->
	<meta name="author" content="Colorlib">
	<!-- Meta Description -->
	<meta name="description" content="">
	<!-- Meta Keyword -->
	<meta name="keywords" content="">
	<!-- meta character set -->
	<meta charset="UTF-8">
	<!-- Site Title -->
	<title>Medical</title>

	<link href="https://fonts.googleapis.com/css?family=Poppins:100,200,400,300,500,600,700" rel="stylesheet">
	<!--
	CSS
	============================================= -->
	<link rel="stylesheet" href="../home/css/linearicons.css">
	<link rel="stylesheet" href="../bs4/dist/css/bootstrap.min.css">
	<link rel="stylesheet" href="../home/css/font-awesome.min.css">
	<link rel="stylesheet" href="../home/css/magnific-popup.css">
	<link rel="stylesheet" href="../home/css/nice-select.css">
	<link rel="stylesheet" href="https://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
	<link rel="stylesheet" href="../home/css/bootstrap.css">
	<link rel="stylesheet" href="../home/css/main.css">
	<link rel="stylesheet" href="../home/fonts/flaticon/font/flaticon.css">
	<!-- Material Design Bootstrap -->
	<link href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.5.4/css/mdb.min.css" rel="stylesheet">
</head>
<body>

	<!-- Start Header Area -->
	<header class="default-header">
		<div class="container">
			<div class="header-wrap">
				<div class="header-top d-flex justify-content-between align-items-center">
					<div class="logo">
						<a href="#home"><img src="img/logo.png" alt=""></a>
					</div>
					<div class="main-menubar d-flex align-items-center">
						<nav class="hide">
							<a href="#home">Home</a>
							<a href="#service">Services</a>
							<a href="#appoinment">Contact Us</a>
							<a href="#TandS">Trainings and Seminars</a>
							<a href="#consultant">Members</a>
							<a href="#News">News</a>
							<a href="#">Faqs</a>
							<a href="#" data-toggle="modal" data-target="#modalLRForm">Sign Up/Login</a>
						</nav>
						<div class="menu-bar"><span class="lnr lnr-menu"></span></div>
					</div>
				</div>
			</div>
		</div>
	</header>
	<!-- End Header Area -->

	<!-- start banner Area -->
	<section class="banner-area relative" id="home">
		<div class="container">
			<div class="row fullscreen align-items-center justify-content-center">
				<div class="banner-content col-lg-6 col-md-12">
					<div class="card p-4">
						<h1 class="text-uppercase">
							<?php
							include("connections.php");
							$qryBannerTextdescription = mysqli_query($connections,"SELECT * FROM tblhomecontent WHERE txtTitle = 'Banner Text Description' ");
							$qryBannerText = mysqli_query($connections,"SELECT * FROM tblhomecontent WHERE txtTitle = 'Banner Text' ");

							if(mysqli_num_rows($qryBannerTextdescription) > 0){
								while($row = mysqli_fetch_assoc($qryBannerTextdescription)){
									$bannertextdescription = $row['txtDescription'];
									$id = $row["intHomeContentId"];
								}
							}else{
								echo "No Description";
							}

							if(mysqli_num_rows($qryBannerText) > 0){
								while($row2 = mysqli_fetch_assoc($qryBannerText)){
									$bannertext = $row2['txtDescription'];
									$id2 = $row2["intHomeContentId"];
								}
							}
							else{
								echo "No title";
							}
							?>
							<?php echo $bannertext; ?>
						</h1>
						<button type='button' class='btn btn-secondary' data-toggle='modal' data-target='#editmodal' data-id='<?php echo $id2;?>'>Edit</button>
					</div>
					<div class="card p-4 mt-3">
						<p>
							<?php echo $bannertextdescription; ?>
							<button type='button' class='btn btn-secondary' data-toggle='modal' data-target='#editmodal' data-id='<?php echo $id;?>'>Edit</button>
						</p>
					</div>

					<button class="primary-btn2 mt-20 text-uppercase ">Get Started<span class="lnr lnr-arrow-right"></span></button>
				</div>
				<div class="col-lg-6 d-flex align-self-end img-right">
					<img class="img-fluid" src="img/header-img.png" alt="">
				</div>
			</div>
		</div>
	</section>
	<!-- End banner Area -->

	<!-- Start feature Area -->
	<section class="feature-area section-gap" id="service">
		<div class="container">
			<div class="col-md-12 pb-80 header-text text-center">
				<div class="card">
					<h1>Services</h1>
					<?php
					include("connections.php");

					$qryServicesDesc = mysqli_query($connections,"SELECT * FROM tblhomecontent WHERE txtTitle = 'Services Description'");
					if(mysqli_num_rows($qryServicesDesc) > 0){
						while($row3 = mysqli_fetch_assoc($qryServicesDesc)){
							$ServicesDesc = $row3['txtDescription'];
							$id3 = $row3["intHomeContentId"];
						}
					}else{
						echo "No Description";
					}
					?>
					<p>
						<?php echo $ServicesDesc; ?>
						<button type='button' class='btn btn-secondary' data-toggle='modal' data-target='#editmodal' data-id='<?php echo $id3;?>'>Edit</button>
					</p>
				</div>
			</div>

			<div class="row">

				<?php
				include("connections.php");

				$qryServices = mysqli_query($connections,"SELECT * FROM tblservices");

				if(mysqli_num_rows($qryServices) > 0){
					while($row4 = mysqli_fetch_assoc($qryServices)){
						$servicename = $row4["strServiceName"];
						$servicedescription = $row4["txtServiceDescription"];
						?>

						<div class="single-feature d-flex flex-row col-md-6">
							<div class="icon">
								<span class="lnr lnr-heart-pulse"></span>
							</div>
							<div class="desc">
								<h4 class="text-uppercase"><?php echo $servicename; ?></h4>
								<p>
									<?php echo $servicedescription; ?>
								</p>
							</div>
						</div>

						<?php
					}
				}
				else{
					echo "No Services";
				}
				?>


			</div>
		</div>
	</section>
	<!-- End feature Area -->


	<!-- Start fact Area -->
	<section class="facts-area pt-100 pb-100">
		<div class="container">
			<div class="row">
				<div class="col-lg-3 col-md-6 single-fact">
					<h2 class="counter">2536</h2>
					<p class="text-uppercase">Clients Served</p>
				</div>
				<div class="col-lg-3 col-md-6 single-fact">
					<h2 class="counter">6784</h2>
					<p class="text-uppercase">X-rays Done</p>
				</div>
				<div class="col-lg-3 col-md-6 single-fact">
					<h2 class="counter">1059</h2>
					<p class="text-uppercase">Worldwide stuff</p>
				</div>
				<div class="col-lg-3 col-md-6 single-fact">
					<h2 class="counter">2239</h2>
					<p class="text-uppercase">Lives Saved</p>
				</div>
			</div>
		</div>
	</section>
	<!-- end fact Area -->

	<!-- Start blog Area -->
	<section class="blog-area section-gap" id="News">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-md-8 pb-30 header-text">
					<div class="card p-3">
						<h1>Trainings and Seminars</h1>
						<?php
						include("connections.php");
						$qryEventTextdescription = mysqli_query($connections,"SELECT * FROM tblhomecontent WHERE txtTitle = 'Training and Seminar Description' ");

						if(mysqli_num_rows($qryEventTextdescription) > 0){
							while($row5 = mysqli_fetch_assoc($qryEventTextdescription)){
								$EventTextdescription = $row5['txtDescription'];
								$id5 = $row5["intHomeContentId"];
							}
						}else{
							echo "No Description";
						}
						?>
						<p>
							<?php echo $EventTextdescription; ?>
							<button type='button' class='btn btn-secondary' data-toggle='modal' data-target='#editmodal' data-id='<?php echo $id5;?>'>Edit</button>
						</p>
					</div>
				</div>
			</div>

			<div class="row">
				<?php
				include("connections.php");

				$qryEvent = mysqli_query($connections,"SELECT td.intEventId, DATEDIFF(datDateStart, NOW()) as status, strEventName, txtEventLocation, txtEventDesc, intEventCapacity, datPaymentDue, datDateStart, datDateEnd, timTimeStart, timTimeEnd FROM tblevent te JOIN tbldate td ON te.intEventId = td.intEventId");

				if(mysqli_num_rows($qryEvent) > 0){
					while($row6 = mysqli_fetch_assoc($qryEvent)){
						$eventname = $row6["strEventName"];
						$location = $row6["txtEventLocation"];
						$desc = $row6["txtEventDesc"];
						?>

						<div class="single-blog col-lg-4 col-md-4">

							<img class="f-img img-fluid mx-auto" src="img/b1.jpg" alt="">
							<h4>
								<a href="#"><?php echo $eventname;?></a>
							</h4>
							<p>
								<?php echo $desc;?>
							</p>
							<div class="bottom d-flex justify-content-between align-items-center flex-wrap">
								<div>
									<img class="img-fluid" src="img/user.png" alt="">
									<a href="#"><span><?php echo $location;?></span></a>
								</div>

							</div>
						</div>
						<?php
					}
				}else{
					echo "No events";
				}
				?>
			</div>
		</div>
	</section>
	<!-- end blog Area -->

	<!-- Start about Area -->
	<section class="about-area" id="appoinment">

		<div class="container-fluid">
			<div class="row d-flex justify-content-end align-items-center">
				<div class="row">
					<div class="col-lg-2  col-md-6">
					</div>
					<div class="col-lg-4  col-md-6">
						<div class="single-footer-widget mail-chimp">
							<?php
							include("connections.php");
							$qrycontactus = mysqli_query($connections,"SELECT * FROM tblhomecontent WHERE txtTitle = 'Contact Us Description' ");
							$qrycontactnumber = mysqli_query($connections,"SELECT * FROM tblhomecontent WHERE txtTitle = 'Contact Number' ");
							if(mysqli_num_rows($qrycontactus) > 0){
								while($row7 = mysqli_fetch_assoc($qrycontactus)){
									$ContactDesc = $row7['txtDescription'];
									$id7 = $row7["intHomeContentId"];
								}
							}else{
								echo "No Description";
							}

							if(mysqli_num_rows($qrycontactnumber) > 0){
								while($row8 = mysqli_fetch_assoc($qrycontactnumber)){
									$ContactNumber = $row8['txtDescription'];
									$id8 = $row8["intHomeContentId"];
								}
							}else{
								echo "No Description";
							}
							?>
							<h6 class="mb-20">Contact Us</h6>
							<div class="card">
								<p>
									<?php echo $ContactDesc;?>
									<button type='button' class='btn btn-secondary' data-toggle='modal' data-target='#editmodal' data-id='<?php echo $id7;?>'>Edit</button>
								</p>
							</div>
							<div class="card mt-3">
								<h3><?php echo $ContactNumber;?></h3>
								<button type='button' class='btn btn-secondary' data-toggle='modal' data-target='#editmodal' data-id='<?php echo $id8;?>'>Edit</button>
							</div>


						</div>
					</div>

					<div class="col-lg-6 col-md-12 about-right no-padding">
						<div class="header">
							<h1> Message Us!</h1>
							<div class="muted small">
								<a href="#foot">Click for more Information!</a>
							</div>
						</div>


						<form class="booking-form" id="myForm" action="#">
							<div class="row">
								<div class="col-lg-12 d-flex flex-column">
									<input name="name" placeholder="Name" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Patient name'" class="form-control mt-20" required="" type="text" required>
								</div>
								<div class="col-lg-6 d-flex flex-column">
									<input name="phone" placeholder="Phone" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Phone'" class="form-control mt-20" required="" type="text" required>
								</div>
								<div class="col-lg-6 d-flex flex-column">
									<input name="email" placeholder="Email" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Email'" class="form-control mt-20" required="" type="text" required>
								</div>
								<div class="col-lg-12 flex-column">
									<textarea class="form-control mt-20" name="message" placeholder="Message" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Messege'" required=""></textarea>
								</div>

								<div class="col-lg-12 d-flex justify-content-end send-btn">
									<button class="submit-btn primary-btn mt-20 text-uppercase ">Send Message<span class="lnr lnr-arrow-right"></span></button>
								</div>

								<div class="alert-msg"></div>
							</div>
						</form>
					</div>

				</div>
			</div>
		</div>
	</div>
</section>
<!-- End about Area -->


<!-- start footer Area -->
<footer class="footer-area section-gap" id="foot">
	<div class="container">


		<div class="row footer-bottom d-flex justify-content-between">
			<p class="col-lg-8 col-sm-12 footer-text m-0">
				<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
				Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
				<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
			</p>
			<div class="col-lg-4 col-sm-12 footer-social">
				<a href="#"><i class="fa fa-facebook"></i></a>
				<a href="#"><i class="fa fa-twitter"></i></a>
				<a href="#"><i class="fa fa-dribbble"></i></a>
				<a href="#"><i class="fa fa-behance"></i></a>
			</div>
		</div>
	</div>
</footer>
<!-- End footer Area -->


<!-- Modal -->
<div class="modal fade" id="ClassModal" tabindex="-1" role="dialog" aria-labelledby="ClassModal" aria-hidden="true">
	<div class="modal-dialog modal-dialog-centered modal-lg" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="ClassModal">Add Class Data</h5>
				<button type="button" class="close text-dark" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body">

				<div class="container">


					<div class="col-md-12">
						<label for="ClassName">Class Name</label>
						<input type="text" class="form-control" id="ClassName" placeholder="....">
					</div>
				</div>

			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-outline-dark" data-dismiss="modal">Close</button>
				<button type="button" class="btn btn-outline-danger">Confirm</button>
			</div>
		</div>
	</div>
</div>


<!--Modal: Login / Register Form-->
<div class="modal fade" id="modalLRForm" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	<div class="modal-dialog cascading-modal" role="document">
		<!--Content-->
		<div class="modal-content">

			<!--Modal cascading tabs-->
			<div class="modal-c-tabs">

				<!-- Nav tabs -->
				<ul class="nav nav-tabs tabs-2 blue-grey darken-3" role="tablist">
					<li class="nav-item">
						<a class="nav-link active" data-toggle="tab" href="#panel7" role="tab"><i class=""></i> Login</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" data-toggle="tab" href="#panel8" role="tab"><i class=""></i> Register</a>
					</li>
				</ul>

				<!-- Tab panels -->
				<div class="tab-content">
					<!--Panel 7-->
					<div class="tab-pane fade in show active" id="panel7" role="tabpanel">

						<!--Body-->
						<div class="modal-body mb-1">
							<div class="md-form form-sm mb-5">
								<i class="prefix"></i>
								<input type="email" id="modalLRInput10" class="form-control form-control-sm validate">
								<label data-error="wrong" data-success="right" for="modalLRInput10">Email</label>
							</div>

							<div class="md-form form-sm mb-4">
								<i class="prefix"></i>
								<input type="password" id="modalLRInput11" class="form-control form-control-sm validate">
								<label data-error="wrong" data-success="right" for="modalLRInput11">Password</label>
							</div>
							<div class="text-center mt-2">
								<button class="btn btn-elegant waves-light">Log in <i class="fa fa-sign-in ml-1  text-light"></i></button>
							</div>
						</div>
						<!--Footer-->
						<div class="modal-footer">
							<div class="options text-center text-md-right mt-1">
								<p>Not a member? <a href="#" class="blue-text">Sign Up</a></p>
								<p>Forgot <a href="#" class="blue-text">Password?</a></p>
							</div>
							<button type="button" class="btn btn-outline-elegant waves-effect ml-auto" data-dismiss="modal">Close</button>
						</div>

					</div>
					<!--/.Panel 7-->

					<!--Panel 8-->
					<div class="tab-pane fade" id="panel8" role="tabpanel">

						<!--Body-->
						<div class="modal-body">
							<div class="md-form form-sm mb-3">
								<i class="prefix"></i>
								<input type="text" id="modalLRInput12" class="form-control form-control-sm validate">
								<label data-error="wrong" data-success="right" for="modalLRInput12">First Name</label>
							</div>

							<div class="md-form form-sm mb-3">
								<i class="prefix"></i>
								<input type="text" id="modalLRInput13" class="form-control form-control-sm validate">
								<label data-error="wrong" data-success="right" for="modalLRInput13">Middle Name</label>
							</div>

							<div class="md-form form-sm mb-3">
								<i class="prefix"></i>
								<input type="text" id="modalLRInput14" class="form-control form-control-sm validate">
								<label data-error="wrong" data-success="right" for="modalLRInput14">Last Name</label>
							</div>

							<div class="md-form form-sm mb-3">
								<i class="prefix"></i>
								<input type="text" id="modalLRInput15" class="form-control form-control-sm validate">
								<label data-error="wrong" data-success="right" for="modalLRInput15">Gender</label>
							</div>

							<div class="md-form form-sm mb-3">
								<i class="prefix"></i>
								<input type="text" id="modalLRInput16" class="form-control form-control-sm validate">
								<label data-error="wrong" data-success="right" for="modalLRInput16">Birth Date</label>
							</div>

							<div class="md-form form-sm mb-3">
								<i class="prefix"></i>
								<input type="text" id="modalLRInput17" class="form-control form-control-sm validate">
								<label data-error="wrong" data-success="right" for="modalLRInput17">Invitation/Hospital Code</label>
							</div>

							<div class="md-form form-sm mb-3">
								<i class="prefix"></i>
								<input type="email" id="modalLRInput12" class="form-control form-control-sm validate">
								<label data-error="wrong" data-success="right" for="modalLRInput12">Your email</label>
							</div>

							<div class="md-form form-sm mb-3">
								<i class="prefix"></i>
								<input type="password" id="modalLRInput13" class="form-control form-control-sm validate">
								<label data-error="wrong" data-success="right" for="modalLRInput13">Your password</label>
							</div>

							<div class="md-form form-sm mb-5">
								<i class="prefix"></i>
								<input type="password" id="modalLRInput14" class="form-control form-control-sm validate">
								<label data-error="wrong" data-success="right" for="modalLRInput14">Repeat password</label>
							</div>

							<div class="md-form form-sm mb-4">
								<i class="prefix"></i>


							</div>

							<div class="text-center form-sm mt-2">
								<button class="btn btn-elegant">Sign up <i class="fa fa-sign-in text-light ml-1"></i></button>
							</div>

						</div>
						<!--Footer-->
						<div class="modal-footer">
							<div class="options text-right">
								<p class="pt-1">Already have an account? <a href="#" class="blue-text">Log In</a></p>
							</div>
							<button type="button" class="btn btn-outline-elegant waves-effect ml-auto" data-dismiss="modal">Close</button>
						</div>
					</div>
					<!--/.Panel 8-->
				</div>

			</div>
		</div>
		<!--/.Content-->
	</div>
</div>
<!--Modal: Login / Register Form-->

<div class="text-center">
	<a href="" class="btn btn-default btn-rounded my-3" data-toggle="modal" data-target="#modalLRForm">Launch Modal LogIn/Register</a>
</div>

<div class="modal fade" id="editmodal" tabindex="-1" role="dialog" aria-hidden="true">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="editdonorinfo">Edit Description</h5>
				<button type="button" class="close" data-dismiss="modal" aria-close="Close"> <span aria-hidden="true">&times;</span> </button>
			</div>

			<div class="modal-body">
				<div class="container-fluid">
					<form action="edit_description.php" method="post" name="editdescription">
						<div class="form-group">
							<input type = "hidden" id ='contentid' name ='contentid'>
							<label for="description">Description</label>
							<input type="text" class="form-control" id='description' name="description" required >
						</div>
					</div>
				</div>

				<div class="modal-footer">
					<button type="button" class="btn btn-seconday" data-dismiss="modal">Close</button>
					<button type="submit" class="btn btn-success" id="submit_editdonor">Save</button>
				</form>
			</div>
		</div>
	</div>
</div>



<!-- SCRIPTS-->

<script src="../home/js/vendor/jquery-2.2.4.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
<script src="../home/js/vendor/bootstrap.min.js"></script>
<script src="../home/js/jquery.ajaxchimp.min.js"></script>
<script src="../home/js/jquery.nice-select.min.js"></script>
<script src="../home/js/jquery.sticky.js"></script>
<script src="../home/js/parallax.min.js"></script>
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
<script src="../home/js/jquery.magnific-popup.min.js"></script>
<script src="../home/js/waypoints.min.js"></script>
<script src="../home/js/jquery.counterup.min.js"></script>
<script src="../home/js/main.js"></script>
<script src="homepage_edit.js"></script>
<!-- MDB core JavaScript -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.5.4/js/mdb.min.js"></script>
</body>
</html>
