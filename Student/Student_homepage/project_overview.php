<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="project_overview_style.css">
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
    <!-- project overview start -->
    <section class="project_overview">
        <div class="project_overview_wrapper">
            <div class="buttonpanel">
                <div id=upper_part>
                    <a onclick="showPage('overview.php')"><img src="/Images/Group.png"></a>
                    <a onclick="showPage('chat.php')"><img src="/Images/Icon.png"></a>
                    <a onclick="showPage('update.php')"><img src="/Images/Invoice.png"></a>
                </div>
                <div id=lower_part>
                    <a href="/loginPanel/login_panel.php"><img src="/Images/Logout Rounded.png"></a>
                </div>
            </div>

            <div class="content" id="contentDisplay">
                <h1>this is content panel</h1>
            </div>
        </div>
    </section>
    <!-- project overview ends -->
</body>

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

</html>