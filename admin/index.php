<?php
session_start();
if (isset($_SESSION["session_user_id"])) {

?>
  <html xmlns="http://www.w3.org/1999/xhtml">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Admin Dashboard</title>
    <link href="assets/css/bootstrap.css" rel="stylesheet" />
    <link href="assets/css/font-awesome.css" rel="stylesheet" />
    <link href="assets/js/morris/morris-0.4.3.min.css" rel="stylesheet" />
    <link href="assets/css/custom.css" rel="stylesheet" />
    <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
  </head>
  <style>
    .navbar-cls-top {
      background-color: #ED3A3A;
    }
  </style>
  <body>
    <div id="wrapper">
      <nav class="navbar navbar-default navbar-cls-top " style="margin-bottom: 0px " role="navigation">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="?page=s" style="background-color:#ED3A3A">Toy Store</a>
        </div>
        <div style="color: white;
          padding: 15px 50px 5px 50px;
          float: right;
          font-size: 16px;"> Last access : 30 May 2014 &nbsp;
          <a href="./index.php?page=logout" class="btn btn-danger square-btn-adjust" style="background-color: #333; border-radius: 10px;">Logout</a>
        </div>
      </nav>
      <nav class="navbar-default navbar-side" role="navigation">
        <div class="sidebar-collapse">
          <ul class="nav" id="main-menu">
            <li class="text-center">
              <img src="assets/img/find_user.png" class="user-image img-responsive" />

              <?php if (isset($_SESSION["session_user_id"])) { ?>
                <span style="color:beige">welcome<br><?php echo $_SESSION["abd"]; ?></span>
              <?php } else {
                echo "";
              }  ?>
            </li>
            <li>
              <a href="./index.php?page=product"><i class="fa fa-table fa-3x"></i>Products</a>
            </li>
            <li>
              <a href="./index.php?page=logout"><i class="fa fa-table fa-3x"></i>logout</a>
            </li>
          </ul>
        </div>
      </nav>
      <div id="page-wrapper">
        <?php
        if (isset($_GET["page"])) {
          $page = $_GET["page"];
          if ($page == "product") {
            include_once "./products/product.php";
          } elseif ($page == "deleteProduct") {
            include_once "./products/deleteProduct.php";
          } elseif ($page == "addProduct") {
            include_once "./products/addProduct.php";
          } elseif ($page == "editProduct") {
            include_once "./products/editProduct.php";
          } elseif ($page == "saveProduct") {
            include_once "./products/saveProduct.php";
          } elseif ($page == "updateProduct") {
            include_once "./products/updateProduct.php";
          } elseif ($page == "login") {
            include_once "./login.php";
          } elseif ($page == "logout") {
            session_destroy();
            header("location:./login.php");
          } else {
            include_once "./products/product.php";
          }
        }
        ?>

      </div>
    </div>

    <script src="assets/js/jquery-1.10.2.js"></script>
    <!-- BOOTSTRAP SCRIPTS -->
    <script src="assets/js/bootstrap.min.js"></script>
    <!-- METISMENU SCRIPTS -->
    <script src="assets/js/jquery.metisMenu.js"></script>
    <!-- MORRIS CHART SCRIPTS -->
    <script src="assets/js/morris/raphael-2.1.0.min.js"></script>
    <script src="./assets/js/morris/morris.js"></script>
    <!-- CUSTOM SCRIPTS -->
    <script src="assets/js/custom.js"></script>
  </body>

  </html>
<?php } else header('location:login.php');
?>