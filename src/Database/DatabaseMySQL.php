<?php 

abstract class DatabaseMySQL
{
    private $host;
    private $username;
    private $password;
    private $name_db;
    private $database;

    function __construct()
  	{
  		$this->host = "localhost";
  		$this->username = "root";
  		$this->password = "";
  		$this->name_db = "simulation-exam";
  	}

   	public function getDatabase()
   	{
      try 
      {
        $this->database = new PDO('mysql:host='.$this->host.';dbname='.$this->name_db, $this->username, $this->password);
      } 
      catch (PDOException $e) 
      {
        echo $e->getMessage();
      }
   		return $this->database;
   	}
    
    public function selectAllFromTable($table, $class)
    {
      $query = "SELECT * FROM $table";
      $results = $this->database->query($query);
      $results->setFetchMode(PDO::FETCH_CLASS, $class);

      while ($object = $results->fetch()){
        $objects[$object->__toString()] = $object;
      }
      return $objects;
    }

    public function convertStringToDate($string){
      $date = DateTime::createFromFormat('d/m/Y', $string);
      return $date->format('Y-m-d');
    }
}
