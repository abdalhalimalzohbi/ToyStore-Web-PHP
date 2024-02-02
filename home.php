<div class="fashion_section">
   <div id="main_slider" class="carousel slide" data-ride="carousel">
      <div class="carousel-inner">
         <!-- <div class="carousel-item active"> -->
         <div class="container">
            <h1 class="fashion_taital">#Trending</h1>
            <div class="fashion_section_2">
               <div class="row">
                  <?php
                  include_once("/connection/connect.php");
                  $query_select = "select * from game";
                  $resultgame = mysqli_query($connexion, $query_select);
                  while ($gamerow = mysqli_fetch_array($resultgame, MYSQLI_ASSOC)) {
                  ?>
                     <div class="col-md-3">
                        <div class="box_main">
                           <h4 class="shirt_text"><?php echo $gamerow['name']; ?></h4>
                           <p class="price_text">Price <span style="color: #262626;">$ <?php echo $gamerow['newprice'];?></span></p>
                           <div class="tshirt_img"><img src="<?php echo "toystore/" . $gamerow['picture']; ?>"></div>
                           <div class="btn_main">
                           <div class="buy_bt"><button onclick="addtocart(<?php echo htmlspecialchars(json_encode($gamerow), ENT_QUOTES, 'UTF-8'); ?>)">Buy Now</button></div>
                              <div class="seemore_bt"><a href="#">See More</a></div>
                           </div>
                        </div>
                     </div><?php
                        }
                           ?>
               </div>
            </div>
         </div>
      </div>
   </div>

</div>
<div class="fashion_section">
   <div id="electronic_main_slider" class="carousel slide" data-ride="carousel">
      <div class="carousel-inner">
         <div class="carousel-item active">
            <div class="container">
               <h1 class="fashion_taital">Electronic</h1>
               <div class="fashion_section_2">
                  <div class="row">
                     <div class="col-lg-4 col-sm-4">
                        <div class="box_main">
                           <h4 class="shirt_text">Laptop</h4>
                           <p class="price_text">Start Price <span style="color: #262626;">$ 100</span></p>
                           <div class="electronic_img"><img src="images/laptop-img.png"></div>
                           <div class="btn_main">
                              <div class="buy_bt"><a href="#">Buy Now</a></div>
                              <div class="seemore_bt"><a href="#">See More</a></div>
                           </div>
                        </div>
                     </div>
                     <div class="col-lg-4 col-sm-4">
                        <div class="box_main">
                           <h4 class="shirt_text">Mobile</h4>
                           <p class="price_text">Start Price <span style="color: #262626;">$ 100</span></p>
                           <div class="electronic_img"><img src="images/mobile-img.png"></div>
                           <div class="btn_main">
                              <div class="buy_bt"><a href="#">Buy Now</a></div>
                              <div class="seemore_bt"><a href="#">See More</a></div>
                           </div>
                        </div>
                     </div>
                     <div class="col-lg-4 col-sm-4">
                        <div class="box_main">
                           <h4 class="shirt_text">Computers</h4>
                           <p class="price_text">Start Price <span style="color: #262626;">$ 100</span></p>
                           <div class="electronic_img"><img src="images/computer-img.png"></div>
                           <div class="btn_main">
                              <div class="buy_bt"><a href="#">Buy Now</a></div>
                              <div class="seemore_bt"><a href="#">See More</a></div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <div class="carousel-item">
            <div class="container">
               <h1 class="fashion_taital">Electronic</h1>
               <div class="fashion_section_2">
                  <div class="row">
                     <div class="col-lg-4 col-sm-4">
                        <div class="box_main">
                           <h4 class="shirt_text">Laptop</h4>
                           <p class="price_text">Start Price <span style="color: #262626;">$ 100</span></p>
                           <div class="electronic_img"><img src="images/laptop-img.png"></div>
                           <div class="btn_main">
                              <div class="buy_bt"><a href="#">Buy Now</a></div>
                              <div class="seemore_bt"><a href="#">See More</a></div>
                           </div>
                        </div>
                     </div>
                     <div class="col-lg-4 col-sm-4">
                        <div class="box_main">
                           <h4 class="shirt_text">Mobile</h4>
                           <p class="price_text">Start Price <span style="color: #262626;">$ 100</span></p>
                           <div class="electronic_img"><img src="images/mobile-img.png"></div>
                           <div class="btn_main">
                              <div class="buy_bt"><a href="#">Buy Now</a></div>
                              <div class="seemore_bt"><a href="#">See More</a></div>
                           </div>
                        </div>
                     </div>
                     <div class="col-lg-4 col-sm-4">
                        <div class="box_main">
                           <h4 class="shirt_text">Computers</h4>
                           <p class="price_text">Start Price <span style="color: #262626;">$ 100</span></p>
                           <div class="electronic_img"><img src="images/computer-img.png"></div>
                           <div class="btn_main">
                              <div class="buy_bt"><a href="#">Buy Now</a></div>
                              <div class="seemore_bt"><a href="#">See More</a></div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <div class="carousel-item">
            <div class="container">
               <h1 class="fashion_taital">Electronic</h1>
               <div class="fashion_section_2">
                  <div class="row">
                     <div class="col-lg-4 col-sm-4">
                        <div class="box_main">
                           <h4 class="shirt_text">Laptop</h4>
                           <p class="price_text">Start Price <span style="color: #262626;">$ 100</span></p>
                           <div class="electronic_img"><img src="images/laptop-img.png"></div>
                           <div class="btn_main">
                              <div class="buy_bt"><a href="#">Buy Now</a></div>
                              <div class="seemore_bt"><a href="#">See More</a></div>
                           </div>
                        </div>
                     </div>
                     <div class="col-lg-4 col-sm-4">
                        <div class="box_main">
                           <h4 class="shirt_text">Mobile</h4>
                           <p class="price_text">Start Price <span style="color: #262626;">$ 100</span></p>
                           <div class="electronic_img"><img src="images/mobile-img.png"></div>
                           <div class="btn_main">
                              <div class="buy_bt"><a href="#">Buy Now</a></div>
                              <div class="seemore_bt"><a href="#">See More</a></div>
                           </div>
                        </div>
                     </div>
                     <div class="col-lg-4 col-sm-4">
                        <div class="box_main">
                           <h4 class="shirt_text">Computers</h4>
                           <p class="price_text">Start Price <span style="color: #262626;">$ 100</span></p>
                           <div class="electronic_img"><img src="images/computer-img.png"></div>
                           <div class="btn_main">
                              <div class="buy_bt"><a href="#">Buy Now</a></div>
                              <div class="seemore_bt"><a href="#">See More</a></div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <a class="carousel-control-prev" href="#electronic_main_slider" role="button" data-slide="prev">
         <i class="fa fa-angle-left"></i>
      </a>
      <a class="carousel-control-next" href="#electronic_main_slider" role="button" data-slide="next">
         <i class="fa fa-angle-right"></i>
      </a>
   </div>
</div>
<!-- electronic section end -->
<!-- jewellery  section start -->
<div class="jewellery_section">
   <div id="jewellery_main_slider" class="carousel slide" data-ride="carousel">
      <div class="carousel-inner">
         <div class="carousel-item active">
            <div class="container">
               <h1 class="fashion_taital">Jewellery Accessories</h1>
               <div class="fashion_section_2">
                  <div class="row">
                     <div class="col-lg-4 col-sm-4">
                        <div class="box_main">
                           <h4 class="shirt_text">Jumkas</h4>
                           <p class="price_text">Start Price <span style="color: #262626;">$ 100</span></p>
                           <div class="jewellery_img"><img src="images/jhumka-img.png"></div>
                           <div class="btn_main">
                              <div class="buy_bt"><a href="#">Buy Now</a></div>
                              <div class="seemore_bt"><a href="#">See More</a></div>
                           </div>
                        </div>
                     </div>
                     <div class="col-lg-4 col-sm-4">
                        <div class="box_main">
                           <h4 class="shirt_text">Necklaces</h4>
                           <p class="price_text">Start Price <span style="color: #262626;">$ 100</span></p>
                           <div class="jewellery_img"><img src="images/neklesh-img.png"></div>
                           <div class="btn_main">
                              <div class="buy_bt"><a href="#">Buy Now</a></div>
                              <div class="seemore_bt"><a href="#">See More</a></div>
                           </div>
                        </div>
                     </div>
                     <div class="col-lg-4 col-sm-4">
                        <div class="box_main">
                           <h4 class="shirt_text">Kangans</h4>
                           <p class="price_text">Start Price <span style="color: #262626;">$ 100</span></p>
                           <div class="jewellery_img"><img src="images/kangan-img.png"></div>
                           <div class="btn_main">
                              <div class="buy_bt"><a href="#">Buy Now</a></div>
                              <div class="seemore_bt"><a href="#">See More</a></div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <div class="carousel-item">
            <div class="container">
               <h1 class="fashion_taital">Jewellery Accessories</h1>
               <div class="fashion_section_2">
                  <div class="row">
                     <div class="col-lg-4 col-sm-4">
                        <div class="box_main">
                           <h4 class="shirt_text">Jumkas</h4>
                           <p class="price_text">Start Price <span style="color: #262626;">$ 100</span></p>
                           <div class="jewellery_img"><img src="images/jhumka-img.png"></div>
                           <div class="btn_main">
                              <div class="buy_bt"><a href="#">Buy Now</a></div>
                              <div class="seemore_bt"><a href="#">See More</a></div>
                           </div>
                        </div>
                     </div>
                     <div class="col-lg-4 col-sm-4">
                        <div class="box_main">
                           <h4 class="shirt_text">Necklaces</h4>
                           <p class="price_text">Start Price <span style="color: #262626;">$ 100</span></p>
                           <div class="jewellery_img"><img src="images/neklesh-img.png"></div>
                           <div class="btn_main">
                              <div class="buy_bt"><a href="#">Buy Now</a></div>
                              <div class="seemore_bt"><a href="#">See More</a></div>
                           </div>
                        </div>
                     </div>
                     <div class="col-lg-4 col-sm-4">
                        <div class="box_main">
                           <h4 class="shirt_text">Kangans</h4>
                           <p class="price_text">Start Price <span style="color: #262626;">$ 100</span></p>
                           <div class="jewellery_img"><img src="images/kangan-img.png"></div>
                           <div class="btn_main">
                              <div class="buy_bt"><a href="#">Buy Now</a></div>
                              <div class="seemore_bt"><a href="#">See More</a></div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <div class="carousel-item">
            <div class="container">
               <h1 class="fashion_taital">Jewellery Accessories</h1>
               <div class="fashion_section_2">
                  <div class="row">
                     <div class="col-lg-4 col-sm-4">
                        <div class="box_main">
                           <h4 class="shirt_text">Jumkas</h4>
                           <p class="price_text">Start Price <span style="color: #262626;">$ 100</span></p>
                           <div class="jewellery_img"><img src="images/jhumka-img.png"></div>
                           <div class="btn_main">
                              <div class="buy_bt"><a href="#">Buy Now</a></div>
                              <div class="seemore_bt"><a href="#">See More</a></div>
                           </div>
                        </div>
                     </div>
                     <div class="col-lg-4 col-sm-4">
                        <div class="box_main">
                           <h4 class="shirt_text">Necklaces</h4>
                           <p class="price_text">Start Price <span style="color: #262626;">$ 100</span></p>
                           <div class="jewellery_img"><img src="images/neklesh-img.png"></div>
                           <div class="btn_main">
                              <div class="buy_bt"><a href="#">Buy Now</a></div>
                              <div class="seemore_bt"><a href="#">See More</a></div>
                           </div>
                        </div>
                     </div>
                     <div class="col-lg-4 col-sm-4">
                        <div class="box_main">
                           <h4 class="shirt_text">Kangans</h4>
                           <p class="price_text">Start Price <span style="color: #262626;">$ 100</span></p>
                           <div class="jewellery_img"><img src="images/kangan-img.png"></div>
                           <div class="btn_main">
                              <div class="buy_bt"> <button onclick=buyNow()>Buy Now</button></div>
                              <div class="seemore_bt"><a href="#">See More</a></div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <a class="carousel-control-prev" href="#jewellery_main_slider" role="button" data-slide="prev">
         <i class="fa fa-angle-left"></i>
      </a>
      <a class="carousel-control-next" href="#jewellery_main_slider" role="button" data-slide="next">
         <i class="fa fa-angle-right"></i>
      </a>
      <div class="loader_main">
         <div class="loader"></div>
      </div>
   </div>
</div>
<!-- contact section -->

<section class="contact_section layout_padding" style="margin-bottom: 10px;">
   <div class="container-fluid">
      <div class="row">
         <div class="col-md-5 col-lg-4 offset-md-1">
            <div class="form_container">
               <div class="heading_container">
                  <h2>Contact Us</h2>
               </div>
               <form action="">
                  <div><input type="text" placeholder="Full Name " /></div>
                  <div><input type="email" placeholder="Email" /></div>
                  <div><input type="text" placeholder="Phone number" /> </div>
                  <div><input type="text" class="message-box" placeholder="Message" /> </div>
                  <div class="d-flex ">
                     <button style="background-color: #ED3A3A; border-color:#ED3A3A">
                        SEND
                     </button>
                  </div>
               </form>
            </div>
         </div>
         <div class="col-md-6 col-lg-7 px-0">
            <div class="map_container">
               <div class="map">
                  <div id="googleMap">
                     <div class="google-map h-100 m-0" style="padding:10px;"><!--<div id="googlemaps" class="google-map h-100 m-0">-->
                        <iframe style="width:100%;height:100%;" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3291.2641688372223!2d35.83893507524185!3d34.42004439822099!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x1521f73a8a9bba6f%3A0x1edb8b2d55811800!2sDoll%20Top!5e0!3m2!1sen!2slb!4v1706385429951!5m2!1sen!2slb" width="600" height="450" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
</section>
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

            // Update the cumulative total
            totalOfAllSubtotals += parseFloat(e.innerHTML);
         }

         // Display the total of all subtotals
         var totalElement = document.createElement("div");
         totalElement.id = "totalDisplay";
         totalElement.innerHTML = "Total of All Subtotals: $" + totalOfAllSubtotals.toFixed(2);
         aboudElement.appendChild(totalElement);


         // Add event listener to the parent element using event delegation
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

         // Recalculate the total of all subtotals
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
         // Update the displayed total of all subtotals
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
