<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
	<title>ABC Hospital &amp; Management</title>



<!--
	<link rel="stylesheet" href="css/font-awesome.min.css">
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/style.css">
-->
	<?php
	echo $this->Html->css([
					 'front/font-awesome.min',

					 'front/bootstrap.min',

					 'front/style'
  			 ]);
	?>


	<link href='http://fonts.googleapis.com/css?family=Open+Sans:600italic,400,800,700,300' rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=BenchNine:300,400,700' rel='stylesheet' type='text/css'>
<!--
	<script src="js/modernizr.js"></script>
-->

	<?php

 	echo $this->Html->script([

        	'front/modernizr'

  			]);
	?>
	<!--[if lt IE 9]>
      <script src="js/html5shiv.js"></script>
      <script src="js/respond.min.js"></script>
    <![endif]-->

</head>
<body>

	<!-- ====================================================
	header section -->
	<header class="top-header">
		<div class="container">
			<div class="row">
				<div class="col-xs-4 header-logo">
					<br>
					<a href=""><!--<img src="img/logo.png" alt="" class="img-responsive logo">-->
            <?php echo $this->Html->image('front/logo.png',['class'=>'img-responsive logo','alt'=>'']);?>
          </a>
				</div>

				<div class="col-md-8">
					<nav class="navbar navbar-default">
					  <div class="container-fluid nav-bar">
					    <!-- Brand and toggle get grouped for better mobile display -->
					    <div class="navbar-header">
					      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
					        <span class="sr-only">Toggle navigation</span>
					        <span class="icon-bar"></span>
					        <span class="icon-bar"></span>
					        <span class="icon-bar"></span>
					      </button>
					    </div>

					    <!-- Collect the nav links, forms, and other content for toggling -->
					    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">

					      <ul class="nav navbar-nav navbar-right">
					        <li><a class="menu active" href="#home" >Home</a></li>
					        <li><a class="menu" href="#about">about us</a></li>
					        <li><a class="menu" href="#service">our services </a></li>
					        <li><a class="menu" href="#team">our team</a></li>
					        <li><a class="menu" href="#contact"> contact us</a></li>
                  <li><a class="menu" href="<?php echo $this->Html->url(array('controller'=>'users','action' => 'login'), true); ?>"> Sign In</a></li>
					      </ul>
					    </div><!-- /navbar-collapse -->
					  </div><!-- / .container-fluid -->
					</nav>
				</div>
			</div>
		</div>
	</header> <!-- end of header area -->

	<section class="slider" id="home">
		<div class="container-fluid">
			<div class="row">
			    <div id="carouselHacked" class="carousel slide carousel-fade" data-ride="carousel">
					<div class="header-backup"></div>
			        <!-- Wrapper for slides -->
			        <div class="carousel-inner" role="listbox">
			            <div class="item active">
			            	<!--<img src="img/slide-one.jpg" alt="">-->
                    <?php echo $this->Html->image('front/slide-one.jpg',['class'=>'','alt'=>'']);?>
			                <div class="carousel-caption">
		               			<h1>providing</h1>
		               			<p>highquality service for men &amp; women</p>
		               			<button>learn more</button>
			                </div>
			            </div>
			            <div class="item">
			            	<!--<img src="img/slide-two.jpg" alt="">-->
                    <?php echo $this->Html->image('front/slide-two.jpg',['class'=>'','alt'=>'']);?>
			                <div class="carousel-caption">
		               			<h1>providing</h1>
		               			<p>highquality service for men &amp; women</p>
		               			<button>learn more</button>
			                </div>
			            </div>
			            <div class="item">
			            	<!--<img src="img/slide-three.jpg" alt="">-->
                    <?php echo $this->Html->image('front/slide-three.jpg',['class'=>'','alt'=>'']);?>
			                <div class="carousel-caption">
		               			<h1>providing</h1>
		               			<p>highquality service for men &amp; women</p>
		               			<button>learn more</button>
			                </div>
			            </div>
			            <div class="item">
			            	<!--<img src="img/slide-four.jpg" alt="">-->
                    <?php echo $this->Html->image('front/slide-four.jpg',['class'=>'','alt'=>'']);?>
			                <div class="carousel-caption">
		               			<h1>providing</h1>
		               			<p>highquality service for men &amp; women</p>
		               			<button>learn more</button>
			                </div>
			            </div>
			        </div>
			        <!-- Controls -->
			        <a class="left carousel-control" href="#carouselHacked" role="button" data-slide="prev">
			            <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
			            <span class="sr-only">Previous</span>
			        </a>
			        <a class="right carousel-control" href="#carouselHacked" role="button" data-slide="next">
			            <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
			            <span class="sr-only">Next</span>
			        </a>
			    </div>
			</div>
		</div>
	</section><!-- end of slider section -->

	<!-- about section -->
	<section class="about text-center" id="about">
		<div class="container">
			<div class="row">
				<h2>about us</h2>
				<h4>Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled</h4>
				<div class="col-md-4 col-sm-6">
					<div class="single-about-detail clearfix">
						<div class="about-img">
							<!--<img class="img-responsive" src="img/item1.jpg" alt="">-->
              <?php echo $this->Html->image('front/item1.jpg',['class'=>'img-responsive','alt'=>'']);?>
						</div>
						<div class="about-details">
							<div class="pentagon-text">
								<h1>C</h1>
							</div>
							<h3>Lorem Ipsum is simply</h3>
							<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer.</p>
						</div>
					</div>
				</div>
				<div class="col-md-4 col-sm-6">
					<div class="single-about-detail">
						<div class="about-img">
              <?php echo $this->Html->image('front/item2.jpg',['class'=>'img-responsive','alt'=>'']);?>
						</div>
						<div class="about-details">
							<div class="pentagon-text">
								<h1>W</h1>
							</div>

							<h3>Lorem Ipsum is simply</h3>
							<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer.</p>
						</div>
					</div>
				</div>
				<div class="col-md-4 col-sm-6">
					<div class="single-about-detail">
						<div class="about-img">
              <?php echo $this->Html->image('front/item3.jpg',['class'=>'img-responsive','alt'=>'']);?>
						</div>
						<div class="about-details">
							<div class="pentagon-text">
								<h1>M</h1>
							</div>
							<h3>Lorem Ipsum is simply</h3>
							<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer.</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section><!-- end of about section -->


	<!-- service section starts here -->
	<section class="service text-center" id="service">
		<div class="container">
			<div class="row">
				<h2>our services</h2>
				<h4>Lorem Ipsum has been the industry's standard dummy text ever since the 1500s</h4>
				<div class="col-md-3 col-sm-6">
					<div class="single-service">
						<div class="single-service-img">
							<div class="service-img">
								<!--<img class="heart img-responsive" src="img/service1.png" alt="">-->
                <?php echo $this->Html->image('front/service1.png',['class'=>'heart img-responsive','alt'=>'']);?>
							</div>
						</div>
						<h3>Heart problem</h3>
					</div>
				</div>
				<div class="col-md-3 col-sm-6">
					<div class="single-service">
						<div class="single-service-img">
							<div class="service-img">
                <?php echo $this->Html->image('front/service2.png',['class'=>'brain img-responsive','alt'=>'']);?>
							</div>
						</div>
						<h3>brain problem</h3>
					</div>
				</div>
				<div class="col-md-3 col-sm-6">
					<div class="single-service">
						<div class="single-service-img">
							<div class="service-img">
                <?php echo $this->Html->image('front/service3.png',['class'=>'knee img-responsive','alt'=>'']);?>
							</div>
						</div>
						<h3>knee problem</h3>
					</div>
				</div>
				<div class="col-md-3 col-sm-6">
					<div class="single-service">
						<div class="single-service-img">
							<div class="service-img">
                <?php echo $this->Html->image('front/service4.png',['class'=>'bone img-responsive','alt'=>'']);?>
							</div>
						</div>
						<h3>human bones problem</h3>
					</div>
				</div>
			</div>
		</div>
	</section><!-- end of service section -->


	<!-- team section -->
	<section class="team" id="team">
		<div class="container">
			<div class="row">
				<div class="team-heading text-center">
					<h2>our team</h2>
					<h4>Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled</h4>
				</div>

				<?php foreach($id as $doctor){ ?>
				<a type="button" class="" data-toggle="modal" data-target="#squarespaceModal">
				<div class="col-md-2 single-member col-sm-4">
					<div class="person">
						<!--<img class="img-responsive" src="img/member1.jpg" alt="member-1">-->
						<img alt="Doctor 1 Pic" src="<?php echo $this->webroot; ?>/files/doctor/photo/<?php echo $doctor['Doctor']['photo_dir']?>/<?php echo $doctor['Doctor']['photo'];?>" class="img-responsive">
					</div>
					<div class="person-detail">
						<div class="arrow-bottom"></div>
						<h3><?php echo $doctor['Doctor']['name']?></h3>
						<p><?php echo $doctor['Doctor']['specialist']?></p>
					</div>
				</div>
			</a>


			<div class="modal fade" id="squarespaceModal" tabindex="-1" role="dialog" aria-labelledby="modalLabel" aria-hidden="true">
  <div class="modal-dialog">
	<div class="modal-content">
		<div class="modal-header">
			<button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span><span class="sr-only">Close</span></button>
			<h3 class="modal-title" id="lineModalLabel">To Set an Appointment You have to Register First</h3>
		</div>
		<div class="modal-body">

            <!-- content goes here -->
			<form>
              <div class="form-group">
                <label >Name</label>
                <input  name="data[Patient][name]" placeholder="Full Name" class="form-control" required type="text">
              </div>
              <div class="form-group">
                <label >Age</label>
                <input  name="data[Patient][age]" placeholder="Age" class="form-control input-md" required type="number">
              </div>
              <div class="form-group">
                <label >Sex</label>
								<select name="data[Patient][sex]" class="form-control">
									<option value="Male" selected>Male</option>
									<option value="Female">Female</option>
								</select>
              </div>
              <div class="form-group">
                <label >Address</label>
                <input  name="data[Patient][address]" placeholder="Address" class="form-control input-md"  type="text">
              </div>
              <div class="form-group">
                <label >Mobile Number</label>
                <input  name="data[Patient][cell]" placeholder="Phone Number" class="form-control input-md" required type="number">
              </div>
              <div class="form-group">
                <label >Email</label>
                <input  name="data[Patient][email]" placeholder="Email address" class="form-control input-md" required type="email">
              </div>
              <div class="form-group">
                <label >Password</label>
                <input  name="data[Patient][password]" placeholder="Password" class="form-control input-md" required type="password">
              </div>

              <button type="submit" class="btn btn-default">Submit</button>
							<button type="button" class="btn btn-default" data-dismiss="modal"  role="button">Close</button>
            </form>

		</div>
	</div>
  </div>
</div>


			<?php } ?>
			</div>
		</div>
	</section><!-- end of team section -->

	<!-- map section -->
	<div class="api-map" id="contact">
		<div class="container-fluid">
			<div class="row">
				<div class="col-md-12 map" id="map"></div>
			</div>
		</div>
	</div><!-- end of map section -->

	<!-- contact section starts here -->
	<section class="contact">
		<div class="container">
			<div class="row">
				<div class="contact-caption clearfix">
					<div class="contact-heading text-center">
						<h2>contact us</h2>
					</div>
					<div class="col-md-5 contact-info text-left">
						<h3>contact information</h3>
						<div class="info-detail">
							<ul><li><i class="fa fa-calendar"></i><span>Monday - Friday:</span> 9:30 AM to 6:30 PM</li></ul>
							<ul><li><i class="fa fa-map-marker"></i><span>Address:</span> North Western University</li></ul>
							<ul><li><i class="fa fa-phone"></i><span>Phone:</span> (041) 987-1235</li></ul>
							<ul><li><i class="fa fa-fax"></i><span>Fax:</span> (123) 984-1234</li></ul>
							<ul><li><i class="fa fa-envelope"></i><span>Email:</span> info@doctor.com</li></ul>
						</div>
					</div>
					<div class="col-md-6 col-md-offset-1 contact-form">
						<h3>leave us a message</h3>


              <form class="form">
							<input class="name" type="text" placeholder="Name">
							<input class="email" type="email" placeholder="Email">
							<input class="phone" type="text" placeholder="Phone No:">
							<textarea class="message" name="message" id="message" cols="30" rows="10" placeholder="Message"></textarea>
							<input class="submit-btn" type="submit" value="SUBMIT">
						</form>

					</div>
				</div>
			</div>
		</div>
	</section><!-- end of contact section -->

	<!-- footer starts here -->
	<footer class="footer clearfix">
		<div class="container">
			<div class="row">
				<div class="col-xs-6 footer-para">
					<p>&copy; All right reserved</p>
				</div>
				<div class="col-xs-6 text-right">
					<a href=""><i class="fa fa-facebook"></i></a>
					<a href=""><i class="fa fa-twitter"></i></a>
					<a href=""><i class="fa fa-skype"></i></a>
				</div>
			</div>
		</div>
	</footer>

	<!-- script tags
	============================================================= -->
	<!--
	<script src="js/jquery-2.1.1.js"></script>
	<script src="http://maps.google.com/maps/api/js?sensor=true"></script>
	<script src="js/gmaps.js"></script>
	<script src="js/smoothscroll.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/custom.js"></script>
-->




	<?php

 	echo $this->Html->script([

        	'front/jquery-2.1.1'

  			]);
	?>
	<script src="http://maps.google.com/maps/api/js?sensor=true"></script>
<?php

 	echo $this->Html->script([

        	'front/gmaps',

        	'front/smoothscroll',

        	'front/bootstrap.min',

       		'front/custom'

  			]);

 	?>




</body>
</html>
