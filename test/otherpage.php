<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Other Page</title>
</head>
<body>
    <!-- Anchor tag that will be shown if the user is registered -->
    <a id="anchorTag" href="#">Registered Anchor Tag</a>

    <script>
        // Check if the user is registered
        var registered = sessionStorage.getItem("registered");
        if (registered === "true") {
            // Show the anchor tag
            document.getElementById("anchorTag").style.display = "block";
        }
    </script>
</body>
</html>
