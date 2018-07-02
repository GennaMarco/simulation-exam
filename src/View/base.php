<!DOCTYPE html>
<html>
<head>
	<title>simulation-exam</title>
</head>
<body>
	<div>
		<?php include '../../Global/ROLES.php'; ?>
		<?php require '../../Entity/User.php'; ?>
		<?php require '../../Entity/Role.php'; ?>
		<?php session_start(); ?>
		<?php require '../../Service/RouteAccess.php'; ?>
		<?php require 'components/navbar.php'; ?>
	</div>
</body>
</html>
