<?php
session_start();
$id=$_SESSION['id'];
require "../views/nav.php";
require "../models/users.php";
$user=new users();
$title="Profille";
$row=$user->search($id);
require "../views/profilleuser.php";
?>