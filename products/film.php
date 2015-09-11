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
		<title>Film School</title>
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
			<div class="film">
				<div id="container1">
					<h1>Film School</h1>
					<!--					<br>
										<p>People have forgotten how to tell a story.
											Stories don’t have a middle or an end any
											more. They usually have a beginning that
											never stops beginning.
					
											Steven Spielberg</p>
									</div>-->
				</div>
			</div>

			<div class="sectionMain">
				<h2 style="color: #36635A">Ready to start Film School&nbsp;
					<a href="/applicationForm_film.html" target="_blank"><button type="button" class="btn btn-info">START HERE</button></a></h2>
			</div>
			<div id="Section-Detail" class="wrapper">
				<!--<div class="container">-->
				<div id="tabs">
					<ul class="nav nav-tabs">
						<li class="active"><a href="#overview" data-toggle="tab">Overview</a></li>
						<li><a href="#Programs" data-toggle="tab">Programs</a></li>
						<li><a href="#areas" data-toggle="tab">Areas of Study</a></li>
						<li><a href="#steps" data-toggle="tab">Application Steps</a></li>
						<li><a href="#tuition" data-toggle="tab">Tuition</a></li>
						<li><a href="#qanda" data-toggle="tab">Q&A</a></li>
					</ul>
					<div id="content" class="tab-content">
						<div class="tab-pane fade in active" id="overview">
							<h3>Overview</h3>
							<?php print_r(tranTxt("
							<p>ผู้ที่มีสนใจเรียนในอุตสาหกรรมภาพยนตร์
								อยากจำเป็นผู้กำกับ, นักเขียนบทภาพยนตร์, นักวิจารณ์ 
								และอื่นๆที่เกี่ยวข้องกับวงการภาพยนตร์
								เป็นสายงานที่ต้องการประสบการณ์ การฝึกฝน 
								การเรียน Film Production
								ในอเมริกาเป็นประเทศที่มีทางเลือกในสาขานี้มากมาย 
								อีกทั้งเป็นที่ตั้ง Hollywood เมืองแห่งภาพยนตร์ระดับโลก 
								ดังนั้นแล้วนักเรียนที่ไปเรียน Film Production 
								ที่นี่จึงได้รับประสบการณ์โดยตรง</p>
							", $lang)); ?>
						</div>
						<div class="tab-pane fade" id="Programs">
							<ul><h3>Degree Programs</h3>
								<p>สถาบันการศึกษามากมายที่สอนเกี่ยวกับด้าน Film Production
									<br>New York Film Academy: The most Hand-On
									intensive program in the World
									มีหลักสูตรทั้งระยะสั้น และระยะยาว</p>

								<p>- One and two year conservatory: Hands-on 
									Intensive programs</p>
								<p>- One year Master of Arts</p>
								<p>- Two years Master of Fine Arts</p>
								<p>- Bachelor of Fine Arts : Three-years 
									Accelerated degree programs</p>
								<p>- Associate of Fine Arts</p>
								<p>- Hands-On short-term workshops</p>
								<p>- Summer camps : Film and Acting</p>
							</ul>
						</div>
						<div class="tab-pane fade" id="areas">
							<ul><h3>Ares of Study</h3>
								<p>- Filmmaking</p>
								<p>- Photography</p>
								<p>- Musical Theatre</p>
								<p>- Music Video</p>
								<p>- Acting for Film</p>
								<p>- Cinematography</p>
								<p>- Screenwriting</p>
								<p>- Digital Editing</p>
								<p>- Producing for Film & Television</p>
								<p>- Game Design</p>
								<p>- Documentary Filmmaking</p>
								<p>- Broadcast Journalism</p>
							</ul>
						</div>
						<div class="tab-pane fade" id="steps">
							<ul><h3>Application Step</h3>
							<?php print_r(tranTxt("
								<p>1. คลิ๊ก “Start here” และกรอกข้อมูลผู้สมัครให้ครบถ้วน จากนั้นปริ้นใบสมัครและรอการติดต่อกลับจากเจ้าหน้าที่</p>
								<p>2. เจ้าหน้าที่จะติดต่อกลับผู้สมัครภายใน 24 ชั่วโมงเพื่อสอบถามข้อมูลเพิ่มเติม และแจ้งรายการเอกสารที่ผู้สมัครต้องนำมายื่น</p>
								<p>3. ยื่นเอกสารด้วยตัวเองที่สำนักงาน ALL THE WAY EDUCATION หรือ ทางไปรษณีย์</p>
								<p>4. รอรับ I-20 จากทางโรงเรียน</p>
								<p>5. กรอกแบบฟอร์ม DS160 เพื่อยื่นคำร้องขอวีซ่าสหรัฐอเมริกา</p>
								<p>6. สมัคร F-1 Visa (วีซ่านักเรียน) จากสถานทูตอเมริกา</p>
								<p>7. จองตั๋งเครื่องบิน</p>
								<p>8. ออกเดินทางไปสหรัฐอเมริกา</p>
							", $lang)); ?>
							</ul>
						</div>
						<div class="tab-pane fade" id="tuition">
							<ul><h3>Tuition</h3>
								<p>For more information please contact ALL THE WAY EDUCATION at 087-321-2108</p>
							</ul>
						</div>
						<div class="tab-pane fade" id="qanda">
							<h3>Q & A</h3>
							<div class="q1">Q: What type of visa do I need to attend the programs?</div>
							<div class="a1">A: You will require an F-1 student visa in most cases. If you are in the US on a different type of visa you may be able to study, please contact ALL THE
								WAY EDUCATION Special team with specifics about your situation. Note, the US government does prohibit studying on a tourist visa.</div>
							<br>
							<div class="q1">Q: What are the steps to get an I-20 Certificate?</div>
							<div class="a1">A: After you have applied and been admitted to the school we will contact you by email to get the necessary information to create an I-20 Certificate.
								You’ll need to provide proof of funds available to pay for all tuition and living costs. We will send the I-20 Certificate to you by courier.</div>
							<br>
							<div class="q1">Q: How long does it take to get an I-20 and visa?</div>
							<div class="a1">A: The Film Academic School can issue the I-20 very quickly once you are admitted and we have all the necessary documents and information. The wait
								time to get a visa varies in at different times of the year.</div>
							<br>
							<div class="q1">Q: What are the estimated living costs?</div>
							<div class="a1">A: Recommended budget is $1900 per month for living costs (housing, food, transportation) and additional funds for travel other expenses. Your actual
								living costs may be higher or lower depending on your choices. $1500 per month is bare bones budget (no luxuries, shared apartment within an hour of
								the school)</div>
							<br>
							<div class="q1">Q: How long can I stay in the US on an F-1 visa?</div>
							<div class="a1">A: You can arrive up to 30 days before the program start date. If you complete the program, you can stay for an additional 60 days. You can extend your
								stay by studying longer or doing OPT (Optional Practical Training)</div>
							<br>
							<div class="q1">Q: Can I work in the US on an F-1 visa?</div>
							<div class="a1">A: You cannot work while you are a student. You must have the funds to support yourself for the duration of your studies. We do not offer on-campus
								employment. If you complete a program of one year or longer you will be eligible to apply for 12 months of Post completion Optional Practical training
								(OPT), where you can work or intern in your field of study.</div>
						</div>
						<!--					<div class="tab-pane fade" id="included">
												<h3>INCLUDED</h3>
												<p>PPP</p>
											</div>
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
						<img src="/assets/images/pic1/pic1_600/Film_15.jpg" alt="">
						<img src="/assets/images/pic1/pic1_200/Film_13.jpg" alt="">
						<img src="/assets/images/pic1/pic1_200/Film_14.jpg" alt="">
						<img src="/assets/images/pic1/pic1_200/Film_12.jpg" alt="">
						<img src="/assets/images/pic1/pic1_200/Film_4.jpg" alt="">
						<img src="/assets/images/pic1/pic1_200/Film_3.jpg" alt="">
						<img src="/assets/images/pic1/pic1_200/Film_2.jpg" alt="">
						<img src="/assets/images/pic1/pic1_200/Film_5.jpg" alt="">
						<img src="/assets/images/pic1/pic1_200/Film_7.jpg" alt="">
						<img src="/assets/images/pic1/pic1_200/Film_10.jpg" alt="">
						<img src="/assets/images/pic1/pic1_200/Film_11.jpg" alt="">
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
