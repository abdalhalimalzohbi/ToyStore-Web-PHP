<?php
include_once("../connection/connect.php");

if(isset($_POST["submit"])){

    $name= $_POST["name"];
    $price= $_POST["price"];
    $nbofhour= $_POST["nbofhour"];


$insert_query="insert into languages(name,price,nbofhour)
 values('".$name."',".$price.",".$nbofhour.")";
 $result = mysqli_query($connexion, $insert_query);


 if($result){
    echo "data inserted successfully";
    header('location:index.php?page=languages');

 }

// echo $insert_query;

}else{
    echo 'wwww';
}




?>