<a href="./index.php?page=addlanguage">+ add new language</a>
<?php

include_once("../connection/connect.php");

?>
        <?php
        $query_select="select * from languages";
        $resultlang = mysqli_query($connexion, $query_select);
        $colors = array('#ffcc00', '#3399ff', '#99cc00', '#ff6666', '#9966cc');
        $i=0;
        while($langrow=mysqli_fetch_array($resultlang, MYSQLI_ASSOC)){
            if($i== 5){$i=0;}


        ?>

<div class="container">
  <div class="row">
    <div class="col-md-4 font-weight-bold"style="margin-block: 10px;">
      <div class="card bg-primary" style="border-radius: 10px; background-color:<?php echo $colors[$i]; ?>">
        <div class="card-body text-center" style="padding: 15px;">
          <h5 class="card-title"><?php echo $langrow["name"] ?></h5>
           <p class="card-text"><?php echo "Price: " . $langrow["price"]?><br>
                                <?php echo "Number of Hours: " . $langrow["nbofhour"]; ?></p>

          <a style="color: black;" href="./index.php?page=editlang&id=<?php echo $langrow["id"]; ?>" >Edit</a>|
          <a style="color: black;"href="./index.php?page=deletelang&id=<?php echo $langrow["id"]; ?>" >Delete</a>
        
        </div>
      </div>
    </div>

        <?php
$i++;


        }
        ?>

