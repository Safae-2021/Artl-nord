@extends('template.include.footer')
@extends('template.include.header')
@extends('template.include.navbar')


@section('content')

<h1></h1>

  <!-- About Start -->
  <div class="container-fluid py-5  bg-secondary">
       

       <div class="container">
           <div class="row align-items-center">
               <div class="col-lg-6 pb-4 pb-lg-0 ">
                    <img class="img-fluid w-100 " src="img/class-location.jpg" alt=""> 
               </div>
               <div class="col-lg-6">
                 
                   <h1>  La location des salles </h1>
                   <h6 class="text-primary text-uppercase font-weight-bold">Nous mettons à votre disposition: </h6>

                   <br>
                   <div>
                   <ul class="list-inline">
                        <li><h6><i class="far fa-dot-circle text-primary mr-3"></i> Salles d'une capacité de 12 à 20 personnes.  </h6></li>
                        <li><h6><i class="far fa-dot-circle text-primary mr-3"></i>  Tableaux magnétiques </h6></li>
                        <li><h6><i class="far fa-dot-circle text-primary mr-3"></i> Vidéos projecteur</h6></li>
                    </ul>
                   <p> Notre académie vous propose la location de salles parfaitement équipées pour vos formations,réunions,cours,conférences.
                    <!-- read  more -->
                    <br>
                   Les salles sont disponibles en semaine et en weekend sous réservation.
                   </p>
                   <a href=" " class="btn btn-primary mt-3 ml-10 py-2 px-4">Réservation</a>
                  
                    </div>
                   <div>
                 
                   <br>
               
               </div>
           </div>
       </div>
       <br>

      
  
   </div>
   <!-- About End -->



@endsection