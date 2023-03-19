<?php
session_start();
$id=$_SESSION['id'];
require "../models/users.php";
$user=new users();
$user->ofline($id);
session_destroy();
session_unset();
header("location:../index.php");
?>