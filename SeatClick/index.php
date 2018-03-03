<!DOCTYPE html>
<html>

    <head>

        <title>SeatClick</title>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="css/bootstrap.css" rel="stylesheet">
        <link href="css/styles.css" rel="stylesheet">

    </head>

    <body>

        <!-- Navigation Bar -->
        <nav class = "my-nav navbar navbar-default navbar-static-top">
            <div class = "container">
                <a id = "brand" class="navbar-brand" href="index.php">SeatClick</a>
                <div class = "navbar-header">
                    <button id = "toggleButton" type = "button" class = "navbar-toggle collapsed" data-toggle = "collapse" data-target = "#menuItems" aria-expanded = "false">
                        <span class = "sr-only">Toggle Navigation</span>
                        <span class = "icon-bar"></span>
                        <span class = "icon-bar"></span>
                        <span class = "icon-bar"></span>
                    </button>
                </div>

                <div class = "collapse  navbar-collapse navbar-right" id = "menuItems">
                    <ul class = "nav navbar-nav">
                        <li><a id = "navID" href = "#">SHOW TRIPS</a></li>
                        <li><a id = "navID" href = "faqs.html">FAQs</a></li>
                        <li><a id = "navID" href = "#">SIGN IN</a></li>
                        <li><a id = "navID" href = "signUp.php">SIGN UP</a></li>
                        <li><a id = "navID" href = "contactUs.php">CONTACT US</a></li>
                    </ul>
                </div>

            </div>
        </nav>


        <!--Modal for Sign In -->



        <!--Footer-->
        <footer class = "container-fluid">
            <div class ="row">
                <div id = "footL">
                    <p id = "copyR" >© 2018 by SeatClick. Proudly created with Heart
                    <br>
                    SeatClick.com / 777-7777</p>
                </div>
            </div>
        </footer>

        <script src="script/jquery.js"></script>
        <script src="script/bootstrap.js"></script>

    </body>

</html>