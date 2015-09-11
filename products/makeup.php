<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html lang='en'>
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
		<title>Makeup School</title>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link href="/css/bomee.css" rel="stylesheet" type="text/css"/>
		<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
		<link href="//fonts.googleapis.com/css?family=Archivo+Narrow:400,400italic,700,700italic" rel="stylesheet">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
		<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
		<script src="//code.jquery.com/jquery-1.10.2.js"></script>
		<script>
			$(function () {
				$("#headerBar").load("/headerBar2.php");
				$("#footer").load("/footer.html");
			});
		</script>
		<script>
			$(document).ready(function () {
				$(".q1").click(function () {
					$(this).next().slideToggle("slow");
				});
			});
		</script>
	</head>
	<body>
		<?php include '../list.php'; ?>
		<div id="headerBar"></div>
		<div id="headerCover" >
			<!--style="background-image: url('assets/images/edit/IMG_1259.jpg');"-->
			<div class="makeup">
				<div id="container1">
					<h1>Makeup School</h1>

					<!--					<p>People have forgotten how to tell a story.
											Stories don’t have a middle or an end any
											more. They usually have a beginning that
											never stops beginning.
					
											Steven Spielberg</p>-->
				</div>
			</div>
		</div>
		<div class="sectionMain">
			<h2 style="color: #36635A">Ready to start MakeUp School&nbsp;
				<a href="/applicationForm_makeup.html" target="_blank"><button type="button" class="btn btn-info">START HERE</button></a></h2>
		</div>
		<div id="Section-Detail" class="wrapper">
			<!--<div class="container">-->
			<div id="tabs">
				<ul class="nav nav-tabs">
					<li class="active"><a href="#overview" data-toggle="tab">Overview</a></li>
					<!--<li><a href="#featuredSchool" data-toggle="tab">Featured School</a></li>-->
					<li><a href="#areas" data-toggle="tab">Ares of Study</a></li>
					<li><a href="#steps" data-toggle="tab">Application Step</a></li>
					<li><a href="#tuition" data-toggle="tab">Tuition</a></li>
					<li><a href="#qanda" data-toggle="tab">Q&A</a></li>
				</ul>
				<div id="content" class="tab-content">
					<div class="tab-pane fade in active" id="overview">
						<h3>Overview</h3>
						<?php print_r(tranTxt("
						<p>การเรียนทำผมแต่งหน้า ไม่เรื่องธรรมดาอีกต่อไป 
							เมื่อนี่คือเส้นทางสู่ Hollywood
							ประเทศอเมริกามีสถาบัน Make up school
							ที่มีชื่อเสียงและได้รับคัดเลือกให้ไปทำงานใน 
							Hollywood หลายแห่ง
							<br>
							- Aveda Institute Washington D.C. Beauty School
							<br>
							- Empire Beauty School
							<br>
							- Paul Mitchell
							<br>

							สถาบันและโรงเรียนส่วนใหญ่ในสาขานี้มีเพียงหลักสูตร Associate
							ที่ค่าเรียนไม่แพงมาก แต่มีชื่อเสียงและสามารถสร้างทักษะให้ผู้เรียน
							ก้าวไปสู่สายอาชีพชั้นแนวหน้าได้</p>
							", $lang)); ?>
					</div>
					<!--					<div class="tab-pane fade" id="featuredSchool">
											<ul><h3>Featured School</h3>
												<p>Aveda Institute Washington D.C. Beauty School</p>
												<p>Empire Beauty School</p>
												<p>Paul Mitchell</p>
											</ul>
										</div>-->
					<div class="tab-pane fade" id="areas">
						<h3>Interesting Programs</h3>
						<p>- Cosmetology</p>
						<p>- Cosmetology Educator</p>
						<p>- Esthetics/Skin academy</p>
						<p>- Makeup Artistry</p>
						<p>- Massage Therapy</p>
						<p>- The barbering Program</p>
						<p>- Teacher Training</p>
					</div>
					<div class="tab-pane fade" id="steps">
						<h3>Application Step</h3>
						<?php print_r(tranTxt("
						<p>1. คลิ๊ก “Start here” และกรอกข้อมูลผู้สมัครให้ครบถ้วน จากนั้นปริ้นใบสมัครและรอการติดต่อกลับจากเจ้าหน้าที่</p>
						<p>2. เจ้าหน้าที่จะติดต่อกลับผู้สมัครภายใน 24 ชั่วโมงเพื่อสอบถามข้อมูลเพิ่มเติม และแจ้งรายการเอกสารที่ผู้สมัครต้องนำมายื่น</p>
						<p>3. ยื่นเอกสารด้วยตัวเองที่สำนักงาน ALL THE WAY EDUCATION หรือ ทางไปรษณีย์</p>
						<p>4. รอรับ I-20 M-N จากทางโรงเรียน</p>
						<p>5. กรอกแบบฟอร์ม DS160 เพื่อยื่นคำร้องขอวีซ่าสหรัฐอเมริกา</p>
						<p>6. สมัคร M-1 Visa (วีซ่านักเรียนระยะสั้น) จากสถานทูตอเมริกา</p>
						<p>7. จองตั๋งเครื่องบิน</p>
						<p>8. ออกเดินทางไปสหรัฐอเมริกา</p>
							", $lang)); ?>
					</div>
					<div class="tab-pane fade" id="tuition">
						<ul><h3>Tuition</h3>
							<p>For more information please contact ALL THE WAY EDUCATION at 087-321-2108</p>
						</ul>
					</div>
					<div class="tab-pane fade" id="qanda">
						<h3>Q & A</h3>
						<div class="q1">Q: What jobs are available in make-up artistry?</div>
						<div class="a1">A: Our graduates find work in many areas of artistry. Some freelance doing weddings and special events. Some own makeup businesses, or become
							national artists for major cosmetic companies. Some work with dermatologists and plastic surgeons. Others work with photographers, models, and
							designers doing makeup for print ads, catalogs, fashion magazines, music videos, and runway shows. Many artists work with celebrities and actors in the
							theater or work in film and television doing motion pictures, commercials, daytime television, sitcoms, reality shows, sports and news.</div>
						<br>
						<div class="q1">Q: I have my own set of brushes and make up, do I still need to pay material fees?</div>
						<div class="a1">A: Material Fees cover photographic fees and materials, all makeup and special effects supplies used in class, and the Freelance Makeup Kit, Brush Kit,
							Airbrushing Machine, and Set Bag. Students are trained with the specific brushes and products in the school's kits. Due to sanitary concerns, no outside
							products may be added to your kit until you have completed the basic courses.</div>
					</div>
					<!--
										<div class="tab-pane fade" id="jobs">
											<h3>CURRENT JOBS</h3>
											<p>PPP</p>
										</div>
										<div class="tab-pane fade" id="refund">
											<h3>REFUND POLICY</h3>
											<p>PPP</p>
										</div>-->
				</div>
				<div id="mediazone">
					<!--					<iframe class="media" class="embed_video" 
												src="//player.vimeo.com/video/128372589"
												title="333"
												frameborder="0">
																	<div class="container"> <iframe id="box-video" class="embed_video"
																				  src="//player.vimeo.com/video/128372589"
																				 
																				  portrait="0"
																				  byline="0"
																				  allowfullscreen=""
																				  frameborder="0">
										</iframe>-->
					<img src="/assets/images/pic1/pic1_600/MakeUp_3.jpg" alt="">
					<img src="/assets/images/pic1/pic1_200/MakeUp_2.jpg" alt="">
					<img src="/assets/images/pic1/pic1_200/MakeUp_4.jpg" alt="">
					<img src="/assets/images/pic1/pic1_200/MakeUp_5.jpg" alt="">
					<!--					<img src="assets/images/edit/IMG_1218.jpg" alt="">
										<img src="assets/images/edit/IMG_1221.jpg" alt="">
										<img src="assets/images/edit/IMG_1224.jpg" alt="">-->

				</div>

			</div>

			<div id="need_info">
				<!--<div class="container">-->
				<div class="ccc">
					<h4><b>Need more information?</b></h4>
					<p style="text-align: left;"> Input your information here, we will get back to you soon.</p>

					<form action="" method="post" class="" role="form">
						<div class="row">
							<div class="col-xs-12 col-md-12">
								<input class="form-control" id="firstname" name="firstname" placeholder="Firstname" type="text" required autofocus />
							</div>
						</div>
						<div class="row">
							<div class="col-xs-12 col-md-12">
								<input class="form-control" id="lastname" name="lastname" placeholder="Lastname" type="text" />
							</div>
						</div>
						<div class="row">
							<div class="col-xs-12 col-md-12">
								<input class="form-control" id="email" name="email" placeholder="Your Email" type="email" />
							</div>
						</div>
						<div class="row">
							<div class="col-xs-12 col-md-12">
								<input class="form-control" id="phone" name="phone" placeholder="Phone Number" type="tel" />
							</div>
						</div>
						<div class="row">
							<div class="col-xs-12 col-md-12">
								<textarea class="form-control" rows="3" id="question" name="question" placeholder="Question (Optional)" /></textarea>
							</div>
						</div>
						<br>
						<div class="row">
							<div class="col-xs-12 col-md-12">
								<button class="btn btn-block" style="background-color: #75BAA8; color: white;" type="submit" name="signup" value="signup">SUBMIT</button>
							</div>
						</div>
					</form>
				</div>
				<!--</div>-->
			</div>



			<!--			<div id="promotion">
							<table>
								<tr>
									<th><h4>PROMOTION</h4></th>
								</tr>
								<tr>
									<td>
										<p> Coming soon </p>
									</td>
								</tr>
								<tr>
									<td>
			
									</td>
								</tr>
							</table>
						</div>-->
		</div>
		<div id="footer"></div>

	</body>
</html>
