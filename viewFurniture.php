<html>
<head>
 <title>Report </title>
</head>
<body>
 <h3 align="center">Report</h3>
<?php
 

 //create and execute query
 $conn = mysqli_connect('localhost','root','','project_sad');
 if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
  }
 $sql = "SELECT * FROM furniture";
 $result= mysqli_query($conn,$sql );

 //check if records were returned
 if ($result->num_rows > 0) {
 //create a table to display the record
 echo '<table cellpadding=10 cellspacing=0 border=1 align="center">';
 echo '<tr><td align="center"><b>furniture ID</b></td>
 <td align="center"><b>Furniture Name</b></td>
 <td align="center"><b>Furniture Type</b></td>
 <td align="center"><b>Furniture Amount</b></td>
 <td align="center"><b>Staff ID</b></td></tr>';

 // output data of each row
 while($row = $result->fetch_assoc()) {
 echo '<tr>';
 echo '<td align="center">'.$row["furniture_id"].'</td>';
 echo '<td align="center">'.$row["furniture_name"].'</td>';
 echo '<td align="center">'.$row["furniture_type"].'</td>';
 echo '<td align="center">'.$row["furniture_amount"].'</td>';
 echo '<td align="center">'.$row["id"].'</td>';
 echo '</tr>';
 }
 }
 else 
 {
 echo "0 results"; //if no record found in the database
 }

 
 
 //close connection
 $conn->close();
 echo '<p><a href="admin_page.php">Back to Main Menu</a></p>';
?>
</table> <!-- Close the table tag -->
<br>

<div >
  <form style="text-align: center;" action="pdf.php" >
    <button type="submit" name="pdf_creater" >PRINT</button>
  </form>
</div>


</body>
</html>