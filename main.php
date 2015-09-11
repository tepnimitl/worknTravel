<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html lang="en">
	<?php
	session_start();

	$page = $_SERVER["REQUEST_URI"];
	$_SESSION['page'] = $page;
//	echo "http://" . $_SERVER['SERVER_NAME'] . $_SESSION['page'];

	if ($_SESSION["lang"] == "EN") {
		$lang = 'en';
	} else {
		$lang = 'th';
	}
	?>
	<head>
		<title>All The Way</title>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link href="/css/bomee.css" rel="stylesheet" type="text/css"/>
		<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
		<link href="//fonts.googleapis.com/css?family=Archivo+Narrow:400,400italic,700,700italic" rel="stylesheet">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
		<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
		<script>
			$(function () {
				$("#headerBar").load("/headerBar2.php");
				$("#footer").load("/footer.html");
			});
		</script>
		<!--<script type="text/javascript" src="scripts/weather.js"></script>-->
	</head>
	<body>
		<!--<body style="font-family:  Archivo Narrow, Lucida Sans Unicode, sans-serif">-->
		<div id="headerBar"></div>
		<div id="headerCover">
			<div class="main">
				<div id="container1" >
<!--					<video autoplay loop poster="assets/images/shutterstock_54132262.jpg" id="bgvid">
						<source src="assets/main_video_2.mp4" type="video/mp4"> //Phase II
					</video>-->
					<h1>" The best confidence builder is experience "</h1>
				</div>
			</div>
		</div>
		<div class="sectionMain">
			<h2 style="color: #36635A">Ready to start your work & travel&nbsp;
				<!--<a href="products/worknTravel.html"><button type="button" class="btn1">START HERE</button></a></h2>-->
				<a href="/applicationForm_worknTravel.html" target="_blank"><button type="button" class="btn btn-info">START HERE</button></a></h2>
		</div>




		<div id="album">
			<div class="container-fluid" style="background-color: whitesmoke; padding-top: 40px; padding-bottom: 50px;">
				<div id="container4">
					<a href="/products/worknTravel.php">
						<div class="col-md-8 col-sm-4 col-xs-12">
							<div class="col-image" style="background-image: url(assets/images/pic_all_edit/pic3_600/W&T_13.jpg)">
								<h2>Work & Travel</h2>
							</div>
						</div>
					</a>
					<a href="/products/film.php">
						<div class="col-md-4  col-sm-4 col-xs-12">
							<div class="col-image" style="background-image: url(assets/images/pic_all_edit/pic1_600/Film_15.jpg)">
								<h2>Film School</h2>
							</div>
						</div>
					</a>
					<a href="/products/culinary.html">
						<div class="col-md-4  col-sm-4 col-xs-12">
							<div class="col-image" style="background-image: url(assets/images/pic_all_edit/pic1_600/Hotel_4.jpg)">
								<h2>Culinary School</h2>
							</div>
						</div>
					</a>
					<a href="/products/hotel.php">
						<div class="col-md-4  col-sm-4 col-xs-12">
							<div class="col-image" style="background-image: url(assets/images/pic_all_edit/pic1_600/Hotel_1.jpg)">
								<h2>Hotel & Restaurant Management</h2>
							</div>
						</div>
					</a>
					<a href="/products/makeup.php">
						<div class="col-md-4  col-sm-4 col-xs-12">
							<div class="col-image" style="background-image: url(assets/images/pic_all_edit/pic1_600/MakeUp_4.jpg)">
								<h2>Make up School</h2>
							</div>
						</div>
					</a>
					<a href="/products/fashion.php">
						<div class="col-md-4  col-sm-4 col-xs-12">
							<div class="col-image" style="background-image: url(assets/images/pic_all_edit/pic1_600/Fashion_6.jpg)">
								<h2>Fashion Design Program</h2>
							</div>
						</div>
					</a>
					<a href="/products/esl.php">
						<div class="col-md-4  col-sm-4 col-xs-12">
							<div class="col-image" style="background-image: url(assets/images/pic_all_edit/pic1_600/ESL_1.jpg)">
								<h2>Language School</h2>
							</div>
						</div>
					</a>
					<a href="/products/degree.php">
						<div class="col-md-4  col-sm-4 col-xs-12">
							<div class="col-image" style="background-image: url(assets/images/pic_all_edit/pic3_600/Study_5.jpg)">
								<h2>Master's Degree & Ph.D</h2>
							</div>
						</div>
					</a>
				</div>
			</div>
		</div>




		<!--Phase II
					<div id="lowerMain" style="background-color: whitesmoke">
					<div class="container-fluid">
		
						<div id="lowerMain-Left">
						<div class="col-md-4 col-sm-4 col-xs-12" style="padding: 10px;"> Phase II  
						<div class="col-md-4" style="padding: 10px;">
							<div id="blog">
								<p>BLOG</p>
								<h4>All The Way Social</h4>
								<img src="assets/images/shutterstock_259713314.jpg" alt="">
								<p>write some words</p>
								<a href="worknTravel.html">
									<button type="button" class="btn btn-block">ENTER</button>
								</a>
							</div>
						</div>
		
						<div id="lowerMain-Right">
						<div class="col-md-8 col-sm-8 col-xs-12 " style="padding: 10px;"> Phase II
						//Phase II
						<div class="col-md-8 " style="padding: 10px;">
							<div id="vdo">
								<iframe class="media"
										src="//player.vimeo.com/video/128372589"
										title="work and travel"
										frameborder="0"
										>
		
								</iframe>
							</div>
						</div>
		
					</div>
				</div>-->



		<!--//Phase II
				<div class="weather">
					<ul class="weather-list list-inline">
						<li>
							<i id="i_london" class="icon"></i>
							<div id="w_london"></div>
						</li>
						<li>
							<i id="i_ny" class="icon"></i>
							<div id="w_ny"></div>
						</li>
						<li>
							<i id="i_delhi" class="icon"></i>
							<div id="w_delhi"></div>
						</li>
						<li>
							<i id="i_sydney" class="icon"></i>
							<div id="w_sydney"></div>
						</li>
						<li>
							<i id="i_mexico" class="icon"></i>
							<div id="w_mexico"></div>
						</li>
						<li>
							<i id="i_beijing" class="icon"></i>
							<div id="w_beijing"></div>
						</li>
					</ul>
				</div>-->




		<div id="footer">
<!--			<div id="company">
				<div class="item-middle item-left">
				<p> ALL THE WAY EDUCATION Co.,Ltd is a limited company registered in Bangkok Thailand. Our registered address is ALL THE WAY EDUCATION Co.,Ltd, 
					4-4/5 12th Floor, Zen World Building, Ratchadamri Road, Pathumwan, Bangkok 10330. 
					Our company registration number is
				</p>
				<br>
				<p class="copyright"> © 2015 ALL THE WAY EDUCATION. All Rights
					Reserved. Site designed and developed by Tepnimit
				</p>
				</div>
			</div>
			<div id="link">
				<div class="item-middle">
					<ul>
						<li><a href="/help.html">Help</a></li>
						<li><a href="/contact.html"> Contacts </a></li>
					</ul>
				</div>
			</div>
			<div class="social hidden-xs">
				<div class="item-middle">
					<div class="item-inline">
						<ul>
							<li>
								<a href="fb">
									<img src="/assets/images/fb.png" alt="" width=30 height=30>
									<p>facebook</p>
								</a>
							</li>
							<li>
								<a href="tw" class="twitter">
									<img src="/assets/images/tw.png" alt="" width=30 height=30>
									<p>twitter</p>
								</a>
							</li>
							<li>
								<a href="g+" class="google-plus">
									<img src="/assets/images/g+.png" alt="" width=30 height=30>
									<p>google plus</p>
								</a>
							</li>
							<li>
								<a href="vm" class="vimeo">
									<img src="/assets/images/vm.png" alt="" width=30 height=30>
									<p>vimeo</p>
								</a>
							</li>
						</ul>
					</div>
									<div class="text-center">
										<div class="facebook-feed">
											<div class="fb-like" data-href="" data-width="350" data-layout="standard"
												 data-action="like"
												 data-show-faces="true"
												 data-share="false"></div>
										</div>
									</div>
				</div>
			</div>-->
		</div>

	</body>
</html>
