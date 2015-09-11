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
		<title>Language School - ESL</title>
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
			<div class="esl">
				<div id="container1">
					<h1>Language School</h1>
				</div>
			</div>
		</div>
		<div class="sectionMain">
			<h2 style="color: #36635A">Ready to start Language School&nbsp;
				<a href="/applicationForm_esl.html" target="_blank"><button type="button" class="btn btn-info">START HERE</button></a></h2>
		</div>
		<div id="Section-Detail" class="wrapper">
			<!--<div class="container">-->
			<div id="tabs">
				<ul class="nav nav-tabs">
					<li class="active"><a href="#overview" data-toggle="tab">Overview</a></li>
					<li><a href="#featured-school" data-toggle="tab">Featured School</a></li>
					<li><a href="#steps" data-toggle="tab">Application Step</a></li>
					<li><a href="#qanda" data-toggle="tab">Q&A</a></li>
				</ul>
				<div id="content" class="tab-content">
					<div class="tab-pane fade in active" id="overview">
						<h3>Language School</h3>
						<?php print_r(tranTxt("
						<p>นักเรียนไทยส่วนใหญ่ที่มาต่างประเทศควรเริ่มต้นจากโรงเรียนประเภทนี้ก่อน 
							เพื่อให้เกิดความคุ้นเคยกับสำเนียงของเจ้าของภาษา,
							ทบทวนพื้นฐานความรู้ภาษาอังกฤษในทุกๆด้าน (Listening,
							Speaking/Pronunciation, Grammar, Writing, Vocabulary) 
							และเพิ่มความมั่นใจในการสร้างบทสนทนากับเจ้าของภาษา</p>
						<p>นอกจากด้านความรู้สิ่งที่ผู้เรียนจะได้รับจากห้องเรียนในต่างประเทศ
							คือ การเรียนรู้วัฒนธรรมที่แตกต่าง ,
							การเรียนรู้ชีวิตที่ห่างไกลคราบครัว 
							ซึ่งจะเป็นประสบการณ์ที่มีค่าในการปรับตัวเข้ากับสังคมในอนาคต</p>
						<p>โรงเรียนสอนภาษา
							ส่วนใหญ่จะเริ่มต้นคล้ายโรงเรียนสอนภาษาระดับสูงที่ไทย 
							(ซึ่งส่วนใหญ่คือสถาบันที่ไปเปิดสาขาที่ไทย เช่น inlingua, Kaplan) 
							ด้วยการสอบวัดระดับผู้มาสมัครทั้ง Grammar และ Speaking 
							เพื่อจัดระดับ Class เรียนที่เหมาะสมให้ผู้มาสมัคร 
							จากนั้นจะมีการสอบเพื่อปรับระดับขึ้นทุกเดือน เมื่อถึง Level 
							สูงสุดผู้เรียนสามารถเลือกเรียน TOEFL ซื่งเป็น intensive class 
							เพื่อสอบเข้าเรียนต่อ bachelor degree, Master’s degree หรือ Ph.
							D ต่อไปได้</p>
						<p>All the way education บริการแนะนำและจัดหาโรงเรียนสอนภาษาที่เหมาะสม 
							ทั้งราคาและคุณภาพ ให้แก่ผู้ที่สนใจ</p>
						", $lang)); ?>
					</div>
					<div class="tab-pane fade" id="featured-school">
						<ul><h3>Featured School</h3>
							<p>- Berlitz Study Abroad - Washington DC</p>
							<p>- ELS Language Centers</p>
							<p>- Intensive English Program (IEP)</p>
							<p>- Inlingua</li>
							<p>- International Language Institute</p>
							<p>- Kaplan English Programs</p>
							<p>- LADO International College</p>
						</ul>
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
						<div class="q1">Q: Who can be my sponsor?</div>
						<div class="a1">A: Anyone can be your sponsor. Your father, a cousin, or a family friend. The sponsor should be a person who has enough financial means to support
							you full time for the entire duration of your studies in the United States. The sponsor needs to submit financial documents which prove his/her economic
							situation.</div>
						<br>
						<div class="q1">Q: Do I need a sponsor if I can financially support myself?</div>
						<div class="a1">	A: No. If you have enough money to support yourself, you do not need a sponsor. To be your own sponsor, you must demonstrate that you have $1,500
							saved for every month that you want to be in the United States. For example, if you plan to be in the United States for one year, you will need to have a
							bank letter that demonstrates that you have $18,000 in your bank account to support yourself.</div>
						<br>
						<div class="q1">Q: Can my sponsor documents be in my native language?</div>
						<div class="a1">A: No, your sponsor documents must be in English so that the consulate and ALL THE WAY EDUCATION staff can read and understand them.</div>
						<br>
						<div class="q1">Q: What is the I-901 SEVIS fee?</div>
						<div class="a1">A: The I-901 SEVIS fee is mandatory payment that all F-1 visa applicants must pay before they go to the consulate to apply for the visa. The I-901
							SEVIS fee enters you into the Immigration and Customs Enforcement database. The I-901 SEVIS fee cannot be paid until you have received your I-20.
							This fee can be paid at Department of Homeland Security You must bring the receipt for this fee to the consular appointment with you. This is not the
							same fee that the consulate requires for an appointment.</div>
						<br>
						<div class="q1">Q: Can I study for one month with the student visa?</div>
						<div class="a1">A: Yes, only if you are returning to country immediately after your studies end. If you are going to stay in the United States, you must study for three
							consecutive months.</div>
						<br>
						<div class="q1">Q: My visa was denied. Will you refund everything?</div>
						<div class="a1">A: ALL THE WAY EDUCATION will refund the two month deposit and the registration fee. However, will not refund any shipping fees or wire transfer
							fees.</div>
						<br>
						<div class="q1">Q: Do I have to have an F-1 student visa to study in the Intensive Program?</div>
						<div class="a1">A: No, student visas are only necessary for students who come to the United States for the purpose to learn English. If you are already in the United
							States working, participating in another exchange program, or employed by an international organization, you may also study in the Intensive Program.</div>
						<br>
						<div class="q1">Q: Can I begin the Intensive Program during the second week of class?</div>
						<div class="a1">A: Yes. Under our ‘Late Enrollment’ program you may enter a class at any point during the session. However, you may not receive credit, CEUs, or a
							certificate/diploma if you enter a program under Late Enrollment. In addition, the Late Enrollment Program does not count towards maintaining your
							status if you are an F-1 visa student.</div>
						<br>
						<div class="q1">Q: When I finish my studies, will I receive a certificate or diploma?</div>
						<div class="a1">A: Yes! After you have completed all your classes, please make sure that you attend the exit meeting and exam. All students are required to take the exit
							exam before they receive their certificate. Once you finish the exit exam, please request your certificate from your center’s Admissions Officer.</div>
						<br>
						<div class="q1">Q: How do I know which class I should begin in?</div>
						<div class="a1">A: Before you begin classes, you will take a placement exam. The placement exam will determine which of the ten levels you will begin in.</div>
					</div>
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
					<img src="/assets/images/pic1/pic1_600/ESL_3.jpg" alt="">
					<img src="/assets/images/pic1/pic1_200/ESL_2.jpg" alt="">
					<img src="/assets/images/pic1/pic1_200/ESL_4.jpg" alt="">
					<img src="/assets/images/pic1/pic1_200/ESL_5.jpg" alt="">
					<img src="/assets/images/pic1/pic1_200/ESL_6.jpg" alt="">
					<img src="/assets/images/pic1/pic1_200/ESL_7.jpg" alt="">
					<img src="/assets/images/pic1/pic1_200/ESL_8.jpg" alt="">
					<img src="/assets/images/pic1/pic1_200/ESL_9.jpg" alt="">
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



			<div id="promotion">
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
			</div>
		</div>
		<div id="footer"></div>
	</body>
</html>
