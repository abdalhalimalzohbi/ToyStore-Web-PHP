<?php
include_once("../connection/connect.php");

$id=$_GET["id"];

$detete_query="delete from game where id=".$id;


$result = mysqli_query($connexion, $detete_query);


 if($result){
    echo "data inserted successfully";
    header('location:index.php?page=product');

 }



?>