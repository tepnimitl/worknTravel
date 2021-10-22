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
		<meta name="description" content="Education Work and Travel">
		<meta name="author" content="xxx xxx xxx@xxx.com">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="keywords" content="allthewayeducation.com, work and travel, education, school, study, aboard, international student, work in USA, visa, summer, Work and travel Workandtravel work&travel America USA Aboard Job Interexchange International Inter agency guide 
			  experience Summer AllTheWay Education Study Language School ESL เวิร์ค แอนด์ ทราเวล เวิร์คแอนด์ทราเวล เวิร์คเมกา เวิร์คอเมริกา 
			  ฝึกงานอเมริกา ออลเดอะเวร์เอ็ดดูเคชั่น ออลเดอะเวร์ ออเดอะเว เรียนเมืองนอก เรียนต่อ เมกา เรียนต่ออเมริกา เรียนภาษา เรียนต่อต่างประเทศ ศึกษาต่อต่างประเทศ โรงเรียนสอนภาษา ไปอเมริกา" />
		<meta name="robots" content="index, follow" />

		<link href="/css/style/style.css" rel="stylesheet" type="text/css"/>
		<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
		<link href="//fonts.googleapis.com/css?family=Archivo+Narrow:400,400italic,700,700italic" rel="stylesheet">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
		<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
		<!--<script src="//code.jquery.com/jquery-1.10.2.js"></script>-->
		<script src="/js/bootstrap.min.js"></script>
		<script>
			$(function () {
				$("#headerBar").load("/headerBar5.php");
				$("#footer").load("/footer.html");
			});
		</script>
		<!--<script type="text/javascript" src="scripts/weather.js"></script>-->

		<style>
			#slideshow {
				background-color: whitesmoke;
				color: gray;
				margin: 0px auto 20px auto;
				position: relative;
				width: 150px;
				height: 150px;
				padding: 10px;
				box-shadow: 0 0 20px rgba(0,0,0,0.4);
				border-radius: 5px;
			}

			#slideshow > div {
				position: absolute;
				top: 10px;
				left: 10px;
				right: 10px;
				bottom: 10px;
			}

		</style>

	</head>
	<body bgcolor="#000000">
		<!--<body style="font-family:  Archivo Narrow, Lucida Sans Unicode, sans-serif">-->
		<div id="headerBar"></div>
		<div id="headerCover">
			<div class="main">
				<div id="container1">
					<video autoplay muted loop width="100%"  poster="/assets/images/pic_all_edit/1024/W&T_14.jpg" id="bgvid">
						<source src="/assets/alltheway_edit_2.mp4" type="video/mp4"> //Phase II
					</video>
					<h1 style="font-size: xx-large">" The best confidence builder is experience "</h1>
				</div>
			</div>
		</div>
		<div class="sectionMain">
			<h2 style="color: #36635A">Ready to start your work & travel&nbsp;
				<!--<a href="products/worknTravel.html"><button type="button" class="btn1">START HERE</button></a></h2>-->
				<a href="/applicationForm_worknTravel.html" ><button type="button" class="btn btn-info">START HERE</button></a></h2>
		</div>




		<div id="album">
			<div class="container-fluid" style="background-color: whitesmoke; padding-top: 40px; padding-bottom: 20px;">
				<div id="container4">
					<a href="/products/worknTravel.php">
						<div class="col-md-8 col-sm-4 col-xs-12">
							<div class="col-image" style="background-image: url(assets/images/pic_all_edit/pic3_600/W&T_13.jpg)">
								<h2>Work & Travel</h2>
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
					<a href="/products/culinary.php">
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
					<a href="/products/film.php">
						<div class="col-md-4  col-sm-4 col-xs-12">
							<div class="col-image" style="background-image: url(assets/images/pic_all_edit/pic1_600/Film_15.jpg)">
								<h2>Film School</h2>
							</div>
						</div>
					</a>
					<a href="/products/degree.php">
						<div class="col-md-4  col-sm-4 col-xs-12">
							<div class="col-image" style="background-image: url(assets/images/pic_all_edit/pic3_600/Study_5.jpg)">
								<h2>Study Aboard</h2>
							</div>
						</div>
					</a>
				</div>
			</div>
		</div>




		<!--		Phase II
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
												src="/assets/alltheway_ last.mov"
												title="work and travel"
												frameborder="0"
												width="600" height="400"
												>
				
										</iframe>
									</div>
								</div>
								</div>
								</div>
				
								</div>
								</div>
							</div>
							</div>-->



		<!--//Phase II-->
		<?php

//		$json_string = file_get_contents("http://api.openweathermap.org/data/2.5/weather?q=fairfax,us");
//		$json_Sanfran = file_get_contents("http://api.openweathermap.org/data/2.5/weather?q=San Francisco,us");
//		$json_Miami = file_get_contents("http://api.openweathermap.org/data/2.5/weather?q=Miami,us");
//		$json_Newyork = file_get_contents("http://api.openweathermap.org/data/2.5/weather?q=New york,us");
//		$json_Hawaii = file_get_contents("http://api.openweathermap.org/data/2.5/weather?q=Hawaii ,us");
//		$json_Chicago = file_get_contents("http://api.openweathermap.org/data/2.5/weather?q=Chicago ,us");

		function weather($city) {
			$json_string = file_get_contents("http://api.openweathermap.org/data/2.5/weather?id=$city&APPID=c5d424126038a5c2276e72962c582189");
			$parsed_json = json_decode($json_string);
			$location = $parsed_json->{'name'};
			$temp_k = $parsed_json->{'main'}->{'temp'};
			$temp_c = round($temp_k - 273.15);
			$temp_f = round((($temp_k - 273.15) * 1.8) + 32.00);
			$icon = $parsed_json->{'weather'}[0]->{'icon'};
//			echo "Current temperature in ${location} is: ${temp_f}\n";
			return $output = array($location, $icon, $temp_c, $temp_f);
		}
		?>
		<div class="weather">
			<div class="container hidden-xs">
				<div class="row">
					<div class="col-md-1 col-sm-1 col-xs-6 wborder">

					</div>
					<div class="col-md-2 col-sm-2 col-xs-6 wborder weather-zone">
						<!--						<ul>
													<li>-->
						<div class="row">
							<!--							<div class="col-md-4 icon">
															<img src="assets/images/pic_all_edit/pic1_600/MakeUp_4.jpg" width="60">
														</div>-->
							<!--							</li>
														<li>-->
							<!--							
												<div class="col-md-2 col-sm-2 col-xs-6 wborder">
													<i id="i_london" class="icon"></i>-->
							<div id="sanfran" class=" col-md-8 detail" style="background-position: center; background-image: url(/assets/images/weatherlogo/SanFrancisco.png); background-size: contain; background-repeat: no-repeat; color: darkslateblue;">
								<!--<div id="sanfran" class=" col-md-8 detail">-->
								<?php
								$output = weather('5391959');
								$location = $output[0];
								$temp_c = $output[2];
								$icon_url = "http://openweathermap.org/img/w/$output[1].png";
								?>
								<h4><?php echo $location; ?></h4>
								<img src="<?php echo $icon_url; ?>">
								<h3><?php echo $temp_c; ?>&degC</h3>
							</div>

						</div>
						<!--							</li>
												</ul>-->
					</div>
					<div class="col-md-2 col-sm-2 col-xs-6 wborder">
						<i id="i_london" class="icon"></i>
						<div id="miami" style="background-position: center; background-image: url(/assets/images/weatherlogo/Miami.png); background-size: contain; background-repeat: no-repeat; color: darkgreen;">
							<?php
							$output = weather('4164138');
							$location = $output[0];
							$temp_c = $output[2];
							$icon_url = "http://openweathermap.org/img/w/$output[1].png";
							?>
							<h4><?php echo $location; ?></h4>
							<img src="<?php echo $icon_url; ?>">
							<h3><?php echo $temp_c; ?>&degC</h3>
						</div>
					</div>
					<div class="col-md-2 col-sm-2 col-xs-6 wborder">
						<i id="i_london" class="icon"></i>
						<div id="newyork" style="background-position: center; background-image: url(/assets/images/weatherlogo/NewYork.png); background-size: contain; background-repeat: no-repeat; color: darkorange;">
							<?php
							$output = weather('5128638');
							$location = $output[0];
							$temp_c = $output[2];
							$icon_url = "http://openweathermap.org/img/w/$output[1].png";
							?>
							<h4><?php echo $location; ?></h4>
							<img src="<?php echo $icon_url; ?>">
							<h3><?php echo $temp_c; ?>&degC</h3>
						</div>
					</div>
					<div class="col-md-2 col-sm-2 col-xs-6 wborder">
						<i id="i_london" class="icon"></i>
						<div id="hawaii" style="background-position: center; background-image: url(/assets/images/weatherlogo/Hawaii.png); background-size: contain; background-repeat: no-repeat; color: darkred;">
							<?php
							$output = weather('5855797');
							$location = $output[0];
							$temp_c = $output[2];
							$icon_url = "http://openweathermap.org/img/w/$output[1].png";
							?>
							<h4><?php echo $location; ?></h4>
							<img src="<?php echo $icon_url; ?>">
							<h3><?php echo $temp_c; ?>&degC</h3>
						</div>
					</div>
					<div class="col-md-2 col-sm-2 col-xs-6 wborder">
						<i id="i_london" class="icon"></i>
						<div id="chicago"style="background-position: center; background-image: url(/assets/images/weatherlogo/Chicaco.png); background-size: contain; background-repeat: no-repeat; color: darkorchid;">
							<?php
							$output = weather('4887398');
							$location = $output[0];
							$temp_c = $output[2];
							$icon_url = "http://openweathermap.org/img/w/$output[1].png";
							?>
							<h4><?php echo $location; ?></h4>
							<img src="<?php echo $icon_url; ?>">
							<h3><?php echo $temp_c; ?>&degC</h3>
						</div>
					</div>
					<div class="col-md-1 col-sm-1 col-xs-6 wborder">

					</div>
				</div>
			</div>


<!--<script src="//ajax.googleapis.com/ajax/libs/jquery/1.5.2/jquery.min.js"></script>-->
			<script>
				$(function () {
					$("#slideshow > div:gt(0)").hide();

					setInterval(function () {
						$('#slideshow > div:first')
								.fadeOut(800)
								.next()
								.fadeIn(800)
								.end()
								.appendTo('#slideshow');
					}, 3000);
				});
			</script>

			<div id="slideshow" class="visible-xs">
				<div id="sanfran" style="background-position: center; background-image: url(/assets/images/weatherlogo/SanFrancisco.png); background-size: contain; background-repeat: no-repeat; color: darkslateblue;">
					<?php
					$output = weather('5391959');
					$location = $output[0];
					$temp_c = $output[2];
					$icon_url = "http://openweathermap.org/img/w/$output[1].png";
					?>
					<h4><?php echo $location; ?></h4>
					<img src="<?php echo $icon_url; ?>">
					<h3><?php echo $temp_c; ?>&degC</h3>
				</div>
				<div id="miami" style="background-position: center; background-image: url(/assets/images/weatherlogo/Miami.png); background-size: contain; background-repeat: no-repeat; color: darkgreen;">
					<?php
					$output = weather('4164138');
					$location = $output[0];
					$temp_c = $output[2];
					$icon_url = "http://openweathermap.org/img/w/$output[1].png";
					?>
					<h4><?php echo $location; ?></h4>
					<img src="<?php echo $icon_url; ?>">
					<h3><?php echo $temp_c; ?>&degC</h3>
				</div>
				<div id="newyork" style="background-position: center; background-image: url(/assets/images/weatherlogo/NewYork.png); background-size: contain; background-repeat: no-repeat; color: darkorange;">
					<?php
					$output = weather('5128638');
					$location = $output[0];
					$temp_c = $output[2];
					$icon_url = "http://openweathermap.org/img/w/$output[1].png";
					?>
					<h4><?php echo $location; ?></h4>
					<img src="<?php echo $icon_url; ?>">
					<h3><?php echo $temp_c; ?>&degC</h3>
				</div>
				<div id="hawaii" style="background-position: center; background-image: url(/assets/images/weatherlogo/Hawaii.png); background-size: contain; background-repeat: no-repeat; color: darkred;">
					<?php
					$output = weather('5855797');
					$location = $output[0];
					$temp_c = $output[2];
					$icon_url = "http://openweathermap.org/img/w/$output[1].png";
					?>
					<h4><?php echo $location; ?> </h4>
					<img src="<?php echo $icon_url; ?>">
					<h3><?php echo $temp_c; ?>&degC</h3>
				</div>
				<div id="chicago" style="background-position: center; background-image: url(/assets/images/weatherlogo/Chicaco.png); background-size: contain; background-repeat: no-repeat; color: darkorchid;">
					<?php
					$output = weather('4887398');
					$location = $output[0];
					$temp_c = $output[2];
					$icon_url = "http://openweathermap.org/img/w/$output[1].png";
					?>
					<h4><?php echo $location; ?></h4>
					<img src="<?php echo $icon_url; ?>">
					<h3><?php echo $temp_c; ?>&degC</h3>
				</div>
			</div>
		</div>




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
