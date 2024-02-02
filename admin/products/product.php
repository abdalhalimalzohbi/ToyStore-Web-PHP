<button class="btn btn-primary"><a style="color:white; text-decoration:none" href="./index.php?page=addProduct">+ add new</a></button>
<br>
<br>

<?php

include_once("../connection/connect.php");

?>

<div class="table-responsive">
    <table class="table table-striped table-bordered table-hover" id="dataTables-example">
        <thead>
            <tr>
                <th>Name</th>
                <th>Description</th>
                <th>age</th>
                <th>Category</th>
                <th>oldprice</th>
                <th>price</th>
                <th>picture</th>
                <th>Management</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $query_select = "select * from game";
            $resultgame = mysqli_query($connexion, $query_select);
            while ($gamerow = mysqli_fetch_array($resultgame, MYSQLI_ASSOC)) {
                $query_selectAge = "SELECT * FROM age WHERE id=" . $gamerow['age'];
                $result_SelectAge = mysqli_query($connexion, $query_selectAge);
                $ageRow = mysqli_fetch_array($result_SelectAge, MYSQLI_ASSOC);
                $query_selectCategory = "SELECT * FROM category WHERE id=" . $gamerow['category'];
                $result_SelectCategory = mysqli_query($connexion, $query_selectCategory);
                $catRow = mysqli_fetch_array($result_SelectCategory, MYSQLI_ASSOC)


            ?>

                <tr class="odd gradeX">
                    <td><?php echo $gamerow['name']; ?></td>
                    <td><?php echo $gamerow['description']; ?></td>
                    <td><?php echo $ageRow['name']; ?></td>
                    <td class="center"><?php echo $catRow['name']; ?></td>
                    <td class="center"><?php echo $gamerow['oldprice']; ?></td>
                    <td><?php echo $gamerow['newprice']; ?></td>
                    <td><img src="<?php echo $gamerow['picture']; ?>" style="width: 50px"></td>
                    <td><button class="btn btn-danger"><a style="color:white; text-decoration:none" href="./index.php?page=deleteProduct&id=<?php echo $gamerow["id"]; ?>">Delete</a></button>
                        <button class="btn btn-primary"><a style="color:white; text-decoration:none" href="./index.php?page=editProduct&id=<?php echo $gamerow["id"]; ?>">Edit</a></button>
                    </td>
                </tr>

            <?php



            }
            ?>


        </tbody>
    </table>
</div>