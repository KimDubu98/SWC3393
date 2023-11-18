<html>
<head>
 <title>Update Record</title>
 <style>
    body {
        text-align:center;
    }
</style>
</head>
<body>
<?php
 $servername = "localhost";
 $username = "root";
 $password = "";
 $dbname = "project_sad";
 // Create connection
 $conn = new mysqli($servername, $username, $password, $dbname);

 // Check connection
 if ($conn->connect_error) {
 die("Connection failed: " . $conn->connect_error);
 }
 //get input value
 $furniture_id=$_POST['furniture_id'];
 $furniture_amount=$_POST['furniture_amount'];
 // sql to update a record
 $sql = "UPDATE furniture SET furniture_amount='$furniture_amount' WHERE furniture_id='$furniture_id'";
 if ($conn->query($sql) === TRUE) {
 echo "Record updated successfully";
 }
 else {
 echo "Error updating record: " . $conn->error;
 }
 //close connection
 $conn->close();

 echo '<p><a href="user_page.php"><button>Return</button></a></p>';
?>

</body>
</html>