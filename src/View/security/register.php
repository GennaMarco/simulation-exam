<?php include '../../View/base.php'; ?>
<?php require '../../Database/DatabaseMySQL.php'; ?>
<?php require '../../Manager/UserManager.php'; ?>
<?php require '../../Manager/RoleManager.php'; ?>

<?php 

if($_SERVER['REQUEST_METHOD'] == 'POST'){
	$user = new User();
	$roleManager = new RoleManager();
	$user->setName($_POST['name']);
	$user->setEmail($_POST['email']);
	$user->setPassword($_POST['password']);
	$user->setRoleId($roleManager->getRoleByCode(ROLE_PARTECIPANT_CODE)->getId());
	$userManager = new UserManager();
	echo $userManager->insertUser($user) ? "Registrazione avvenuta con successo!" : "Email non valida perchè esistente!";
}

$routeAccess = new routeAccess();
$routeAccess->allowRouteAuthenticateAccess();

?>
<h1>Registrati</h1>
<form method="POST">
	<div>
		<label>Name</label>
		<br>
		<input type="text" name="name" required>
	</div>
	<br>
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
	<button type="submit">Registrati</button>
</form>
