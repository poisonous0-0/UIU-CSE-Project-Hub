<?php
session_start();

// Retrieve team members array from session
if(isset($_SESSION['team_members_count'])){
    $team_member_1 = $_SESSION['team_members_count'];
    

        echo "Team member: " . $team_member_1 . "<br>";
}
?>
