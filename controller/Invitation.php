<?php

session_start();
$id=$_SESSION['id'];
require "../views/nav.php";
require "../models/users.php";
$user=new users();
$title="Sent Invitation";
$row=$user->user($id);
require "../views/invitatio.php";
?>