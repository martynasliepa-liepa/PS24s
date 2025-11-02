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
	<h2>Prisiregistravimas</h2>
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
	<h2>Prisijungimas</h2>
	<form action="metod/lginc.php" method="post">
		<label for="username">Username:</label>
		<input type="text" id="username" name="username" >
		<br>
		<label for="password">Password:</label>
		<input type="password" id="password" name="password" >
		<br>
		<input type="submit" name="login" value="login">
	</form>
		<br>
	<h2>Svetainių registras</h2>
	<form action="metod/webreg.php" method="post">
		<label for="svetaine">Username:</label>
		<input type="text" id="webname" name="webname" >
		<br>
		<label for="password">Password:</label>
		<input type="password" id="password" name="password" >
		<br>
		<input type="submit" name="webreg" value="webreg">
	</form>
<?php
if (isset($_SESSION['user'])) {
	include 'class/config.php';
	include 'class/db.php';
	include 'class/list.php';

	$listWeb = new listWeb();
	$listWeb->getList();

}
?>
</body>
</html>