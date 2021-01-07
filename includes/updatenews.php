<?php
$db_host = "localhost";
$db_username = "admin";
$db_pass = "fciums";
$db_name = "fciums";
$conn = mysqli_connect($db_host,$db_username,$db_pass,$db_name) or
die ("could not connect to MySQL");

if(isset ($_POST['submit-update'])){
	
	
	$nTitle = $_POST['nTitle'];
	$nID = $_POST['nID'];
	$nDesc = $_POST['nDesc'];
	
	 
	$result= "UPDATE news SET news_Title='$nTitle',
	news_shortDesc='$nDesc' WHERE newsID='$nID'";
	if($conn->query($result)) {
		echo "<script type='text/javascript'>alert('Record updated successfully');
		location = '../index.php?update=success'</script>";
	}
	else{
		echo"<script type='text/javascript'>alert('Error updating record');
		locaton = '../news.php?update=failed'</script>";
	}
	
}

else{
	
	if(isset($_POST['submit-delete'])){
		$ni = mysqli_real_escape_string($conn, $_POST['nID']);
		$sql = "DELETE FROM news WHERE newsID='$ni';";
		$result = mysqli_query($conn, $sql);
		if($result > 0)
			echo "<script type='text/javascript'>alert('Record deleted successfully');
			location = '../index.php?delete=success'</script>";
	else
		echo "<script type='text/javascript'alert('Error deleting record');
		location = '../news.php?delete=failed'<script>";
	}
	
}

?>