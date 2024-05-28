<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Button Content Display</title>
<style>
    .container {
        display: flex;
        flex-direction: row; /* Displaying items horizontally */
        align-items: flex-start; /* Align items at the start of the cross axis */
    }

    .buttons {
        display: flex;
        flex-direction: column; /* Displaying items vertically */
        margin-right: 20px;
    }

    .content {
        border: 1px solid #ccc;
        padding: 10px;
    }

    button {
        margin-bottom: 10px; /* Add some space between buttons */
    }
</style>
</head>
<body>
    <div class="container">
        <div class="buttons">
            <button onclick="showPage('chat.php')">Chat</button>
            <button onclick="showPage('update.php')">Update</button>
            <button onclick="showPage('overview.php')">Overview</button>
            <!-- Add more buttons as needed -->
        </div>
        <div class="content" id="contentDisplay">
            Select a button to display content here.
        </div>
    </div>

    <script>
        function showPage(page) {
            var xhttp = new XMLHttpRequest();
            xhttp.onreadystatechange = function() {
                if (this.readyState == 4 && this.status == 200) {
                    document.getElementById('contentDisplay').innerHTML = this.responseText;
                }
            };
            xhttp.open("GET", page, true);
            xhttp.send();
        }
    </script>
</body>
</html>
