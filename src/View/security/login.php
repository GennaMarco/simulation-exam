<?php require '../Database/DatabaseMySQL.php'; ?>
<?php require '../Manager/UserManager.php'; ?>

<?php 

if($_SERVER['REQUEST_METHOD'] == 'POST'){
	$userManager = new UserManager();
	$_SESSION['user'] = $userManager->getUserByEmailAndPassword($_POST['email'], $_POST['password']) ? : null;
	$_SESSION['message'] = $_SESSION['user'] ? "":"Email o Password errati!";
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
	<h1 class="text-center">Login</h1>
    <div class="col-offset-4 col-sm-offset-4 col-md-offset-4 col-lg-offset-4 col-xl-offset-4 col-4 col-sm-4 col-md-4 col-lg-4 col-xl-4">
		<form method="POST">
		  <div class="form-group">
		    <label>Email</label>
	      	<input type="email" class="form-control" name="email" required>
		  </div>
		  <div class="form-group">
		    <label>Password</label>
	      	<input type="password" class="form-control" name="password" required>
		  </div>
		  <button type="submit" class="btn btn-primary" style="width: 100%;">Login</button>
		</form>
	</div>
</div>
