<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->

<html lang='EN'>
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
		<title>Work and Travel</title>
		<!--<meta charset="UTF-8">-->
		<meta http-equiv=Content-Type content="text/html; charset=utf-8">
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
			<div class="worknTravel">
				<!--<div class="item-middle"><h1> dsfgsdfjw;fjeoifhwilfheofjwel;f </h1></div-->
				<div id="container1">
					<h1>Work and Travel</h1>
				</div>
			</div>
		</div>
		<div class="sectionMain">
			<h2 style="color: #36635A">Ready to start your work & travel&nbsp;
				<a href="/applicationForm_worknTravel.html" target="_blank"><button type="button" class="btn btn-info">START HERE</button></a></h2>
		</div>
		<div id="Section-Detail" class="wrapper">
			<!--<div class="container">-->
			<div id="tabs" style="width: 85%">
				<ul class="nav nav-tabs">
					<li class="active" ><a href="#intro" data-toggle="tab"><?php print_r(tranTxt("Intro", $lang)); ?></a></li>
					<li><a href="#eligibility" data-toggle="tab"><?php print_r(tranTxt("Eligibility", $lang)); ?></a></li>
					<li><a href="#jobs" data-toggle="tab">Type of Jobs</a></li>
					<li><a href="#application" data-toggle="tab">Application Step</a></li>
					<li><a href="#promotion_tab" data-toggle="tab">Promotion</a></li>
					<li><a href="#fee" data-toggle="tab">Program Fee & Promotion</a></li>
					<li><a href="#qanda" data-toggle="tab">Q & A</a></li>
				</ul>
				<div id="content" class="tab-content" style="width: 60%">
					<div class="tab-pane fade in active" id="intro">
						<h3>Intro</h3>
						<?php print_r(tranTxt("
							<p>เป็นโครงการแลกเปลี่ยนวัฒนธรรมระหว่างประเทศที่ได้รับความสนับสนุนจากหน่วยงานรัฐบาลประเทศ
							สหรัฐอเมริกา  
							โดยเปิดโอกาสให้นักศึกษาต่างชาติที่มีโอกาสในการทำงานและท่องเที่ยวในช่วงปิดภาคเรียนฤดูร้อน 
							ผู้เข้าร่วมโครงการจะได้สัมผัสวิถีชีวิตในประเทศสหรัฐอเมริกา แลกเปลี่ยนวัฒนธรรม 
							และพัฒนาความสามารถทางด้านภาษาจากเจ้าของภาษา</p>
						<p>ผู้เข้าร่วมโครงการ USA Summer Work and travel  จะเดินทางไปประเทศสหรัฐอเมริกาด้วยวีซ่า J-1 
							(เป็นวีซ่าในโครงการแลกเปลี่ยนวัฒนธรรมให้ผู้เข้าร่วมโครงการทำงานและท่องเที่ยวในประเทศสหรัฐ
							อเมริกาได้อย่างถูกต้องตามกฎหมายซึ่งเมื่อจบโครงการแล้วต้องเดินทางกลับประเทศ)</p>
						<p>ระยะเวลาในการเข้าร่วมโครงการ  รัฐบาลอเมริกันซึ่งเป็นผู้ควบคุมโครงการ Summer Work and 
							Travel USA  ระยะเวลาในการเข้าร่วมโครงการไว้คือไม่เกิน 4 เดือน (ระหว่าง เดือนพฤษภาคม – 
							เดือนสิงหาคม) หลังจากสิ้นสุดระยะเวลาเข้าร่วมโครงการ 
							ผู้เข้าร่วมโครงการสามารถท่องเที่ยวในประเทศสหรัฐอเมริกาได้อีกไม่เกิน 30 วัน</p>
						<p>ด้านความปลอดภัย  All the way education มีทีมงานเดินทางไปเยี่ยมผู้เข้าร่วมโครงการ 
							ถึงสถานที่ทำงานในสหรัฐอเมริกา
							หาก ผู้เข้าร่วมโครงการ ประสบปัญหาขณะทำงานอยู่ที่สหรัฐอเมริกา 
							สามารถติดต่อเจ้าหน้าที่ในประเทศไทย และอเมริกา ตลอด 24 ชั่วโมง</p>
						", $lang)); ?>
					</div>
					<div class="tab-pane fade" id="eligibility">
						<h3>Eligibility</h3>
						<?php print_r(tranTxt('
							<p><b>คุณสมบัติผู้เข้าร่วมโครงการ</b></p>
						<p><span class="glyphicon glyphicon-check"></span> &nbsp; 
							เป็นผู้มีสัญชาติไทย มีอายุระหว่าง 18 - 28 ปี </p>

						<p><span class="glyphicon glyphicon-check"></span> &nbsp;  
							มีทักษะด้านการสื่อสารภาษาอังกฤษดี</p>

						<p><span class="glyphicon glyphicon-check"></span> &nbsp;  
							กำลังศึกษาอยู่ในสถาบันอุดมศึกษาในระดับปริญญาตรี หรือปริญญาโท ทุกชั้นปี</p>

						<p><span class="glyphicon glyphicon-check"></span> &nbsp;  
							มีทัศนคติที่ดี พร้อมที่จะปรับตัวเพื่อเรียนรู้วิถีการดำเนินชีวิตและวัฒนธรรมที่แตกต่าง 
							มีความรับผิดชอบและเข้าใจวัตถุประสงค์ของโครงการ</p>
						', $lang)); ?>
					</div>
					<div class="tab-pane fade" id="jobs">
						<h3>Type of Jobs</h3>
						<div class="jobs">
							<!--<div class="co">-->
							<div class="col-xs-12 col-sm-6 col-md-6 ">
								<div class="container1">
									<img src="/assets/images/pic3/pic3_600/W&Tjob_2.jpg" alt="">
									<h4>Amusement Park</h4>
									<p><b>Job Guide line :</b> Area Host , Ground , Cashier ,
										Merchandise , Food Service, Parking Lot,
										Traffic, Ride Operator, Guest Attendant, Game
										Operator, Lifeguard (Water Park)</p>
								</div>
							</div>
							<div class="col-xs-12 col-sm-6 col-md-6">
								<div class="container1">
									<img src="/assets/images/pic3/pic3_600/W&Tjob_5.jpg" alt="">
									<h4>Restaurant Job</h4>
									<p><b>Job Guide line :</b> Busser , Food Runner , Cashier,
										Kitchen Utilities , Crew Member , Dishwasher ,
										Host Hostess , Waiter & Waitress</p>
								</div>
							</div>
							<div class="col-xs-12 col-sm-6 col-md-6">
								<div class="container1">
									<img src="/assets/images/pic3/pic3_600/W&Tjob_4.jpg" alt="">
									<h4>Department stores</h4>
									<p><b>Job Guide line :</b> Cashier , Stocker , Sales
										Assistant , Store Sales</p>
								</div>
							</div>
							<div class="col-xs-12 col-sm-6 col-md-6">
								<div class="container1">
									<img src="/assets/images/pic3/pic3_600/W&Tjob_6.jpg" alt="">
									<h4>Hotel and Resort</h4>
									<p><b>Job Guide line :</b> Bell Person , Cashier,
										Dishwasher, Food Service,
										Ground, Housekeeper, Houseman , Laundry,
										Lifeguard , Maintenance , Resort Worker
										, Pool Attendant , Server</p>
								</div>
							</div>
							<div class="col-xs-12 col-sm-6 col-md-6">
								<div class="container1">
									<img src="/assets/images/pic3/pic3_600/W&Tjob_3.jpg" alt="">
									<h4>National Parks</h4>
									<p><b>Job Guide line :</b> Cashier , Merchandise, Food
										Service, Parking Lot</p>
								</div>
							</div>
							<div class="col-xs-12 col-sm-6 col-md-6">
								<div class="container1">
									<img src="/assets/images/pic3/pic3_600/W&Tjob_1.jpg" alt="">
									<h4>Temporary Office Work</h4>
									<p><b>Job Guide line :</b> Reception, Key data person</p>
								</div>
							</div>
						</div>
					</div>
					<div class="tab-pane fade" id="application">
						<h3>Application Step</h3>
						<?php print_r(tranTxt('
						<p>1. คลิ๊ก “Start here” และกรอกข้อมูลผู้สมัครให้ครบถ้วน  

							จากนั้นปริ้นใบสมัครและรอการติดต่อกลับจากเจ้าหน้าที่</p>

						<p>2. เจ้าหน้าที่จะติดต่อกลับผู้สมัครภายใน 24 ชั่วโมงเพื่อสอบถามข้อมูลเพิ่มเติม  

							และแจ้งรากการเอกสารที่ผู้สมัครต้องนำมายื่น</p>

						<p>3. ทดสอบความรู้ภาษาอังกฤษที่สำนักงาน ALL THE WAY EDUCATION หรือออนไลน์</p>

						<p>4. สอบสัมภาษณ์จากนายจ้าง</p>

						<p>5. เมื่อผู้เข้าร่วมโครงการผ่านคุณสมบัตร และการสอบเบื้องต้นจะได้รับ DS-2019</p>

						<p>6. สมัคร J-1 Visa กับสถานทูตอเมริกา</p>

						<p>7. จองตั๋งเครื่องบิน</p>

						<p>8. Orientation เพื่อเตรียมความพร้อม</p>

						<p>9. ออกเดินทางไปสหรัฐอเมริกา</p>
						', $lang)); ?>
					</div>
					<div class="tab-pane fade" id="promotion_tab">
						<h3>Promotion</h3>
						<p>Early Bird Promotion : For more information please contact ALL THE WAY EDUCATION at 087-321-2108</p>
					</div>
					<div class="tab-pane fade" id="fee">
						<h3>Program Fee & Promotion</h3>
						<p>For more information please contact ALL THE WAY EDUCATION at 087-321-2108</p>
					</div>
					<div class="tab-pane fade" id="qanda">
						<h3>Q & A</h3>
						<div class="q1">Q: What kind of job can I work in if I participate in The Summer USA Work and Travel program?</div>
						<div class="a1">A: After students’ qualifications have been determined to participate in the program, 
							students will be provided the job from companies like resorts, restaurants, hotels, 
							amusement parks, national parks, and  zoos. The pay rate varies depending on job type, 
							location, and position.</div>
						<br>
						<div class="q1">Q: Can I work a second job?</div>
						<div class="a1">A: Yes, students can find second jobs but should consider first job is a priority over the second one.</div>
						<br>
						<div class="q1">Q: How long I can stay in the US during the program?</div>
						<div class="a1">A: Students can participate in the Summer Work and Travel Program up to 4 months and 
							will have time for travel in the US up to 30 days after finishing the program.</div>
						<br>
						<div class="q1">Q: Is the USA Summer Work and Travel USA program supported by JOB RECRUITMENT Company from USA? </div>
						<div class="a1">A: No, The USA Summer Work and Travel Program is a program under the US Department 
							of State with J-1 Exchange student visa to allow full-time college or university students from 
							different countries to participate in program during their school break of the academic year 
							to work in the US. And they will have 30 days after program completion to travel within the 
							US and prepare to return to their countries.</div>
						<br>
						<div class="q1">Q: How much pocket money should I bring?</div>
						<div class="a1">A: Please keep in mind in the US the employer usually gives you a pay check every 2 
							weeks. So bring pocket money for housing deposit, first month rental, transportation, foods 
							etc. and for the first 2 weeks before getting your first pay check. (Around $ 700-900, living 
							costs is different in each city, research to find out)</div>
						<br>
						<div class="q1">Q: Does the employer provide housing?</div>
						<div class="a1">A: Mostly organization,employee will provide the housing for students but if there are jobs 
							that don’t include housing. We will inform you before traveling to the US. Students will have 
							time to search and contact to find accommodation before leaving Thailand. (Agency staff in 
							Thailand will help students to looking for the house.)</div>
						<br>
						<div class="q1">Q: Does All the Way Education have staff to take care of student while they participate the 
							program in the US?</div>
						<div class="a1">A: Yes we do, All the Way Education has full-time Thai Professional team to take care of 
							students during the 4 months student program in the US with the 24 hours emergency USA 
							phone number. Parents can be sure students will have Thai Staff take care during the 
							program in the US.</div>
					</div>
				</div>
				<div id="mediazone" style="width: 30%">
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
					<img src="/assets/images/pic3/pic3_600/W&T_13.jpg" alt="">
					<img src="/assets/images/pic3/pic3_200/W&T_3.jpg" alt="">
					<img src="/assets/images/pic3/pic3_200/W&T_4.jpg" alt="">
					<img src="/assets/images/pic3/pic3_200/W&T_5.jpg" alt="">
					<img src="/assets/images/pic3/pic3_200/W&T_6.jpg" alt="">
					<img src="/assets/images/pic3/pic3_200/W&T_7.jpg" alt="">
					<img src="/assets/images/pic3/pic3_200/W&T_8.jpg" alt="">
					<img src="/assets/images/pic3/pic3_200/W&T_9.jpg" alt="">
					<img src="/assets/images/pic3/pic3_200/W&T_10.jpg" alt="">
					<img src="/assets/images/pic3/pic3_200/W&T_12.jpg" alt="">
					<img src="/assets/images/pic3/pic3_200/W&T_2.jpg" alt="">
					<img src="/assets/images/pic3/pic3_200/W&T_14.jpg" alt="">
					<img src="/assets/images/pic3/pic3_200/W&T_15.jpg" alt="">
					<img src="/assets/images/pic3/pic3_200/W&T_16.jpg" alt="">
					<img src="/assets/images/pic3/pic3_200/W&T_17.jpg" alt="">

				</div>

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
