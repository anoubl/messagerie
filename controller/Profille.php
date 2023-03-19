<?php
$id=$_GET['id'];
require "../views/nav.php";
require "../models/users.php";
$user=new users();
$title="Profille";
$row=$user->search($id);
require "../views/profille.php";
?>