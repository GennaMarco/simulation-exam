<?php

class RoleManager extends DatabaseMySQL
{
	public function getRoleByCode($code)
	{
		$query = "SELECT * FROM role WHERE code = :code LIMIT 1";
		$results = $this->getDatabase()->prepare($query);
		$results->bindParam(":code", $code, PDO::PARAM_STR);
		$results->setFetchMode(PDO::FETCH_CLASS, "Role");
		$results->execute();
		return $results->fetch();
	}
}
