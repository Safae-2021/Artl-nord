
   @extends('template.include.footer')
   @extends('template.include.header')
   @extends('template.include.navbar')
   

    @section('content')
    <!-- About Start -->
    <div class="container-fluid py-5">
       

        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-5 pb-4 pb-lg-0 remove">
                     <img class="img-fluid w-100" src="img/about.jpg" alt=""> 
                    <div class="bg-primary text-dark text-center p-4">
                        <h3 class="m-0">4+ Ans Experience</h3>
                    </div>
                </div>
                <div class="col-lg-7">
                    <h6 class="text-primary text-uppercase font-weight-bold">A Propos </h6>
                  
                    <h2>PRESENTATION DE L ’ ENTREPRISE </h2>
                    <br>
                    <p>L ’ Académie Régionale du Transport et de la Logistique du Nord (ARTL NORD) est un
                        organisme spécialisé dans la Formation & le Conseil des entreprises du secteur du
                        Transport et de la Logistique, il soutien votre équipe en interne et vous propose des
                        solutions rentables selon les besoins ou affectation d’une équipe dédiée à la réalisation
                        d’un projet d’amélioration logistique et de la chaîne d’approvisionnement, ainsi il vous
                        accompagne à l’intégration et la mise en place des systèmes de management de la qualité
                        au Maroc et à l’international.</p>
                        <br>
                    <h6 class="text-primary text-uppercase font-weight-bold">L ’ activité principale </h6>

                    <ul class="list-inline">
                        <li><h6><i class="far fa-dot-circle text-primary mr-3"></i>Formation</h6>
                        <li><h6><i class="far fa-dot-circle text-primary mr-3"></i>Conseil et Accompagnement</h6></li>
                    </ul>
                    {{-- <div>
                    <h6 class="text-primary text-uppercase font-weight-bold">Logistique</h6>
                    <p> Lorem ipsum dolor sit amet consectetur adipisicing elit. Quidem odit ad adipisci distinctio corporis illo minus ex odio delectus, dolores quod provident, quam reiciendis voluptas. Porro sapiente harum nam id.</p>
                    </div>
                    <div>
                    <h6 class="text-primary text-uppercase font-weight-bold">Education</h6>
                    <p> Lorem ipsum dolor sit amet consectetur adipisicing elit. Quidem odit ad adipisci distinctio corporis illo minus ex odio delectus, dolores quod provident, quam reiciendis voluptas. Porro sapiente harum nam id.</p>
                    </div> --}}
                   
                    <a href=" " class="btn btn-primary mt-3 ml-10 py-2 px-4">Voir Plus</a>

                    {{-- <div class="d-flex align-items-center pt-2 ">
                       <a href="http://127.0.0.1:8000/about"> <button type="button" class="btn-play" data-toggle="modal"
                            data-src="https://www.youtube.com/embed/DWRcNpR6Kdc" data-target="#videoModal">
                            <span></span>
                        </button>
                        </a>
                        <h5 class="font-weight-bold m-0 ml-4">Voir Plus</h5>
                    </div> --}}
                </div>
            </div>
        </div>
        <br>

        <!-- Video Modal -->
        <div class="modal fade" id="videoModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-body">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>        
                        <!-- 16:9 aspect ratio -->
                        <div class="embed-responsive embed-responsive-16by9">
                            <iframe class="embed-responsive-item" src="" id="video"  allowscriptaccess="always" allow="autoplay"></iframe>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- About End -->

    <!-- Features Start -->
    <div class="container-fluid bg-secondary my-5">
        <div class="container">
            <div class="row align-items-center">
               
                <div class="col-lg-8 py-5 py-lg-5  ">
                    <h6 class="text-primary text-uppercase font-weight-bold"></h6>
                    <h1 class="mb-4">Nouvelle Formation Disponible</h1>
                    <div class="timer"> 
                        {{-- @include('timer') --}}
                    </div>
                    <h1 class="mb-4"> Le nom de la Formation </h1>
                    <p class="mb-4">Dolores lorem lorem ipsum sit et ipsum. Sadip sea amet diam dolore sed et. Sit rebum labore sit sit ut vero no sit. Et elitr stet dolor sed sit et sed ipsum et kasd ut. Erat duo eos et erat sed diam duo</p>
                    <h4 class="mb-4"> Les Objectives </h4>
                    <ul class="list-inline">
                        <li><h6><i class="far fa-dot-circle text-primary mr-3"></i>Best In Industry</h6>
                        <li><h6><i class="far fa-dot-circle text-primary mr-3"></i>Emergency Services</h6></li>
                        <li><h6><i class="far fa-dot-circle text-primary mr-3"></i>24/7 Customer Support</h6></li>
                    </ul>
                    <a href=" " class="btn btn-primary mt-3 ml-10 py-2 px-4">Voir Plus</a>
                </div>
                <div class="col-lg-4 remove-timer">
                    <img class="img-fluid w-100" src="img/timer.jpg " alt="">
                </div>
            </div>
        </div>
    </div>
    <!-- Features End -->



    <!-- Blog Start -->
    <div class="container-fluid pt-5">
        <div class="container">
            <div class="text-center pb-2">
                <!-- <h6 class="text-primary text-uppercase font-weight-bold">  </h6> -->
                <h1 class="mb-4">Actualités</h1>
            </div>
            <div class="row">
                <div class="col-md-6 mb-5">
                    <div class="position-relative">
                        <img class="img-fluid w-100" src="img/4.jpg" alt="">
                        <div class="position-absolute bg-primary d-flex flex-column align-items-center justify-content-center rounded-circle"
                            style="width: 60px; height: 60px; bottom: -30px; right: 30px;">
                            <h4 class="font-weight-bold mb-n1">20</h4>
                            <small class="text-white text-uppercase">Jan</small>
                        </div>
                    </div>
                    <div class="bg-secondary" style="padding: 30px;">
                        <div class="d-flex mb-3">
                            <div class="d-flex align-items-center">
                                <img class="rounded-circle" style="width: 40px; height: 40px;" src="img/user.jpg" alt="">
                                <a class="text-muted ml-2" href="">Ahmed Chaoui</a>
                            </div>
                            <div class="d-flex align-items-center ml-4">
                                <i class="far fa-bookmark text-primary"></i>
                                <a class="text-muted ml-2" href="">Web Design</a>
                            </div>
                        </div>
                        <h4 class="font-weight-bold mb-3">Une progression à deux chiffres pour Hupac en 2021</h4>
                        <p>Dolor sea ipsum ipsum et. Erat duo lorem magna vero dolor dolores. Rebum eirmod no dolor diam dolor amet ipsum. Lorem lorem sea sed diam est lorem magna</p>
                        <a class="border-bottom border-primary text-uppercase text-decoration-none" href="{{ route("article") }}">Read More <i class="fa fa-angle-right"></i></a>
                    </div>
                </div>


                
                <div class="col-md-6 mb-5">
                    <div class="position-relative">
                        <img class="img-fluid w-100 " src="img/2.jpg" alt="">
                        <div class="position-absolute bg-primary d-flex flex-column align-items-center justify-content-center rounded-circle"
                            style="width: 60px; height: 60px; bottom: -30px; right: 30px;">
                            <h4 class="font-weight-bold mb-n1">22</h4>
                            <small class="text-white text-uppercase">Jan</small>
                        </div>
                    </div>
                    <div class="bg-secondary" style="padding: 30px;">
                        <div class="d-flex mb-3">
                            <div class="d-flex align-items-center">
                                <img class="rounded-circle" style="width: 40px; height: 40px;" src="img/user.jpg" alt="">
                                <a class="text-muted ml-2" href="">Youssef El Adnaoui</a>
                            </div>
                            <div class="d-flex align-items-center ml-4">
                                <i class="far fa-bookmark text-primary"></i>
                                <a class="text-muted ml-2" href="">Interpreneur</a>
                            </div>
                        </div>
                        <h4 class="font-weight-bold mb-3">Le gouvernement annonce plusieurs mesures pour le report modal</h4>
                        <p>Dolor sea ipsum ipsum et. Erat duo lorem magna vero dolor dolores. Rebum eirmod no dolor diam dolor amet ipsum. Lorem lorem sea sed diam est lorem magna</p>
                        <a class="border-bottom border-primary text-uppercase text-decoration-none" href="{{ route("article2") }}">Read More <i class="fa fa-angle-right"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Blog End -->

    <!-- partenaire start -->


<div id="fh5co-course-categories" class="container-fluid bg-secondary my-5">
		<div class="container">
			{{-- <div class="row animate-box"> --}}
				{{-- <div class="col-md-6 col-md-offset-3   fh5co-heading" style="margin-left:25%">
					<h2 class="text-center">Notre Partenaire</h2>
					<!-- <p>Dignissimos asperiores vitae velit veniam totam fuga molestias accusamus alias autem provident. Odit ab aliquam dolor eius.</p> -->
				</div> --}}
                <div class="text-center pb-2 pt-2">
                    <h1 class="mb-4">Notre Partenaire</h1>
                </div>
              
			{{-- </div> --}}
			<div class="row">
				
				<div class="col-md-3 col-sm-6 text-center animate-box">
					<div class="services">
						<span class="icon">
							<i class="icon-heart4"></i>
                            <img src="img/agilea.PNG" alt="" srcset=""> 
						</span>
						<div class="desc">
							{{-- <h3><a href="#">Health &amp; Psychology</a></h3> --}}
							<p>Dignissimos asperiores vitae velit veniam totam fuga molestias accusamus alias autem provident. Odit ab aliquam dolor eius.</p>
						</div>
					</div>
				</div>
				<div class="col-md-3 col-sm-6 text-center animate-box">
					<div class="services">
						<span class="icon">
							<i class="icon-banknote"></i>
                            <img src="img/americanbs.PNG" alt="" srcset=""> 
						</span>
						<div class="desc">
							{{-- <h3><a href="#">Accounting</a></h3> --}}
							<p>Dignissimos asperiores vitae velit veniam totam fuga molestias accusamus alias autem provident. Odit ab aliquam dolor eius.</p>
						</div>
					</div>
				</div>
				<div class="col-md-3 col-sm-6 text-center animate-box">
					<div class="services">
						<span class="icon">
							<i class="icon-lab2"></i>
                            <img src="img/americanps.PNG" alt="" srcset=""> 

						</span>
						<div class="desc">
							{{-- <h3><a href="#">Science &amp; Technology</a></h3> --}}
							<p>Dignissimos asperiores vitae velit veniam totam fuga molestias accusamus alias autem provident. Odit ab aliquam dolor eius.</p>
						</div>
					</div>
				</div>
				<div class="col-md-3 col-sm-6 text-center animate-box">
					<div class="services">
						<span class="icon">
							<i class="icon-photo"></i>
                            <img src="img/assoss-1.PNG" alt="" srcset=""> 

						</span>
						<div class="desc">
							{{-- <h3><a href="#">Art &amp; Media</a></h3> --}}
							<p>Dignissimos asperiores vitae velit veniam totam fuga molestias accusamus alias autem provident. Odit ab aliquam dolor eius.</p>
						</div>
					</div>
				</div>
				<div class="col-md-3 col-sm-6 text-center animate-box">
					<div class="services">
						<span class="icon">
							<i class="icon-home-outline"></i>
                            <img src="img/assoss-2.PNG" alt="" srcset=""> 
						</span>
						<div class="desc">
							{{-- <h3><a href="#">Real Estate</a></h3> --}}
							<p>Dignissimos asperiores vitae velit veniam totam fuga molestias accusamus alias autem provident. Odit ab aliquam dolor eius.</p>
						</div>
					</div>
				</div>
				<div class="col-md-3 col-sm-6 text-center animate-box">
					<div class="services">
						<span class="icon">
							<i class="icon-bubble3"></i>
                            <img src="img/assoss-3.PNG" alt="" srcset=""> 

						</span>
						<div class="desc">
							{{-- <h3><a href="#">Language</a></h3> --}}
							<p>Dignissimos asperiores vitae velit veniam totam fuga molestias accusamus alias autem provident. Odit ab aliquam dolor eius.</p>
						</div>
					</div>
				</div>
				<div class="col-md-3 col-sm-6 text-center animate-box">
					<div class="services">
						<span class="icon">
							<i class="icon-world"></i>
                            <img src="img/cgeci.PNG" alt="" srcset=""> 

						</span>
						<div class="desc">
							{{-- <h3><a href="#">Web &amp; Programming</a></h3> --}}
							<p>Dignissimos asperiores vitae velit veniam totam fuga molestias accusamus alias autem provident. Odit ab aliquam dolor eius.</p>
						</div>
					</div>
				</div>
                <div class="col-md-3 col-sm-6 text-center animate-box">
					<div class="services">
						<span class="icon">
							<i class="icon-world"></i>
                            <img src="img/cgem.PNG" alt="" srcset=""> 

						</span>
						<div class="desc">
							{{-- <h3><a href="#">Web &amp; Programming</a></h3> --}}
							<p>Dignissimos asperiores vitae velit veniam totam fuga molestias accusamus alias autem provident. Odit ab aliquam dolor eius.</p>
						</div>
					</div>
				</div>
                <div class="col-md-3 col-sm-6 text-center animate-box">
					<div class="services">
						<span class="icon">
							<i class="icon-world"></i>
                            <img src="img/gotic.PNG" alt="" srcset=""> 

						</span>
						<div class="desc">
							{{-- <h3><a href="#">Web &amp; Programming</a></h3> --}}
							<p>Dignissimos asperiores vitae velit veniam totam fuga molestias accusamus alias autem provident. Odit ab aliquam dolor eius.</p>
						</div>
					</div>
				</div>
                <div class="col-md-3 col-sm-6 text-center animate-box">
					<div class="services">
						<span class="icon">
							<i class="icon-world"></i>
                            <img src="img/imt.PNG" alt="" srcset=""> 

						</span>
						<div class="desc">
							{{-- <h3><a href="#">Web &amp; Programming</a></h3> --}}
							<p>Dignissimos asperiores vitae velit veniam totam fuga molestias accusamus alias autem provident. Odit ab aliquam dolor eius.</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
   <!-- patrenaire end -->



 
           <!-- Testimonial Start -->
           <div class="container-fluid py-5">
            <div class="container">
                <div class="text-center pb-2">
                    {{-- <h6 class="text-primary text-uppercase font-weight-bold">Testimonial</h6> --}}
                    <h1 class="mb-4">FeedBack</h1>
                </div>
                <div class="owl-carousel testimonial-carousel">
                    <div class="position-relative bg-secondary p-4">
                        <i class="fa fa-3x fa-quote-right text-primary position-absolute" style="top: -6px; right: 0;"></i>
                        <div class="d-flex align-items-center mb-3">
                            <img class="img-fluid rounded-circle" src="img/testimonial-1.jpg" style="width: 60px; height: 60px;" alt="">
                            <div class="ml-3">
                                <h6 class="font-weight-semi-bold m-0">Safae </h6>
                                <small>- Profession</small>
                            </div>
                        </div>
                        <p class="m-0">Sed ea amet kasd elitr stet, stet rebum et ipsum est duo elitr clita lorem. Dolor ipsum sanct clita</p>
                    </div>
                    <div class="position-relative bg-secondary p-4">
                        <i class="fa fa-3x fa-quote-right text-primary position-absolute" style="top: -6px; right: 0;"></i>
                        <div class="d-flex align-items-center mb-3">
                            <img class="img-fluid rounded-circle" src="img/testimonial-2.jpg" style="width: 60px; height: 60px;" alt="">
                            <div class="ml-3">
                                <h6 class="font-weight-semi-bold m-0">Zaynab </h6>
                                <small>- Profession</small>
                            </div>
                        </div>
                        <p class="m-0">Sed ea amet kasd elitr stet, stet rebum et ipsum est duo elitr clita lorem. Dolor ipsum sanct clita</p>
                    </div>
                    <div class="position-relative bg-secondary p-4">
                        <i class="fa fa-3x fa-quote-right text-primary position-absolute" style="top: -6px; right: 0;"></i>
                        <div class="d-flex align-items-center mb-3">
                            <img class="img-fluid rounded-circle" src="img/testimonial-3.jpg" style="width: 60px; height: 60px;" alt="">
                            <div class="ml-3">
                                <h6 class="font-weight-semi-bold m-0">Imad </h6>
                                <small>- Profession</small>
                            </div>
                        </div>
                        <p class="m-0">Sed ea amet kasd elitr stet, stet rebum et ipsum est duo elitr clita lorem. Dolor ipsum sanct clita</p>
                    </div>
                    <div class="position-relative bg-secondary p-4">
                        <i class="fa fa-3x fa-quote-right text-primary position-absolute" style="top: -6px; right: 0;"></i>
                        <div class="d-flex align-items-center mb-3">
                            <img class="img-fluid rounded-circle" src="img/testimonial-4.jpg" style="width: 60px; height: 60px;" alt="">
                            <div class="ml-3">
                                <h6 class="font-weight-semi-bold m-0">Ahmed</h6>
                                <small>- Profession</small>
                            </div>
                        </div>
                        <p class="m-0">Sed ea amet kasd elitr stet, stet rebum et ipsum est duo elitr clita lorem. Dolor ipsum sanct clita</p>
                    </div>
                </div>
            </div>
        </div>
        <!-- Testimonial End -->
    
        @endsection