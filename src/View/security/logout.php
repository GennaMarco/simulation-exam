<?php
	session_start(); 
	unset($_SESSION["user"]);
	header("Location: base.php?page=login");
