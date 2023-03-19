<?php
session_start();
$id=$_SESSION['id'];
require "../models/users.php";
$user=new users();

if(isset($_POST['submit']))
{
    $name=$_POST['name'];
    $user->admin($id,$name);
    foreach($_POST['user_name'] as $row)
{
    $user->group($row,$name);
}
$user->rederiger('../controller/action.php?group');
}
?>