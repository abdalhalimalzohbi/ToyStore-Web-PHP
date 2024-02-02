
<?php
$id=$_GET["id"];
include_once("../connection/connect.php");
$select_query = "SELECT * FROM game where id=".$id; 
$result = mysqli_query($connexion, $select_query);
$row = mysqli_fetch_array($result, MYSQLI_ASSOC)

?>


<form method="POST" role="form" action="./index.php?page=updateProduct&id=<?php echo $id; ?>" enctype="multipart/form-data">
    <div class="form-group">
        <label>Name</label>
        <input name="name" required class="form-control" value=<?php echo($row['name'])?> />
    </div>
    <div class="form-group">
        <label>Description</label>
        <input name="desc" required class="form-control" value=<?php echo($row['description'])?> />
    </div>

    <label for="age">age</label>
    <select name="age" class="form-control" required>
        <option value="">--select age--</option>
        <?php
        include_once("../connection/connect.php");
        $query_selectAge = "select * from age";
        $result_SelectAge = mysqli_query($connexion, $query_selectAge);
        while ($ageRow = mysqli_fetch_array($result_SelectAge, MYSQLI_ASSOC)) {
        if($row['age']==$ageRow["id"]){
        ?>
            <option value="<?php echo $ageRow["id"]; ?>" selected><?php echo $ageRow["name"]; ?></option><?php } ?>
            <option value="<?php echo $ageRow["id"]; ?>"><?php echo $ageRow["name"]; ?></option>

        <?php
        } ?>
    </select>
    <br>
    <label for="category">Category</label>
    <select name="category" class="form-control" required>
        <option value="">--select Category--</option>
        <?php
        include_once("../connection/connect.php");
        $query_selectCategory = "select * from category";
        $result_SelectCategory = mysqli_query($connexion, $query_selectCategory);
        while ($categoryRow = mysqli_fetch_array($result_SelectCategory, MYSQLI_ASSOC)) {
            if($row['category']==$categoryRow["id"]){
            ?>
                <option value="<?php echo $categoryRow["id"]; ?>" selected><?php echo $categoryRow["name"]; ?></option><?php } ?>
        ?>
            <option value="<?php echo $categoryRow["id"]; ?>"><?php echo $categoryRow["name"]; ?></option>
        <?php
        } ?>
    </select>
    <br>

    <div class="form-group">
        <label>Oldprice </label>
        <input name="oldprice" required class="form-control" value=<?php echo($row['oldprice'])?>  />

        <div class="form-group">
            <label>Newprice </label>
            <input name="price" required class="form-control" value=<?php echo($row['newprice'])?> ></input>
        </div>
        </select>
        <div class="form-group">
            <label>picture </label>
            <input name="pic" type="file" class="form-control">
        </div>
        <div class="form-group">
            <button name="submit" type="submit" class="btn btn-primary form-control">save</button>
        </div>
</form>