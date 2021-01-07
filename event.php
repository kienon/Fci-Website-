<?php
session_start();
include("config.php");
$db_handle = new DBController();
?>
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
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

    <style>
    	body {
            background-color: rgba(250,252,245,0.9);
            backface-visibility: 20%;
            font-size: 19px;
        }
        table{
            width: 50%;
            margin: 30px auto;
            border-collapse: collapse;
            text-align: left;
        }
        tr {
            border-bottom: 1px solid #cbcbcb;
        }
        th, td{
            border: none;
            height: 30px;
            padding: 2px;
        }
        tr:hover {
            background: #F5F5F5;
        }

        form {
            width: 45%;
            margin: 50px auto;
            text-align: left;
            padding: 20px; 
            border: 1px solid #bbbbbb; 
            border-radius: 5px;
            box-shadow: 0px 6px 10px 4px grey !important;
        }

        .input-group {
            margin: 10px 0px 10px 0px;
        }
        .input-group label {
            display: block;
            text-align: left;
            margin: 3px;
        }
        .input-group input {
            height: 30px;
            width: 93%;
            padding: 5px 10px;
            font-size: 16px;
            border-radius: 5px;
            border: 1px solid gray;
        }
        .btn {
            padding: 10px;
            font-size: 15px;
            color: white;
            background: #5F9EA0;
            border: none;
            border-radius: 5px;
        }
        .edit_btn {
            text-decoration: none;
            padding: 2px 5px;
            background: #2E8B57;
            color: white;
            border-radius: 3px;
        }

        .del_btn {
            text-decoration: none;
            padding: 2px 5px;
            color: white;
            border-radius: 3px;
            background: #800000;
        }
        .msg {
            margin: 30px auto; 
            padding: 10px; 
            border-radius: 5px; 
            color: #3c763d; 
            background: #dff0d8; 
            border: 1px solid #3c763d;
            width: 50%;
            text-align: center;
        }
    </style>

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

        <!-- Main Header Start -->
        <div class="main-header-area">
            <div class="classy-nav-container breakpoint-off">
                <div class="container">
                    <!-- Classy Menu -->
                    <nav class="classy-navbar justify-content-between" id="fciNav">

                        <!-- Logo -->
                        <a class="nav-brand" href="index.php"><img src="./img/core-img/logo.png" alt=""></a>

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
                                    <li class="active"><a href="./index.php">Home</a></li>
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
                                    <li>
                                        <?php
                                        if(isset($_SESSION["UID"])){
                                        ?>
                                            <a href="logout.php">Logout</a></p>
                                        <?php
                                        }
                                        else{
                                        ?>
                                            <a href="login.html">Login</a></p>
                                        <?php
                                        }
                                        ?>
                                    </li>
                                </ul>

                                
                            </div>
                            <!-- Nav End -->
                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </header>
    <!-- Header Area End -->

    
    <!--Event Area-->
    
		<hr>
		<div class="container form">	
		<h2 align="center" >Event Management System</h2>
		<form action="includes/addevent.php" method="POST">
		<div class="row">
			<div class="form-group col-sm-6">
				<label for="notitle">Event Name:</label>
				<input class="form-control" type = "text" placeholder="Event name" name="eName" required>
			</div>
			<div class="form-group col-sm-6">
				<label for="nodate">Date: </label>
				Date: <input class="form-control" type= "date" name="eDate"> </br>
			</div>
		</div>
			<div class="form-group">
				<label for="nodesc">Description:</label>
				<textarea class="form-control" rows="4" cols="100" type = "text" placeholder="Description" name="eDesc"> </textarea>
			</div>		

		<button class="btn btn-primary" type = "submit" name = "submit">Add Event</button> <br><br><br>
		</form>
		</div>

		<div class="row">
		<form action="includes/getevent.php" method="POST">
            <h2 class="search-event-name">Search Event</h2>
			<div class="form-group col-sm-6">
				<label for="noID">Post ID</label>
				<input class="id-search" type = "text" placeholder="ID" name="search">
			</div>
		<button class="btn btn-primary" type= "submit" name = "submit-search">Search Event </button>
		</form>
	</div>
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
