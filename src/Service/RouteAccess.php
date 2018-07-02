<?php

class RouteAccess 
{
	private $location = 'Location: ../View/base.php';

	public function allowRouteAccessToRoles($role_codes){
		$roleManager = new RoleManager();
		$roleIds = [];

		foreach($role_codes as $code){
			array_push($roleIds, $roleManager->getRoleByCode($code)->getId());
		}

		if(isset($_SESSION['user'])){
			if(!in_array($_SESSION['user']->getRoleId(), $roleIds)){
				header($this->location);
			}
		}
		else{
			header($this->location);
		}
	}

	public function allowRouteAuthenticateAccess(){
		if(isset($_SESSION['user'])){
			header($this->location);
		}
	}
}
