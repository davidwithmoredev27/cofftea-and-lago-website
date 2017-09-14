<!DOCTYPE html>
<html lang="en">
<head>
	<?php require "../template/reset.php"; ?>
	<title>Martinas and KTV</title>
	<?php require "../template/scriptsandstylesheet.php"; ?>
	<!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css"> -->
	<link rel="stylesheet" type="text/css" href="css/coffteaSpecific.css">
</head>
<body>
	<div id="container">
		<header class="header">
			<section id="logocontainer">
				<img src="img/cofftealogo.png" alt="cofftea zone">
			</section>
			<nav id="navbar">
				<ul>
					<li><a href="index.php">Home</a></li>
					<li><a href="aboutus.php">About Us</a></li>
					<li><a href="menu.php">Menus</a></li>
					<li><a href="gallery.php">Gallery</a></li>
					<li><a href="events.php">Events</a></li>
					<li><a href="contactus.php">Contact Us</a></li>
				</ul>	
			</nav> <!-- end of navbar-->
		</header> <!-- end of header-->
		<section id="eventscontainer">
			<div class="eventstitle">
				<h1>We Also Offer Several Events Reservation</h1>
			</div>
			<div id="centering">
				<div id="martinazcontainer" class="separator">
					<div id="martinazimg" class="eventsimg">
						<figure>
							<a href="#" class="reservebutton">reserve</a>
						</figure>
					</div>
					<section id="martinazdescription" class="description">
						<h3>Martinas</h3>
						<div class="informationtxt">
							
						</div>
					</article>
				</div>
				<div id="ktvcontainer" class="separator">
					<div id="ktvimg" class="eventsimg">
						<figure>
							<a href="../martinas/" class="reservebutton">reserve</a>
						</figure>
					</div>
					<section  id="ktvdescription" class="description">
						<h3>KTV</h3>
						<div class="informationtxt">
							
						</div>
					</article>
				</div>
			</div>
		</section>
		<footer id="footercontainer">
			<div class="footercontent">
				<div class="aboutinfocontainer">
					<p id="companyname"><span >Cofftea Zone</span></p>
					<p id="location"><span>851 Manila Cavite Road, Dalahican Cavite City,<br>Philippines.</span></p>
					<div id="phonenumber">
						<p>Contact Numbers:</p>
						<span>Telephone: 402-0556</span><br>
						<span>Mobile: 09177049806</span>
					</div>
					<div id="email">
						<p>email: <span>justine.ponsones@gmail.com</span></p>
					</div>
				</div>
				<div class="footernavbar">
					<nav class="links">
						<ul>
							<li><a href="aboutus.php">About Us</a></li>
							<li><a href="menu.php">Menus</a></li>
							<li><a href="gallery.php">Gallery</a></li>
							<li><a href="events.php">Events</a></li>
							<li><a href="contactus.php">Contact Us</a></li>
						</ul>
					</nav>
					<div class="findus">
						<h3>Find Us</h3>
						<a href="#">Facebook</a>
					</div>
				</div>
			</div>
			<div id="copyrightcontainer">
				<p>&copy; Cofftea Zone &amp; Lago De Dalahican 2017</p>
			</div>
		</footer>
	</div>
	<script src="../js/jquery-3.2.1.js"></script>
	<!-- <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js></script> -->
</body>
</html>