<?php 
 session_start();
 $conn = mysqli_connect('localhost','root','','crudproject');
 if(!isset($_SESSION['email'])){
     echo "<script>window.open('login.php','_self')</script>";
 }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" crossorigin="anonymous">
    <link rel="stylesheet" href="./css/main-style.css">
    <link rel="stylesheet" href="./css/home.css">
    <link rel="stylesheet" href="./css/style.css">
    <title>PrimaThink Task 1</title>
</head>
<body>
    <!-- Navabr code will come here -->
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

    <!-- Header Code -->
    <header class="jumbotron">
        <div class="container" style="width: 100;">
            <div class="row">
                <div class="col-12 col-sm-7">
                    <h1 class="headerHeading">Digital Marketing &amp; Web Development Company</h1>
                    <p class="headerPara">We are Full-Stack Digital Transformation Company. As a&nbsp;Digital Marketing Company, we are&nbsp;offering Digital Marketing, Web Development &amp; Digital Transformation Consulting. We have experts who are result oriented in building online brand presence.<br> ✓ Strategic Brand Consulting ✓ Design &amp; Strategic Marketing Agency<br> ✓ Grow Your Business ✓ ROI Driven Performance ✓ Certified Experts</p>
                    <div class="row">
                        <div class="col-12 col-sm-6  col-md-3 mb-4">
                            <img src="./Images/headerFeature1.png" style="width:100%" >
                        </div>
                        <div class="col-12 col-sm-6  col-md-3 mb-4">
                            <img src="./Images/headerFeature2.png" style="width:100%">
                        </div>
                        <div class="col-12 col-sm-6  col-md-3 mb-4">
                            <img src="./Images/headerFeature3.png" style="width:100%">
                        </div>
                        <div class="col-12 col-sm-6  col-md-3 mb-4">
                            <img src="./Images/headerFeature4.png" style="width:100%">
                        </div>
                    </div>
                </div>
                <div class="col-sm-1">

                </div>
                <div class="col-12 col-sm-4 align-self-center">
                    <img src="./Images/headerImage.png" class="img-fluid">
                </div>
            </div>
        </div>
    </header>
    <div class="container mt-5 mb-5 secondContainer">
        <div class="row">
            <div class="col-12 col-sm-6">
                <h1 class="headerHeading">Our Trademarked<br>
                    Process & Workflow.</h1>
                <p class="headerPara">Full-Stack Development is the need of the world, we understand and believe in <b> Digital Transformation.</b> We provide the best solutions, consultations for <b>Digital Marketing and Full-Stack Web Development.</b></p>
            </div>
            <div class="col-12 col-sm-6">
                <p class="headerPara">Our approach and experience in all aspects of <b>Website Development And Designing</b>, assisting our potential clients reaching out their requirements. <b>Building Up Your Business Online</b> and interactive presence, sell more and find more leads.</p> 
                <button type="button" class="btn btn-primary-1 mt-2">Web Development Services</button>
            </div>
        </div>
        <div class="row mt-5">
            <div class="col-12 col-sm-3 mt-5 mt-sm-0">
                <center><img src="./Images/icon1.png"></center>
                <center><h5 class="pt-4 pb-1">Project Research</h5></center>
                <center><p>Project is a process of producing an unusual result.</p></center>
            </div>
            <div class="col-12 col-sm-3 mt-5 mt-sm-0">
                <center><img src="./Images/icon2.png"></center>
                <center><h5 class="pt-4 pb-1">Wireframes</h5></center>
                <center><p>A wireframe is a visual representation of a user interface.</p></center>
            </div>
            <div class="col-12 col-sm-3 mt-5 mt-sm-0">
                <center><img src="./Images/icon3.png"></center>
                <center><h5 class="pt-4 pb-1">Design</h5></center>
                <center><p>Designing Stuff that Shines you Enhance your business</p></center>
            </div>
            <div class="col-12 col-sm-3 mt-5 mt-sm-0">
                <center><img src="./Images/icon4.png"></center>
                <center><h5 class="pt-4 pb-1">Development</h5></center>
                <center><p>The goal isn’t to build a website. The goal is to build your business.</p></center>
            </div>
        </div>
    </div>
    <div class="container mb-5" style="margin-top: 100px;">
        <div class="row">
            <div class="col-12 col-sm-6">
                <h1 class="headerHeading">Full Stack Digital Marketing</h1>
                <p class="headerPara">Understanding the Digital Transformation its need globally we devote ourselves towards the best Software solutions and <b>Digital Marketing strategy solutions</b>. We highly work for the success of our clients by serving them with the complete <b>Digital Transformation Consultations</b> Services and Solutions. As we are the Full Stack Digital Transformation Company.</p>
                <p class="headerPara">The world needs Promotion, awareness and leads for their brands this ultimately brings up the Sales. Moving along with technology for Sales Digital Marketing is the Best Solution. However, we present and provide not only Digital Marketing Results, but we build a reliable <b>Full Stack Digital Marketing Services and Consultation</b> from the roots of your Business.</p>
                <button type="button" class="btn btn-primary-1 mt-2">Digital Marketing Services</button>
            </div>
            <div class="col-12 col-sm-6 mt-5 mt-sm-0">
                <img src="./Images/digitalmarketing.png" style="width: 100%;">
            </div>
        </div>
        <div class="row mt-5">
            <div class="col-12 col-sm-4">
                <img src="./Images/icon1.png">
                <span class="pt-4 pb-1 pl-3" style="font-weight: bold;font-size: 17px;">SEO</span>
                <p  style="padding-left: 52px;">SEO is Fuel for a local Small Scale business.</p>
            </div>
            <div class="col-12 col-sm-4">
                <img src="./Images/icon2.png">
                <span class="pt-4 pb-1 pl-3" style="font-weight: bold;font-size: 17px;">Social Media</span>
                <p style="padding-left: 52px;">Creating Brand needs General Impression On Social Media.</p>
            </div>
            <div class="col-12 col-sm-4">
                <img src="./Images/icon3.png">
                <span class="pt-4 pb-1 pl-3" style="font-weight: bold;font-size: 17px;">Paid Ads</span>
                <p style="padding-left: 52px;">Paid Advertising Gives You Immediate Leads & Online Presence. </p>
            </div>
        </div>
        <div class="row mt-sm-5 mt-0">
            <div class="col-12 col-sm-4">
                <img src="./Images/icon4.png">
                <span class="pt-4 pb-1 pl-3"  style="font-weight: bold;font-size: 17px;">Website Development</span>
                <p style="padding-left: 52px;">A website is one of the most crucial factors While Building Online Presence.</p>
            </div>
            <div class="col-12 col-sm-4">
                <img src="./Images/icon4.png">
                <span class="pt-4 pb-1 pl-3" style="font-weight: bold;font-size: 17px;">	
                    E-Commerce</span>
                <p style="padding-left: 52px;">Manage the business and make transactions by an online shop.</p>
            </div>
            <div class="col-12 col-sm-4">
                <img src="./Images/icon4.png">
                <span class="pt-4 pb-1 pl-3" style="font-weight: bold;font-size: 17px;">Maintenance</span>
                <p style="padding-left: 52px;">An powerful business website requiresregular carrying.</p>
            </div>
        </div>
    </div>
    <div class="container mb-5" style="margin-top: 100px;">
        <div class="row">
            <div class="col-12">
               <center> <h1 class="headerHeading display-1">Trusted by Brands Worldwide</h1></center>
               <center><p class="headerPara pt-2" ><b>“Vasudhaiva Kutumbakam”</b> this means <b>"the world is one family"</b> We believe in Serving and value our Clients with their full fledge Requirements. For us, all our Clients are our Family, the reason for which we have a valuable and boundless Clients from multiple Sectors, at a local and global scale.</p></center>
            </div>
            <div class="col-12 col-sm-6 mt-4 ">
                <img src="./Images/image1.png" style="width:100%">
            </div>
            <div class="col-12 col-sm-6 mt-4">
                <img src="./Images/image2.png" style="width:100%">
            </div>
            <div class="col-12 col-sm-6 mt-4">
                <img src="./Images/image3.png" style="width:100%">
            </div>
            <div class="col-12 col-sm-6 mt-4">
                <img src="./Images/image4.png" style="width:100%">
            </div>
            <div class="col-12 col-sm-6 mt-4">
                <img src="./Images/image5.png" style="width:100%">
            </div>
            <div class="col-12 col-sm-6 mt-4">
                <img src="./Images/image6.png" style="width:100%">
            </div>
        </div>
    </div>
    <!-- Footer Section -->
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
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>