<?php
require 'connection.php';

class users extends connection
{
    public  $conn;
    public  function  tester($email,$password)
    {
        $con=$this->connections();
        $sql="select * from users where email='$email' and password='$password'";
        $resultat=$con->query($sql);
        if($resultat->rowcount()>0)
        {
            $row=$resultat->fetchall();
            foreach($row as $row)
            {
                return $row['id'];
            }
        }
        return -1;
    }
    
    public function set_prenom($prenom,$id)
    {
        $con=$this->connections();
        $sql="UPDATE `users` SET prenom='$prenom' where  id='$id'";
        $result=$con->exec($sql);
        if($result)
        {
            return 1;
        }
        return  -1;
    }
    public function set_nom($nom,$id)
    {
        $con=$this->connections();
        $sql="UPDATE `users` SET `nom`='$nom' where  id='$id'";
        $result=$con->exec($sql);
        if($result)
        {
            return 1;
        }
        return  -1;
    }
    public function set_password($password,$id)
    {
        $con=$this->connections();
        $sql="UPDATE `users` SET `password`='$password' where  id='$id'";
        $result=$con->exec($sql);
        if($result)
        {
            return 1;
        }
        return  -1;
    }
    public function set_image($image,$id)
    {
        $con=$this->connections();
        $sql="UPDATE `users` SET `file`='$image' where  id='$id'";
        $result=$con->exec($sql);
        if($result)
        {
            return 1;
        }
        return  -1;
    }
    public function set_date($date,$id)
    {
        $con=$this->connections();
        $sql="UPDATE `users` SET `dob`='$date' where  id='$id'";
        $result=$con->exec($sql);
        if($result)
        {
            return 1;
        }
        return  -1;
    }
    public  function  get_role($email)
{
    $con=$this->connections();
    $sql="select role from users where email='$email' ";
    $resultat=$con->query($sql);
    if($resultat->rowcount()>0)
    {
        $row=$resultat->fetchall();
        foreach($row as $row)
        {
            return $row['role'];
        }
    }
    return -1;
}
    public  function  get_name($id)
    {
        $con=$this->connections();
        $sql="select prenom,nom from users where id='$id'";
        $resultat=$con->query($sql);
        if($resultat->rowcount()>0)
        {
            $row=$resultat->fetchall();
            foreach($row as $row)
            {
                return $row['prenom']." ".$row['nom'];
            }
        }
        return -1;
    }
    public function nombre()
    {
        $con=$this->connections();
        $sql="select count(*) as nombre from users where role!=1";
        $resultat=$con->query($sql);
        if($resultat->rowcount()>0)
        {
            $row=$resultat->fetchall();
            foreach($row as $row)
            {
                return $row['nombre'];
            }
        }
        return -1;
    }
    public function nombre_terrain()
    {
        $con=$this->connections();
        $sql="select count(*) as nombre from terrain";
        $resultat=$con->query($sql);
        if($resultat->rowcount()>0)
        {
            $row=$resultat->fetchall();
            foreach($row as $row)
            {
                return $row['nombre'];
            }
        }
        return -1;
    }
    public function nombre_adm()
    {
        $con=$this->connections();
        $sql="select count(*) as nombre from users where role=1";
        $resultat=$con->query($sql);
        if($resultat->rowcount()>0)
        {
            $row=$resultat->fetchall();
            foreach($row as $row)
            {
                return $row['nombre'];
            }
        }
        return -1;
    }
    public function  add1($prenom,$nom,$dob,$email,$password,$chemin)
{
    $con=$this->connections();
    $sql="INSERT INTO `users`(`id`, `prenom`, `nom`, `dob`, `email`, `password`,`file`,`role`) VALUES(null,'$prenom','$nom','$dob','$email','$password','$chemin',1) ";
    $result=$con->exec($sql);
    if($result)
    {
        return 1;
    }
    return  -1;
}
public function  add($prenom,$nom,$jour,$mois,$anne,$email,$password,$genre,$status)
{
    $con=$this->connections();
    $sql="INSERT INTO `users`(`id`, `prenom`, `nom`, `email`, `password`, `genre`, `jour`, `mois`, `anne`,`status`) VALUES (null,'$prenom','$nom','$email','$password','$genre','$jour','$mois','$anne','$status') ";
    $result=$con->exec($sql);
    if($result)
    {
        return 1;
    }
    return  print_r($con->errorInfo());
}


public function freind($id)
{
    $con=$this->connections();
    $sql="
SELECT users.prenom,users.nom,users.jour,users.mois,users.anne,friends.date_friends
FROM users,friends
where users.id=friends.freind_id and friends.user_id='$id';
    ";
    $result=$con->query($sql);
    return $result->fetchall();
}


public function follow($id1,$id2)
{
    $con=$this->connections();
    $sql="
    INSERT INTO `friends`(`id`, `user_id`, `freind_id`, `date_friends`) VALUES 
    (null,'$id1','$id2',timestamp(sysdate()));
    INSERT INTO `friends`(`id`, `user_id`, `freind_id`, `date_friends`) VALUES 
    (null,'$id2','$id1',timestamp(sysdate()));
    ";
    $result=$con->exec($sql);
    if($result)
    {
        return 1;
    }
    return  -1;
}
public function user($id)
{
    $con=$this->connections();
    $sql="select * from users where id!='$id' and id not in (select freind_id from friends WHERE user_id='$id')";
    $result=$con->query($sql);
    return $result->fetchall();
}

public  function  delete($id)
{
    $con=$this->connections();
    $sql="DELETE from users where id='$id' ";
    $result=$con->exec($sql);
    if($result)
    {
        return 1;
    }
    return  -1;

}
public  function  search($id)
{
    $con=$this->connections();
    $sql="select * from users where id='$id'";
    $result=$con->query($sql);
    return $result->fetchall();
}
    public function  rederiger($name)
    {
        header("Location:$name");
    }
    public function  rederiger2($name,$para,$val)
    {
        header("Location:$name?$para=$val");
    }
public function show($id)
{
    
    $con=$this->connections();
    $sql="
    select users.id,users.prenom,users.nom
    from users,friends
    where users.id=friends.freind_id and friends.user_id='$id';
    ";
    $result=$con->query($sql);
    return $result->fetchall();
}
public function admin($id,$name)
{
    $con=$this->connections();
    $sql="INSERT INTO `groupe`(`id`, `user_id`, `date_group`, `name`,`etat`) 
    VALUES(null,'$id',timestamp(sysdate()),'$name',1);
     ";
    $result=$con->exec($sql);
    if($result)
    {
        return 1;
    }
    return  -1;
}
public function name_group($id)
{
$con=$this->connections();
$sql="SELECT * FROM `groupe` WHERE user_id='$id'";
$result=$con->query($sql);
return  $result->fetchall();
}
public function group($id1,$name)
{
    $con=$this->connections();
    $sql="INSERT INTO `groupe`(`id`, `user_id`, `date_group`, `name`) 
    VALUES(null,'$id1',timestamp(sysdate()),'$name');
     ";
    $result=$con->exec($sql);
    if($result)
    {
        return 1;
    }
    return  -1;
}

public function membre($name)
{
    $con=$this->connections();
    $sql="
    SELECT users.prenom,users.nom,users.email,users.status,groupe.etat 
    FROM users,groupe 
    WHERE users.id=groupe.user_id AND groupe.name='$name';
    ";
    $result=$con->query($sql);
    return $result->fetchall();
}

public function delte_group($name)
{
    $con=$this->connections();
    $sql=
"
DELETE FROM `groupe` WHERE name='$name';
";
    $result=$con->exec($sql);
    if($result)
    {
        return 1;
    }
    return  print_r($con->errorInfo());
}


public function online($id)
{
    $con=$this->connections();
    $sql=
"
UPDATE `users` SET `connecter`= 1 WHERE id='$id';
";
    $result=$con->exec($sql);
    if($result)
    {
        return 1;
    }
    return  print_r($con->errorInfo());
}

public function ofline($id)
{
    $con=$this->connections();
    $sql=
"
UPDATE `users` SET `connecter`=0 WHERE id='$id';
";
    $result=$con->exec($sql);
    if($result)
    {
        return 1;
    }
    return  print_r($con->errorInfo());
}


public function my_message($name)
{
    $con=$this->connections();
    $sql="
    SELECT * FROM `discussion`,users where   group_name='$name' and users.id=discussion.id_em;
    ORDER BY `created_at` 
    ";
    $result=$con->query($sql);
    return $result->fetchall();
}

public function add_message($message,$name,$id)
{
    $con=$this->connections();
$sql="
INSERT INTO `discussion`(`id`, `group_name`, `id_em`, `message`, `created_at`) VALUES(null,'$name','$id','$message',time(sysdate()));
";
$result=$con->exec($sql);
    if($result)
    {
        return 1;
    }
    return  print_r($con->errorInfo());
}
}
?>