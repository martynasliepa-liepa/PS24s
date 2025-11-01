<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>
<body>
	<form action="metod/inc.php" method="post">
		<label for="username">Username:</label>
		<input type="text" id="username" name="username" >
		<br>
		<label for="password">Password:</label>
		<input type="password" id="password" name="password" >
		<br>
		<input type="submit" name="submit" value="submit">
	</form>
	<br>
<?php
if (isset($_SESSION['user'])) {
	echo "Prisijunges: " . $_SESSION['user'];
	echo '<br><a href="metod/logout.php">Atsijungti</a>';
} else {
	echo "Not logged in";
}
?>
	<br>
	<form action="metod/lginc.php" method="post">
		<label for="username">Username:</label>
		<input type="text" id="username" name="username" >
		<br>
		<label for="password">Password:</label>
		<input type="password" id="password" name="password" >
		<br>
		<input type="submit" name="login" value="login">
	</form>



</body>
</html>