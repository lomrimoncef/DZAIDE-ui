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
                    <h2 class="text-uppercase">Les demandes</br> d'aide</h2>
                    
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
                  
                  
                    <div class="col-12 mb-3">
                      <h5 class="text-secondary ">Par urgence :</h5>
                      
                      <select class="mdb-select md-form md-outline colorful-select dropdown-secondary md-form" multiple id="select_urg" searchable="">
                        <option value="" disabled selected>Le niveau d'urgence</option>
                        @foreach ($urgences as $urgence)
                            <option value="{{ $urgence->id }}">{{ $urgence->libele }}</option>
                        @endforeach
                        
                      </select>
                      
                    
                    </div>

                    <div class="col-12 select-outline mb-3">
                      <h5 class="text-secondary ">Par wilaya :</h5>
                      <select class="mdb-select md-form md-outline white colorful-select dropdown-secondary" id='select_ville' searchable="Recherchez ici..">
                        <option value="" disabled selected>Choisissez la Wilaya</option>
                        @foreach ($villes as $ville)
                            <option value="{{ $ville->id }}">{{ $ville->code_ville }}- {{ $ville->ville }}</option>
                        @endforeach
                      </select>
                      <div class="d-none" id='div_com'>
                        <select class="mdb-select md-form md-outline white colorful-select dropdown-secondary " id='select_com' searchable="Recherchez ici..">
                          
                        </select>
                      </div>
                    
                    </div>

                    <div class="col-12 mb-3">
                      <h5 class="text-secondary ">Par Catégories :</h5>
                      @foreach($categories as $categorie)
                      <div class="form-check pb-2">
                        <input type="checkbox" class="form-check-input" id="{{ $categorie->id }}" value="{{ $categorie->id }}" name="check_cat">
                        <label class="form-check-label" for="{{ $categorie->id }}"> #{{ $categorie->categorie }} </label>
                      </div>
                      @endforeach
                      
                                          
                    </div>


                    <div class="col-12 mb-3 mt-3 text-center">
                      <button type="button" class="btn btn-outline-secondary btn-rounded waves-effect" id="filtre"><i class="fas fa-filter pr-2"> </i> Filtrer </button>
                    </div>
                    

                </div>
                <!-- Collapsible content -->

              </nav>
              <!--/.Navbar-->
            </div>

            <div class="col-12 col-lg-9">
                                  <div class="about-content text-center">
                                    
                                    <h2>Nos demandes d' 'aide <br></h2>
                                 
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
                                  @foreach ($annonces as $annonce)

                                      <div class="row d-flex justify-content-center m-3 text-left ">
                                            
                                        <div class="col-md-10">
                                          <div class="card purple lighten-5">
                                            <div class="card-body m-3">
                                              <div class="row">
                                                <div class="col-lg-4 d-flex mb-2 align-items-center">
                                                  <div class="avatar mx-4 w-100 white d-flex justify-content-center align-items-center">
                                                    <img src="https://mdbootstrap.com/img/Photos/Avatars/img%20%2810%29.jpg" class="rounded-circle img-fluid z-depth-1" alt="woman avatar">
                                                  </div>
                                                </div>
                                                <div class="col-lg-8">
                                                  <p><label class="font-weight-bold lead">
                                                    <strong>{{$annonce->user->name}} {{$annonce->user->prenom}}|</strong></label> <label class="ville font-weight-light">{{ $annonce->commune->ville->ville }} / {{ $annonce->commune->nom }} </label> </p>
                                                  <p class="font-weight-bold text-muted mb-2">#{{ $annonce->catannonce->categorie}} </p> 
                                                  <p class="text-muted font-weight-light mb-4">{{ $annonce->titre }}</p>

                                                  <ul class="list-unstyled list-inline font-small">
                    
                                                    <li class="list-inline-item pr-2 white-text"><button type="button" class="btn btn-md btn-secondary font-weight-bold "><i class="fa fa-fist-raised pr-2"></i>N'riglek!</button></li>
                                                    <li class="list-inline-item pr-2"><a href="#" class= "text-secondary"><i
                                                      class="fa fa-fist-raised pr-1"></i>130</a></li>         
                                                  </ul>                                          
                                                  
                                                </div>
                                              </div>
                                            </div>

                <!-- // couleur de la bande en fonction de l'urgence -->
                                              <div class="card-footer color-block 
                                                          @switch($annonce->urgence_id)
                                                                @case('1')
                                                                  red darken-4
                                                                    @break
                                                                @case('2')
                                                                  orange darken-4
                                                                    @break
                                                                @case('3')
                                                                  success-color-dark
                                                                    @break
                                                                @case('4')
                                                                  secondary-color-dark
                                                                    @break
                                                                    
                                                            @endswitch
                                             text-center " >
                                              <ul class="list-unstyled list-inline font-small">
                                                  <li class="list-inline-item pr-2 white-text"><i class="fa fa-fire pr-1"></i>{{$annonce->urgence->libele}}</li>
                                                  <li class="list-inline-item pr-2 white-text"><i class="far fa-clock pr-1"></i> le : {{ $annonce->date_publication }}</li>  
                                              </ul>
                                            </div>
                                            
                                          </div>
                                        </div>
                                      </div>
                                      
                                  @endforeach
                                                                   

                               
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

<script type="text/javascript">
  /*---------------------- Page script-------------------------------*/
  /* Ajuster l'image à la taille de l écran */
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



    // choix de commune en fonction de la ville

        $('#select_ville').change(function(){

          if($('#div_com').hasClass('d-none')){
            $('#div_com').removeClass('d-none'); $('#div_com').addClass('d-block'); }
      
          var id = $(this).val();
        
          $.ajax({
            headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
            type: 'get',
            url: 'ville/communes/'+id,
            dataType: "json",
            success: function(response){
              //console.log(response);
              $('#select_com').html('<option value="Null" disabled selected>Choisissez la Commune</option><option value="Null">------Toute la wilaya------</option>');
              for( var i in response) {
                $('#select_com').append('<option value="'+ response[i].id +'">'+ response[i].code_postal+'- '+ response[i].nom  +'</option>');
                }                    
            },
            error:function(response){alert("Error");}

            });

        });


    // FILTRE
        $('#filtre').click(function(){

          
      
          var JSurgences = $('#select_urg').val();
          //console.log(JSurgences);
          var urgences = JSON.stringify(JSurgences);
          //console.log(urgences);
          var ville = $('#select_ville').val();
          var commune = $('#select_com').val();
          console.log(commune);
          var cats= [];
          $.each($('input[name="check_cat"]:checked'), function(){
            cats.push($(this).val());
              });
              // console.log(cats);
             // alert("My cats are: " + cats.join(", "));
          $.ajax({
            headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
            type: 'POST',
            url: 'demandes_annonces_filter',
            data: {urgences:urgences, ville:ville, commune:commune, cats:cats},
            success: function(response){
              console.log(response);
         
             /* for( var i in response) {
                $('#select_com').append('<option value="'+ response[i].id +'">'+ response[i].code_postal+'- '+ response[i].nom  +'</option>');
                } */                   
            },
            error:function(response){console.log(response);}

            });

        });


  });

    </script>


@endsection