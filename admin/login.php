<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MyBooksShelf Login</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        body {
            background-color: #f8f9fa;
            color: #212529;
            padding: 10px;
        }

        .login-container {
            max-width: 400px;
            margin: auto;
            margin-top: 50px;
            padding: 20px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            border-radius: 10px;
            background-color: #ffffff;

        }

        .login-container h2 {
            text-align: center;
            margin-bottom: 30px;

            color: #ED3A3A;
        }

        .logo {
            text-align: center;
            margin-bottom: 20px;
        }

        .logo img {
            width: 150px;
            height: auto;
            border-radius: 50%;
            border: 4px solid #b8e8fa;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.3);
        }

        .form-control {
            border-radius: 5px;
            background-color: #f8f9fa;
            color: #212529;
        }

        .login-btn {
            background-color: #ED3A3A;
            color: #ffffff;
            border: none;
            padding: 10px 20px;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s;
            position: relative;


            overflow: hidden;
        }

        .login-btn:hover {
            background-color: #ED3A3A;
        }

        .social-icons a {
            display: inline-block;
            margin: 0 10px;
            font-size: 24px;
            color: #ED3A3A;
            transition: color 0.3s;
        }

        .social-icons a:hover {
            color: #ED3A3A;
        }

        .footer-text {
            text-align: center;
            margin-top: 20px;
            color: #888;
        }

        .footer-text a {
            color: #ED3A3A;
            text-decoration: none;
        }

        .footer-text a:hover {
            text-decoration: underline;
        }
    </style>
</head>

<body>

    <div class="login-container">
        <h2><span style="font-size: 32px;"></span> ToyStore </h2>
        <form role="form" method="POST" action="">
            <div class="form-group">
                <label for="username">Email</label>
                <input type="text" name="email" class="form-control" id="username" placeholder="Enter your username">
            </div>
            <div class="form-group">
                <label for="password">Password</label>
                <input type="password" name="password" class="form-control" id="password" placeholder="Enter your password">
            </div>

            <button type="submit" name="btclicked" style="text-align: center;" class="  login-btn">Login</button>
        </form>
        <div class="social-icons">
            <a href="#"><i class="fab fa-facebook"></i></a>
            <a href="#"><i class="fab fa-twitter"></i></a>
            <a href="#"><i class="fab fa-google"></i></a>
        </div>
        <p class="footer-text">Don't have an account? <a href="#">Sign up here</a></p>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/js/all.min.js"></script>
</body>

</html>


<?php
session_start(); 
include_once("../connection/connect.php");

if(isset($_POST["btclicked"])){
    $emailabc = $_POST["email"];
    $passwordabc = $_POST["password"];

    $query_login = "SELECT * FROM user WHERE email=? AND password=?";
    
    $stmt = mysqli_prepare($connexion, $query_login);
    mysqli_stmt_bind_param($stmt, "ss", $emailabc, $passwordabc);
    mysqli_stmt_execute($stmt);
    $result = mysqli_stmt_get_result($stmt);

    if(mysqli_num_rows($result) > 0){
        $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
        $_SESSION["session_user_id"] = $row["id"];
        $row["createdby"] = $_SESSION["session_user_id"];
        $_SESSION["abd"] = $row["username"];
        echo $_SESSION["abd"];
        header('location:index.php?page=product');
    } else {
        ?>
        <div class="alert alert-danger" role="alert">
            Invalid email or password!!!!!!!!!
        </div>
        <?php
    }
    mysqli_stmt_close($stmt);
}
?>
