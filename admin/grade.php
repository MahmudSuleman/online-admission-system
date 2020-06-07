
<?php 

    include_once '../config.php';


    if (isset($_SESSION['submit'])) {


        if (isset($_POST['submit'])) {

            $c1 = $_POST['c1'];
            $cg1 = $_POST['cg1'];
            $c2 = $_POST['c2'];
            $cg2 = $_POST['cg2'];
            $c3 = $_POST['c3'];
            $cg3 = $_POST['cg3'];
            $c4 = $_POST['c4'];
            $cg4 = $_POST['cg4'];
            $e1 = $_POST['e1'];
            $eg1 = $_POST['eg1'];
            $e2 = $_POST['e2'];
            $eg2 = $_POST['eg2'];
            $e3 = $_POST['e3'];
            $eg3 = $_POST['eg3'];
            $e4 = $_POST['e4'];
            $eg4 = $_POST['eg4'];
            $e5 = $_POST['e5'];
            $eg5 = $_POST['eg5'];
            $e6 = $_POST['e6'];
            $eg6 = $_POST['eg6'];
            $e7 = $_POST['e7'];
            $eg7 = $_POST['eg7'];
            $e8 = $_POST['e8'];
            $eg8 = $_POST['eg8'];
            $male_cut = $_POST['male_cut'];
            $female_cut = $_POST['female_cut'];
            $faculty = $_POST['faculty'];
            $program = $_POST['program'];

            $query = mysqli_query($connect,"SELECT * FROM eligibility WHERE faculty = '$faculty' AND program = '$program' ");

            $num = mysqli_num_rows($query);

            if ($num === 1) {
                
                $_SESSION['fail_msg'] = "details already added";
            }
            else{

                $register = mysqli_query($connect,"INSERT INTO eligibility(faculty,program,core_one,mark_one,core_two,mark_two,core_three,mark_three,core_four,mark_four,elective_one,e_mark_one,elective_two,e_mark_two,elective_three,e_mark_three,elective_four,e_mark_four,elective_five,e_mark_five,elective_six,e_mark_six,elective_seven,e_mark_seven,elective_eight,e_mark_eight,male_cut,female_cut) 
                VALUES(
            '$faculty','$program','$c1','$cg1','$c2','$cg2','$c3','$cg3','$c4','$cg4','$e1','$eg1','$e2','$eg2','$e3','$eg3','$e4','$eg4','$e5','$eg5','$e6','$eg6','$e7','$eg7','$e8','$eg8','$male_cut','$female_cut')");
                $_SESSION['success_msg'] = "details added successfully";
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

    <title>GRADES CUT-OFF POINTS</title>
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
                            <li>
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
                            <li class="current">
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

            <!-- right container -->
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

                <form action="" method="POST" class="form4">
                   
                    <div class="mini one">
                        <table>
                            <tr>
                                <th>
                                    <h3>faculty</h3>
                                    <select name="faculty">
                                        <option>Select Faculty</option>
                                            <?php 

                                                $query = mysqli_query($connect,"SELECT DISTINCT faculty FROM program_table");

                                                while ($data = mysqli_fetch_assoc($query)) {
                                            ?>

                                                <option value="<?php echo $data['faculty']; ?>"><?php echo $data['faculty']; ?></option>

                                            <?php 
                                                }
                                            ?>
                                    </select>
                                

                                    <h3>program</h3>
                                    <select name="program">
                                        <option>Select Program</option>
                                            <?php 

                                                $query = mysqli_query($connect,"SELECT DISTINCT program FROM program_table");

                                                while ($data = mysqli_fetch_assoc($query)) {
                                            ?>

                                                <option value="<?php echo $data['program']; ?>"><?php echo $data['program']; ?></option>

                                            <?php 
                                                }
                                            ?>
                                    </select>

                                    <h6>male grade cutoff</h6>
                                    <input type="text" name="male_cut" placeholder="Enter CutOff">
                                    <h6>female grade cutoff</h6>
                                    <input type="text" name="female_cut" placeholder="Enter CutOff">
                                </th>
                            </tr>
                        </table>
                    </div>

                    <div class="mini">
                        <h3>core subjects</h3>
                            <table>
                                <tr>
                                    <th>
                                        <h3>subject</h3>

                                        <select name="c1" id="">
                                            <option>Select Subject</option>
                                            <option value="social">Social Studies</option>
                                            <option value="english">English Language</option>
                                            <option value="c_maths">Mathematics(Core)</option>
                                            <option value="science">Integrated Science</option>
                                        </select>
                                        <select name="c2" id="">
                                            <option>Select Subject</option>
                                            <option value="social">Social Studies</option>
                                            <option value="english">English Language</option>
                                            <option value="c_maths">Mathematics(Core)</option>
                                            <option value="science">Integrated Science</option>
                                        </select>
                                        <select name="c3" id="">
                                            <option>Select Subject</option>
                                            <option value="social">Social Studies</option>
                                            <option value="english">English Language</option>
                                            <option value="c_maths">Mathematics(Core)</option>
                                            <option value="science">Integrated Science</option>
                                        </select>
                                        <select name="c4" id="">
                                            <option>Select Subject</option>
                                            <option value="social">Social Studies</option>
                                            <option value="english">English Language</option>
                                            <option value="c_maths">Mathematics(Core)</option>
                                            <option value="science">Integrated Science</option>
                                        </select>
                                    </th>
                                    <td>
                                        <h3 style="margin-left: 14px;">grade</h3>
                                        <input type="number" name="cg1" >
                                        <input type="number" name="cg2">
                                        <input type="number" name="cg3">
                                        <input type="number" name="cg4">
                                    </td>
                                </tr>
                            </table>
                        </div>

                        <div class="mini">
                            <h3>elective subjects</h3>
                                <table>
                                    <tr>
                                        <th>
                                             <h3>subject</h3>

                                             <input type="text" name="e1" placeholder="First Elective">
                                             <input type="text" name="e2" placeholder="Second Elective">
                                             <input type="text" name="e3" placeholder="Third Elective">
                                             <input type="text" name="e4" placeholder="Forth Elective">
                                             <input type="text" name="e5" placeholder="Fifth Elective">
                                             <input type="text" name="e6" placeholder="Sixth Elective">
                                             <input type="text" name="e7" placeholder="Seventh Elective">
                                             <input type="text" name="e8" placeholder="eighth Elective">
                                        </th>
                                        <td>
                                            <h3 style="margin-left: 14px;">grade</h3>
                                            <input type="number" name="eg1">
                                            <input type="number" name="eg2">
                                            <input type="number" name="eg3">
                                            <input type="number" name="eg4">
                                            <input type="number" name="eg5">
                                            <input type="number" name="eg6">
                                            <input type="number" name="eg7">
                                            <input type="number" name="eg8">
                                        </td>
                                    </tr>
                                </table>
                            </div>
                    <div>
                        <input type="submit" name="submit" value="submit">
                    </div>
                </form>
             
            </div>
            <!-- end of right container -->

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

<?php 

    }
    elseif (!isset($_SESSION['submit'])) {

        header('location: login.php');
    }
?>
