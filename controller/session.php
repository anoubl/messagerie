<?php   
require "..\models\users.php";
$user=new users();
session_start();
if(isset($_POST['login']))
{
    $email=$_POST['email'];
    $password=$_POST['password'];
    $resultat=$user->tester($email,$password);
    if($resultat!=-1)
    {
        $user->rederiger(('action.php'));
        $_SESSION['id']=$resultat;
    }
    else
    {
        $user->rederiger(('..\index.php'));

    }
}
?>