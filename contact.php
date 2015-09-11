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
		<title>Contact</title>
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
	</head>
	<body>
		<?php include './list.php'; ?>
		<div id="headerBar"></div>
		<div class="sectionMain" style="margin-top: 50px">
			<div class="item-middle">
				<h1>CONTACT</h1> 
			</div>
		</div>
		<div id="contact">
			<div class="item-right">
				<h3>บริษัท ออลเดอะเวร์เอ็ดดูเคชั่น จำกัด</h3>
				<p>4-4/5 ชั้น12 อาคารเซ็นเวิล์ด </p>
				<p>ถนนราชดำริ ปทุมวัน กรุงเทพฯ 10330</p>
				<p>โทรศัพท์ : 
					<?php print_r(tranTxt("
					phone number
					", $lang)); ?>
				</p>
				<p>Email : info@allthewayeducation.com</p>
				<p>Website : www.allthewayeducation.com</p>
			</div>
			<br>
			<div class="item-right">
				<h3>ALL THE WAY EDUCATION Co.,Ltd.</h3>
				<p>4-4/5 12th Floor, Zen World Building,</p>
				<p>Ratchadamri Road, Pathumwan, Bangkok 10330</p>
				<p>Tel : 
					<?php print_r(tranTxt("
					phone number
					", $lang)); ?></p>
				<p>Email : info@allthewayeducation.com</p>
				<p>Website : www.allthewayeducation.com</p>
			</div>
		</div>
		<div id="footer"></div>
	</body>
</html>

 


