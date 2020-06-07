<?php

    include_once '../config.php';

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- css files -->
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link rel="stylesheet" href="../fontawesome/css/all.min.css">
    <link rel="stylesheet" href="../css/style.css">

    <title>UDS | LOGIN PAGE</title>
</head>
<body>
    
    <!-- all container -->
    <div class="main_container">
        <header>
            <div class="main_header_bg">

                <!-- logo -->
                <div class="logo">
                    <a href="../index.php">
                        <img src="img/logo.png" alt="">
                    </a>
                </div>

                <h4>uds online admission system</h4>

                <!-- toggle button -->
                <div class="toggle_btn">
                    <i class="fa fa-bars toggle-bar" aria-hidden="true"></i>
                </div>

                <nav class="items">
                    <ul>
                        <li><a href="../index.php">home</a></li>
                        <li><a href="login.php">login</a></li>
                    </ul>
                </nav>
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
            <div class="form_box1" id="form_box2">

                <!-- form box top bg -->
                <div class="form_box_top">
                    <img src="img/logo.png" alt="">
                    <h5>user login form</h5>
                    <img src="img/logo.png" alt="">
                </div>

                <!-- form -->
                <form action="dashboard.php" method="post" id="form1">
                    <div>
                        <i class="fa fa-user"></i>
                        <input type="text" name="user_name" id="" placeholder="User Name">
                    </div>
                    <div>
                        <i class="fa fa-lock"></i>
                        <input type="password" name="password" id="" placeholder="Password">
                    </div>
                    <div>
                        <input type="submit" name="submit" id="" value="login">
                    </div>

                    <p class="new">New User ? <a href="user_signup.php">sign up here</a></p>
                    <a href="forget.php" class="forget">forgot your password ?</a>
                </form>
            
            </div>
        </div>
    </div>



    <!-- footer -->
    <?php include_once '../footer.php'; ?>


    <!-- media query css file -->
    <link rel="stylesheet" href="css/media_query.css">


    <!-- js files -->
    <script src="../js/jquery-3.4.1.slim.min.js"></script>
    <script src="../js/popper.min.js"></script>
    <script src="../js/bootstrap.min.js"></script>
    <script src="../js/jquery-3.4.1.min.js"></script>
    <script src="../js/main.js"></script>
</body>
</html>