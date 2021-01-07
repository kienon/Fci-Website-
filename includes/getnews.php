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


    <!--News Area-->
    <div>
    <pre>
    <?php
      error_reporting(-1); 
  ini_set('display_errors', true);
    $conn = mysqli_connect("localhost", "admin", "fciums", "fciums");
                            //check connection
                            
    if ($conn->connect_error){
                   die("Connection failed: " . $conn->connect_error);
                            }
    if(isset($_POST['submit-search'])){
        $search = mysqli_real_escape_string($conn, $_POST['search']);
        $sql = "SELECT * FROM news WHERE newsID='$search';";
        $result = mysqli_query($conn, $sql);
        $resultCheck= mysqli_num_rows($result);
        
        if($resultCheck > 0){
            $row = mysqli_fetch_assoc($result);
            
            $nt = $row['news_Title'];
            $ni = $row['newsID'];
            $nd = $row['news_Date'];
            $nsd = $row['news_shortDesc'];
            
            echo "<h2 align='center'> News Details </h2>";
            echo "<form action='updatenews.php' method='POST'>";
            
			echo "News ID    : <input type = 'text' value={$ni} name='nID' readonly><br>";    
            echo "News Title : <input type = 'text' value={$nt} name='nTitle'><br>";

            
            echo "Description: <textarea onkeyup='resizeTextarea('InputTextArea')'  type = 'text' value={$nsd} name='nDesc' rows='4' cols='28'> </textarea><br>";
                  
            echo "<button class='btn btn-primary' type = 'submit' name = 'submit-update'>Update News</button> ";
            echo "<button class='btn btn-primary' type = 'submit' name = 'submit-delete'>Delete News</button>";
            echo "</form>";
            
        }else{
            echo "<script type ='text/javascript'>alert('There are no result matching your search');
            location = '../news.php?search=failed'</script>";
        }
    }

?></pre></div>
         
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
