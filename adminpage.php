<?php
session_start();
include("config.php");
$db_handle = new DBController();
?>
<!DOCTYPE html>
<html>
<head>
	<title>Home</title>
	    <!-- Favicon -->
    <link rel="icon" href="./img/faviconums.png">
	<link rel="stylesheet" type="text/css" href="style.css">
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
#user_type {
	height: 40px;
	width: 98%;
	padding: 5px 10px;
	background: white;
	font-size: 16px;
	border-radius: 5px;
	border: 1px solid gray;
}
.error {
	width: 92%; 
	margin: 0px auto; 
	padding: 10px; 
	border: 1px solid #a94442; 
	color: #a94442; 
	background: #f2dede; 
	border-radius: 5px; 
	text-align: left;
}
.success {
	color: #3c763d; 
	background: #dff0d8; 
	border: 1px solid #3c763d;
	margin-bottom: 20px;
}


.profile_info div {
	display: inline-block; 
	margin: 5px;
}
.profile_info:after {
	content: "";
	display: block;
	clear: both;
}
	</style>
</head>
<body>

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

	<div class="content">
		<!-- notification message -->
		<?php if (isset($_SESSION['success'])) : ?>
			<div class="error success" >
				<h3>
					<?php 
						echo $_SESSION['success']; 
						unset($_SESSION['success']);
					?>
				</h3>
			</div>
		<?php endif ?>
		<!-- logged in user information -->
		<div class="profile_info">

			<div>
				<?php  if (isset($_SESSION['user'])) : ?>
					<strong><?php echo $_SESSION['user']['username']; ?></strong>

					<small>
						<i  style="color: #888;">(<?php echo ucfirst($_SESSION['user']['user_type']); ?>)</i> 
						<br>
						<a href="index.php?logout='1'" style="color: red;">logout</a>
					</small>

				<?php endif ?>
			</div>
		</div>
			<h2 align="center">Hello Admin</h2>
		<form>
		<div class="row" style="text-align: center;">
			<div class="form-group col-sm-6">
				<a href="event.php">
				<input align="center" class="btn btn-primary" type="button" value="Manage Event">
				</a>
			</div>
			<div class="form-group col-sm-6">
				<a href="news.php">
				<input align="center" class="btn btn-primary" type = "button" value="Manage News">
				</a>
			</div>
		</div>
	   </form>	
	</div>
</body>
</html>