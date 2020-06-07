
<?php 

    include_once '../config.php';

        if (isset($_POST['submit'])) {
    
        $user_name = $_POST['user_name'];
        $password = md5($_POST['password']);

        $query = mysqli_query($connect,"SELECT * FROM admin_table WHERE admin_name = '$user_name' AND password = '$password' ");
    
        $_SESSION['admin_name'] = $user_name;
    
        $count = mysqli_num_rows($query);

        if ($count === 1) {
        
            header('location: dashboard.php');
        }
        else {
        
            $_SESSION['fail_msg'] = "sorry account does not exist.";
            header('location: login.php');
        }
        $_SESSION['submit'] = "true";
    }
    elseif (!isset($_SESSION['submit'])) {
    
        header('location: login.php');
    }


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

    <title>ADMIN DASHBOARD</title>
</head>
<body>
    
    <!-- all container -->
    <div class="main_container">
        <header>
            <div class="main_header_bg">

                <!-- logo -->
                <div class="dash_logo">
                    <a href="">
                        <img src="../img/logo.png" alt="">
                    </a>
                </div>

                <h4>uds online admission system</h4>

                <h6>
                    hi there! <?php  echo $_SESSION['admin_name']; ?>
                </h6>

            </div>
        </header>

        <div class="dash_container">

            <!-- left side container -->

            <div class="dash_left">

                <!-- side bar -->
                <div id="side_bar" style="margin-top: 100px;">
                    <nav>
                        <ul>
                            <li class="current">
                                <i class="fa fa-home"></i>
                                <a href="dashboard.php">
                                    <div class="slider">
                                        <p>home</p>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <i class="fa fa-folder-open"></i>
                                <a href="program.php">
                                    <div class="slider">
                                        <p>add program</p>
                                    </div>
                                </a>
                            <li>
                                <i class="fa fa-cut"></i>
                                <a href="grade.php">
                                    <div class="slider">
                                        <p>grades cut-off</p>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <i class="fa fa-book-open"></i>
                                <a href="">
                                    <div class="slider">
                                        <p>students' admitted</p>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <i class="fa fa-power-off"></i>
                                <a href="../signout.php">
                                    <div class="slider">
                                        <p>sign out</p>
                                    </div>
                                </a>
                            </li>
                        </ul>
                    </nav>
                </div>
                <!-- end of sidebar -->

            </div>
            <!-- end of left container -->

            
        </div>

    
    </div>



    <!-- footer -->
    <?php include_once '../footer.php'; ?>


    
    <link rel="stylesheet" href="../css/dashboard.css">
    <!-- media query css file -->
    <link rel="stylesheet" href="../css/media_query.css">


    <!-- js files -->
    <script src="../js/jquery-3.4.1.slim.min.js"></script>
    <script src="../js/popper.min.js"></script>
    <script src="../js/bootstrap.min.js"></script>
    <script src="../js/jquery-3.4.1.min.js"></script>
    <script src="../js/main.js"></script>
</body>
</html>