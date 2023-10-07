<?php
try{




    $id=$_GET['id'];
$pdo =new pdo ("mysql:host=localhost;dbname=carsweb","root","");
$pdo->query("DELETE FROM `cars` WHERE `id`=$id");
header('location:cars.php');

}
catch (PDOException $e)
{
echo $e;
}


?>