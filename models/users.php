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
public function  add($prenom,$nom,$dob,$email,$password,$genre)
{
    $con=$this->connections();
    $sql="INSERT INTO `users`(`id`, `prenom`, `nom`, `dob`, `email`, `password`,genre) VALUES(null,'$prenom','$nom','$dob','$email','$password','$genre') ";
    $result=$con->exec($sql);
    if($result)
    {
        return 1;
    }
    return  -1;
}

public  function  show()
{
    $con=$this->connections();
$sql="SELECT * FROM `users`";
$resultat=$con->query($sql);
return $resultat->fetchall();
}

public  function  delete($id)
{
    $con=$this->connections();
    $sql="DELETE from users where id='$id'";
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

}
?>