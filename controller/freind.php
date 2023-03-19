<?php
session_start();
$id=$_SESSION['id'];
require "../views/nav.php";
require "../models/users.php";
$user=new users();
$title="My Friends";
$row=$user->freind($id);
require "../views/freind.php";
?>