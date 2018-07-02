<!DOCTYPE html>
<html>
<head>
	<title>simulation-exam</title>
	<link rel="stylesheet" type="text/css" href="../../../web/node_modules/bootstrap/dist/css/bootstrap.min.css">
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
	<script type="text/javascript" src="../../../web/node_modules/jquery/dist/jquery.min.js"></script>
	<script type="text/javascript" src="../../../web/node_modules/bootstrap/dist/js/bootstrap.min.js"></script>
</body>
</html>
