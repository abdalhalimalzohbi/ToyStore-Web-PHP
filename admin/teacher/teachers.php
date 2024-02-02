<a href="./index.php?page=addteacher">+ add new</a>
<br>
<div class="table-responsive">
<table class="table table-striped table-bordered table-hover" id="dataTables-example">
    <thead>
        <tr>
            <th>Name</th>
            <th>Phone</th>
            <th>Email</th>
            <th>address</th>
            <th>specialization</th>
            <th>salary</th>
            <th>picture</th>
            <th>Management</th> 
        </tr>
    </thead>
<?php

include_once("../connection/connect.php");

?>
 <?php
        $query_select="select * from teachers";
        $resultstudent = mysqli_query($connexion, $query_select);
        while($row=mysqli_fetch_array($resultstudent, MYSQLI_ASSOC)){


        ?>
<tbody>
<tr class="odd gradeX">
                <td><?php echo $row['fullname']; ?></td>
                <td><?php echo $row['phone']; ?></td>
                <td><?php echo $row['email']; ?></td>
                <td class="center"><?php echo $row['address']; ?></td>
                <td class="center"><?php echo $row['specialization']; ?></td>
                <td><?php echo $row['salary']; ?></td>
                <td><img src="<?php echo $row['picture']; ?>" style="width: 50px"></td>
                <td><a href="./index.php?page=deleteteacher&id=<?php echo $row["id"]; ?>"  >Delete</a> | 
                     <a href="./index.php?page=editteacher&id=<?php echo $row["id"]; ?>"  >Edit</a></td>
            </tr>
<?php



}
?>
 </tbody>
</table>
</div>