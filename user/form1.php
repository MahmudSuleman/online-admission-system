
<?php 

        include_once '../config.php';

        if (isset($_SESSION['submit'])) {
            

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

    <title>APPLICATION FORM</title>
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
                            <li class="current">
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


                 <h4>application form</h4>
                <hr>

                <form action="form_connect.php" method="POST" class="form4">
                    
                   <table class="pro_choice">

                        <h2>programs to pursue</h2>

                       <tr>
                           <th>first choice</th>
                           <td>
                               <select name="program1" id="">
                                   <option>Select First Choice</option>
                                   <?php 
                                   
                                        $query = mysqli_query($connect, "SELECT DISTINCT program FROM eligibility ");

                                        while ($row = mysqli_fetch_assoc($query)) {
                                       
                                   ?>

                                            <option value="<?php echo $row['program']; ?>"><?php echo $row['program']; ?></option>

                                    <?php
                                        }

                                   ?>
                                   
                               </select>
                           </td>
                       </tr>
                        <tr>
                           <th>second choice</th>
                           <td>
                               <select name="program2" id="">
                                <option>Select Second Choice</option>
                                <?php 
                                   
                                        $query = mysqli_query($connect, "SELECT DISTINCT program FROM eligibility ");

                                        while ($row = mysqli_fetch_assoc($query)) {
                                       
                                   ?>

                                            <option value="<?php echo $row['program']; ?>"><?php echo $row['program']; ?></option>

                                    <?php
                                        }

                                   ?>
                               </select>
                           </td>
                       </tr>
                        <tr>
                           <th>third choice</th>
                           <td>
                               <select name="program3" id="">
                                <option>Select Third Choice</option>
                                <?php 
                                   
                                        $query = mysqli_query($connect, "SELECT DISTINCT program FROM eligibility ");

                                        while ($row = mysqli_fetch_assoc($query)) {
                                       
                                   ?>

                                            <option value="<?php echo $row['program']; ?>"><?php echo $row['program']; ?></option>

                                    <?php
                                        }

                                   ?>
                               </select>
                           </td>
                       </tr>
                   </table>
                   <hr>
                <div class="cores">
                    <div class="mini one">
                        <table>
                            <tr>
                                <th>
                                    <h3>index number</h3>
                                    <input type="text" name="index_number1" placeholder="Enter Index Number">
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

                                    <select name="fc1" id="">
                                        <option>Select Core Subject</option>
                                        <option value="social">Social Studies</option>
                                        <option value="english">English Language</option>
                                        <option value="c_maths">Mathematics(Core)</option>
                                        <option value="science">Integrated Science</option>
                                    </select>
                                    <select name="fc2" id="">
                                        <option>Select Core Subject</option>
                                        <option value="social">Social Studies</option>
                                        <option value="english">English Language</option>
                                        <option value="c_maths">Mathematics(Core)</option>
                                        <option value="science">Integrated Science</option>
                                    </select>
                                    <select name="fc3" id="">
                                        <option>Select Core Subject</option>
                                        <option value="social">Social Studies</option>
                                        <option value="english">English Language</option>
                                        <option value="c_maths">Mathematics(Core)</option>
                                        <option value="science">Integrated Science</option>
                                    </select>
                                </th>
                                <td>
                                    <h3 style="margin-left: 14px;">grade</h3>
                                    <input type="number" name="fcg1" >
                                    <input type="number" name="fcg2">
                                    <input type="number" name="fcg3">
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
                                    <select name="fe1" id="">
                                        <option>Select Elective Subject</option>
                                        <option value="Mathematics(Elective)">Mathematics(Elective)</option>
                                        <option value="Economics">Economics</option>
                                        <option value="Geography">Geography</option>
                                        <option value="Physics">Physics</option>
                                        <option value="Chemistry">Chemistry</option>
                                        <option value="Biology">Biology</option>
                                        <option value="Costing">Costing</option>
                                        <option value="Business Management">Business Management</option>
                                        <option value="Animal Husbandryy">Animal Husbandry</option>
                                        <option value="Crop Husbandry">Crop Husbandry</option>
                                        <option value="Accounting">Accounting</option>
                                        <option value="Management in Living">Management in Living</option>
                                    </select>

                                    <select name="fe2" id="">
                                        <option>Select Elective Subject</option>
                                        <option value="Mathematics(Elective)">Mathematics(Elective)</option>
                                        <option value="Economics"></option>
                                        <option value="Geography"></option>
                                        <option value="Physics"></option>
                                        <option value="Chemistry"></option>
                                        <option value="Biology"></option>
                                        <option value="Costing"></option>
                                        <option value="Business Management"></option>
                                        <option value="Animal Husbandryy"></option>
                                        <option value="Crop Husbandry"></option>
                                        <option value="Accounting"></option>
                                        <option value="Management in Living"></option>
                                    </select>

                                    <select name="fe3" id="">
                                        <option>Select Elective Subject</option>
                                        <option value="Mathematics(Elective)">Mathematics(Elective)</option>
                                        <option value="Economics">Economics</option>
                                        <option value="Geography">Geography</option>
                                        <option value="Physics">Physics</option>
                                        <option value="Chemistry">Chemistry</option>
                                        <option value="Biology">Biology</option>
                                        <option value="Costing">Costing</option>
                                        <option value="Business Management">Business Management</option>
                                        <option value="Animal Husbandryy">Animal Husbandry</option>
                                        <option value="Crop Husbandry">Crop Husbandry</option>
                                        <option value="Accounting">Accounting</option>
                                        <option value="Management in Living">Management in Living</option>
                                    </select>

                                   
                                </th>
                                <td>
                                    <h3 style="margin-left: 14px;">grade</h3>
                                    <input type="number" name="feg1">
                                    <input type="number" name="feg2">
                                    <input type="number" name="feg3">
                                </td>
                            </tr>
                        </table>
                    </div>
                </div>
                        <hr>
                <div class="cores">
                    <div class="mini one">
                        <table>
                            <tr>
                                <th>
                                    <h3>index number</h3>
                                    <input type="text" name="index_number2" placeholder="Enter Index Number">
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

                                    <select name="sc1" id="">
                                        <option>Select Subject</option>
                                        <option value="social">Social Studies</option>
                                        <option value="english">English Language</option>
                                        <option value="c_maths">Mathematics(Core)</option>
                                        <option value="science">Integrated Science</option>
                                    </select>
                                    <select name="sc2" id="">
                                        <option>Select Subject</option>
                                        <option value="social">Social Studies</option>
                                        <option value="english">English Language</option>
                                        <option value="c_maths">Mathematics(Core)</option>
                                        <option value="science">Integrated Science</option>
                                    </select>
                                    <select name="sc3" id="">
                                        <option>Select Subject</option>
                                        <option value="social">Social Studies</option>
                                        <option value="english">English Language</option>
                                        <option value="c_maths">Mathematics(Core)</option>
                                        <option value="science">Integrated Science</option>
                                    </select>
                                </th>
                                <td>
                                    <h3 style="margin-left: 14px;">grade</h3>
                                    <input type="number" name="scg1" >
                                    <input type="number" name="scg2">
                                    <input type="number" name="scg3">
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
                                    <select name="se1" id="">
                                        <option>Select Elective Subject</option>
                                        <option value="Mathematics(Elective)">Mathematics(Elective)</option>
                                        <option value="Economics">Economics</option>
                                        <option value="Geography">Geography</option>
                                        <option value="Physics">Physics</option>
                                        <option value="Chemistry">Chemistry</option>
                                        <option value="Biology">Biology</option>
                                        <option value="Costing">Costing</option>
                                        <option value="Business Management">Business Management</option>
                                        <option value="Animal Husbandryy">Animal Husbandry</option>
                                        <option value="Crop Husbandry">Crop Husbandry</option>
                                        <option value="Accounting">Accounting</option>
                                        <option value="Management in Living">Management in Living</option>
                                    </select>

                                      <select name="se2" id="">
                                        <option>Select Elective Subject</option>
                                        <option value="Mathematics(Elective)">Mathematics(Elective)</option>
                                        <option value="Economics">Economics</option>
                                        <option value="Geography">Geography</option>
                                        <option value="Physics">Physics</option>
                                        <option value="Chemistry">Chemistry</option>
                                        <option value="Biology">Biology</option>
                                        <option value="Costing">Costing</option>
                                        <option value="Business Management">Business Management</option>
                                        <option value="Animal Husbandryy">Animal Husbandry</option>
                                        <option value="Crop Husbandry">Crop Husbandry</option>
                                        <option value="Accounting">Accounting</option>
                                        <option value="Management in Living">Management in Living</option>
                                    </select>

                                      <select name="se3" id="">
                                        <option>Select Elective Subject</option>
                                        <option value="Mathematics(Elective)">Mathematics(Elective)</option>
                                        <option value="Economics">Economics</option>
                                        <option value="Geography">Geography</option>
                                        <option value="Physics">Physics</option>
                                        <option value="Chemistry">Chemistry</option>
                                        <option value="Biology">Biology</option>
                                        <option value="Costing">Costing</option>
                                        <option value="Business Management">Business Management</option>
                                        <option value="Animal Husbandryy">Animal Husbandry</option>
                                        <option value="Crop Husbandry">Crop Husbandry</option>
                                        <option value="Accounting">Accounting</option>
                                        <option value="Management in Living">Management in Living</option>
                                    </select>
                                </th>
                                <td>
                                    <h3 style="margin-left: 14px;">grade</h3>
                                    <input type="number" name="seg1">
                                    <input type="number" name="seg2">
                                    <input type="number" name="seg3">
                                </td>
                            </tr>
                        </table>
                    </div>
                </div>
                <hr>

                 <div class="cores">
                    <div class="mini one">
                        <table>
                            <tr>
                                <th>
                                    <h3>index number</h3>
                                    <input type="text" name="index_number3" placeholder="Enter Index Number">
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

                                    <select name="tc1" id="">
                                        <option>Select Subject</option>
                                        <option value="social">Social Studies</option>
                                        <option value="english">English Language</option>
                                        <option value="c_maths">Mathematics(Core)</option>
                                        <option value="science">Integrated Science</option>
                                    </select>
                                    <select name="tc2" id="">
                                        <option>Select Subject</option>
                                        <option value="social">Social Studies</option>
                                        <option value="english">English Language</option>
                                        <option value="c_maths">Mathematics(Core)</option>
                                        <option value="science">Integrated Science</option>
                                    </select>
                                    <select name="tc3" id="">
                                        <option>Select Subject</option>
                                        <option value="social">Social Studies</option>
                                        <option value="english">English Language</option>
                                        <option value="c_maths">Mathematics(Core)</option>
                                        <option value="science">Integrated Science</option>
                                    </select>
                                </th>
                                <td>
                                    <h3 style="margin-left: 14px;">grade</h3>
                                    <input type="number" name="tcg1" >
                                    <input type="number" name="tcg2">
                                    <input type="number" name="tcg3">
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
                                    <select name="te1" id="">
                                        <option>Select Elective Subject</option>
                                        <option value="Mathematics(Elective)">Mathematics(Elective)</option>
                                        <option value="Economics">Economics</option>
                                        <option value="Geography">Geography</option>
                                        <option value="Physics">Physics</option>
                                        <option value="Chemistry">Chemistry</option>
                                        <option value="Biology">Biology</option>
                                        <option value="Costing">Costing</option>
                                        <option value="Business Management">Business Management</option>
                                        <option value="Animal Husbandryy">Animal Husbandry</option>
                                        <option value="Crop Husbandry">Crop Husbandry</option>
                                        <option value="Accounting">Accounting</option>
                                        <option value="Management in Living">Management in Living</option>
                                    </select>

                                      <select name="te2" id="">
                                        <option>Select Elective Subject</option>
                                        <option value="Mathematics(Elective)">Mathematics(Elective)</option>
                                        <option value="Economics">Economics</option>
                                        <option value="Geography">Geography</option>
                                        <option value="Physics">Physics</option>
                                        <option value="Chemistry">Chemistry</option>
                                        <option value="Biology">Biology</option>
                                        <option value="Costing">Costing</option>
                                        <option value="Business Management">Business Management</option>
                                        <option value="Animal Husbandryy">Animal Husbandry</option>
                                        <option value="Crop Husbandry">Crop Husbandry</option>
                                        <option value="Accounting">Accounting</option>
                                        <option value="Management in Living">Management in Living</option>
                                    </select>

                                      <select name="te3" id="">
                                        <option>Select Elective Subject</option>
                                        <option value="Mathematics(Elective)">Mathematics(Elective)</option>
                                        <option value="Economics">Economics</option>
                                        <option value="Geography">Geography</option>
                                        <option value="Physics">Physics</option>
                                        <option value="Chemistry">Chemistry</option>
                                        <option value="Biology">Biology</option>
                                        <option value="Costing">Costing</option>
                                        <option value="Business Management">Business Management</option>
                                        <option value="Animal Husbandryy">Animal Husbandry</option>
                                        <option value="Crop Husbandry">Crop Husbandry</option>
                                        <option value="Accounting">Accounting</option>
                                        <option value="Management in Living">Management in Living</option>
                                    </select>
                                </th>
                                <td>
                                    <h3 style="margin-left: 14px;">grade</h3>
                                    <input type="number" name="teg1">
                                    <input type="number" name="teg2">
                                    <input type="number" name="teg3">
                                </td>
                            </tr>
                        </table>
                    </div>
                </div>

                    <div>
                        <input type="submit" name="submit" value="submit">
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
      elseif (!isset($_SESSION['submit'])) {
            
                header('location: login.php');
        }

?>

