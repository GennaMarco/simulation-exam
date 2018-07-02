<?php require '../Database/DatabaseMySQL.php'; ?>
<?php require '../Manager/UserManager.php'; ?>
<?php require '../Manager/RoleManager.php'; ?>

<?php 

if($_SERVER['REQUEST_METHOD'] == 'POST'){
	if($_POST['password'] == $_POST['confirmPassword']){
		$user = new User();
		$roleManager = new RoleManager();
		$user->setName($_POST['name']);
		$user->setEmail($_POST['email']);
		$user->setPassword($_POST['password']);
		$user->setRoleId($roleManager->getRoleByCode(ROLE_PARTECIPANT_CODE)->getId());
		$userManager = new UserManager();
		$_SESSION['message'] = 
			$userManager->insertUser($user) ? "Registrazione avvenuta con successo!" : "Email non valida perchè esistente!";
	}
	else{
		$_SESSION['message'] = "Le due password non coincidono!";
	}
}

$routeAccess = new routeAccess();
$routeAccess->allowRouteAuthenticateAccess();

?>
<div class="row">
	<?php if(isset($_SESSION['message'])) : ?>
		<div class="alert alert-info" role="alert">
	  		<?php 
	  			  echo $_SESSION['message'];
	  			  unset($_SESSION['message']);
	  		 ?>
		</div>
	<?php endif; ?>
	<h1 class="text-center">Registrati</h1>
    <div class="col-offset-4 col-sm-offset-4 col-md-offset-4 col-lg-offset-4 col-xl-offset-4 col-4 col-sm-4 col-md-4 col-lg-4 col-xl-4">
		<form method="POST">
		  <div class="form-group">
		    <label>Name</label>
	      	<input type="text" class="form-control" name="name" required>
		  </div>
		  <div class="form-group">
		    <label>Email</label>
	      	<input type="email" class="form-control" name="email" required>
		  </div>
		  <div class="form-group">
		    <label>Password</label>
	      	<input type="password" class="form-control" name="password" required>
		  </div>
		  <div class="form-group">
		    <label>Confirm Password</label>
	        <input type="password" class="form-control" name="confirmPassword" required>
		  </div>
		  <button type="submit" class="btn btn-success" style="width: 100%;">Registrati</button>
		</form>
	</div>
</div>
