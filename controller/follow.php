<?php
session_start();
$id=$_SESSION['id'];
$id1=$_GET['id'];
require "../models/users.php";
$user=new users();
$resultat=$user->follow($id,$id1);
if($resultat==1)
{
    $user->rederiger('../controller/freind.php');
}
?>