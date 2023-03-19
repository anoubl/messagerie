<?php
require "../views/nav.php";
require "../models/users.php";
$user=new users();
$title="group member";
$name=$_GET['name'];
$row=$user->membre($name);
require "../views/membre.php";
?>