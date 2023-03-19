<?php

class connection
{
private $servername = "localhost";
private $username = "root";
private $password = "";
private $dbname = "messagerie";
public function  connections()
{
    return new pdo("mysql:host=$this->servername;dbname=$this->dbname",$this->username,$this->password);
}
}
?>