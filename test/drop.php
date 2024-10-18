<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Team Members</title>
</head>
<body>
    <form method="post" action="">
        <label for="course">Select Course:</label>
        <select name="course" id="course" onchange="showTeamMembers()">
            <option value="0">Select Course</option>
            <option value="1">Course 1</option>
            <option value="2">Course 2</option>
            <option value="3">Course 3</option>
            <option value="4">Course 4</option>
            <option value="5">Course 5</option>
        </select>
        <br><br>
        <div id="teamMembers"></div>
        <br>
        <label for="faculty_email">Faculty Email:</label>
        <input type="email" name="faculty_email" id="faculty_email" required>
        <br><br>
        <input type="submit" name="submit" value="Submit">
    </form>

    <script>
        function showTeamMembers() {
            var course = document.getElementById("course").value;
            var teamMembersDiv = document.getElementById("teamMembers");
            teamMembersDiv.innerHTML = ""; // Clear previous content

            if (course != 0) {
                var numTeamMembers = course == 5 ? 5 : 3; // Change this condition based on your requirement
                for (var i = 0; i < numTeamMembers; i++) {
                    var input = document.createElement("input");
                    input.type = "text";
                    input.name = "team_member[]";
                    input.placeholder = "Team Member " + (i + 1);
                    teamMembersDiv.appendChild(input);
                    teamMembersDiv.appendChild(document.createElement("br"));
                }
            }
        }
    </script>
</body>
</html>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Process form submission
    $course = $_POST["course"];
    $faculty_email = $_POST["faculty_email"];
    $team_members = $_POST["team_member"]; // This will be an array of team members

    // Now you can do whatever you want with the submitted data
    // For example, you can insert it into a database
}
?>
