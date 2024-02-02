
<form method="POST" role="form" enctype="multipart/form-data">
        <div class="form-group">
            <label>Name</label>
            <input name="name" class="form-control"/>
        </div>
        <div class="form-group">
            <label>Phone</label>
            <input name="phone" class="form-control"/>
        </div>
        <div class="form-group">
            <label>Email </label>
            <input name="email" class="form-control"/>
        </div>
        <div class="form-group">
            <label>specialization </label>
            <input name="spec" class="form-control"/>
        </div>
        <div class="form-group">
            <label>salary </label>
            <input name="salary" class="form-control"/>
    
        <div class="form-group">
            <label>Address </label>
            <input name="address" class="form-control"></input>
        </div>
        <div class="form-group">
            <label>upload picture </label>
            <input type="file"  name="pic" class="form-control"></input>
        </div>
        <div class="form-group">          
            <button name="submit" type="submit" class="btn btn-primary form-control">save</button>
        </div>
    </form>
    <?php
include_once("../connection/connect.php");

if(isset($_POST["submit"])){

$name= $_POST["name"];
$phone= $_POST["phone"];
$email= $_POST["email"];
$salary= $_POST["salary"];
$speciliazation= $_POST["spec"];
$address= $_POST["address"];
//$picture= $_POST["picture"];
$user_id=$_SESSION["session_user_id"];



$targetDirectory = "images/students/";
$targetFile = $targetDirectory . basename($_FILES["pic"]["name"]);
$uploadOk = 1;
$fileType = strtolower(pathinfo($targetFile, PATHINFO_EXTENSION));

// Check if file already exists
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
// echo $targetFile;
if ($uploadOk == 0) {
   echo "Sorry, your file was not uploaded.";
   return;
} else {
   // If everything is ok, try to upload file
   if (move_uploaded_file($_FILES["pic"]["tmp_name"], $targetFile)) {
       echo "The file " . basename($_FILES["pic"]["name"]) . " has been uploaded.";
   } else {
       echo "Sorry, there was an error uploading your file.";
   }
}






$insert_query="insert into teachers(fullname,phone,email,address,picture,specialization,salary)
 values('".$name."',".$phone.",'".$email."','".$address."','".$targetFile."','".$speciliazation."',".$salary.")";
 $result = mysqli_query($connexion, $insert_query);
echo $insert_query;

 
 if($result){
    echo "data inserted successfully";
    header('location:index.php?page=teachers');

 }else{
    echo mysqli_error($connexion)."</br>";


 }

// echo $insert_query;

}




?>