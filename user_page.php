<?php

@include 'config.php';

session_start();

if(!isset($_SESSION['user_name'])){
   header('location:login.php');
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>user page</title>

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
    <div id="alertuser"></div>
    <div class="content">
      <h2><br>Add new Furniture</h2>
      <form id="mystaffform" method="post" action="add.php">
        <div class="form-group">
          <label for="id"><br>Staff ID</label>
          <input
            type="text"
            class="form-control"
            id="id"
            name="id"
            aria-describedby="emailHelp"
          />
        </div>
        <div class="form-group">
          <label for="furniture_id">Furniture ID</label>
          <input type="text" class="form-control" id="furniture_id" name="furniture_id" />
        </div>
        <div class="form-group">
          <label for="furniture_name">Furniture Name</label>
          <input type="text" class="form-control" id="furniture_name" name="furniture_name" />
        </div>
        <div class="form-group">
          <label for="furniture_type">Furniture Type</label>
          <div class="check-boxes my-3 mx-5">
            <div class="form-check p-2">
              <input
                class="form-check-input"
                type="radio"
                name="furniture_type"
                id="Table"
                value="Table"
              />
              <label class="form-check-label" for="Table"> Table </label>
            </div>
            <div class="form-check p-2">
              <input
                class="form-check-input"
                type="radio"
                name="furniture_type"
                id="Shelf"
                value="Shelf"
              />
              <label class="form-check-label" for="Shelf"> Shelf </label>
            </div>
            <div class="form-check p-2">
              <input
                class="form-check-input"
                type="radio"
                name="furniture_type"
                id="Chair"
                value="Chair"
              />
              <label class="form-check-label" for="Chair"> Chair </label>
            </div>
          </div>
        </div>
        <div class="form-group">
          <label for="furniture_amount">Furniture Amount</label>
          <input type="text" class="form-control" id="furniture_amount" name="furniture_amount" />
        </div>
        <button type="submit" class="btn btn-outline-dark">Add Furniture</button>
        </form>
        </div>
    </div>
    <div class="content">
      <br><br><hr class="solid">
      <br><br>
      <h3>Delete a Record</h3>
      <br>
      <form action="deleteRecord.php" method="post">
        Furniture ID : <input type="text" class="form-control" name="furniture_id" >
        <br>
        <button type="submit" class="btn btn-outline-dark">Delete</button>
      </form>
      <br><br><hr class="solid">
    </div>
    <div class="content">
      <br><br>
      <h3>Update a Record</h3>
      <br>
      <form action="updateRecord.php" method="post">
        Furniture ID : <input type="text" class="form-control" name="furniture_id" >
        <br>
        Furniture Amount : <input type="text" class="form-control" name="furniture_amount" >
        <br>
        <button type="submit" class="btn btn-outline-dark">Update</button>
      </form>
      <br><br><hr class="solid">
    </div>
    <div class="view">
      <br><br>
      <div class="content">
      <h3>Inventory List</h3>
      <br><br>
      </div>
    <table class="patch">
        <tr>
            <th>Furniture ID</th>
            <th>Furniture Name</th>
            <th>Furniture Type</th>
            <th>Furniture Amount</th>
            <th>Staff ID</th>
        </tr>
        <?php
            $sql = "SELECT * FROM furniture";
            $result = $conn->query($sql);
            while($rows=$result->fetch_assoc())
            {
        ?>
        <tr>
            <td style="text-align:center;"><?php echo $rows['furniture_id'];?></td>
            <td style="text-align:center;"><?php echo $rows['furniture_name'];?></td>
            <td style="text-align:center;"><?php echo $rows['furniture_type'];?></td>
            <td style="text-align:center;"><?php echo $rows['furniture_amount'];?></td>
            <td style="text-align:center;"><?php echo $rows['id'];?></td>
        </tr>
    </div>
        <?php
            }
        ?>

</body>
</html>