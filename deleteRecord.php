<html>
<head>
 <title>Delete Record</title>
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
 // sql to delete a record
 $sql = "DELETE FROM furniture WHERE furniture_id='$furniture_id'";
 if ($conn->query($sql) === TRUE) {
 echo "Record deleted successfully";
 }
 else {
 echo "Error deleting record: " . $conn->error;
 }
 //close connection
 $conn->close();

 echo '<p><a href="user_page.php"><button>Return</button></a></p>';
?>

</body>
</html>