<?php
session_start();
$id=$_SESSION['id'];
$name=$_GET['name'];
require "../views/nav.php";
require "../models/users.php";
$user=new users();
$title="My Friends";
$row1=$user-> my_message($name);
require "../views/disscusion.php";
?>