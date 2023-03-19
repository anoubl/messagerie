<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $title;  ?></title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <style>
       
    </style>
</head>
<body>
    <div class="container">
        <h2><?php echo $title;  ?></h2>
        <table class="table">
            <thead>
            <th>Name of group</th>
             <th>Created at</th>
             <th>More Info</th>
             <th>discussion</th>
             <th>Action</th>
            </thead>
            <tbody>
                <?php foreach ($row as $row)
                {
                       ?>
                       <tr>
                     <td><?php echo $row['name'];  ?></td>
                     <td><?php echo $row['date_group'];  ?></td>
                     <td>
                    <a class="btn" href="../controller/membre.php?name=<?php echo $row['name'];  ?>">
                        <img width="20" height="20" src="../image/membre-de-lequipe.png" alt="">
                    </a>  
                     </td>
                     <td>
                     <a class="btn" href="../controller/disscusion.php?name=<?php echo $row['name'];  ?>">
                        <img width="20" height="20" src="../image/discussion.png" alt="">
                    </a>  
                     </td>
                     <td>
                        <a class=" btn" href="../controller/delete_group.php?name=<?php echo $row['name']; ?> ">
                            <img width="20" height="20" src="../image/delete.png" alt="" srcset="">
                        </a>
                     </td>
              <?php  }
                 ?>   

                     </tr>
            </tbody>
        </table>
    </div>
</body>
</html>