<?php
session_start();
$id=$_SESSION['id'];
$name=$_GET['name'];
require "../models/users.php";
$user=new users();
if(isset($_POST['submit']) && !empty($_POST['message']))
{
    $msg=$_POST['message'];
    $user->add_message($msg,$name,$id);
$user->rederiger2('disscusion.php',"name",$name);
}
?>