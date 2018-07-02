<?php 

class ActivityDateManager extends DatabaseMySQL
{
	public function insertActivityDate($activity_date)
	{
		$query = "INSERT INTO activity_date (date, activity_id) VALUES (:date, :activity_id)";
		$date = $this->convertStringToDate($activity_date->getDate());
		$results = $this->getDatabase()->prepare($query);
		$results->bindParam(":date", $date, PDO::PARAM_STR);
		$results->bindParam(":activity_id", $activity_date->getActivityId(), PDO::PARAM_INT);
		$results->execute();
	}
}
