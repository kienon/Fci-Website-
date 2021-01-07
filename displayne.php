<!DOCTYPE html>
<html>
<head>
    <style>
        table, th, td {
        border: 0px solid black;
        }
    </style>
</head>
<body>
<h2>News and Events</h2>
<table align="center" border="1px" style="width:300px; line-height:30px;">
	
						<tr>
							<th>Post ID</th>
							<th>Title</th>
							<th>Type</th>
							<th>Description</th>
							<th>Published on</th>
							
						</tr>
					<?php 
						$conn = mysqli_connect("localhost", "admin", "fciums", "fciums");
							//check connection
							
							if ($conn->connect_error){
								die("Connection failed: " . $conn->connect_error);
							}
							
							$sql = " SELECT ID, Title, Type, short_Desc, published_On FROM newsandevent";
							$result = $conn->query ($sql);
							if($result->num_rows >0) {
								//output data of each rows
								
								while($row= $result->fetch_assoc()){
									echo "<tr> 
									<td>" . $row["ID"]. " </td>
									<td>" . $row["Title"]. " </td>
									<td>" . $row["Type"]. " </td>
									<td>" . $row["short_Desc"]. " </td>
									<td>" . $row["published_On"]. " </td>
								</tr>";}
								echo "</table>";
							} else { echo "0 results";}
							$conn->close();
					?>	
</body>
</html>