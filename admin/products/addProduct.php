<form method="POST" role="form" action="./index.php?page=saveProduct" enctype="multipart/form-data">
    <div class="form-group">
        <label>Name</label>
        <input name="name" required class="form-control" />
    </div>
    <div class="form-group">
        <label>Description</label>
        <input name="desc" required class="form-control" />
    </div>

    <label for="age">age</label>
    <select name="age" class="form-control" required>
        <option value="">--select age--</option>
        <?php
        include_once("../connection/connect.php");
        $query_selectAge = "select * from age";
        $result_SelectAge = mysqli_query($connexion, $query_selectAge);
        while ($ageRow = mysqli_fetch_array($result_SelectAge, MYSQLI_ASSOC)) {
        ?>
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
        ?>
            <option value="<?php echo $categoryRow["id"]; ?>"><?php echo $categoryRow["name"]; ?></option>
        <?php
        } ?>
    </select>
    <br>

    <div class="form-group">
        <label>oldprice </label>
        <input name="oldprice" required class="form-control" />

        <div class="form-group">
            <label>price </label>
            <input name="price" required class="form-control"></input>
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