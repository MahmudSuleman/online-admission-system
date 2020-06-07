
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- css files -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="fontawesome/css/all.min.css">
    <link rel="stylesheet" href="css/style.css">
    
    
    

    <title>uds home</title>
</head>
<body>
    
    <!-- all container -->
    <div class="main_container">
        <header>
            <div class="main_header_bg">

                <!-- logo -->
                <div class="logo">
                    <a href="index.php">
                        <img src="img/logo.png" alt="">
                    </a>
                </div>

                <!-- toggle button -->
                <div class="toggle_btn">
                    <i class="fa fa-bars toggle-bar" aria-hidden="true"></i>
                </div>

                <nav class="items">
                    <ul>
                        <li><a href="#home">home</a></li>
                        <li><a href="#campus">campuses</a></li>
                        <li><a href="#about">about us</a></li>
                        <li><a href="#contact">contact us</a></li>
                        <li><a href="user/login.php">login</a></li>
                    </ul>
                </nav>
            </div>
        </header>

        <section id="home" class="home"></section>
        <section id="campus" class="campus"></section>
        <section id="about" class="about"></section>
        <section id="contact" class="contact"></section>
    </div>

    <!-- footer -->
    <?php include_once 'footer.php'; ?>

    <!-- js files -->
    <script src="js/jquery-3.4.1.slim.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery-3.4.1.min.js"></script>
    <script src="js/main.js"></script>

    
    <!-- media query css file -->
    <link rel="stylesheet" href="css/media_query.css">
</body>
</html>