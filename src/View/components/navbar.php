<ul>
	<li><a href="../default/homepage.php">Home</a></li>
	<li><a href="../security/register.php">Sign-up</a></li>
	<li><a href="../security/login.php">Login</a></li>
</ul>
<hr>
<div style="float: right;">
	<?php echo isset($_SESSION['user']) ? $_SESSION['user']->getEmail().' <a href="../security/logout.php">Logout</a>' : ""; ?>
</div>

