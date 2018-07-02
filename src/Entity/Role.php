<?php 

class Role
{
    private $id;
    private $name;
    private $code;

    public function getId()
    {
    	return $this->id;
    }

    public function getName()
    {
    	return $this->id;
    }

    public function setName($name)
    {
    	$this->name = $name;
    }

    public function getCode()
    {
        return $this->code;
    }

    public function setCode($code)
    {
        $this->code = $code;
    }
}