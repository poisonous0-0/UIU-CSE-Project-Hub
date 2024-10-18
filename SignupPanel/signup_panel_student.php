<?php
    session_start();
    include("/xampp/htdocs/UIU-CSE-Project-Show/DBMSConnections/connection.php");

    if($_SERVER['REQUEST_METHOD'] == "POST"){
        $student_name = $_POST['Name'];
        $student_id = $_POST['ID'];
        $student_email = $_POST['Email'];
        $student_phoneNumber = $_POST['phone_number'];
        $password = $_POST['password'];
        $confirm_password = $_POST['confirm_password'];

        if($password == $confirm_password){
            $query1 = "INSERT INTO student_information (id, name, email, phone_number) VALUES ('$student_id','$student_name','$student_email','$student_phoneNumber')";
            $query2 = "INSERT INTO login_credentials (email, password, usertype) VALUES ('$student_email','$password', 'student')";

            $result1 = mysqli_query($conn, $query1);
            $result2 = mysqli_query($conn, $query2);

            echo "<script type = 'text/javascript'> alert('Registration Successful')</script>";
            header("location: /loginPanel/login_panel.php");
        }
        else{
            echo "<script type = 'text/javascript'> alert('Password does not match')</script>";
        }
    }
    
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/SignupPanel/signup_panel_student_style.css">
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
    <section id = "register_panel">
        <div class="container">
            <div class="register_panel_wrapper">
                <div class="register_header">
                    <h1>Signup</h1>
                </div>
                <div class="register_form_panel">
                    <div class="register_form_wrapper">
                        <form method="post" class="register_form">
                            <input type="text" name="Name" placeholder="Name" required>
                            <input type="text" name="ID" placeholder="ID" required>
                            <input type="email" name="Email" placeholder="Email" required>
                            <input type="text" name="phone_number" placeholder="Phone number" required>
                            <input type="password" name="password" placeholder="Password" required>
                            <input type="password" name="confirm_password" placeholder="Confirm Password" required>
                            <input type="submit" name="Register" value="Register" id="register_button">
                            <p id="popup_message">By clicking the Register button, you agree to our <a href="">Terms and Condition</a></p>
                        </form>
                    </div>
                    <p id="signup_link">Already have an account? <a href="/loginPanel/login_panel.php" class="login_link">Login here</a></p>
                </div>
            </div>
        </div>
    </section>
</body>
</html>

