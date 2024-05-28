<?php
    session_start();
    include("/xampp/htdocs/UIU-CSE-Project-Show/DBMSConnections/connection.php");

    if($_SERVER['REQUEST_METHOD'] == "POST"){
        $user_email = $_POST['Email'];
        $user_password = $_POST['Password'];

        $sql = "SELECT * FROM login_credentials WHERE email = '".$user_email."' AND password = '".$user_password."'";

        $result = mysqli_query($conn, $sql);

        $data_array = mysqli_fetch_array($result);
        if($data_array["usertype"] == "student"){
            $_SESSION["email"] = $user_email;
            header("Location: /Student_Dashboard/Student_homepage/student_dashboard.php");
            exit();
        }
        else if($data_array["usertype"] == "faculty"){
            $_SESSION["name"] = $name;
            header("Location: /Faculty_Dashboard/facultyDashboard.php");
            exit();
        }
        else if($data_array["usertype"] == "admin"){
            $_SESSION["name"] = $name;
            header("Location: /Admin_Dashboard/adminDashboard.php");
            exit();
        }
        else{
            echo "<script type = 'text/javascript'> alert('Invalid username or password')</script>";
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="login_panel_style.css">
    <title>Document</title>
</head>
<body>
    <!-- navigation panel start -->
    <nav>
        <div class="container">
            <div class="nav_wrapper">
                <div class="logo">
                    <img src="/Images/logo1.png" alt="logo">
                </div>

                <div class="menu">
                    <ul>
                        <li>
                            <a href="">Home</a>
                        </li>
                        <li>
                            <a href="">How it Works</a>
                        </li>
                        <li>
                            <a href="">FAQ's</a>
                        </li>
                    </ul>
                    <div class="login_btn">
                        <a href="/loginPanel/login_panel.php">Login</a>
                    </div>
                </div>
            </div>
        </div>
    </nav>
    <!-- navigation panel end -->

    <!-- Login panel-->
    <section id = "login_panel">
        <div class="container">
            <div class="login_panel_wrapper">
                <div class="login_header">
                    <h1>Login</h1>
                </div>
                <div class="login_form_panel">
                    <div class="login_form_wrapper">
                        <form class="login_form" method="post">
                            <input type="email" name="Email" placeholder="Email">
                            <input type="password" name="Password" placeholder="Password">
                            <a href="" class="forgot_password_link">Forgot password?</a>
                            <input type="submit" value="Login" id="login_button">
                        </form>
                    </div>
                    <p id="signup_link">Don't have an account? <a href="/SignupPanel/access_panel.php" class="signup_link">Sign up here</a></p>
                </div>
            </div>
        </div>
    </section>
</body>
</html>