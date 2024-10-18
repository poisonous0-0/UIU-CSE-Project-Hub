<?php
session_start();
include("/xampp/htdocs/UIU-CSE-Project-Show/DBMSConnections/connection.php");

if (!isset($_SESSION["email"])) {
    header("Location: /loginPanel/login_panel.php");
    exit();
}

$email = $_SESSION["email"];
$sql = "SELECT * FROM student_information WHERE email = '" . $email . "'";

$result = mysqli_query($conn, $sql);
$data_array = mysqli_fetch_array($result);
$name = $data_array["name"]

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="student_dashboard_style.css">
    <title>Student Dashboard</title>
</head>

<body>
    <!-- navigation panel starts here -->
    <nav>
        <div class="container">
            <div class="nav_wrapper">
                <div class="logo">
                    <a href=""><img src="/Images/logo1.png" alt=""></a>
                </div>
                <div class="menu">
                    <ul>
                        <li><a href="">Home</a></li>
                        <li><a href="">FAQs</a></li>
                        <li><a href="">My Account</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </nav>
    <!-- Navigation Panel End -->
    <section class="headings_part">
        <div class="container">
            <div class="headings_wrapper">
                <h1 id="greetings">Welcome, <?php echo $name ?></h1>
                <a href="/Student_Dashboard/Student_registration/course_registration_panel.php" id="project_registration">Project Registration </a>
            </div>

            <section id="project_card">
                <div class="card_wrapper">
                    <?php
                    if (isset($_SESSION['registered']) && $_SESSION['registered'] === true) {
                        echo '
                        <div class="card_details">
                            <h3>Course Name</h3>
                            <p>Team name</p>
                            <a href="/Student_Dashboard/Student_homepage/project_overview.php" id="link_style">Proceed to Dashboard</a>
                        </div>';
                    } else {
                        echo '<p>Please register first for project.</p>';
                    }
                    ?>
                </div>

            </section>
        </div>
    </section>
</body>

</html>