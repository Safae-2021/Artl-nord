<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>ARTL NORD</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Free HTML Templates" name="keywords">
    <meta content="Free HTML Templates" name="description">

    <!-- Favicon -->
    <link href="img/logo.jpg" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">

    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/style.css" rel="stylesheet">
   
 <!-- Style CSS -->
 <link rel="stylesheet" href="css/multimenustyle.css">

 <!-- Demo CSS -->
 <link rel="stylesheet" href="css/multimenu.css">

   <!-- Bootstrap 5 CSS -->
   {{-- <link rel='stylesheet' href='https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css'> --}}
   

  
</head>

<body>
 <!-- Topbar Start bg-dark -->
 <div class="container-fluid  topbar-start">
    <div class="row py-2 px-lg-5">
        <div class="col-lg-6 text-center text-lg-left mb-2 mb-lg-0">
            <div class="d-inline-flex align-items-center text-white">
                <small>Français</small>
                <small class="px-3">|</small>
                <small>Arabe</small>
            </div>
        </div>
        <div class="col-lg-6 text-center text-lg-right">
            <div class="d-inline-flex align-items-center">
                <a class="text-white px-2" href="">
                   Login
                </a>
                <small class="px-3">|</small>
                <a class="text-white px-2" href="">
                   Espace Client
                </a>
                <a class="text-white px-2" href="">
                   
                    <i class="fa fa-basket"></i>
                </a>

             
            </div>

        </div>
    </div>
</div>
<!-- Topbar End -->


<div class="navbar">
 
  <!-- Navbar logo -->
  <div class="nav-header">
    <div class="nav-logo">
      <a href="#">
        <img src="logo.png" width="100px" alt="logo">
      </a>
    </div>
  </div>

  <!-- responsive navbar toggle button -->
  <input type="checkbox" id="nav-check">
  <div class="nav-btn">
    <label for="nav-check">
      <span></span>
      <span></span>
      <span></span>
    </label>
  </div>

  <!-- Navbar items -->
  <div class="nav-links">
    <a href="#">Home</a>
    <a href="#">About</a>

    <!-- Dropdown menu -->
    <div class="dropdown">
      <a class="dropBtn" href="#">Services
        <i class="fas fa-angle-down"></i>
      </a>
      <div class="drop-content">
        <a href="#">Web Design</a>
        <a href="#">Marketing</a>
        <a href="#">WordPress</a>

        <!-- Creating sub menu Dropdown -->
        <div class="dropdown2">
          <a class="dropBtn2" href="#">More
            <i class="fas fa-angle-right"></i>
          </a>
          <div class="drop-content2">
            <a href="#">HTML</a>
            <a href="#">CSS</a>
            <a href="#">JavaScript</a>
            <a href="#">jQuery</a>
          </div>
        </div>
      </div>
    </div>

    <a href="#">Blogs</a>
    <a href="#">Contact</a>
    <button class="loginBtn">Login</button>
  </div>

</div>


<style>

*{
  margin: 0;
  padding: 0;
  box-sizing: border-box;
}
body{
  font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
  background-image: url(background-img.jpg);
  background-size: cover;
  background-attachment: fixed;
}
.navbar{
  height: 70px;
  width: 100%;
  padding: 19px 30px;
  background-color: #214BAF;
  position: relative;
}
.navbar .nav-header{
  display: inline;
}
.navbar .nav-header .nav-logo{
  display: inline-block;
  margin-top: -7px;
}
.navbar .nav-links{
  display: inline;
  float: right;
  font-size: 18px;
}
 
.navbar .nav-links .loginBtn{
  display: inline-block;
  padding: 5px 15px;
  margin-left: 20px;
  font-size: 17px;
  color: rgb(9, 14, 90);
}
.navbar .nav-links a {
  padding: 10px 12px;
  text-decoration: none;
  font-weight: 550;
  color: white;
}
/* Hover effects */
.navbar .nav-links a:hover{
  background-color: rgba(0, 0, 0, 0.3);
}
 
/* responsive navbar toggle button */
.navbar #nav-check, .navbar .nav-btn{
  display: none;
}
 
@media (max-width:700px) {
  .navbar .nav-btn{
    display: inline-block;
    position: absolute;
    top: 0px;
    right: 0px;
  }
  .navbar .nav-btn label {
    display: inline-block;
    width: 80px;
    height: 70px;
    padding: 25px;
  }
  .navbar .nav-btn label span {
    display: block;
    height: 10px;
    width: 25px;
    border-top: 3px solid #eee;
  }
  .navbar .nav-btn label:hover, .navbar #nav-check:checked ~ .nav-btn label {
    background-color: rgb(9, 14, 90);
    transition: all 0.5s ease;
  }
  .navbar .nav-links{
    position: absolute;
    display: block;
    text-align: center;
    width: 100%;
    background-color: rgb(9, 14, 90);
    transition: all 0.3s ease-in;
    overflow-y: hidden;
    top: 70px;
    right: 0px;
  }
  .navbar .nav-links a {
    display: block;
  }
 
  /* when nav toggle button not checked */
  .navbar #nav-check:not(:checked) ~ .nav-links {
    height: 0px;
  }
 
  /* when nav toggle button is checked */
  .navbar #nav-check:checked ~ .nav-links {
    height: calc(100vh - 70px);
    overflow-y: auto;
  }
  .navbar .nav-links .loginBtn {
    padding: 10px 40px ;
    margin: 20px;
    font-size:  18px;
    font-weight: bold;
    color: rgb(9, 14, 90);
  }
  /* Responsive dropdown code */
  .navbar .nav-links .dropdown, .navbar .nav-links .dropdown2 {
    float: none;
    width: 100%;
  }
  .navbar .nav-links .drop-content, .navbar .nav-links .drop-content2 {
    position: relative;
    background-color: rgb(220, 220, 250);
    top: 0px;
    left: 0px;
  }
  /* Text color */
  .navbar .nav-links .drop-content a {
    color: rgb(9, 14, 90);
  }  
 
}
 
/* Dropdown menu CSS code */
.dropdown{
  position: relative;
  display: inline-block;
}
.drop-content, .drop-content2 {
  display: none;
  position: absolute;
  background-color: #214BAF;
  min-width: 120px;
  font-size: 16px;
  top: 34px;
  z-index: 1;
  box-shadow: 0px 10px 25px rgba(0, 0, 0, 0.4);
}
/* on hover show dropdown */
.dropdown:hover .drop-content, .dropdown2:hover .drop-content2 {
  display: block;
}
/* drondown links */
.drop-content a {
  padding: 12px 10px;
  border-bottom: 1px solid rgb(197, 197, 250);
  display: block;
  transition: all 0.5s ease !important;
}
.dropBtn .drop-content a:hover {
  background-color: rgb(230, 230, 230);
}
.dropdown:hover .dropBtn, .dropdown2:hover .dropBtn2 {
  background-color: rgba(0, 0, 0, 0.3);
}
.dropdown2 .drop-content2 {
  position: absolute;
  left: 120px;
  top: 126px;
}
.dropBtn2 i {
  margin-left: 15px;
}
</style>


</body>

