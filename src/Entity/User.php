<?php 

class User
{
    private $id;
    private $name;
    private $email;
    private $password;
    private $role_id;

    public function getId()
    {
    	return $this->id;
    }

    public function getName()
    {
    	return $this->name;
    }

    public function setName($name)
    {
    	$this->name = $name;
    }

    public function getEmail()
    {
    	return $this->email;
    }

    public function setEmail($email)
    {
    	$this->email = $email;
    }

    public function getPassword()
    {
    	return $this->password;
    }

    public function setPassword($password)
    {
    	$this->password = $password;
    }

    public function getRoleId()
    {
    	return $this->role_id;
    }

    public function setRoleId($role_id)
    {
    	$this->role_id = $role_id;
    }
}