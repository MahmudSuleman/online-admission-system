<?php 

    include_once '../config.php';

    if (isset($_POST['submit'])) {
        
        echo $username = mysqli_real_escape_string($connect, $_POST['username']);
        echo $firstname = mysqli_real_escape_string($connect, $_POST['firstname']);
        echo $middlename = mysqli_real_escape_string($connect, $_POST['middlename']);
        echo $lastname = mysqli_real_escape_string($connect, $_POST['lastname']);
        echo $gender = mysqli_real_escape_string($connect, $_POST['gender']);
        echo $email = mysqli_real_escape_string($connect, $_POST['email']);
        echo $category = mysqli_real_escape_string($connect, $_POST['category']);
        echo $uid = mysqli_real_escape_string($connect, $_POST['uid']);
        echo $pin = mysqli_real_escape_string($connect, $_POST['pin']);
        echo $password = mysqli_real_escape_string($connect, md5($_POST['password']));

        $query = mysqli_query($connect,"SELECT * FROM student_table WHERE username = '$username' AND password = '$password' ");
        

        $count = mysqli_num_rows($query);


        if ($count === 1) {
            
            $_SESSION['fail_msg'] = 'user account already exist';
            
            header('location: user_signup.php');
        }
        else{

            $register = mysqli_query($connect, "INSERT INTO student_table(username,firstname,middlename,lastname,gender,email,category,uid,pid,password) VALUES('$username','$firstname','$middlename','$lastname','$gender','$email','$category','$uid','$pin','$password')");

            $_SESSION['success_msg'] = 'user account created successfully';

            header('location: login.php');
        }

        // $query = mysqli_query($connect, "SELECT * FROM student_table WHERE username = '$username' AND password = '$password' ");

        //     $_SESSION['gender'] = $gender;

        // $count = mysqli_num_rows($query);

        // if ($count === 1) {

        //     $_SESSION['fail_msg'] = "sorry account not created";
        //     header('location: user_signup.php');
        // }
        // else {
            
        //     $register = mysqli_query($connect,"INSERT INTO student_table(username,firstname,middlename,lastname,gender,email,category,uid,pin,password) VALUES('$username','$firstname','$middlename','$lastname','$gender','$email','$category','$uid','$pin','$password')");

        //     header('location: user_signup.php');
    
        // }
    }

?>
