@extends('../layouts.cadre')

@section('head')
<link href="css/others/animate.css" rel="stylesheet">
@endsection
@section('content')

<section class="dorne-welcome-area bg-img bg-overlay" style="background-image: url(img/bg-img/annonces.jpg);">
    <div class="container h-100">
        <div class="row h-100 align-items-center justify-content-left">
            <div class="col-12 col-md-10">
                <div class="hero-content">
                    <h2 class="text-uppercase">Les annonces</h2>
                    
                </div>
                
            </div>
        </div>
    </div>
    
</section>
<!-- ***** Welcome Area End ***** -->




<!-- ***** Comment ça marche Start ***** -->
<section class="m-4 fixed-sn">
    <div class="container-fluid">
        <div class="row">
           <!-- <div class="col-12 col-lg-3 z-depth-1-half deep-purple lighten-2 mb-3 p-3">
              

            </div>-->

            <div class="col-12 col-lg-3  mb-3 p-3">
              <!--Navbar-->
              <nav class="navbar navbar-dark navbar-1 z-depth-1-half deep-purple lighten-2">

                <!-- Navbar brand -->
                <a class="navbar-brand" href="#"><i class="fas fa-filter"> </i> Filtres </a>

                <!-- Collapse button -->
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent15"
                  aria-controls="navbarSupportedContent15" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>

                <!-- Collapsible content -->
                <div class="collapse navbar-collapse show" id="navbarSupportedContent15">

                  <!-- Links -->
                  <ul class="navbar-nav mr-auto">
                    <li class="nav-item ">
                      <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="#">Features</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="#">Pricing</a>
                    </li>
                  </ul>
                  <!-- Links -->

                </div>
                <!-- Collapsible content -->

              </nav>
              <!--/.Navbar-->
            </div>

            <div class="col-12 col-lg-9">
                                  <div class="about-content text-center">
                                    
                                    <h2 class="">Nos annonces <br></h2>
                                 
                                  </div>
                                      
                                    
                                  <div class="card text-center mb-3">
                                    <div class="card-body">
                                      <div class="card-title"><h4> Recherche par mot clé </h4>   </div>
                                      
                                      <input class="form-control form-control-lg mr-sm-2 mb-2" type="text" placeholder="Recherche" aria-label="Search">
                                      <button class="btn purple-gradient btn-rounded btn-md my-0" type="submit"> <i class="fa fa-search" aria-hidden="true"></i> Recherche... </button>                                      
                                    </div>
                                    <div class="card-body"> Nous avons trouvés <span class="red-text font-weight-bold"> 10546 </span> Résultats pour vous! </div>
                                  </div>
                                                             
                    
                                <div class="row d-flex justify-content-center m-3 text-left ">
                                    
                                    <div class="col-md-10">
                                      <div class="card">
                                        <div class="card-body m-3">
                                          <div class="row">
                                            <div class="col-lg-4 d-flex mb-2 align-items-center">
                                              <div class="avatar mx-4 w-100 white d-flex justify-content-center align-items-center">
                                                <img src="https://mdbootstrap.com/img/Photos/Avatars/img%20%2810%29.jpg" class="rounded-circle img-fluid z-depth-1" alt="woman avatar">
                                              </div>
                                            </div>
                                            <div class="col-lg-8">
                                              <p><label class="font-weight-bold lead"><strong>Anna Smith |</strong></label> <label class="ville font-weight-light"> Alger </label> </p>
                                              <p class="font-weight-bold text-muted mb-2">#Catégories, #Catégories, #Catégories </p> 
                                              <p class="text-muted font-weight-light mb-4">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Id quam sapiente molestiae
                                                numquam quas, voluptates omnis nulla ea odio quia similique corrupti magnam.</p>

                                                <button type="button" class="btn btn-md btn-secondary font-weight-bold "><i class="fa fa-thumbs-up pr-2"></i>Nriglek!</button>
                                              
                                            </div>
                                          </div>
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                              

                                <div class="row d-flex justify-content-center m-3 text-left ">
                                  <div class="col-md-10">
                                    <div class="card">
                                      <div class="card-body m-3">
                                        <div class="row">
                                          <div class="col-lg-4 d-flex mb-2 align-items-center">
                                            <div class="avatar mx-4 w-100 white d-flex justify-content-center align-items-center">
                                              <img src="https://mdbootstrap.com/img/Photos/Avatars/img%20%2810%29.jpg" class="rounded-circle img-fluid z-depth-1" alt="woman avatar">
                                            </div>
                                          </div>
                                          <div class="col-lg-8">
                                            <p class="text-muted font-weight-light mb-4">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Id quam sapiente molestiae
                                              numquam quas, voluptates omnis nulla ea odio quia similique corrupti magnam.</p>
                                            <p class="font-weight-bold lead mb-2"><strong>Anna Smith</strong></p>
                                            <p class="font-weight-bold text-muted mb-0">Product manager</p>
                                          </div>
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                                </div>

                                <div class="row d-flex justify-content-center m-3 text-left ">
                                  <div class="col-md-10">
                                    <div class="card">
                                      <div class="card-body m-3">
                                        <div class="row">
                                          <div class="col-lg-4 d-flex mb-2 align-items-center">
                                            <div class="avatar mx-4 w-100 white d-flex justify-content-center align-items-center">
                                              <img src="https://mdbootstrap.com/img/Photos/Avatars/img%20%2810%29.jpg" class="rounded-circle img-fluid z-depth-1" alt="woman avatar">
                                            </div>
                                          </div>
                                          <div class="col-lg-8">
                                            <p class="text-muted font-weight-light mb-4">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Id quam sapiente molestiae
                                              numquam quas, voluptates omnis nulla ea odio quia similique corrupti magnam.</p>
                                            <p class="font-weight-bold lead mb-2"><strong>Anna Smith</strong></p>
                                            <p class="font-weight-bold text-muted mb-0">Product manager</p>
                                          </div>
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                                </div>

                                <div class="row d-flex justify-content-center m-3 text-left ">
                                  <div class="col-md-10">
                                    <div class="card">
                                      <div class="card-body m-3">
                                        <div class="row">
                                          <div class="col-lg-4 d-flex mb-2 align-items-center">
                                            <div class="avatar mx-4 w-100 white d-flex justify-content-center align-items-center">
                                              <img src="https://mdbootstrap.com/img/Photos/Avatars/img%20%2810%29.jpg" class="rounded-circle img-fluid z-depth-1" alt="woman avatar">
                                            </div>
                                          </div>
                                          <div class="col-lg-8">
                                            <p class="text-muted font-weight-light mb-4">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Id quam sapiente molestiae
                                              numquam quas, voluptates omnis nulla ea odio quia similique corrupti magnam.</p>
                                            <p class="font-weight-bold lead mb-2"><strong>Anna Smith</strong></p>
                                            <p class="font-weight-bold text-muted mb-0">Product manager</p>
                                          </div>
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                           
            </div>
                
        </div>

        <div class="row">
            <div class="col-12">
                
                
            </div>
        </div>
    </div>
</section>
<!-- ***** Comment ça marche  End ***** -->




@endsection
@section('js')
<script src="js/others/plugins.js"></script>
<script type="text/javascript">
  /*---------------------- Page script-------------------------------*/
  /* Ajuster l'image à la taille de l'écran */
      var $item = $('.dorne-welcome-area'); 
      var $wHeight = $(window).height();     
      $item.height($wHeight); 
     
      $(window).on('resize', function (){
        $wHeight = $(window).height();
        $item.height($wHeight);
      });

  /**/


    </script>


@endsection