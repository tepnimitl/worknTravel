<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->

<html>
<head>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
	<script type="text/javascript">

		var lang = "<?php 
					session_start(); 
					echo $_SESSION["lang"]; 
					?>";

		$(document).ready(function() {
			if(lang == "EN"){
				$("#en").hide();
				$("#th").show();
			}else{
				$("#th").hide();
				$("#en").show();
			}
		});
	</script>
	
	
	
</head>
<body>
	<div id="headerBar">
		<nav class="navbar navbar-default navbar-fixed-top ">
			<!--<nav class="navbar navbar-default navbar-fixed-top " style="background-color: transparent; color: white;">-->
			<!--				<g>
							<radialgradient>
							<stop>-->
			<div class="container" style="display: table">
				<div class="navbar-header nav"> 
					<a class="" style="padding: 0px;" href="">
						<img src="/assets/images/logo/A_7_1_t_.gif" alt="" height="80px"></a>
				</div>
				<div style="vertical-align: middle; display: table-cell;">
					<!--<div class='container-fluid' style='max-width:1600px;margin-left:0px;padding-left:0;'>-->
<!--					<ul class="nav navbar-nav hidden-sm hidden-xs">
						<li class=""><a href="/main.php">HOME</a></li>
						<li class="active"><a href="main.php"><span class="glyphicon glyphicon-home"></span> HOME</a></li>
					</ul>-->
					<ul class="nav navbar-nav navbar-right hidden-xs">
						<li class=""><a href="/main.php">HOME</a></li>
						<li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">ALL PROGRAMS <span class="caret"></span></a>
							<ul class="dropdown-menu">
								<li><a href="/products/worknTravel.php">Work and Travel</a></li>
								<li><a href="/products/film.php">Film School</a></li>
								<li><a href="/products/makeup.php">Make up School</a></li>
								<li><a href="/products/hotel.php">Hotel and Restaurant Management</a></li>
								<li><a href="/products/culinary.php">Culinary School</a></li>
								<li><a href="/products/fashion.php">Fashion Design School</a></li>
								<li><a href="/products/esl.php">ESL : English</a></li>
								<li><a href="/products/degree.php">Study Aboard</a></li>
							</ul>
						</li>
						<li><a href="/about.php">ABOUT US</a></li>
						<li><a href="/products/worknTravel.php">WORK & TRAVEL</a></li>
						<li><a href="/promotion.php">PROMOTION</a></li>
						<li><a href="/calendar.php">CALENDAR</a></li>
						<!--							<li><a href="registration.php#tabs-signup"><span class="glyphicon glyphicon-user"></span>
															SIGN UP</a></li>-->
						<li><a href="/login.php"><span class="glyphicon glyphicon-log-in"></span>
								LOGIN</a></li>
						<li><a href="#"><span class="glyphicon glyphicon-search"></span></a></li>
						<li id="th"><a href="/change.php?lang=TH">TH</a></li>
						<li id="en"><a href="/change.php?lang=EN">EN</a></li>
					</ul>
				</div>
			</div>
			<div id="callNow">
				<h3 class="hidden-xs item-normal"  style="background-color: lightgray;" ><a href="tel:1234567890">Call Now <strong>02.448.3648</strong></a></h3>
			</div>
		</nav>
	</div>
</body>
</html>
