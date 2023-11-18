<?php

@include 'config.php';

session_start();

if(!isset($_SESSION['admin_name'])){
   header('location:login.php');
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>admin page</title>

   <!-- custom css file link  -->
   <link rel="stylesheet" href="style2.css">
   <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css"
      integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn"
      crossorigin="anonymous"
    />
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
      <img src="ims-logo.png" width="50" height="50">
      <a class="navbar-brand" href="#">Inventory Management System</a>
      <button
        class="navbar-toggler"
        type="button"
        data-toggle="collapse"
        data-target="#navbarSupportedContent"
        aria-controls="navbarSupportedContent"
        aria-expanded="false"
        aria-label="Toggle navigation"
      >
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item active">
            <a class="nav-link" href="#" style="color:violet;"
              >&nbsp&nbsp Home <span class="sr-only">(current)</span></a
            >
          </li>
          <li>
            <a style="color:yellow;" href="logout.php" class="btn">Logout</a>
          </li>
        </ul>
      </div>
    </nav>

    <div class="content">
      <br><br><br>
      <form action="viewFurniture.php" method="post">
      <p><input type="submit" value="View Record" name="cmdView" class="btn btn-outline-dark"></p>
      </form>

      <table class="patch">
        <tr>
            <th>Staff ID</th>
            <th>Staff Name</th>
            <th>Staff Email</th>
        </tr>
        <?php
            $sql = "SELECT * FROM user WHERE user_type='user'";
            $result = $conn->query($sql);
            while($rows=$result->fetch_assoc())
            {
        ?>
        <tr>
            <td style="text-align:center;"><?php echo $rows['id'];?></td>
            <td style="text-align:center;"><?php echo $rows['name'];?></td>
            <td style="text-align:center;"><?php echo $rows['email'];?></td>
        </tr>
    </div>
        <?php
            }
        ?>

        <br><br><hr class="solid"><br><br>
        <h3>Delete Staff</h3>
        <br><br>
      <form action="deleteStaff.php" method="post">
        Staff ID : <input type="text" class="form-control" name="id" >
        <br>
        <button type="submit" class="btn btn-outline-dark">Delete</button>
      </form>
      <br><br><hr class="solid">
      <br><br>
        <h3>Staff List</h3>
      <br><br>
    </div>

</body>
</html>