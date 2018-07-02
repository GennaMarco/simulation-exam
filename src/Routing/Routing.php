<?php 
	
	$page = isset($_GET['page']) ? $_GET['page'] : "";

	switch ($page) {
		case 'login':
			require 'security/login.php';
			break;
		case 'register':
			require 'security/register.php';
			break;
		case 'logout':
			require 'security/logout.php';
			break;
		default:
			require 'default/home.php';
			break;
	}