<!DOCTYPE html>
<html>

    <head>

        <title>SeatClick</title>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="css/bootstrap.css" rel="stylesheet">
        <link href="css/styles.css" rel="stylesheet">
        <script src="script/functions.js"></script>
        <script src = "script/functions.js" type = "application/javascript"></script>

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

        <!--Contact Form -->
        <div class = "container-fluid" id = "contactForm">
            <div class = "row">
                <div class = "col-md-2"></div>
                <div class = "col-md-8" id = "column">
                    <h3 id = "contactLabel">Contact Form</h3>
                            
                    <div class="userInfo">
                        <form action="/action_page.php">
                            <label for="fname">First Name</label>
                            <input id = "textField" type="text" id="fname" name="firstname" placeholder="Ex: Harry" onkeyup = "lettersOnly(this)" maxlength = "35" required>

                            <label for="lname">Last Name</label>
                            <input id = "textField" type="text" id="lname" name="lastname" placeholder="Ex: Potter" onkeyup = "lettersOnly(this)" maxlength = "35" required>

                            <label for="email">Email Address</label>
                            <input id = "textField" type="email" id="emailA" name="emailAdd" placeholder="Ex: harrypotter@gmail.com" maxlength = "75" required>

                            <label for="subject">Subject</label>
                            <textarea id="subject" name="subject" placeholder="Write something.." style="height:200px" maxlength = "255" required></textarea>

                            <input id = "submitB" type="submit" value="Submit">
                        </form>
                    </div>
                </div>
                <div class = "col-md-2"></div>
            </div>
        </div>

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