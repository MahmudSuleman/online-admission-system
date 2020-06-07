
<?php 


    include_once '../config.php';

    if (isset($_SESSION['submit'])) {

        if (isset($_POST['add'])) {
            
            $degree_type = $_POST['degree_type'];
            $campus = $_POST['campus'];
            $faculty = $_POST['faculty'];
            $program = $_POST['program'];
            $duration = $_POST['duration'];
            $male_cut = $_POST['male_cut'];
            $female_cut = $_POST['female_cut'];

            $query = mysqli_query($connect,"SELECT * FROM program_table WHERE program = '$program' ");

            $count = mysqli_num_rows($query);

            if ($count === 1) {
                
                $_SESSION['fail_msg'] = "program already added";
                // header('location: program.php');
            }
            else {
                
                $register = mysqli_query($connect,"INSERT INTO program_table(degree_type,campus,faculty,program,duration,male_cut,female_cut) VALUES('$degree_type','$campus','$faculty','$program','$duration','$male_cut','$female_cut') ");
                $_SESSION['success_msg'] = "program added successfully";
                // header('location: program.php');

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
                                <li>
                                    <i class="fa fa-home"></i>
                                    <a href="dashboard.php">
                                        <div class="slider">
                                            <p>home</p>
                                        </div>
                                    </a>
                                </li>
                                <li class="current">
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

                    <h4>add program</h4>
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


                    <form action="" method="post" class="form5" style="margin-left: 20%;">

                        <div>
                            <select name="degree_type"  id="update_input">
                                <option>Degree Type</option>
                                <option value="diploma">Diploma</option>
                                <option value="bachelor">Bachelors Degree</option>
                                <option value="postgraduate">Postgraduate</option>
                            </select>
                        </div>

                        <div>
                            <select name="campus"  id="update_input">
                                <option>Select Campus</option>
                                <option value="Wa">Wa Campus</option>
                                <option value="Navrongo">Navrongo Campus</option>
                                <option value="Tamale">Tamale Campus</option>
                                <option value="Nyankpala">Nyankpala Campus</option>
                            </select>
                        <div>

                        <div>
                            <select name="faculty"  id="update_input">
                                <option>Select Faculty/School</option>
                                <option value="FIDS">Faculty of Integrated Development Studies</option>
                                <option value="FPLM">Faculty of Planning and Land Management</option>
                                <option value="SBL">School of Business and Law</option>
                                <option value="SMHS">School of Medicine and Health Science</option>
                                <option value="SAHS">School of Allied Health Science</option>
                                <option value="FOE">Faculty of Education</option>
                                <option value="FMS">Faculty of Mathematical Science</option>
                                <option value="FAS">Faculty of Applied Science</option>
                                <option value="FEES">Faculty of Earth and Environmental Science</option>
                                <option value="FOA">Faculty of Agriculture</option>
                                <option value="FNRE">Faculty of Natural Resources and Environment</option>
                                <option value="FACS">Faculty of Agribusiness and Communication Science</option>
                                <option value="SoE">School of Engineering</option>
                            </select>
                        </div>
                        
                        <div>
                            <input type="text" name="program" id="update_input" placeholder="Program Name">
                        </div>

                        <div>
                            <input type="text" name="duration" id="update_input" placeholder="Duration" style="width: 100px;">
                        </div>

                        <div>
                            <input type="text" name="male_cut" id="update_input" placeholder="Male_cut" style="width: 100px;">
                        </div>

                        <div>
                            <input type="text" name="female_cut" id="update_input" placeholder="Female_cut" style="width: 120px;">
                        </div>

                        <div>
                            <input type="submit" name="add" value="add program">
                        </div>
                    </form>
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

<?php  

}
elseif(!isset($_SESSION['submit'])){

    header('location: login.php');
}
?>

