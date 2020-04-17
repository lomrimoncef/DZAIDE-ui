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
                    <h2 class="text-uppercase">Les propositions</br> d'aide</h2>
                    
                </div>
                
            </div>
        </div>
    </div>
    
</section>
<!-- ***** Welcome Area End ***** -->




<!-- ***** PAGE ANNONCES ***** -->

<section class="m-4 fixed-sn">
    <div class="container-fluid">
        <div class="row">
           <!-- <div class="col-12 col-lg-3 z-depth-1-half deep-purple lighten-2 mb-3 p-3">
              

            </div>-->

            <div class="col-12 col-lg-3  mb-3 p-3">
              <!--Navbar-->
              <nav class="navbar navbar-light navbar-1 z-depth-1-half">

                <!-- Navbar brand -->
                <a class="navbar-brand text-secondary" href="#"><i class="fas fa-filter"> </i> Filtres </a>

                <!-- Collapse button -->
                <button class="navbar-toggler " type="button" data-toggle="collapse" data-target="#navbarSupportedContent15"
                  aria-controls="navbarSupportedContent15" aria-expanded="false" aria-label="Toggle navigation"><span class="text-secondary"><i class="fas fa-bars fa-1x"></i></span></button>

                <!-- Collapsible content -->
                <div class="row mt-3 collapse navbar-collapse show" id="navbarSupportedContent15">
                               

                    <div class="col-12 select-outline mb-3">
                      <h5 class="text-secondary ">Par wilaya :</h5>
                      <select class="mdb-select md-form md-outline white colorful-select dropdown-secondary" searchable="Recherchez ici..">
                        <option value="" disabled selected>Choisissez la Wilaya</option>
                        <option value="1">USA</option>
                        <option value="2">Germany</option>
                        <option value="3">France</option>
                        <option value="3">Poland</option>
                        <option value="3">Japan</option>
                      </select>
                    
                    </div>

                    <div class="col-12 mb-3">
                      <h5 class="text-secondary ">Par Catégories :</h5>
                      
                      <div class="form-check pb-2">
                        <input type="checkbox" class="form-check-input" id="#Catégorie1">
                        <label class="form-check-label" for="#Catégorie1"> #Catégorie1 </label>
                      </div>
                      <div class="form-check pb-2">
                        <input type="checkbox" class="form-check-input" id="#Catégorie2">
                        <label class="form-check-label" for="#Catégorie2">#Catégorie2</label>
                      </div>
                      <div class="form-check pb-2">
                        <input type="checkbox" class="form-check-input" id="#Catégorie3">
                        <label class="form-check-label" for="#Catégorie3">#Catégorie3</label>
                      </div>
                      <div class="form-check pb-2">
                        <input type="checkbox" class="form-check-input" id="#Catégorie4">
                        <label class="form-check-label" for="#Catégorie4">#Catégorie4</label>
                      </div>
                      <div class="form-check pb-2">
                        <input type="checkbox" class="form-check-input" id="#Catégorie5">
                        <label class="form-check-label" for="#Catégorie5">#Catégorie5</label>
                      </div>
                      <div class="form-check pb-2">
                        <input type="checkbox" class="form-check-input" id="#Catégorie6">
                        <label class="form-check-label" for="#Catégorie6">#Catégorie6</label>
                      </div>
                                          
                    </div>


                    <div class="col-12 mb-3 mt-3 text-center">
                      <button type="button" class="btn btn-outline-secondary btn-rounded waves-effect"><i class="fas fa-filter pr-2"> </i> Filtrer </button>
                    </div>
                    

                </div>
                <!-- Collapsible content -->

              </nav>
              <!--/.Navbar-->
            </div>

            <div class="col-12 col-lg-9">
                                  <div class="about-content text-center">
                                    
                                    <h2 class="">Nos propositions d'aide <br></h2>
                                 
                                  </div>
                                                        
                                  <div class="card text-center mb-3">
                                    <div class="card-body">
                                      <div class="card-title"><h4> Recherche par mots-clés </h4>   </div>
                                      
                                      <input class="form-control form-control-lg mr-sm-2 mb-2" type="text" placeholder="Recherche" aria-label="Search">
                                      <button class="btn purple-gradient btn-rounded btn-md my-0" type="submit"> <i class="fa fa-search" aria-hidden="true"></i> Rechercher </button>                                      
                                    </div>
                                    <div class="card-body"> Nous avons trouvés <span class="red-text font-weight-bold"> 10546 </span> Résultats pour vous! </div>
                                  </div>


           <!-- -------------------------------LES CARDS ANNOOOOOOOOOOOOOOOOOOOOOOONCES ------------------------------ -->                                         
                    
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

                                              <button type="button" class="btn btn-md btn-secondary font-weight-bold "><i class="fa fa-thumbs-up pr-2"></i>Riglini </button>
                                            
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
                                            <p><label class="font-weight-bold lead"><strong>Anna Smith |</strong></label> <label class="ville font-weight-light"> Alger </label> </p>
                                            <p class="font-weight-bold text-muted mb-2">#Catégories, #Catégories, #Catégories </p> 
                                            <p class="text-muted font-weight-light mb-4">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Id quam sapiente molestiae
                                              numquam quas, voluptates omnis nulla ea odio quia similique corrupti magnam.</p>

                                              <button type="button" class="btn btn-md btn-secondary font-weight-bold "><i class="fa fa-thumbs-up pr-2"></i>Riglini </button>
                                            
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
                                            <p><label class="font-weight-bold lead"><strong>Anna Smith |</strong></label> <label class="ville font-weight-light"> Alger </label> </p>
                                            <p class="font-weight-bold text-muted mb-2">#Catégories, #Catégories, #Catégories </p> 
                                            <p class="text-muted font-weight-light mb-4">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Id quam sapiente molestiae
                                              numquam quas, voluptates omnis nulla ea odio quia similique corrupti magnam.</p>

                                              <button type="button" class="btn btn-md btn-secondary font-weight-bold "><i class="fa fa-thumbs-up pr-2"></i>Riglini </button>
                                            
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
                                            <p><label class="font-weight-bold lead"><strong>Anna Smith |</strong></label> <label class="ville font-weight-light"> Alger </label> </p>
                                            <p class="font-weight-bold text-muted mb-2">#Catégories, #Catégories, #Catégories </p> 
                                            <p class="text-muted font-weight-light mb-4">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Id quam sapiente molestiae
                                              numquam quas, voluptates omnis nulla ea odio quia similique corrupti magnam.</p>

                                              <button type="button" class="btn btn-md btn-secondary font-weight-bold "><i class="fa fa-thumbs-up pr-2"></i>Riglini </button>
                                            
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
                                            <p><label class="font-weight-bold lead"><strong>Anna Smith |</strong></label> <label class="ville font-weight-light"> Alger </label> </p>
                                            <p class="font-weight-bold text-muted mb-2">#Catégories, #Catégories, #Catégories </p> 
                                            <p class="text-muted font-weight-light mb-4">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Id quam sapiente molestiae
                                              numquam quas, voluptates omnis nulla ea odio quia similique corrupti magnam.</p>

                                              <button type="button" class="btn btn-md btn-secondary font-weight-bold "><i class="fa fa-thumbs-up pr-2"></i>Riglini </button>
                                            
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
                
                <!-- #TO DO PAGINATION -->
            </div>
        </div>
    </div>
</section>
<!-- ***** PAGE ANNONCES  End ***** -->

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

  /*---------------Initialisation MDB Select list---------------*/
  $(document).ready(function() {
    $('.mdb-select').materialSelect();
    });

    </script>


@endsection