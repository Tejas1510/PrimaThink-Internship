<?php session_start();?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<title>Bootstrap Simple Login Form</title>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
<style>
.login-form {
    width: 340px;
    margin: 50px auto;
  	font-size: 15px;
}
.login-form form {
    margin-bottom: 15px;
    background: #f7f7f7;
    box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);
    padding: 30px;
}
.login-form h2 {
    margin: 0 0 15px;
}
.form-control, .btn {
    min-height: 38px;
    border-radius: 2px;
}
.btn {        
    font-size: 15px;
    font-weight: bold;
}
</style>
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
<?php
        $conn = mysqli_connect('localhost','root','','crudproject');
        if(isset($_POST['login-btn'])){
            $email= $_POST['email'];
            $password = $_POST['password'];

            $select = "SELECT * FROM user WHERE user_email='$email'";
            $run = mysqli_query($conn,$select);
            $row_user = mysqli_fetch_array($run);
            
            $user_email = $row_user['user_email'];
            $user_password = $row_user['user_password'];

            if($email == $user_email && $password == $user_password){
                echo "OK";
                echo "<script>window.open('home.php','_self')</script>";;
                $_SESSION['email'] =$user_email;
            }else{
                echo "Password or email is worng";
            }
        
        }

    ?>
<div class="login-form">
    <form action="" method="post">
        <h2 class="text-center">Log in</h2>       
        <div class="form-group">
            <input type="text" class="form-control" name="email" placeholder="Email" required="required">
        </div>
        <div class="form-group">
            <input type="password" class="form-control" name="password" placeholder="Password" required="required">
        </div>
        <div class="form-group">
            <input type="submit" name="login-btn" value="Login" class="btn btn-primary btn-block"/>
        </div>
    </form>
</div>
<div class="container-fluid pt-5" style="background: #232323;">
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