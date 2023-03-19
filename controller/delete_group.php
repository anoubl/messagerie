<?php
require "../models/users.php";
$user=new users();
$name=$_GET['name'];
$resultat=$user->delte_group($name);
if($resultat==1)
{
    $user->rederiger('mygroup.php');
}
else
{
    echo $resultat;
}
?>