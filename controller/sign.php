<?php
require "../models/users.php";
$user=new users();
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
    $status=$_POST['exampleRadios1'];
    $resultat=$user->add($fname,$lname,$jour,$mois,$anne,$email,$password,$genre,$status);
    if($resultat==1)
    {

    }
    else
    {
echo $resultat;
       
    }
}
?>