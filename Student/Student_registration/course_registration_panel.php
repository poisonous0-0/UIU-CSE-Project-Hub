<!-- PHP FILE STARTS HERE -->
<?php
session_start();
include("/xampp/htdocs/UIU-CSE-Project-Show/DBMSConnections/connection.php");

if ($_SERVER['REQUEST_METHOD'] == "POST") {
    $course_code = $_POST['course'];
    $team_name = $_POST['Team_name'];
    $team_leader = $_POST['Team_leader'];
    $faculty_email = $_POST['faculty_email'];
    
    // Accessing team members array
    $team_members = $_POST['team_member'];
    $team_members_count = count($team_members);
    if($team_members_count == 2){
        $team_member_1 = $team_members[0];
        $team_member_2 = $team_members[1];

        $query1 = "SELECT * FROM student_information WHERE email = '".$team_member_1."'";
        $query2 = "SELECT * FROM student_information WHERE email = '".$team_member_2."'";
        $result1 = mysqli_query($conn, $query1);
        $result2 = mysqli_query($conn, $query2);

        if(mysqli_num_rows($result1) > 0 && mysqli_num_rows($result2) > 0){
            $q1 = "INSERT INTO registration_table (course_code, team_name, team_leader, faculty_email, team_member_1, team_member_2) VALUES ('$course_code', '$team_name', '$team_leader', '$faculty_email', '$team_member_1', '$team_member_2')";
            $res = mysqli_query($conn, $q1);
            if($res){
                echo "<script type = 'text/javascript'> alert('Registration Successful')</script>";
                $_SESSION['registered'] = true;
                header("Location: /Student_Dashboard/Student_homepage/student_dashboard.php");
            }
            else{
                echo "<script type = 'text/javascript'> alert('Registration Failed')</script>";
            }
        }

        else{
            echo "<script type = 'text/javascript'> alert('Someone don't have account, please try again after registering')</script>";
        }
    }
}
?>


<!-- PHP FILE ENDS HERE -->

<!-- HTML FILE STARTS HERE -->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="course_registration_panel_style.css">
    <title>Document</title>
</head>

<body>
    <!-- navigation panel starts here -->
    <nav>
        <div class="container">
            <div class="nav_wrapper">
                <div class="logo">
                    <a href="">
                        <img src="/Images/logo1.png" alt="logo">
                    </a>
                </div>
                <div class="menu">
                    <ul>
                        <li>
                            <a href="">Home</a>
                        </li>
                        <li>
                            <a href="">FAQ</a>
                        </li>
                        <li>
                            <a href="">My Account</a>
                        </li>

                    </ul>

                </div>
            </div>
        </div>
    </nav>
    <!-- Navigation Panel End -->
    <!-- Registration Panel Start -->
    <section class="registration_form">
        <h1 id="headings">Registration for Project</h1>
        <div class="form_wrapper">
            <div class="registration_wrapper">
                <form method="post" id="reg_form">
                    <p>Course Name:</p>
                    <select name="course" id="course" onchange="showTeamMembers()">
                        <option value="0">Select Course</option>
                        <option value="1">CSE 2118: Advance Object Oriented Programming</option>
                        <option value="2">EEE 2124: Electronics Laboratory</option>
                        <option value="3">CSE 3522: Database Management Systems Laboratory</option>
                        <option value="4">CSE 3412: System Analysis and Design Laboratory</option>
                        <option value="5">CSE 4326: Microprocessors and Microcontrollers Laboratory</li>
                        <option value="6">CSE 3412: Software Engineering Laboratory</li>
                        </option>
                    </select>
                    <div id="teamMembers"></div>
                    <p>Team Name:</p>
                    <input type="text" name="Team_name" id="faculty_email" required>
                    <p>Team Leader Name:</p>
                    <input type="text" name="Team_leader" id="faculty_email" required>
                    <p>Faculty Email:</p>
                    <input type="email" name="faculty_email" id="faculty_email" required>
                    <input type="submit" name="submit" value="Submit" id="submit_btn">
                </form>

                <script>
                    function showTeamMembers() {
                        var course = document.getElementById("course").value;
                        var teamMembersDiv = document.getElementById("teamMembers");
                        teamMembersDiv.innerHTML = ""; // Clear previous content

                        if (course != 0) {
                            var numTeamMembers = (course == 2 || course == 5) ? 4 : 2; // Change this condition based on your requirement
                            for (var i = 0; i < numTeamMembers; i++) {
                                var input = document.createElement("input");
                                input.type = "text";
                                input.name = "team_member[]";
                                input.placeholder = "Enter Team Member " + (i + 1) + " Email Address";
                                teamMembersDiv.appendChild(input);
                                teamMembersDiv.appendChild(document.createElement("br"));
                            }
                        }
                    }
                </script>
            </div>
        </div>
    </section>
</body>

</html>