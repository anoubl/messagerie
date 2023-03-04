<?php
session_start();
require "..\models\users.php";
$id=$_SESSION['id'];
$user=new users();
$name=$user->get_name($id);

if(isset($_POST['sign']))
{
    $fname=$_POST['fname'];
    $lname=$_POST['lname'];
    $email=$_POST['email'];
    $password=$_POST['password'];
    $dob=$_POST['password'];
    $jour=$_POST['jour'];
    $mois=$_POST['mois'];
    $anne=$_POST['anne'];
    $genre=$_POST['exampleRadios'];
    $user->add($fname,$lname,$dob,$email,$password,$genre);
    
}

?>
