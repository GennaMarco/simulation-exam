<?php 

/**
 * 
 */
class UserManager extends DatabaseMySQL
{
	public function insertUser($user)
	{
		$query = "INSERT INTO user (name, email, password, role_id) VALUES (:name, :email, :password, :role_id)";
		$results = $this->getDatabase()->prepare($query);
		$results->bindParam(":name", $user->getName(), PDO::PARAM_STR);
		$results->bindParam(":email", $user->getEmail(), PDO::PARAM_STR);
		$results->bindParam(":password", $user->getPassword(), PDO::PARAM_STR);
		$results->bindParam(":role_id", $user->getRoleId(), PDO::PARAM_INT);
		return $results->execute();
	}

	public function getUserByEmailAndPassword($email, $password)
	{
		$query = "SELECT * FROM user WHERE email = :email AND password = :password LIMIT 1";
		$results = $this->getDatabase()->prepare($query);
		$results->bindParam(":email", $email, PDO::PARAM_STR);
		$results->bindParam(":password", $password, PDO::PARAM_STR);
		$results->setFetchMode(PDO::FETCH_CLASS, "User");
		$results->execute();
		return $results->fetch();
	}
}
