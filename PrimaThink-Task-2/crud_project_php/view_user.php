<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="./css/view_user.css">
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light bg-white p-4">
        <div class="container">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon "><span class="d-inline"></span></span>
        </button>
        <span class="navbar-brand" href="#">
            <img src="https://primathink.com/wp-content/uploads/2020/05/primathink-logo-with-mask.png" class="float-right d-inline"  alt="" width="80%">
        </span>
        <div class="collapse navbar-collapse " id="navbarNav">
          <ul class="navbar-nav ml-auto mr-3" style="font-size: 20px;">
            <li class="nav-item active">
              <a class="nav-link" href="home.php">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="add_user.php">Add Resources</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="view_user.php">View Resources</a>
            </li>

              <li class="nav-item">
                <a class="btn btn-primary ml-sm-5 ml-0"  href="logout.php">Logout</a>
              </li>
          </ul>
        </div>
        </div>
    </nav>
    <div class="container mt-2 mb-5">
    <?php
        $conn = mysqli_connect('localhost','root','','crudproject');
        if(isset($_GET['del'])){
             $del_id= $_GET['del'];
             $delete = "DELETE from user where user_id='$del_id'";
            $run_delete = mysqli_query($conn,$delete);
        }
        ?>
        <h2 style="text-align:center"><span style="color:rgb(255, 90, 110)">DEV </span>Resources List</h2>
        <div class="mb-5">
            <p style="text-align:center;pb-5">A curated list of resources for developers accross the globe to get started with their developement Journey</p>
        </div>

        <?php 
        $conn = mysqli_connect('localhost','root','','crudproject');
        $select = "SELECT * FROM user";

        $run = mysqli_query($conn,$select);
        while($row_user = mysqli_fetch_array($run)){
        
        $user_id = $row_user['user_id'];
        $user_name = $row_user['user_name'];
        $user_email = $row_user['user_email'];
        $user_password = $row_user['user_password'];
        $user_image = $row_user['user_image'];
        $user_details = $row_user['user_details'];
        ?>
        <div class="grid-container">
            <div class="card" style="min-width:350px; max-width:350px;box-shadow: 0 14px 28px rgba(0,0,0,0.25), 0 10px 10px rgba(0,0,0,0.22);">
                <img class="card-img-top" src="upload/<?php echo $user_image;?>" alt="Card image" style="min-height:220px;max-height:220px">
                <div class="card-body">
                    <h4 class="card-title"><?php echo $user_name; ?></h4>
                    <h6 class="card-title"><?php echo $user_email; ?></h4>
                    <p class="card-text"><?php echo $user_details; ?></p>
                    <a class="btn btn-primary" href="edit_user.php?edit=<?php echo $user_id;?>" >Edit</a>
                     <a href="view_user.php?del=<?php echo $user_id;?>" class="btn btn-secondary ml-2" style="color:white">Delete</a>
                </div>
            </div>
            <?php }?>
        </div>
    </div>
</body>
</html>