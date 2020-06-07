<?php 

    include_once '../config.php';
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- CSS FILES -->
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link rel="stylesheet" href="../fontawesome/css/all.min.css">
    <link rel="stylesheet" href="../css/style.css">

    <!-- form validation function -->
    <script type="text/javascript">
        function formValidate(){
            
            var username = document.form2.username.value;
            var firstname = document.form2.firstname.value;
            var lastname = document.form2.lastname.value;
            var email = document.form2.email.value;
            var uid = document.form2.uid.value;
            var pin = document.form2.pin.value;
            var password = document.form2.password.value;
            var repass = document.form2.repass.value;

            if (username == "") {
				document.getElementById('validate').innerHTML = "User Name field is empty";
                return false;
            }
            if (firstname == "") {
				document.getElementById('validate').innerHTML = "First Name field is empty";
                return false;
            }
            if (lastname == "") {
				document.getElementById('validate').innerHTML = "Last Name field is empty";
                return false;
            }
            if (email == "") {
				document.getElementById('validate').innerHTML = "Email field is empty";
                return false;
            }
            if (uid == "") {
				document.getElementById('validate').innerHTML = "University ID field is empty";
                return false;
            }
            if (pin == "") {
				document.getElementById('validate').innerHTML = "PIN field is empty";
                return false;
            }
            if (password == "") {
				document.getElementById('validate').innerHTML = "Password field is empty";
                return false;
            }
            if (repass == "") {
				document.getElementById('validate').innerHTML = "Confirm Password field is empty";
                return false;
            }
            if (password != repass){
                document.getElementById('validate').innerHTML = "The Passwords do not match. Try again!";
                return false;
            }
                var atPos = email.indexOf('@');
                var dotPos = email.lastIndexOf('.');

            if (atPos < 1 || dotPos < atPos + 2 || dotPos+2 >= email.length)
            {
                document.getElementById('validate').innerHTML = "Invalid Email Address";
                return false;
            }

            document.getElementById('validate').innerHTML = "";
            return true;
        }
    </script>

<title>USER SIGNUP</title>
</head>
<body>
    
    
    <!-- all container -->
    <div class="main_container">
        <header>
            <div class="main_header_bg">

                <!-- logo -->
                <div class="logo">
                    <a href="../index.php">
                        <img src="../img/logo.png" alt="">
                    </a>
                </div>

                <h4>uds online admission system</h4>

            </div>
        </header>

        <div class="content_container">

            <!-- login message -->
            <div id="msg">
                <?php if(isset($_SESSION['fail_msg'])): ?> 
            
                    <div id="fail_msg">

                        <?php
                            echo $_SESSION['fail_msg'];
                            unset($_SESSION['fail_msg']);

                        ?>

                        <div id="close">+</div>

                    </div>

                <?php endif ?>
            </div>

            <!-- form box -->
            <div class="form_box2">

                <!-- form box top bg -->
                <div class="form_box_top_bg">
                    <div class="form_box_top">
                        <img src="../img/logo.png" alt="">
                        <h5>user registration form</h5>
                        <img src="../img/logo.png" alt="">
                    </div>
                </div>

                <!-- form -->
                <form action="signup_connect.php" method="POST" name="form2" id="form2" onsubmit="return formValidate()">
                    
                    <div class="mini_box">

                        <input type="text" name="username" id="" placeholder="User Name">
                        <input type="text" name="firstname" id="" placeholder="First Name">
                        <input type="text" name="middlename" id="" placeholder="Middle Name(Optional)">
                        <input type="text" name="lastname" id="" placeholder="Last Name">
                    </div>

                    <div class="mini_box">

                        <select name="gender" id="">
                            <option>Select Your Gender</option>
                            <option value="male">Male</option>
                            <option value="female">Female</option>
                        </select>
                        <input type="text" name="email" id="" placeholder="Email">
                        <select name="category" id="">
                            <option>Application Category</option>
                            <option value="postgraduate">Post-Graduate</option>
                            <option value="undergraduate">Undergraduate</option>
                            <option value="diploma">Diploma</option>
                        </select>
                        <input type="text" name="uid" id="" placeholder="University Id">
                    
                    </div>

                    <div class="mini_box">
                        
                        <input type="text" name="pin" id="" placeholder="PIN">

                        <input type="password" name="password" id="" placeholder="Password">

                        <input type="password" name="repass" id="" placeholder="Confirm Password">

                        <input type="submit" name="submit" id="" value="register">

                        <div id="validate"></div>
                
                    </div>
                
                </form>
                <p class="new">
                    already have an account? 
                    <a href="../login.php">log in here</a>
                </p>
            
            </div>
        </div>
    </div>



    <!-- footer -->
    <?php include_once '../footer.php'; ?>

    <!-- js files -->
    <script src="../js/jquery-3.4.1.slim.min.js"></script>
    <script src="../js/popper.min.js"></script>
    <script src="../js/bootstrap.min.js"></script>
    <script src="../js/jquery-3.4.1.min.js"></script>
    <script src="../js/main.js"></script>

    <!-- media query css file -->
    <link rel="stylesheet" href="../css/media_query.css">
</body>
</html>