<!DOCTYPE html>
<html>
<head>
	<title>simulation-exam</title>
	<link rel="stylesheet" type="text/css" href="../../web/node_modules/bootstrap/dist/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="../../web/node_modules/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css">
</head>
<body>
	<?php include '../Global/ROLES.php'; ?>
	<?php require '../Entity/User.php'; ?>
	<?php require '../Entity/Role.php'; ?>
	<?php session_start(); ?>
	<?php require '../Service/RouteAccess.php'; ?>
	<?php require 'components/navbar.php'; ?>
	<div class="container">
		<?php require '../Routing/routing.php'; ?>
	</div>
	<script type="text/javascript" src="../../web/node_modules/jquery/dist/jquery.min.js"></script>
	<script type="text/javascript" src="../../web/node_modules/bootstrap/dist/js/bootstrap.min.js"></script>
	<script type="text/javascript" src="../../web/node_modules/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js"></script>
	<script type="text/javascript" src="../../web/js/add_activity_dates.js"></script>
</body>
</html>
