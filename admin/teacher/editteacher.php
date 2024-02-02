<?php
include_once("../connection/connect.php");
$id=$_GET["id"];

$select_query = "SELECT * FROM teachers where id=".$id; 
$result = mysqli_query($connexion, $select_query);
$row = mysqli_fetch_array($result, MYSQLI_ASSOC)

?>
<form role="form" method="POST" action="./index.php?page=updateteacher&id=<?php echo $row['id']; ?>">
<label for="Teacher" style="font-size:34px;"> Edit Teacher</label>    
<div class="form-group">
        <label>Name</label>
        <input name="fullname" value="<?php echo  $row['fullname'];?>" class="form-control" />
    </div>

    <div class="form-group">
        <label>Phone</label>
        <input name="phone" value="<?php echo  $row['phone']; ?>" class="form-control" />
    </div>

    <div class="form-group">
        <label>Email</label>
        <input name="email"value="<?php echo  $row['email']; ?>" class="form-control" />
    </div>


    <div class="form-group">
        <label>Address</label>
        <input name="address"value="<?php echo  $row['address']; ?>" class="form-control" />
    </div>

    <div class="form-group">
        <label>Specialization</label>
        <input name="specialization"value="<?php echo  $row['specialization']; ?>" class="form-control" />
    </div>


    <div class="form-group">
        <label>Salary</label>
        <input name="salary"value="<?php echo  $row['salary']; ?>" type="double" class="form-control" /> 
    </div>
    <div class="form-group">
        <button name="submit"type="submit" class="btn btn-primary form-control"> save</button>
    </div>
</form>