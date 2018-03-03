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

        <!--Sign Up Form-->
        <div class = "container-fluid">
            <div class = "row">
                <div class = "col-md-3"></div>
                <div class = "col-md-6" id = "signUpForm">
                    <h3 id = "signUpL">PERSONAL INFORMATION</h3>
                            
                    <div class="userInformation">
                        <form action="/action_page.php">
                            <input type="text" id="fname" name="firstname" placeholder="First Name" onkeyup = "lettersOnly(this)" maxlength = "35" required>
                            <input type="text" id="mname" name="midname" placeholder="Middle Name" onkeyup = "lettersOnly(this)" maxlength = "35">
                            <input type="text" id="lname" name="lastname" placeholder="Last Name" onkeyup = "lettersOnly(this)" maxlength = "35" required>
                            <input type="email" id="emailA" name="emailAdd" placeholder="Email Address" maxlength = "75">
                            <input type="radio" id = "genderM" name="radio" value="male" required> Male
                            <input type="radio" id = "genderF" name="radio" value="female" required> Female<br>
                            <input type="date" id = "birthDate" required value = "1990-01-01" min = "1930-01-01" max = "1999-01-01">
                            <input type="text" id="cpNum" name="cpNum" placeholder = "Mobile Number" onkeyup = "numbersOnly(this)" maxlength = "11" required>
                            <input type="text" id="username" name="usename" placeholder="Username to be used"  maxlength = "100" required>
                            <input type="password" id = "userpass" placeholder = "Enter password" maxlength = "100" required>
                            <input type="password" id = "passcon" placeholder = "Confirm password" maxlength = "100" required>
                            <input type="checkbox" id = "termsBox"name="terms" value="terms" required>I have read the SeatClick <a id = "termsL" href = "termsAndCondition.html">Terms and Condition</a><br>
                            <input type="submit" id ="registerB" value="Register">
                            
                        </form>
                    </div>
                </div>
                <div class = "col-md-3"></div>
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