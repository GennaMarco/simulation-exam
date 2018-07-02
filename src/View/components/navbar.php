<nav class="navbar navbar-default">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <a class="navbar-brand" href="#">Brand</a>
    </div>
    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li><a href="../default/homepage.php">Link <span class="sr-only">(current)</span></a></li>
        <li><a href="#">Activities</a></li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <?php if(isset($_SESSION['user'])): ?>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><?php echo $_SESSION['user']->getEmail(); ?> <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="../security/logout.php">Logout</a></li>
          </ul>
        </li>
    	<?php else: ?>
    		<li><a href="../security/register.php">Register</a></li>
        <li><a href="../security/login.php">Login</a></li>
    	<?php endif; ?>
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>

