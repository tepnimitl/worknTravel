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
		<title>Hospitality</title>
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
		<div id="headerCover">
			<div class="hospitality">
				<!--<div class="item-middle"><h1> dsfgsdfjw;fjeoifhwilfheofjwel;f </h1></div-->
				<div id="container1">
					<h1>Hospitality</h1>
				</div>
			</div>
		</div>
		<div class="sectionMain">
			<h2 style="color: #36635A">Ready to start Hospitality&nbsp;
				<a href="/applicationForm_hotel.html" target="_blank"><button type="button" class="btn btn-info">START HERE</button></a></h2>
		</div>
		<div id="Section-Detail" class="wrapper">
			<!--<div class="container">-->
			<div id="tabs">
				<ul class="nav nav-tabs">
					<li class="active"><a href="#overview" data-toggle="tab">Overview</a></li>
					<!--<li><a href="#featuredSchool" data-toggle="tab">Featured School</a></li>-->
					<li><a href="#programs" data-toggle="tab">Programs</a></li>
					<li><a href="#areas" data-toggle="tab">Ares of Study</a></li>
					<li><a href="#steps" data-toggle="tab">Application Step</a></li>
					<li><a href="#qanda" data-toggle="tab">Q&A</a></li>
				</ul>
				<div id="content" class="tab-content">
					<div class="tab-pane fade in active" id="overview">
						<h3>Overview</h3>
						<?php print_r(tranTxt("
						<p>อุตสาหกรรมการท่องเที่ยวเป็นธุรกิจที่มีบทบาทมาก ในการนำรายได้เข้าสู่ประเทศไทยในปัจจุบัน
							ประเทศสหรัฐอเมริกาเป็นประเทศที่รวมวัฒนธรรมที่หลากหลาย การเรียนThe Hotel and
							Restaurant Management Program ที่นี่จึงน่าสนใจกว่าในประเทศอื่นๆในความหลากหลายของหลักสูตร
							ผู้สอน เพื่อนนักเรียนซึ่งจะเพิ่มโอกาสทางธุรกิจเมื่อก้าวสู่การจำงานจริงหลังจบการศึกษา</p>
						", $lang)); ?>
					</div>
					<!--					<div class="tab-pane fade" id="featuredSchool">
											<h3>Featured School</h3>
											<p>For more information please contact ALL THE WAY EDUCATION at 087-321-2108</p>
										</div>-->
					<div class="tab-pane fade" id="programs">
						<h3>Degree Programs</h3>
						<p>- Master of Science in International Hospitality Management</p>
						<p>- Bachelor of Arts in Hospitality Management</p>
						<p>- Associate of Applied Science in Hotel and Restaurant Management</p>
					</div>
					<div class="tab-pane fade" id="areas">
						<h3>Ares of Study</h3>
						<p>- Fundamentals of accounting</p>
						<p>- Food preparation techniques</p>
						<p>- Hospitality information systems</p>
						<p>- Hotel front desk management</p>
						<p>- Restaurant menu management</p>
						<p>- Strategic marketing</p>
					</div>
					<div class="tab-pane fade" id="steps">
						<h3>Application Step</h3>
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
					</div>
					<div class="tab-pane fade" id="qanda">
						<h3>Q & A</h3>
						<div class="q1">Q: Can I travel during Optional Practical Training (OPT)?</div>
						<div class="a1">A: You may travel during Optional Practical Training (OPT). Since you are still using an F-1 Visa, you must obtain a travel authorization signature on
							the Form I-20 prior to your departure. Upon re-entry, you may be required to present the endorsed Form I-20, your Employment Authorization Card
							(EAD), and letter from your employer authorizing the leave.</div>
						<br>
						<div class="q1">Q: How does the Hotel and restaurant Management differ from an MBA?</div>
						<div class="a1">A: The MMH degree program offers the business-management curriculum you'll find in a typical MBA program, but with an exclusive focus on the
							hospitality and services industries. Class discussions, projects, and case studies apply to hospitality, first and foremost.</div>
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
												title="work and travel"
												frameborder="0">
																	<div class="container"> <iframe id="box-video" class="embed_video"
																				  src="//player.vimeo.com/video/128372589"
																				 
																				  portrait="0"
																				  byline="0"
																				  allowfullscreen=""
																				  frameborder="0">
										</iframe>-->
					<img src="/assets/images/pic1/pic1_600/Hotel_2.jpg" alt="">
					<img src="/assets/images/pic1/pic1_200/Hotel_5.jpg" alt="">
					<img src="/assets/images/pic1/pic1_200/Hotel_7.jpg" alt="">
					<img src="/assets/images/pic1/pic1_200/Hotel_8.jpg" alt="">
					<img src="/assets/images/pic1/pic1_200/Hotel_9.jpg" alt="">

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
									<th>
								<h4>PROMOTION</h4>
								</th>
								</tr>
								<tr>
									<td>
										<p>
											refers to raising customer awareness of a product or brand, 
											generating sales, and creating brand loyalty. 
											It is one of the four basic elements of the market mix, 
											which includes the four P's: price, product
										</p>
									</td>
								</tr>
								<tr>
									<td>
										FFFF
									</td>
								</tr>
							</table>
						</div>-->

		</div>
		<div id="footer"></div>
	</body>
</html>
