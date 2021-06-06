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
    <link rel="stylesheet" href="./css/add_user.css">
    <link rel="stylesheet" href="./css/main-style.css">
    <link rel="stylesheet" href="./css/home.css">
    <link rel="stylesheet" href="./css/style.css">
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
    <div class="container mainContainer mt-5">
        <form action="" method="post" enctype="multipart/form-data">
            <h2 style="text-align:center" class="pb-2">CREATE USER</h2>
            <div class="form-group">
                <label for="exampleInputEmail1">Name</label>
                <input type="text" class="form-control" id="exampleInputEmail1" name = "user_name">
                <small id="emailHelp" class="form-text text-muted">Provide your full Name</small>
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Email address</label>
                <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name = "user_email">
                <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">Password</label>
                <input type="password" class="form-control" id="exampleInputPassword1" name = "user_password">
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">Image</label>
                <input type="file" class="form-control" id="exampleInputPassword1" name = "user_image">
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">Details</label>
                <textarea type="text" class="form-control" id="exampleInputPassword1" name = "user_details"></textarea>
            </div>
            <input type="submit" name="insert-btn" class="btn btn-primary" />
        </form>
    </div>
    <?php

    $conn = mysqli_connect('localhost','root','','crudproject');
    // if(mysqli_connect_errno()){
    //     echo "connection fail";
    // }else{
    //     echo "Connection OK";
    // }

    if(isset($_POST['insert-btn'])){
        $user_name = $_POST['user_name'];
        $user_email = $_POST['user_email'];
        $user_password = $_POST['user_password'];
        $image = $_FILES['user_image']['name'];
        $tmp_name = $_FILES['user_image']['tmp_name'];
        $user_details = $_POST['user_details'];

        $insert = "INSERT INTO user(user_name,user_email,user_password,user_image,user_details) VALUES(
            '$user_name','$user_email','$user_password','$image','$user_details'
        )";

        $run_insert = mysqli_query($conn,$insert);

        if($run_insert === true){
            echo"data sent";
            move_uploaded_file($tmp_name,"upload/$image");
        }
        else{
            echo"Data not sent Try Again";
        }
    }
    ?>
    <div class="container-fluid pt-5 mt-5" style="background: #232323;">
      <div class="row">
          <div class="col-12 col-sm-3 mt-2 mt-sm-0">
              
              <ul class="text-white foot" style="border: none;list-style: none;text-decoration: none;">
                  <H5>SERVICES</H5>
                  <li style="font-weight: bold;"><a href="">Software Development Services</a></li>
                  <li style="font-weight: bold;" ><a href="">Web Development Services</a></li>
                  <li style="font-weight: bold;" ><a href="">Social Media Marketing</a></li>
                  <li style="font-weight: bold;" ><a href="">SEO Services</a></li>
                  <li style="font-weight: bold;" ><a href="">Local SEO Services</a></li>
              </ul>
          </div>

          <div class="col-12 col-sm-3 mt-5 mt-sm-0">
              
            <ul class="text-white foot" style="border: none;list-style: none;text-decoration: none;">
                <H5>PRIMATHINK</H5>
                <li style="font-weight: bold;" ><a href="">About PrimaThink</a></li>
                <li style="font-weight: bold;" ><a href="">Digital Consultancy</a></li>
                <li style="font-weight: bold;" ><a href="">Career</a></li>
                <li style="font-weight: bold;" ><a href="">Internship</a></li>
                <li style="font-weight: bold;" ><a href="">Blog</a></li>
            </ul>
          </div>

        <div class="col-12 col-sm-3 mt-5 mt-sm-0">
              
            <ul class="text-white foot" style="border: none;list-style: none;text-decoration: none;">
                <H5>TRAINING</H5>
                <li style="font-weight: bold;" ><a href="">Digital Marketing Training</a></li>
                <li style="font-weight: bold;" ><a href="">PHP Training</a></li>
                <li style="font-weight: bold;" ><a href="">React JS Training</a></li>
                <li style="font-weight: bold;" ><a href="">Python Classes</a></li>
                <li style="font-weight: bold;" ><a href="">Wordpress Training Course</a></li>
            </ul>
        </div>

        <div class="col-12 col-sm-3 text-white mt-5 mt-sm-0">
            <img src="https://primathink.com/wp-content/uploads/2019/11/PrimaThink-Logo-W-300x39.png" alt="" width="80%">
            <br><br>
            <p>PRIMATHINK is the solution to your each and every query regarding your online presence digitally with our full-stack digital marketing and transformation services.</p>
            <br>
            <h6>ADDRESS</h6>
            <p>C/O: Thakur, Chintamani Colony, Near Gajanan Maharaj Temple Shrihari Nagar, Arjun Nagar, Amravati (444602), Maharashtra – 9890544466</p>
        
        </div>
      </div>

  </div>

  <footer class="footer pt-2 pb-2" style="background: #141414;">
    <div class="container">
     <center><span class="text-white mt-2 " style="align-items: center;">© 2021 PrimaThink Technologies Private Limited</span></center> 
       
      <p>
    
    </div>
  </footer>
</body>
</html>