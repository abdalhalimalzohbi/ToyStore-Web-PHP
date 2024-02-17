<!DOCTYPE html>
<html lang="en">

<head>
   <!-- basic -->
   <meta charset="utf-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1">

   <!-- mobile metas -->
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <meta name="viewport" content="initial-scale=1, maximum-scale=1">
   <!-- site metas -->
   <title>Toys Store</title>
   <meta name="keywords" content="">
   <meta name="description" content="">
   <meta name="author" content="">
   <!-- bootstrap css -->
   <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
   <!-- style css -->
   <link rel="stylesheet" type="text/css" href="css/style.css">
   <!-- Responsive-->
   <link rel="stylesheet" href="css/responsive.css">
   <!-- fevicon -->
   <link rel="icon" href="images/fevicon.png" type="image/gif" />
   <!-- Scrollbar Custom CSS -->
   <link rel="stylesheet" href="css/jquery.mCustomScrollbar.min.css">
   <!-- Tweaks for older IEs-->
   <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">
   <!-- fonts -->
   <link href="https://fonts.googleapis.com/css?family=Poppins:400,700&display=swap" rel="stylesheet">
   <!-- font awesome -->
   <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
   <!--  -->
   <!-- owl stylesheets -->
   <link href="https://fonts.googleapis.com/css?family=Great+Vibes|Poppins:400,700&display=swap&subset=latin-ext" rel="stylesheet">
   <link rel="stylesheet" href="css/owl.carousel.min.css">
   <link rel="stylesoeet" href="css/owl.theme.default.min.css">
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css" media="screen">
</head>

<body>
   <div class="banner_bg_main">
      <!-- header top section start -->
      <!-- logo section start -->
      <div class="logo_section">
         <div class="container">
            <div class="row">
               <div class="col-sm-12">
                  <div class="logo"><a href="index.php"><img src="images/logo.png"></a></div>
               </div>
            </div>
         </div>
      </div>
      <!-- logo section end -->
      <!-- header section start -->
      <div class="header_section">
         <div class="container">
            <div class="containt_main">
               <div class="dropdown">
                  <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Category
                  </button>
                  <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                     <a class="dropdown-item" href="./index.php?page=games&category=kids arts and crafts">Kids arts & crafts</a>
                     <a class="dropdown-item" href="./index.php?page=games&category=games and puzzles">games & puzzles</a>
                     <a class="dropdown-item" href="./index.php?page=games&category=dolls">dolls</a>
                     <a class="dropdown-item" href="./index.php?page=games&category=outdoor games">outdoor games</a>
                     <a class="dropdown-item" href="./index.php?page=games&category=STEM Toys">STEM Toys</a>
                     <a class="dropdown-item" href="./index.php?page=games&category=indoor games">indoor games</a>
                     <a class="dropdown-item" href="./index.php?page=games&category=vehicle,remote control">vehicles & remote control</a>
                  </div>
               </div>
               <div class="dropdown">
                  <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Shop By Age
                  </button>
                  <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                     <a class="dropdown-item" href="./index.php?page=games&Age=0-2 years">0-2 years</a>
                     <a class="dropdown-item" href="./index.php?page=games&Age=3-4 years">3-4 years</a>
                     <a class="dropdown-item" href="./index.php?page=games&Age=5-7 years">5-7 years</a>
                     <a class="dropdown-item" href="./index.php?page=games&Age=8-10 years">8-10 years</a>
                     <a class="dropdown-item" href="./index.php?page=games&Age=11-12 years">11-12 years</a>
                     <a class="dropdown-item" href="./index.php?page=games&Age=13 years">13+ years</a>
                  </div>
               </div>
               <div class="main">
                  <div class="input-group">
                     <input type="text" class="form-control" placeholder="Search (Keywords,etc)" id="searchInput">
                     <div class="input-group-append">
                        <button class="btn btn-secondary" onclick="search()" type="button" style="background-color: #ED3A3A; border-color:#ED3A3A ">
                           <i class="fa fa-search"></i>
                        </button>
                     </div>
                  </div>
               </div>
               <div class="header_box">
                  <div class="login_menu">
                     <ul>
                        <li> <button type="button" class="abd" data-toggle="modal" data-target="#exampleModal" data-whatever="@mdo">

                              <i class="fa fa-shopping-cart" aria-hidden="true"></i>
                              <span class="padding_10" id="mypro">Cart<span id="noti">0</span></span></button>
                        </li>
                     </ul>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <script>
         function search() {
            var searchTerm = document.getElementById("searchInput").value;
            window.location.href = "./index.php?search=" + encodeURIComponent(searchTerm);
         }
      </script>

      <div class="banner_section layout_padding">
         <div class="container">
            <div id="my_slider" class="carousel slide" data-ride="carousel">
               <div class="carousel-inner">
                  <div class="carousel-item active">
                     <div class="row">
                        <div class="col-sm-12">
                           <h1 class="banner_taital">ZOHBI <br>Play, Learn, and Imagine!</h1>
                           <!-- <div class="buynow_bt"><a href="#">Buy Now</a></div> -->
                        </div>
                     </div>
                  </div>
                  <div class="carousel-item">
                     <div class="row">
                        <div class="col-sm-12">
                           <h1 class="banner_taital">Get Start <br>Your favriot shoping</h1>
                           <!-- <div class="buynow_bt"><a href="#">Buy Now</a></div> -->
                        </div>
                     </div>
                  </div>
                  <div class="carousel-item">
                     <div class="row">
                        <div class="col-sm-12">
                           <h1 class="banner_taital">Get Start <br>Your favriot shoping</h1>
                           <!-- <div class="buynow_bt"><a href="#">Buy Now</a></div> -->
                        </div>
                     </div>
                  </div>

               </div>
               <a class="carousel-control-prev" href="#my_slider" role="button" data-slide="prev">
                  <i class="fa fa-angle-left"></i>
               </a>
               <a class="carousel-control-next" href="#my_slider" role="button" data-slide="next">
                  <i class="fa fa-angle-right"></i>
               </a>
            </div>
         </div>
      </div>

   </div>
   <style>
      
      .abd {
         background-color: transparent;
         border: none;
         color: inherit;
         padding: 0;
         font: inherit;
         cursor: pointer;
         outline: inherit;
      }
   </style>

   <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-lg" role="document">
         <div class="modal-content">
            <div class="modal-header">
               <h5 class="modal-title" id="exampleModalLabel">New message</h5>
               <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
               </button>
            </div>
            <div class="modal-body">
               <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                  <thead>
                     <tr>
                        <th> Photo</th>
                        <th>Product name</th>
                        <th>Price</th>
                        <th>quantity</th>
                        <th>Subtotal</th>
                        <th>management</th>
                     </tr>
                  </thead>
                  <tbody id="aboud">

                  </tbody>
               </table>
            </div>
            <div class="modal-footer">
               <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
               <button type="button" class="btn btn-primary" class="abd" data-toggle="modal" data-target="#ex" data-whatever="@mdo">Proceed to add info</button>
            </div>
         </div>
      </div>
   </div>
   <div class="modal fade" id="ex" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-lg" role="document">
         <div class="modal-content">
            <div class="modal-header">
               <h5 class="modal-title" id="exampleModalLabel">New message</h5>
               <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
               </button>
            </div>
            <div class="modal-body">
               <table class="table table-striped table-bordered table-hover"  id="dataTables-example">
                  <thead>
                     <tr>
                        <th> Photo</th>
                        <th>Product name</th>
                        <th>Price</th>
                        <th>quantity</th>
                        <th>Subtotal</th>
                        <th>management</th>
                     </tr>
                  </thead>
                  <tbody id="aboud">

                  </tbody>
               </table>
            </div>
            <div class="modal-footer">
               <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
               <button type="button" class="btn btn-primary">Proceed to add info</button>
            </div>
         </div>
      </div>
   </div> 

   <?php


   if (isset($_GET["page"])) {
      if (isset($_GET["Age"])) {
         include_once "./gamesAge.php";
      } elseif (isset($_GET["category"])) {
         include_once "./gamesCat.php";
      }


      /* elseif ($page == "logout") {
     session_destroy();
     header("location:./index.php?page=login");
   }*/
   } elseif (isset($_GET['search'])) {
      include_once "./searchedGame.php";
   } else include_once "./home.php"

   ?>
   <div id="scroll-to-top" onclick="scrollToTop()">
      <span>&uarr;</span>
   </div>

   <div class="footer_section layout_padding">
      <div class="container">
         <div class="footer_logo"><a href="index.php"><img src="images/footer-logo.png"></a></div>
         <div class="input_bt">
            <input type="text" class="mail_bt" placeholder="Your Email" name="Your Email">
            <span class="subscribe_bt" id="basic-addon2"><a href="#">Subscribe</a></span>
         </div>
         <div class="footer_menu">
            <ul>
               <li><a href="#">Best Sellers</a></li>
               <li><a href="#">Gift Ideas</a></li>
               <li><a href="#">New Releases</a></li>
               <li><a href="#">Today's Deals</a></li>
               <li><a href="#">Customer Service</a></li>
            </ul>
         </div>
         <div class="location_main">Help Line Number : <a href="#">+1 1800 1200 1200</a></div>
      </div>
   </div>
   <div class="copyright_section">
      <div class="container">
         <p class="copyright_text">© 2024 All Rights Reserved. Developed by <a href="mailto:abdalhalimalzohbi@gmail.com">Mr.AbdalhalimAlzohbi</a></p>
      </div>
   </div>

   <script src="js/jquery.min.js"></script>
   <script src="js/popper.min.js"></script>
   <script src="js/bootstrap.bundle.min.js"></script>
   <script src="js/jquery-3.0.0.min.js"></script>
   <script src="js/plugin.js"></script>
   <script src="js/jquery.mCustomScrollbar.concat.min.js"></script>
   <script src="js/custom.js"></script>
   <script>
      window.onscroll = function() {
         scrollFunction();
      };

      function scrollFunction() {
         var scrollToTopButton = document.getElementById("scroll-to-top");

         if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
            scrollToTopButton.style.display = "block";
         } else {
            scrollToTopButton.style.display = "none";
         }
      }

      function scrollToTop() {
         document.body.scrollTop = 0;
         document.documentElement.scrollTop = 0;
      }

      function openNav() {
         document.getElementById("mySidenav").style.width = "250px";
      }

      function closeNav() {
         document.getElementById("mySidenav").style.width = "0";
      }
   </script>

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
               var img = document.createElement("img");
               img.src = "toystore/"+parsedArray[i]["photo"];
               img.style.width = "65px"; 
               a.appendChild(img);
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
               input.max=20;
               input.min=1;
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
                  updateTotal(event.target.parentNode.parentNode);
               
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
</body>

</html>