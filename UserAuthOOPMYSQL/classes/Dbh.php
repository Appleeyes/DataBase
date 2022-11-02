<?php


class Dbh{
    private $hostname;
    private $username;
    private $dbname;
    private $password;

    
   protected function connect(){
        $this->hostname = "127.0.0.1";
        $this->username = "root";
        $this->dbname = "zuriphp";
        $this->password = "";

        $db = new mysqli($this->hostname, $this->username, $this->password, $this->dbname);
        //echo "connected successfully";
        return $db;
    }
       
 }





