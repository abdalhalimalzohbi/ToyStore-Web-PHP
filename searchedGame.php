<div class="fashion_section">
   <div id="main_slider" class="carousel slide" data-ride="carousel">
      <div class="carousel-inner">
         <div class="container">
            <h1 class="fashion_taital"><?php echo ( " games") ?></h1>
            <div class="fashion_section_2">
               <div class="row">
                  <?php
                  include_once("/connection/connect.php");
                  $query_select = "select * from game where name LIKE  '%" . $_GET['search'] . "%'";
                  $resultgame = mysqli_query($connexion, $query_select);
                  while ($gamerow = mysqli_fetch_array($resultgame, MYSQLI_ASSOC)) {
                  ?>
                     <div class="col-6 col-md-3">
                        <div class="box_main">
                           <h4 class="shirt_text"><?php echo $gamerow['name']; ?></h4>
                           <p class="price_text">Price <span style="color: #262626;">$ <?php echo $gamerow['newprice'];?></span></p>
                           <div class="tshirt_img"><img src="<?php echo "toystore/" . $gamerow['picture']; ?>"></div>
                           <div class="btn_main">
                              <div class="buy_bt">
                                 <div class="buy_bt"><button onclick="addtocart(<?php echo htmlspecialchars(json_encode($gamerow), ENT_QUOTES, 'UTF-8'); ?>)">Buy Now</button></div>
                              </div>
                              <div class="seemore_bt"><a href="#">See More</a></div>
                           </div>
                        </div>
                     </div>
                  <?php }
                  ?>
               </div>
            </div>
         </div>
      </div>
   </div>
</div>
<script>
   function addtocart(obj) {
      const gameName = obj['name'];
      const gamePrice = obj['newprice'];
      const gamePic = obj['picture'];
      const existingCartItemsJSON = sessionStorage.getItem('cartItems');
      const existingCartItems = existingCartItemsJSON ? JSON.parse(existingCartItemsJSON) : [];
      existingCartItems.push({
         name: gameName,
         newprice: gamePrice,
         photo: gamePic
      });
      const updatedCartItemsJSON = JSON.stringify(existingCartItems);
      sessionStorage.setItem('cartItems', updatedCartItemsJSON);
      getcart();
   }
   cart = [];

   function getcart(obj) {
      if (sessionStorage.getItem("cartItems") != null) {
         cart = JSON.parse(sessionStorage.getItem("cartItems"));
      }

      var aboudElement = document.getElementById("aboud");
      var totalOfAllSubtotals = 0;

      if (cart.length > 0) {
         document.getElementById("noti").style.display = "unset";
         document.getElementById("noti").innerHTML = cart.length;
         aboudElement.innerHTML = "";

         var parsedArray = JSON.parse(sessionStorage.getItem('cartItems'));

         for (var i = 0; i < parsedArray.length; i++) {
            var x = document.createElement("tr");
            x.setAttribute("class", "odd gradeX");

            var a = document.createElement("td");
            a.innerHTML = parsedArray[i]["photo"];
            x.appendChild(a);
            var b = document.createElement("td");
            b.innerHTML = parsedArray[i]["name"];
            x.appendChild(b);
            var c = document.createElement("td");
            c.innerHTML = parsedArray[i]["newprice"];
            x.appendChild(c);
            var d = document.createElement("td");
            var input = document.createElement("input");
            input.type = "number";
            input.style.width = "50px";
            input.value = 1;
            d.appendChild(input);
            x.appendChild(d);
            var e = document.createElement("td");
            e.innerHTML = calculateTotal(parsedArray[i]["newprice"], 1);
            x.appendChild(e);
            var btndelete = document.createElement("button");
            btndelete.setAttribute("class", "btn btn-danger");
            btndelete.innerHTML = "delete";
            btndelete.setAttribute("onclick", "deletearray(" + i + ")");

            x.appendChild(btndelete);

            aboudElement.appendChild(x);

            totalOfAllSubtotals += parseFloat(e.innerHTML);
         }

         var totalElement = document.createElement("div");
         totalElement.id = "totalDisplay";
         totalElement.innerHTML = "Total of All Subtotals: $" + totalOfAllSubtotals.toFixed(2);
         aboudElement.appendChild(totalElement);


         aboudElement.addEventListener('input', function(event) {
            if (event.target.tagName.toLowerCase() === 'input') {
               updateTotal(event.target.parentNode.parentNode);
            }
         });
      }

      function updateTotal(rowElement) {
         var inputValue = parseInt(rowElement.querySelector("td:nth-child(4) input").value) || 0;
         var price = parseFloat(rowElement.querySelector("td:nth-child(3)").innerHTML);
         var subtotal = calculateTotal(price, inputValue);
         rowElement.querySelector("td:nth-child(5)").innerHTML = subtotal;

         totalOfAllSubtotals = calculateTotalOfAllSubtotals();
         updateTotalDisplay();
      }

      function calculateTotal(price, quantity) {
         return (price * quantity).toFixed(2);
      }

      function calculateTotalOfAllSubtotals() {
         var subtotals = aboudElement.querySelectorAll("td:nth-child(5)");
         var total = 0;
         subtotals.forEach(function(subtotal) {
            total += parseFloat(subtotal.innerHTML);
         });
         return total;
      }

      function updateTotalDisplay() {
         var totalDisplayElement = document.getElementById("totalDisplay");
         if (totalDisplayElement) {
            totalDisplayElement.innerHTML = "Total of All Subtotals: $" + totalOfAllSubtotals.toFixed(2);
         }
      }
   }
   function deletearray(obj) {
      cart.splice(obj, 1);
                sessionStorage.setItem('cartItems', JSON.stringify(cart));
                getcart();
            }
   document.addEventListener("DOMContentLoaded", () => {
      getcart();
   });
</script>
<style>


@media only screen and (max-width: 767px) {
  .box_main {
    display: flex;
    flex-direction: column;
    height: 400px;
  }

  .btn_main {
    display: flex;
    justify-content: flex-end; 
    margin-top: auto; 
  }

  .buy_bt button,
  .seemore_bt a {
    font-size: 12px;
  }
}



</style>