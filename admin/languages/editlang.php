
<?php
$id=$_GET["id"];
include_once("../connection/connect.php");
$select_query = "SELECT * FROM languages where id=".$id; 
$result = mysqli_query($connexion, $select_query);
$row = mysqli_fetch_array($result, MYSQLI_ASSOC)

?>



<form method="POST" role="form" action="./index.php?page=updatelanguage">
    <input type="hidden" name="id" value="<?php echo $id; ?>"/>
        <div class="form-group">
            <label>Name</label>
            <input name="name" class="form-control" value="<?php echo $row['name']; ?>"/>
        </div>
        <div class="form-group">
            <label>price</label>
            <input name="price" class="form-control" value="<?php echo $row['price']; ?>"/>
        </div>
        <div class="form-group">
            <label>number of hour </label>
            <input name="nbofhour" class="form-control" value="<?php echo $row['nbofhour']; ?>"/>
        </div>
        
        <div class="form-group">          
            <button name="submit" type="submit" class="btn btn-primary form-control">save</button>
        </div>
    </form>




