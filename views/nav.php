<?php
if(isset($_GET['group']))
{
        echo "
<div class='alert alert-success  alert-dismissible' role='alert'>
Thankyou !!!!!!!!!!!!!!!!!!!!
<button type='button' class='btn-close'  data-bs-dismiss='alert' aria-label='Close'></button>
</div>
";
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- bootstrap 5 CDN-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">

    <!-- bootstrap 5 Js bundle CDN-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>

    <style>
       
       body
{
    background-color: rgb(97, 80, 199);
}
       
    </style>
</head>
<body>
    
<div class="container py-5 h-100">
            <div class="">
             
            <a class="btn" type="submit" href="../views/home.php">
                    <img width="50" height="50" src="../image/maison.png" title="Home">
            </a>
            <a class="btn" type="submit" href="../controller/Invitation.php">
                    <img width="50" height="50" src="../image/utilisateur.png" title="Add Freinds">
            </a>
            <a class="btn" type="submit" href="../controller/freind.php">
                    <img width="50" height="50" src="../image/friend.png" title="My Freinds">
            </a>
            <a class="btn" type="submit" href="../controller/profilleuser.php">
                    <img width="50" height="50" src="../image/profille.png "title="My Profille">
            </a>
           
            <a class="btn" type="submit" href="../controller/mygroup.php">
                    <img width="50" height="50" src="../image/mygroup.png"title="My Groups">
            </a>
            <a class="btn" type="submit" href="../controller/Group.php">
                    <img width="50" height="50" src="../image/group.png"title="Add Group">
            </a>
            <a class="btn" type="submit" href="../controller/logout.php">
                    <img width="50" height="50" src="../image/logout.png"title="Log Out">
            </a>
            </div>
</body>
</html>