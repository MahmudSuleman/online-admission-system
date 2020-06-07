
<?php 

        include_once '../config.php';

        if (isset($_POST['submit'])) {
            
            $user_name = $_POST['user_name'];
            $password = md5($_POST['password']);

            $query = mysqli_query($connect,"SELECT * FROM student_table WHERE username = '$user_name' AND password = '$password' ");

            $row = mysqli_fetch_assoc($query);

            $gender = $row['gender'];
            $category = $row['category'];
            
            $_SESSION['user_name'] = $user_name;
            $_SESSION['gender'] = $gender;
            $_SESSION['category'] = $category;

            
            
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

    <title>USER DASHBOARD</title>
</head>
<body>
    
    <!-- all container -->
    <div class="main_container">
        <header>
            <div class="main_header_bg">

                <!-- logo -->
                <div class="dash_logo">
                    <a href="dashboard.php">
                        <img src="../img/logo.png" alt="">
                    </a>
                </div>

                <h4>uds online admission system</h4>

                <h6>
                    hi there! <?php  echo $_SESSION['user_name']; ?>
                </h6>

            </div>
        </header>

        <div class="dash_container">

            <!-- left side container -->

            <div class="dash_left">

                <!-- user profile img box -->
                <div class="user_profile"></div>

                <!-- side bar -->
                <div id="side_bar">
                    <nav>
                        <ul>
                            <li class="current">
                                <i class="fa fa-home"></i>
                                <a href="">
                                    <div class="slider">
                                        <p>home</p>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <i class="fa fa-user"></i>
                                <a href="profile.php">
                                    <div class="slider">   
                                        <p>profile</p>
                                    </div>
                                </a>
                            <li>
                                <i class="fa fa-clone"></i>
                                <a href="form.php">
                                    <div class="slider">
                                        <p>application form</p>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <i class="fa fa-book-open"></i>
                                <a href="">
                                    <div class="slider">
                                        <p>admission status</p>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <i class="fa fa-power-off"></i>
                                <a href="signout.php">
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

            <div class="dash_right">

                
                 <h4>home</h4>
                <hr>

                <?php echo $_SESSION['gender'];
                      echo $_SESSION['category'];
                 ?>
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

    
    <link rel="stylesheet" href="../css/dashboard.css">
    <!-- media query css file -->
    <link rel="stylesheet" href="../css/media_query.css">
</body>
</html>

