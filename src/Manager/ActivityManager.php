<?php 

class ActivityManager extends DatabaseMySQL
{
	public function insertActivity($activity)
	{
		$db = $this->getDatabase();
		$query = "INSERT INTO activity (name) VALUES (:name)";
		$results = $db->prepare($query);
		$results->bindParam(":name", $activity->getName(), PDO::PARAM_STR);
		$results->execute();
		return $db->lastInsertId();
	}
}
