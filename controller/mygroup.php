<?php
session_start();
$id=$_SESSION['id'];
require "../views/nav.php";
require "../models/users.php";
$user=new users();
$title="My Groups";
$row=$user-> name_group($id);
require "../views/mygroup.php";
?>