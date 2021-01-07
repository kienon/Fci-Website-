<?php
$db_host = "localhost";
$db_username = "admin";
$db_pass = "fciums";
$db_name = "fciums";
$conn = mysqli_connect($db_host,$db_username,$db_pass,$db_name) or die ("could not connect to MySQL");

if(isset ($_POST['submit-update'])){
	
	$ei= mysqli_real_escape_string($conn, $_POST['eID']);
	$en = mysqli_real_escape_string($conn, $_POST['eName']);
	$esd = mysqli_real_escape_string($conn, $_POST['eDesc']);
	
	
	$sql = "UPDATE event SET eventName='$en',event_Desc='$esd' WHERE eventID='$ei';";
	$result = mysqli_query ($conn, $sql);
	
	 if($result > 0){
		 echo "<script type = 'text/javascript'>alert('Record updated successfully');
		 location= '../index.php?update=success'</script>";
	 }
	 else{
		 echo "<script type = 'text/javascript'>alert('Error updating record');
		 location= '../event.php?update=failed'</script>";
	 }
	 
	 }
	


else{
	
	if(isset($_POST['submit-delete'])){
		$ei = mysqli_real_escape_string($conn,$_POST['eID']);
		$sql = "DELETE FROM event WHERE eventID='$ei';";
		$result = mysqli_query($conn, $sql);
		if($result > 0)
			echo "<script type='text/javascript'>alert('Record deleted successfully');
			location = '../index.php?delete=success'</script>";
			
			
	else
		echo "<script type='text/javascript'alert('Error deleting record');
		location = '../event.php?delete=failed'<script>";
	}
	
}

?>