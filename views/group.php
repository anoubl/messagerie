
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php  echo $title;  ?></title>

  
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>


</head>
<body>
    <div class="container">
   
        <legend><?php echo $title; ?></legend>
        <form action="../controller/create_group.php" method="post">
            <label for="">Name of group</label>
            <input type="text" name="name" id="">
            <br>
            <?php foreach($row as $row) 
            { ?>
             <input type="checkbox" name="user_name[]" id="" value="<?php echo $row['id']; ?>"><?php echo $row['prenom']." ".$row['nom'];  ?>
<br>
                <?php  

            }
            ?>
            <br>
            <input type="submit" value="Create" name="submit">
        </form>
</fieldset>
    </div>
</body>
</html>