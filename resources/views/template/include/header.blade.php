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
   




    <!-- Header Start -->
    {{-- <div class="jumbotron jumbotron-fluid mb-5 image-header">
        <div class="container text-center py-5">
            <h1 class="text-white display-3 mb-5">ARTL NORD  Académie Régionale</h1>
            <h1 class="text-primary mb-4">Transport & Logistique</h1> --}}

            <!-- <div class="mx-auto" style="width: 100%; max-width: 600px;">
                <div class="input-group">
                    <input type="text" class="form-control border-light" style="padding: 30px;" placeholder="Tracking Id">
                    <div class="input-group-append">
                        <button class="btn btn-primary px-3">Track & Trace</button>
                    </div>
                </div>
            </div> -->

        {{-- </div>
    </div> --}}
    <!-- Header End -->


    {{-- <div class="container-fuid"> --}}




      {{-- slider start--}}
      
  
     
      <div id="carouselExampleIndicators" class="carousel slide " data-ride="carousel" style="position: relative">
        <ol class="carousel-indicators">
          <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img class="d-block w-100" src="img/3.jpg" style="height: 90vh" alt="First slide">
            <div class="container text-center py-5"  style="position:absolute;z-index:4">
              <h1 class="text-white display-3 mb-5">ARTL NORD  Académie Régionale</h1>
              <h1 class="text-primary mb-8">Transport & Logistique</h1> 
  
             <div class="mx-auto" style="width: 100%; max-width: 600px;">
                  <div class="input-group">
                      <input type="text" class="form-control border-light" style="padding: 30px;" placeholder="Tracking Id">
                      <div class="input-group-append">
                          <button class="btn btn-primary px-3">Track & Trace</button>
                      </div>
                  </div>
              </div> 
  
         </div>
          </div>
          <div class="carousel-item">
            <img class="d-block w-100" src="img/4.jpg"style="height: 90vh" alt="Second slide">
          </div>
          <div class="carousel-item">
            <img class="d-block w-100" src="img/4.jpg" style="height: 90vh" alt="Third slide">
          </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
      </div>
 

      {{-- slider end  --}}

  @yield('content')



    




    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary back-to-top"><i class="fa fa-angle-double-up"></i></a>


    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/counterup/counterup.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>

    <!-- Contact Javascript File -->
    <script src="mail/jqBootstrapValidation.min.js"></script>
    <script src="mail/contact.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>


    <script src='https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js'></script>


    {{-- multimenu --}}
    <script>
    
     
     document.addEventListener('click',function(e){
       // Hamburger menu
       if(e.target.classList.contains('hamburger-toggle')){
         e.target.children[0].classList.toggle('active');
       }
     })   
           
     </script>
</body>

</html>






