<html>
<head>
    <title>Creative Multimedia Competition 2020</title>
</head>
<body>
    <?php
    //get input values from form
     extract($_POST);
    ?>
    <h3>Add Furniture</h3>
    <table>
        <tr><td>Furniture ID</td>
        <td>:</td>
        <td><b><?php print($furniture_id) ?></b></td>
        </tr>
        <tr><td>Furniture Name</td>
        <td>:</td>
        <td><b><?php print($furniture_name) ?></b></td>
        </tr>
        <tr><td>Furniture Type</td>
        <td>:</td>
        <td><b><?php print($furniture_type) ?></b></td>
        </tr>
        <tr><td>Furniture Amount</td>
        <td>:</td>
        <td><b><?php print($furniture_amount) ?></b></td>
        </tr>
        <tr><td>Staff ID</td>
        <td>:</td>
        <td><b><?php print($id) ?></b></td>
        </tr>
    </table>
    <?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "project_sad";

    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);

    // Check connection
    if ($conn->connect_error) {
     die("Connection failed: " . $conn->connect_error); }
    //create query
    $sql = "INSERT INTO furniture (furniture_id, furniture_name, furniture_type, furniture_amount, id) VALUES ('$furniture_id', '$furniture_name', '$furniture_type', '$furniture_amount', '$id')";
    //execute query
    if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
    }
    else {
    echo "Error: " . $sql . "<br>" . $conn->error;
    }
    //close connection
    $conn->close();
    ?> 
    <br><br>
    <a href="user_page.php"><button>Return</button></a>
</body>
</html>