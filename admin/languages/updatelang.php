<?php
include_once("../connection/connect.php");
if(isset($_POST["submit"])){
    $id= $_POST["id"];

    $name= $_POST["name"];
    $price= $_POST["price"];
    $nbofhour= $_POST["nbofhour"];


$insert_query="update languages set name='".$name."',price=".$price.",
nbofhour=".$nbofhour." where id=".$id ;

echo $insert_query;
 $result = mysqli_query($connexion, $insert_query);


 if($result){
    echo "data inserted successfully";
    header('location:./index.php?page=languages');

 }

// echo $insert_query;

}




?>