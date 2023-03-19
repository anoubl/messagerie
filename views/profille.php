

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
    
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>

</head>
<body>
<div class="container">
    <div class="main-body">
          <!-- Breadcrumb -->
          <nav aria-label="breadcrumb" class="main-breadcrumb">
           
          </nav>
          <!-- /Breadcrumb -->
    
          <div class="rcol-md-8">
            <div class="col-6">
              <div class="card">
                <div class="card-body">
                  <div class="d-flex flex-column align-items-center text-center">
                    <img src="https://bootdey.com/img/Content/avatar/avatar7.png" alt="Admin" class="rounded-circle" width="150">
                    <div class="mt-3">
                    <?php

                      foreach ($row as  $row)
                       {
  ?>


                      <h4><?php  echo $row['prenom']." ".$row['nom']; ?></h4>
                      <p><?php  echo $row['jour']." ".$row['mois']." ".$row['anne']; ?></p>
                      <p><?php  echo $row['status']; ?></p>
                      <p><?php  echo $row['email']; ?></p>
                      
            <a  class="btn btn-primary" href="../controller/follow.php?id=<?php  echo $row['id']; ?>">
            Follow
            </a>
            <?php
            }
            ?>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            
</div>
        </div>
    </div></body>
</html>