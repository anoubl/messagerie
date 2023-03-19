<?php
session_start();
$id=$_SESSION['id'];
require "../views/nav.php";
require "../models/users.php";
$user=new users();
$title="Create a Group";
$row=$user->show($id);
require "../views/group.php";
?>