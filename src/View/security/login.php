<?php include '../../View/base.php'; ?>
<?php require '../../Database/DatabaseMySQL.php'; ?>
<?php require '../../Manager/UserManager.php'; ?>

<?php 

if($_SERVER['REQUEST_METHOD'] == 'POST'){
	$userManager = new UserManager();
	$_SESSION['user'] = $userManager->getUserByEmailAndPassword($_POST['email'], $_POST['password']) ? : null;
	echo $_SESSION['user'] ? "":"Email o Password errati!";
}

$routeAccess = new routeAccess();
$routeAccess->allowRouteAuthenticateAccess();
?>

<h1>Login</h1>
<form method="POST">
	<div>
		<label>Email</label>
		<br>
		<input type="email" name="email" required>
	</div>
	<br>
	<div>
		<label>Password</label>
		<br>
		<input type="password" name="password" required>
	</div>
	<br>
	<button type="submit">Login</button>
</form>