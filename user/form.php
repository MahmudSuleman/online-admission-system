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
			<!-- end of left side container -->

			
			<!-- right side container -->
			<div class="dash_right">


                <h4>application form</h4> 
                <hr>

                <form action="form_connect.php" method="post" class="form4">

                    <!-- choose programs -->
                    <table class="pro_choice">

                        <!-- first choice table row -->
                        <tr>
                            <th>first choice</th>
                            <td>
                                <select name="program1" id="">
                                    <option>Select First Program</option>
                                    <?php

                                        $choice1 = mysqli_query($connect, "SELECT DISTINCT program FROM eligibility ");

                                        while ($row = mysqli_fetch_assoc($choice1)) {
                                    
                                    ?>

                                        <option value="<?php echo $row['program']; ?>"><?php echo $row['program']; ?></option>
                                
                                    <?php } ?>
                                </select>
                                
                            </td>
                        </tr>

                        <!-- second choice table row -->
                        <tr>
                            <th>second choice</th>
                            <td>
                                <select name="program2" id="">
                                    <option>Select Second Program</option>
                                    <?php

                                        $choice1 = mysqli_query($connect, "SELECT DISTINCT program FROM eligibility ");

                                        while ($row = mysqli_fetch_assoc($choice1)) {
                                    
                                    ?>

                                        <option value="<?php echo $row['program']; ?>"><?php echo $row['program']; ?></option>
                                
                                    <?php } ?>
                                </select>
                                
                            </td>
                        </tr>

                        <!-- third choice table row -->
                        <tr>
                            <th>third choice</th>
                            <td>
                                <select name="program3" id="">
                                    <option>Select Third Program</option>
                                    <?php

                                        $choice1 = mysqli_query($connect, "SELECT DISTINCT program FROM eligibility ");

                                        while ($row = mysqli_fetch_assoc($choice1)) {
                                    
                                    ?>

                                        <option value="<?php echo $row['program']; ?>"><?php echo $row['program']; ?></option>
                                
                                    <?php } ?>
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
                                <tr>
                                    <th>
                                        <h3>upload result</h3>
                                        <input type="file" name="img1" id="">
                                    </th>
                                </tr>
                            </table> 
                        </div>
                        
                        <!-- second mini box -->
                        <div class="mini">
                            <h3>core subjects</h3>
                            <table>
                                <tr>
                                    <th>
                                        <h3>subject</h3>

                                        <select name="c1" id="">
                                            <option>Select Subject</option>
                                            <?php
                                                $core = mysqli_query($connect,"SELECT DISTINCT core FROM subjects");
                                                while($row = mysqli_fetch_assoc($core)){
                                            ?>
                                            <option value="<?php echo $row['core']; ?>"><?php echo $row['core']; ?></option>
                                            <?php } ?>
                                        </select>
                                        <select name="c2" id="">
                                            <option>Select Subject</option>
                                            <?php
                                            $core = mysqli_query($connect,"SELECT DISTINCT core FROM subjects");
                                            while($row = mysqli_fetch_assoc($core)){
                                            ?>
                                            <option value="<?php echo $row['core']; ?>"><?php echo $row['core']; ?></option>
                                            <?php } ?>
                                        </select>
                                        <select name="c3" id="">
                                            <option>Select Subject</option>
                                        <?php
                                            $core = mysqli_query($connect,"SELECT DISTINCT core FROM subjects");
                                            while($row = mysqli_fetch_assoc($core)){
                                            ?>
                                            <option value="<?php echo $row['core']; ?>"><?php echo $row['core']; ?></option>
                                            <?php } ?>
                                        </select>
                                    </th>
                                    <td>
                                        <h3 style="margin-left: 14px;">grade</h3>
                                        <input type="number" name="cg1" >
                                        <input type="number" name="cg2">
                                        <input type="number" name="cg3">
                                    </td>
                                </tr>
                            </table>
                        </div>
                        <!-- second mini box -->
                        <div class="mini">
                            <h3>elective subjects</h3>
                            <table>
                                <tr>
                                    <th>
                                        <h3>subject</h3>

                                        <select name="e1" id="">
                                            <option>Select Subject</option>
                                            <?php
                                                $electives = mysqli_query($connect,"SELECT DISTINCT elective FROM subjects");
                                                while($row = mysqli_fetch_assoc($electives)){
                                            ?>
                                            <option value="<?php echo $row['elective']; ?>"><?php echo $row['elective']; ?></option>
                                            <?php } ?>
                                        </select>
                                        <select name="e2" id="">
                                            <option>Select Subject</option>
                                            <?php
                                            $electives = mysqli_query($connect,"SELECT DISTINCT elective FROM subjects");
                                            while($row = mysqli_fetch_assoc($electives)){
                                            ?>
                                            <option value="<?php echo $row['elective']; ?>"><?php echo $row['elective']; ?></option>
                                            <?php } ?>
                                        </select>
                                        <select name="e3" id="">
                                            <option>Select Subject</option>
                                        <?php
                                            $electives = mysqli_query($connect,"SELECT DISTINCT elective FROM subjects");
                                            while($row = mysqli_fetch_assoc($electives)){
                                            ?>
                                            <option value="<?php echo $row['elective']; ?>"><?php echo $row['elective']; ?></option>
                                            <?php } ?>
                                        </select>
                                    </th>
                                    <td>
                                        <h3 style="margin-left: 14px;">grade</h3>
                                        <input type="number" name="eg1" >
                                        <input type="number" name="eg2">
                                        <input type="number" name="eg3">
                                    </td>
                                </tr>
                            </table>
                        </div>
                        <div id="add_cert">
                            <input type="button" id="show" value="Add Another Results">
                        </div>
                        
                    </div>
                        <!-- second result -->
                        <div id="second_result">
                            <div class="cores">
                                <div class="mini one">
                                    <table>
                                        <tr>
                                            <th>
                                                <h3>index number</h3>
                                                <input type="text" name="index_number3" placeholder="Enter Index Number">
                                            </th>
                                        </tr>
                                        <tr>
                                            <th>
                                                <h3>upload result</h3>
                                                <input type="file" name="img2" id="">
                                            </th>
                                        </tr>
                                    </table> 
                                </div>
                        
                                <!-- second mini box -->
                                <div class="mini">
                                    <h3>core subjects</h3>
                                    <table>
                                        <tr>
                                            <th>
                                                <h3>subject</h3>

                                                <select name="sc1" id="">
                                                    <option>Select Subject</option>
                                                    <?php
                                                        $core = mysqli_query($connect,"SELECT DISTINCT core FROM subjects");
                                                        while($row = mysqli_fetch_assoc($core)){
                                                    ?>
                                                    <option value="<?php echo $row['core']; ?>"><?php echo $row['core']; ?></option>
                                                    <?php } ?>
                                                </select>
                                                <select name="sc2" id="">
                                                    <option>Select Subject</option>
                                                    <?php
                                                    $core = mysqli_query($connect,"SELECT DISTINCT core FROM subjects");
                                                    while($row = mysqli_fetch_assoc($core)){
                                                    ?>
                                                    <option value="<?php echo $row['core']; ?>"><?php echo $row['core']; ?></option>
                                                    <?php } ?>
                                                </select>
                                                <select name="sc3" id="">
                                                    <option>Select Subject</option>
                                                <?php
                                                    $core = mysqli_query($connect,"SELECT DISTINCT core FROM subjects");
                                                    while($row = mysqli_fetch_assoc($core)){
                                                    ?>
                                                    <option value="<?php echo $row['core']; ?>"><?php echo $row['core']; ?></option>
                                                    <?php } ?>
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
                                <!-- third mini box -->
                                <div class="mini">
                                    <h3>elective subjects</h3>
                                    <table>
                                        <tr>
                                            <th>
                                                <h3>subject</h3>

                                                <select name="se1" id="">
                                                    <option>Select Subject</option>
                                                    <?php
                                                        $electives = mysqli_query($connect,"SELECT DISTINCT elective FROM subjects");
                                                        while($row = mysqli_fetch_assoc($electives)){
                                                    ?>
                                                    <option value="<?php echo $row['elective']; ?>"><?php echo $row['elective']; ?></option>
                                                    <?php } ?>
                                                </select>
                                                <select name="se2" id="">
                                                    <option>Select Subject</option>
                                                    <?php
                                                    $electives = mysqli_query($connect,"SELECT DISTINCT elective FROM subjects");
                                                    while($row = mysqli_fetch_assoc($electives)){
                                                    ?>
                                                    <option value="<?php echo $row['elective']; ?>"><?php echo $row['elective']; ?></option>
                                                    <?php } ?>
                                                </select>
                                                <select name="se3" id="">
                                                    <option>Select Subject</option>
                                                <?php
                                                    $electives = mysqli_query($connect,"SELECT DISTINCT elective FROM subjects");
                                                    while($row = mysqli_fetch_assoc($electives)){
                                                    ?>
                                                    <option value="<?php echo $row['elective']; ?>"><?php echo $row['elective']; ?></option>
                                                    <?php } ?>
                                                </select>
                                            </th>
                                            <td>
                                                <h3 style="margin-left: 14px;">grade</h3>
                                                <input type="number" name="seg1" >
                                                <input type="number" name="seg2">
                                                <input type="number" name="seg3">
                                            </td>
                                        </tr>
                                    </table>
                                </div>
                                <hr>  
                                <div id="add_cert1">
                                    <input type="button" id="show1" value="Add Another Results">
                                </div>  
                            </div>
                        </div>
                            
                        <!-- third result -->
                        <div id="third_result">
                            <div class="cores">
                                <div class="mini one">
                                    <table>
                                        <tr>
                                            <th>
                                                <h3>index number</h3>
                                                <input type="text" name="index_number3" placeholder="Enter Index Number">
                                            </th>
                                        </tr>
                                        <tr>
                                            <th>
                                                <h3>upload result</h3>
                                                <input type="file" name="img3" id="">
                                            </th>
                                        </tr>
                                    </table> 
                                </div>
                        
                                <!-- second mini box -->
                                <div class="mini">
                                    <h3>core subjects</h3>
                                    <table>
                                        <tr>
                                            <th>
                                                <h3>subject</h3>

                                                <select name="tc1" id="">
                                                    <option>Select Subject</option>
                                                    <?php
                                                        $core = mysqli_query($connect,"SELECT DISTINCT core FROM subjects");
                                                        while($row = mysqli_fetch_assoc($core)){
                                                    ?>
                                                    <option value="<?php echo $row['core']; ?>"><?php echo $row['core']; ?></option>
                                                    <?php } ?>
                                                </select>
                                                <select name="tc2" id="">
                                                    <option>Select Subject</option>
                                                    <?php
                                                    $core = mysqli_query($connect,"SELECT DISTINCT core FROM subjects");
                                                    while($row = mysqli_fetch_assoc($core)){
                                                    ?>
                                                    <option value="<?php echo $row['core']; ?>"><?php echo $row['core']; ?></option>
                                                    <?php } ?>
                                                </select>
                                                <select name="tc3" id="">
                                                    <option>Select Subject</option>
                                                <?php
                                                    $core = mysqli_query($connect,"SELECT DISTINCT core FROM subjects");
                                                    while($row = mysqli_fetch_assoc($core)){
                                                    ?>
                                                    <option value="<?php echo $row['core']; ?>"><?php echo $row['core']; ?></option>
                                                    <?php } ?>
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
                                <!-- third mini box -->
                                <div class="mini">
                                    <h3>elective subjects</h3>
                                    <table>
                                        <tr>
                                            <th>
                                                <h3>subject</h3>

                                                <select name="te1" id="">
                                                    <option>Select Subject</option>
                                                    <?php
                                                        $electives = mysqli_query($connect,"SELECT DISTINCT elective FROM subjects");
                                                        while($row = mysqli_fetch_assoc($electives)){
                                                    ?>
                                                    <option value="<?php echo $row['elective']; ?>"><?php echo $row['elective']; ?></option>
                                                    <?php } ?>
                                                </select>
                                                <select name="te2" id="">
                                                    <option>Select Subject</option>
                                                    <?php
                                                    $electives = mysqli_query($connect,"SELECT DISTINCT elective FROM subjects");
                                                    while($row = mysqli_fetch_assoc($electives)){
                                                    ?>
                                                    <option value="<?php echo $row['elective']; ?>"><?php echo $row['elective']; ?></option>
                                                    <?php } ?>
                                                </select>
                                                <select name="te3" id="">
                                                    <option>Select Subject</option>
                                                <?php
                                                    $electives = mysqli_query($connect,"SELECT DISTINCT elective FROM subjects");
                                                    while($row = mysqli_fetch_assoc($electives)){
                                                    ?>
                                                    <option value="<?php echo $row['elective']; ?>"><?php echo $row['elective']; ?></option>
                                                    <?php } ?>
                                                </select>
                                            </th>
                                            <td>
                                                <h3 style="margin-left: 14px;">grade</h3>
                                                <input type="number" name="teg1" >
                                                <input type="number" name="teg2">
                                                <input type="number" name="teg3">
                                            </td>
                                        </tr>
                                    </table>
                                </div>
                                <hr>
                            </div>
                        </div>

                    <div style="float: right; margin-top: -30px;">
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
		
		header("location: login.php");
	}
 ?>