<?php 

class User{

    private $id;
    private $username;
    private $password;

    public function __construct($username, $password, $id = null){
    $this->username = $username;
    $this->password = $password;
    $this->id = $id;
    }


    public function getId()
    {
        return $this->id;
    }

 
    public function setId($id)
    {
        $this->id = $id;
    }
    public function getUsername()
    {
        return $this->username;
    }

 
    public function setUsername($username)
    {
        $this->id = $username;
    }

    public function getPassword()
    {
        return $this->password;
    }

 
    public function setPassword($password)
    {
        $this->id = $password;
    }




}




?>