<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Title -->
    <title>FCI @ UMS - Project Page</title>

    <!-- Favicon -->
    <link rel="icon" href="./img/faviconums.png">

    <!-- Stylesheet -->
    <link rel="stylesheet" href="style.css">


</head>

<body>
    <!-- Preloader -->
    <div id="preloader">
        <div class="loader"></div>
    </div>
    <!-- /Preloader -->

    <!-- Header Area Start -->
    <header class="header-area">
        <!-- Search Form -->
        <div class="search-form d-flex align-items-center">
            <div class="container">
                <form action="index.html" method="get">
                    <input type="search" name="search-form-input" id="searchFormInput" placeholder="Can we help you? ...">
                    <button type="submit"><i class="icon_search"></i></button>
                </form>
            </div>
        </div>

        <!-- Main Header Start -->
        <div class="main-header-area">
            <div class="classy-nav-container breakpoint-off">
                <div class="container">
                    <!-- Classy Menu -->
                    <nav class="classy-navbar justify-content-between" id="fciNav">

                        <!-- Logo -->
                        <a class="nav-brand" href="index.html"><img src="./img/core-img/logo.png" alt=""></a>

                        <!-- Navbar Toggler -->
                        <div class="classy-navbar-toggler">
                            <span class="navbarToggler"><span></span><span></span><span></span></span>
                        </div>

                        <!-- Menu -->
                        <div class="classy-menu">
                            <!-- Menu Close Button -->
                            <div class="classycloseIcon">
                                <div class="cross-wrap"><span class="top"></span><span class="bottom"></span></div>
                            </div>
                            <!-- Nav Start -->
                            <div class="classynav">
                                <ul id="nav">
                                    <li class="active"><a href="./index.html">Home</a></li>
                                    <li><a href="https://www.ums.edu.my/fki/en/about-us/profile">About Us</a></li>
                                    <li><a href="#">Student</a></li>
									<li><a href="#">Staff</a></li>
									<li><a href="#">Research</a></li>
                                    <li><a href="#">Download</a>
                                        <ul class="dropdown">
                                            <li><a href="#">- Academic Related</a></li>
                                            <li><a href="#">- Students Related</a></li>
                                            <li><a href="#">- Arriddle</a></li>                                
                                        </ul>
                                    </li>
                                    
                                    <li><a href="http://eoffice.ums.edu.my/e-respon/">Contact</a></li>
                                </ul>

                                <!-- Search -->
                                <div class="search-btn ml-4">
                                    <i class="fa fa-search" aria-hidden="true"></i>
                                </div>
                            </div>
                            <!-- Nav End -->
                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </header>
    <!-- Header Area End -->
    <body>
    <!--News Area-->
		 <?php
		$db_host = "localhost";
		$db_username = "admin";
		$db_pass = "fciums";
		$db_name = "fciums";
		$conn = mysqli_connect($db_host,$db_username,$db_pass,$db_name) or
		die ("could not connect to MySQL");


		$nTitle = $_POST['nTitle'];
		$nDesc = $_POST['nDesc'];
		$nID = $_POST['nID'];
		$nDate= $_POST['nDate'];

		$sql = "INSERT INTO news (newsID,news_Title,news_shortDesc,news_Date)
		VALUES('$nID','$nTitle','$nDesc','$nDate');";


		mysqli_query($conn, $sql);
        

		header("Location: ../index.php?add=success");

		?>
	<!-- News area end-->	

    
    <!-- **** All JS Files ***** -->
    <!-- jQuery 2.2.4 -->
    <script src="js/jquery.min.js"></script>
    <!-- Popper -->
    <script src="js/popper.min.js"></script>
    <!-- Bootstrap -->
    <script src="js/bootstrap.min.js"></script>
    <!-- All Plugins -->
    <script src="js/fci.bundle.js"></script>
    <!-- Active -->
    <script src="js/default-assets/active.js"></script>

</body>

</html>
