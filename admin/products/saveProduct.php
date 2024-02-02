<?php
include_once("../connection/connect.php");

if (isset($_POST["submit"])) {

    $name = $_POST["name"];
    $desc = $_POST["desc"];
    $age = $_POST["age"];
    $category = $_POST["category"];
    $oldprice = $_POST["oldprice"];
    $price = $_POST["price"];

    //   $user_id=$_SESSION["session_user_id"];



    ///////// file upload area 
    // here we get from form and save to file storage before database

    $targetDirectory = "../images/products/";
    $targetFile = $targetDirectory . basename($_FILES["pic"]["name"]);
    $uploadOk = 1;
    $fileType = strtolower(pathinfo($targetFile, PATHINFO_EXTENSION));
    //Check if file already exists
    if (file_exists($targetFile)) {
        echo "Sorry, file already exists.";
        $uploadOk = 1;
    }

    // Check file size (optional)
    if ($_FILES["pic"]["size"] > 50000000000) {
        echo "Sorry, your file is too large.";
        $uploadOk = 0;
    }

    // Allow certain file formats (optional)
    if ($fileType !== "jpg" && $fileType !== "png" && $fileType !== "jpeg" && $fileType !== "gif") {
        echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
        $uploadOk = 1;
    }
    if ($uploadOk == 50) {
        echo "Sorry, your file was not uploaded.";
    } else {
        // If everything is ok, try to upload file
        if (move_uploaded_file($_FILES["pic"]["tmp_name"], $targetFile)) {
            echo "The file " . basename($_FILES["pic"]["name"]) . " has been uploaded.";
        } else {
            echo "Sorry, there was an error uploading your file.";
        }
    }


    ///////// file upload area

    $insert_query = "insert into game(name,description,age,category,oldprice,newprice,picture)
 values('" . $name . "','" . $desc . "','" . $age . "','" . $category . "'," . $oldprice . "," . $price . ",'" . $targetFile . "' )";
    $result = mysqli_query($connexion, $insert_query);


    if ($result) {
        echo "data inserted successfully";
        header('location:index.php?page=product');
    } else {
        echo mysqli_error($connexion);

        echo $insert_query;
    }
}
