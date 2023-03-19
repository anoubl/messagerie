<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $title;  ?></title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <h2><?php echo $title;  ?></h2>
        <table class="table">
            <thead>
            <th>Prénom</th>
            <th>Nom</th>
             <th>Profille</th>
            </thead>
            <tbody>
                <?php foreach ($row as $row)
                {
                       ?>
                       <tr>
                     <td><?php echo $row['prenom'];  ?></td>
                     <td><?php echo $row['nom'];  ?></td>
                     <td>
                        <a href="../controller/Profille.php?id=<?php echo $row['id']; ?>">
                            <img  width="50" height="50" src="../image/profille.png" alt="">
                        </a>
                     </td>
                     </tr>
                    <?php
                }
                ?>
            </tbody>
        </table>
    </div>
</body>
</html>