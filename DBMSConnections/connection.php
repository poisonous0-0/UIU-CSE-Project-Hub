<?php
    $conn = mysqli_connect('localhost', 'root', '', 'uiu cse project show');

    if (!$conn) {
        echo ('Connection Error' . mysqli_connect_error());
    }
?> 