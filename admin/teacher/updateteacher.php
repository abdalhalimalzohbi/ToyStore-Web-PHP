<?php
include_once("../connection/connect.php");

if(isset($_POST['submit'])){
    $id = $_GET['id'];
    $fullname=$_POST["fullname"];
    $email=$_POST["email"];
    $phone=$_POST["phone"];
    $address=$_POST["address"];
    $spec = $_POST["specialization"];
    $salary = $_POST["salary"];
   
    $update_query = "UPDATE teachers SET    fullname='$fullname', phone='$phone', email='$email', specialization='$spec', salary='$salary', address='$address' WHERE id=$id";

    $result=mysqli_query($connexion,$update_query);
if($result){

    echo "Data Updated Successfully!";
    header('location:index.php?page=teachers');
    

}
}


?>