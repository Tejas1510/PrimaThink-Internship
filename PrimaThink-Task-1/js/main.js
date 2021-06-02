let header = $(`
<nav class="navbar navbar-expand-lg navbar-light bg-white p-4">
        <a class="navbar-brand ml-5" href="#">
            <img src="https://primathink.com/wp-content/uploads/2020/05/primathink-logo-with-mask.png" alt="" width="80%">
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse " id="navbarNav">
          <ul class="navbar-nav ml-auto mr-3" style="font-size: 20px;">
            <li class="nav-item active">
              <a class="nav-link" href="/index.html">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="./aboutus.html">About Us</a>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  Services
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                  <a class="dropdown-item" href="./SMMServices.html">SMM Services</a>
                  <a class="dropdown-item" href="./SEOServices.html">SEO Services</a>
                  <a class="dropdown-item" href="./PPCServices.html">PPC Services</a>
                  <a class="dropdown-item" href="./WEbDevelopmentServices.html">Web Development</a>
                  <a class="dropdown-item" href="./local-seo-services.html">Local Seo Services</a>
                </div>
              </li>

              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  Career
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                  <a class="dropdown-item" href="./SMMServices.html">Recruitments</a>
                  <a class="dropdown-item" href="./internship-in-amravati.html">Internship in Amravati</a>
                  <a class="dropdown-item" href="./internship-in-nagpur.html">Internship in Nagpur</a>
                </div>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="./contact.html">Contact</a>
              </li>
          </ul>
        </div>
    </nav>
`);

let footer = $(`
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

`);
let bodyElement = $(`body`);
bodyElement.prepend(header);
bodyElement.append(footer);