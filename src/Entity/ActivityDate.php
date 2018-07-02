<?php 

class ActivityDate
{
    private $id;
    private $date;
    private $activity_id;

    public function getId()
    {
    	return $this->id;
    }

    public function getDate()
    {
    	return $this->date;
    }

    public function setDate($date)
    {
    	$this->date = $date;
    }

    public function getActivityId()
    {
        return $this->activity_id;
    }

    public function setActivityId($activity_id)
    {
        $this->activity_id = $activity_id;
    }
}