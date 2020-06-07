
<?php 


    include_once '../config.php';

    if (isset($_SESSION['submit'])) {

        if (isset($_POST['submit'])) {

            $id = mysqli_real_escape_string($connect, $_POST['id']);
            $firstname = mysqli_real_escape_string($connect, $_POST['firstname']);
            $middlename = mysqli_real_escape_string($connect, $_POST['middlename']);
            $lastname = mysqli_real_escape_string($connect, $_POST['lastname']);
            $gender = mysqli_real_escape_string($connect, $_POST['gender']);
            $email = mysqli_real_escape_string($connect, $_POST['email']);
            $category = mysqli_real_escape_string($connect, $_POST['category']);
            $uid = mysqli_real_escape_string($connect, $_POST['uid']);
            $pin = mysqli_real_escape_string($connect, $_POST['pin']);
            $password = mysqli_real_escape_string($connect, md5($_POST['password']));

            $result = mysqli_query($connect,"UPDATE `student_table` SET `firstname`='$firstname',`middlename`='$middlename',`lastname`='$lastname',`gender`='$gender',`email`='$email',`category`='$category',`uid`='$uid',`pin`='$pin',`password`='$password' WHERE id = '$id' ");

                if($result){

                    $_SESSION['success_msg'] = "record updated successfully.";
                    header("location: profile.php");
                }
                else{

                    $_SESSION['fail_msg'] = "record not updated. please try again.";
                    header("location:profile.php");
                }
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

    <script>
        function validateForm(){

            var password = document.form3.password.value;
            var repass = document.form3.repass.value;

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

        
            document.getElementById('validate').innerHTML = "";
            return true;
        }
    </script>

    <title>USER PROFILE</title>
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
                            <li>
                                <i class="fa fa-home"></i>
                                <a href="dashboard.php">
                                    <div class="slider">
                                        <p>home</p>
                                    </div>
                                </a>
                            </li>
                            <li class="current">
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

            <div class="dash_right">

                <h4>applicant profile</h4>
                <hr>

                <!-- sign up message box -->
                <div id="msg">
                    <?php if (isset($_SESSION['fail_msg'])): ?> 

                        <div id="fail_msg">

                            <?php 

                                echo $_SESSION['fail_msg'];
                                unset($_SESSION['fail_msg']);

                            ?>

                                <div id="close">+</div>
                        </div>

                    <?php elseif(isset($_SESSION['success_msg'])): ?>

                        <div id="success_msg">

                            <?php 

                                echo $_SESSION['success_msg'];
                                unset($_SESSION['success_msg']);

                            ?>
                                <div id="close">+</div>
                        </div>

                    <?php endif ?>
                </div>

                <?php 

                    $query = mysqli_query($connect,"SELECT * FROM  student_table WHERE username = '$_SESSION[user_name]'");

                    
                    $data = mysqli_fetch_assoc($query);
                    
                
                ?>
                

                <form action="" method="POST" class="form3" name="form3"  onsubmit="return validateForm()">

                        <h6>edit profile</h6>

                    <div>
                        <input type="hidden" name="id" id="update_input" value="<?php echo $data['id']; ?>">
                    </div>
                    
                    <div>
                        <span>firstname:</span>
                        <input type="text" name="firstname" id="update_input" value="<?php echo $data['firstname']; ?>">
                    </div>
                    <div>
                        <span>middlename:</span>
                        <input type="text" name="middlename" id="update_input" value="<?php echo $data['middlename']; ?>">
                    </div>
                    <div>
                        <span>lastname:</span>
                        <input type="text" name="lastname" id="update_input" value="<?php echo $data['lastname']; ?>">
                    </div>
                    <div>
                        <span>gender:</span>
                        <input type="text" name="gender" id="update_input" value="<?php echo $data['gender']; ?>">
                    </div>
                    <div>
                        <span>email:</span>
                        <input type="text" name="email" id="update_input" value="<?php echo $data['email']; ?>">
                    </div>
                    <div>
                        <span>category:</span>
                        <input type="text" name="category" id="update_input" value="<?php echo $data['category']; ?>">
                    </div>
                    <div>
                        <span>uid:</span>
                        <input type="text" name="uid" id="update_input" value="<?php echo $data['uid']; ?>">
                    </div>
                    <div>
                        <span>pid:</span>
                        <input type="text" name="pin" id="update_input" value="<?php echo $data['pin']; ?>">
                    </div>
                    <div>
                        <span>password:</span>
                        <input type="password" name="password" id="update_input">
                    </div>
                    <div>
                        <span>confirm password:</span>
                        <input type="password" name="repass" id="update_input">
                    </div>
                    <div>
                        <input type="submit" name="submit" value="save changes" id="update_submit">
                    </div>

                    <div id="validate"></div>


                </form>


            </div>
            <!-- end of dash right -->


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

<?php  

    }
    elseif(!isset($_SESSION['submit'])){

        header('location: login.php');
    }
?>

