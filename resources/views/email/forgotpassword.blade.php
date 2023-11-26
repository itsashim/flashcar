<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Password Request</title>
</head>
<body>

	Hello! <br/>  
	Dear {{ $user->name }},

	It seems like you have requested for password reset. This is your password reset code.
	
	<div style="background-color:black; color:white; height:30px;width:120px;font-size:18px;">{{ $code }}</div>

	<p>If you haven't request kindly ignore this email.</p><br/>

	<b>Thank You!</b>
	<h6>Sansar Health</h6>
</body>
</html>