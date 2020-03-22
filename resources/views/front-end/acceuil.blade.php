@extends('../layouts.cadre2')

@section('head')
    <link href="css/others/animate.css" rel="stylesheet">
@endsection
@section('content')

    <section class="dorne-welcome-area bg-img bg-overlay" style="background-image: url(img/img/bg-img/mybg.jpg);">
        <div class="container h-100">
            <div class="row h-100 align-items-center justify-content-center">
                <div class="col-12 col-md-10">
                    <div class="hero-content">
                        <h2 class="text-uppercase">Le premier site d'entraide en Algérie</h2>
                        <h4 class="text-uppercase">Bénévolat, dons, médicaments, bricolage, déménagement, hebergement... </h4>
                    </div>
                    <!-- He'ro Search Form -->

                </div>
            </div>
        </div>
        <!-- Hero Social Btn -->
        <div class="hero-social-btn">
            <div class="social-title d-flex align-items-center">
                <h6>Follow us on Social Media</h6>
                <span></span>
            </div>
            <div class="social-btns">
                <a href="#"><i class="fab fa-linkedin-in" aria-haspopup="true"></i></a>
                <a href="#"><i class="fab fa-behance" aria-hidden="true"></i></a>
                <a href="#"><i class="fab fa-dribbble" aria-hidden="true"></i></a>
                <a href="#"><i class="fab fa-twitter" aria-haspopup="true"></i></a>
                <a href="#"><i class="fab fa-facebook-f" aria-haspopup="true"></i></a>
            </div>
        </div>
    </section>
    <!-- ***** Welcome Area End ***** -->

    <!-- ***** Catagory Area Start ***** -->
    <section class="dorne-catagory-area">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="all-catagories">
                        <div class="row">
                            <!-- Single Catagory Area -->
                            <div class="col-12 col-sm-6 col-md">
                                <div class="single-catagory-area wow fadeInUpBig " data-wow-delay="0.2s">
                                    <div class="catagory-content">
                                    <span class="white-text fas fa-lock fa-3x p-3">

                                    </span>
                                        <!--<img src="img/core-img/icon-1.png" alt="">-->

                                        <h6>Sécurité</h6>

                                    </div>
                                </div>
                            </div>
                            <!-- Single Catagory Area -->
                            <div class="col-12 col-sm-6 col-md">
                                <div class="single-catagory-area wow fadeInUpBig " data-wow-delay="0.4s">
                                    <div class="catagory-content">
                                        <span class="white-text fas fa-clock fa-3x p-3">


                                            </span>
                                        <h6>Disponibilité</h6>

                                    </div>
                                </div>
                            </div>
                            <!-- Single Catagory Area -->
                            <div class="col-12 col-sm-6 col-md">
                                <div class="single-catagory-area wow fadeInUpBig" data-wow-delay="0.6s">
                                    <div class="catagory-content">
                                        <span class="white-text fas fa-handshake fa-3x p-3"></span>
                                        <h6>Professionnalisme</h6>

                                    </div>
                                </div>
                            </div>
                            <!-- Single Catagory Area -->
                            <div class="col-12 col-sm-6 col-md">
                                <div class="single-catagory-area wow fadeInUpBig" data-wow-delay="0.8s">
                                    <div class="catagory-content">
                                        <span class="white-text fas fa-hand-holding-heart fa-3x p-3"></span>
                                        <h6>Intégrité</h6>

                                    </div>
                                </div>
                            </div>
                            <!-- Single Catagory Area -->
                            <div class="col-12 col-md">
                                <div class="single-catagory-area wow fadeInUpBig" data-wow-delay="1s">
                                    <div class="catagory-content">
                                        <span class="white-text fas fa-heart fa-3x p-3"></span>
                                        <h6>Valeurs</h6>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ***** Catagory Area End ***** -->

    <!-- ***** About Area Start ***** -->
    <section class="dorne-about-area section-padding-0-100">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="about-content text-center">
                        <h2>Découvrez votre plateforme d'entraide <br><span>XXXX</span></h2>
                        <p>Vous avez besoin d'aide? (dons de sang, médicaments introuvables, déménagement, cours particuliers, collecte pour association ou bénévolat, nettoyer un espace vert ou même besoin d'aide pour du bricolage) XXXX est là pour vous mettre en relation avec des personnes (particuliers, associations, professionnels…) qui sont prêtes à vous aider.</p>
                        <!--'-->
                        <p> Vous voulez aider et vous ne savez pas où vous dirigez? Sur XXXXX vous pouvez aussi proposer vos services pour les autres (particuliers, associations, professionnels…) afin de les aider que ça soit pour monter un meuble, donner des cours en maths, lecture pour les enfants hospitalisés, faire des dons pour une association ou participer aux bénévolats </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ***** About Area End ***** -->


    <!-- ***** Comment ça marche Start ***** -->
    <section class="dorne-features-destinations-area">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="section-heading dark text-center">
                        <span></span>
                        <h2 text-center> Comment ça marche?</h2>
                    </div>
                    <!-- Card deck -->
                    <div class="card-deck">

                        <!-- Card -->
                        <div class="card mb-4">

                            <!--Card image-->
                            <div class="view overlay">

                                <div id="carouselExampleFade" class="card-img-top carousel slide carousel-fade" data-interval="7500" data-ride="carousel">
                                    <div class="carousel-inner">
                                        <div class="carousel-item active">
                                            <img class="d-block w-100" src="img/img/download-img/conversation-1.gif"
                                                 alt="First slide">
                                        </div>
                                        <div class="carousel-item">
                                            <img class="d-block w-100" src="img/img/download-img/conversation-2.gif"
                                                 alt="Second slide">
                                        </div>
                                        <div class="carousel-item">
                                            <img class="d-block w-100" src="img/img/download-img/conversation-3.gif"
                                                 alt="Third slide">
                                        </div>
                                    </div>
                                </div>

                                <!--<img class="card-img-top" src="img/download-img/conversation-1.gif"
                                    alt="Card image cap">-->
                                <a href="#!">
                                    <div class="mask rgba-white-slight"></div>
                                </a>

                            </div>
                            <a class="btn-floating btn-action ml-auto mr-4 pr-5 indigo">
                                <i class=""><strong>1 </strong></i></a>
                            <!--Card content-->
                            <div class="card-body">

                                <!--Title-->
                                <h4 class="card-title">Demande (Proposition) </h4>
                                <!--Text-->
                                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's
                                    content.</p>


                            </div>

                        </div>
                        <!-- Card -->

                        <!-- Card -->
                        <div class="card mb-4">

                            <!--Card image-->
                            <div class="view overlay">
                                <img class="card-img-top" src="img/img/download-img/talk.gif"
                                     alt="Card image cap">
                                <a href="#!">
                                    <div class="mask rgba-white-slight"></div>
                                </a>
                            </div>
                            <span class="btn-floating btn-action ml-auto mr-4 pr-5 indigo">
                                    <i class=""><strong>2 </strong></i></span>
                            <!--Card content-->
                            <div class="card-body">

                                <!--Title-->
                                <h4 class="card-title">Propositions (Demandes)</h4>
                                <!--Text-->
                                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's
                                    content.</p>


                            </div>

                        </div>
                        <!-- Card -->

                        <!-- Card -->
                        <div class="card mb-4">

                            <!--Card image-->
                            <div class="view overlay">
                                <img class="card-img-top" src="img/img/download-img/handshake.gif"
                                     alt="Card image cap">
                                <a href="#!">
                                    <div class="mask rgba-white-slight"></div>
                                </a>
                            </div>
                            <span class="btn-floating btn-action ml-auto mr-4 pr-5 indigo">
                                    <i class=""><strong>3 </strong></i></span>
                            <!--Card content-->
                            <div class="card-body">

                                <!--Title-->
                                <h4 class="card-title">Validation</h4>
                                <!--Text-->
                                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's
                                    content.</p>


                            </div>

                        </div>
                        <!-- Card -->

                    </div>
                    <!-- Card deck -->

                </div>
            </div>

            <div class="row">
                <div class="col-12">


                </div>
            </div>
        </div>
    </section>
    <!-- ***** Comment ça marche  End ***** -->

    <!-- ***** Découverte Start ***** -->
    <section class="dorne-features-destinations-area">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="section-heading dark text-center">
                        <span></span>
                        <h2 text-center> Découvrez les annonces</h2>
                    </div>
                    <!-- Card deck -->
                    <div class="text-wrap">
                        <div class="row">
                            <div class="col-6 col-md-4 mb-4 wow fadeInUpBig " data-wow-delay="0.2s">
                                <!-- Card Wider -->
                                <div class="card h-100 card-cascade wider">

                                    <!-- Card image -->
                                    <div class="view view-cascade overlay">
                                        <img class="card-img-top" src="img/img/download-img/sante.gif" alt="santé">
                                        <a href="#!">
                                            <div class="mask rgba-white-slight"></div>
                                        </a>
                                    </div>

                                    <!-- Card content -->
                                    <div class="card-body card-body-cascade text-center pb-0">

                                        <!-- Title -->
                                        <h4 class="card-title"><strong>Santé</strong></h4>


                                    </div>

                                </div>
                                <!-- Card Wider -->
                            </div>
                            <div class="col-6 col-md-4 mb-4 wow fadeInUpBig " data-wow-delay="0.4s">
                                <!-- Card Wider -->
                                <div class="card h-100 card-cascade wider">

                                    <!-- Card image -->
                                    <div class="view view-cascade overlay">
                                        <img class="card-img-top" src="img/img/download-img/dons-prets.gif" alt="Card image cap">
                                        <a href="#!">
                                            <div class="mask rgba-white-slight"></div>
                                        </a>
                                    </div>

                                    <!-- Card content -->
                                    <div class="card-body card-body-cascade text-center pb-0">

                                        <!-- Title -->
                                        <h4 class="card-title"><strong>Dons / Prêts d'objets </strong></h4>


                                    </div>

                                </div>
                                <!-- Card Wider -->
                            </div>
                            <div class="col-6 col-md-4 mb-4 wow fadeInUpBig " data-wow-delay="0.6s">
                                <!-- Card Wider -->
                                <div class="card h-100 card-cascade wider">

                                    <!-- Card image -->
                                    <div class="view view-cascade overlay">
                                        <img class="card-img-top" src="img/img/download-img/bricolage.gif" alt="Card image cap">
                                        <a href="#!">
                                            <div class="mask rgba-white-slight"></div>
                                        </a>
                                    </div>

                                    <!-- Card content -->
                                    <div class="card-body card-body-cascade text-center pb-0">

                                        <!-- Title -->
                                        <h4 class="card-title"><strong>Bricolage / Jardinage</strong></h4>


                                    </div>

                                </div>
                                <!-- Card Wider -->
                            </div>

                            <div class="col-6 col-md-4 mb-4 wow fadeInUpBig " data-wow-delay="0.8s">
                                <!-- Card Wider -->
                                <div class="card h-100 card-cascade wider">

                                    <!-- Card image -->
                                    <div class="view view-cascade overlay">
                                        <img class="card-img-top" src="img/img/download-img/adm-info.gif" alt="Card image cap">
                                        <a href="#!">
                                            <div class="mask rgba-white-slight"></div>
                                        </a>
                                    </div>

                                    <!-- Card content -->
                                    <div class="card-body card-body-cascade text-center pb-0">

                                        <!-- Title -->
                                        <h4 class="card-title"><strong>Administratif / informatique</strong></h4>


                                    </div>

                                </div>
                                <!-- Card Wider -->
                            </div>
                            <div class="col-6 col-md-4 mb-4 wow fadeInUpBig " data-wow-delay="1s">
                                <!-- Card Wider -->
                                <div class="card h-100 card-cascade wider">

                                    <!-- Card image -->
                                    <div class="view view-cascade overlay">
                                        <img class="card-img-top" src="img/img/download-img/Transport.gif" alt="Card image cap">
                                        <a href="#!">
                                            <div class="mask rgba-white-slight"></div>
                                        </a>
                                    </div>

                                    <!-- Card content -->
                                    <div class="card-body card-body-cascade text-center pb-0">

                                        <!-- Title -->
                                        <h4 class="card-title"><strong>Transport / Déménagement</strong></h4>


                                    </div>

                                </div>
                                <!-- Card Wider -->
                            </div>
                            <div class="col-6 col-md-4 mb-4 wow fadeInUpBig " data-wow-delay="1.2s">
                                <!-- Card Wider -->
                                <div class="card h-100 card-cascade wider">

                                    <!-- Card image -->
                                    <div class="view view-cascade overlay">
                                        <a href="#!">
                                            <div id="carouselExampleFade" class="card-img-top carousel slide carousel-fade" data-interval="5000" data-ride="carousel">
                                                <div class="carousel-inner">
                                                    <div class="carousel-item active">
                                                        <img class="d-block w-100" src="img/img/download-img/autres1.gif"
                                                             alt="First slide">
                                                    </div>
                                                    <div class="carousel-item">
                                                        <img class="d-block w-100" src="img/img/download-img/autres2.gif"
                                                             alt="Second slide">
                                                    </div>
                                                    <div class="carousel-item">
                                                        <img class="d-block w-100" src="img/img/download-img/autres3.gif"
                                                             alt="Third slide">
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="mask rgba-white-slight"></div>
                                        </a>
                                    </div>

                                    <!-- Card content -->
                                    <div class="card-body card-body-cascade text-center pb-0">

                                        <!-- Title -->
                                        <h4 class="card-title"><strong>Autres...</strong></h4>


                                    </div>

                                </div>
                                <!-- Card Wider -->
                            </div>
                        </div>
                        <div class="row justify-content-center">
                            <div class="col col-6 mb-4 wow fadeInUpBig " data-wow-delay="1s">
                                <!-- Card Wider -->
                                <div class="card h-100 card-cascade wider">

                                    <!-- Card image -->
                                    <div class="view view-cascade overlay">
                                        <img class="card-img-top" src="img/img/download-img/bénévolat.gif" alt="Card image cap">
                                        <a href="#!">
                                            <div class="mask rgba-white-slight"></div>
                                        </a>
                                    </div>

                                    <!-- Card content -->
                                    <div class="card-body card-body-cascade text-center pb-0">

                                        <!-- Title -->
                                        <h4 class="card-title"><strong>Bénévolat</strong></h4>


                                    </div>

                                </div>
                                <!-- Card Wider -->
                            </div>
                            <div class="col col-6 mb-4 wow fadeInUpBig " data-wow-delay="1s">
                                <!-- Card Wider -->
                                <div class="card h-100 card-cascade wider">

                                    <!-- Card image -->
                                    <div class="view view-cascade overlay">
                                        <img class="card-img-top" src="https://mdbootstrap.com/img/Photos/Others/photo5.jpg" alt="Card image cap">
                                        <a href="#!">
                                            <div class="mask rgba-white-slight"></div>
                                        </a>
                                    </div>

                                    <!-- Card content -->
                                    <div class="card-body card-body-cascade text-center pb-0">

                                        <!-- Title -->
                                        <h4 class="card-title"><strong>Associations</strong></h4>


                                    </div>

                                </div>
                                <!-- Card Wider -->
                            </div>

                            <div class="col col-md-6 mb-4">
                                <!-- Card Wider -->
                                <div class="card h-100 card-cascade wider wow fadeInUpBig " data-wow-delay="1.2s">

                                    <!-- Card image -->
                                    <div class="view view-cascade overlay">
                                        <img class="card-img-top" src="img/img/download-img/services-pro.gif" alt="Card image cap">
                                        <a href="#!">
                                            <div class="mask rgba-white-slight"></div>
                                        </a>
                                    </div>

                                    <!-- Card content -->
                                    <div class="card-body card-body-cascade text-center pb-0">

                                        <!-- Title -->
                                        <h4 class="card-title"><strong>Services pro</strong></h4>


                                    </div>

                                </div>
                                <!-- Card Wider -->
                            </div>

                        </div>
                        <!-- Card deck -->
                    </div>
                </div>
            </div>

        </div>
    </section>
    <!-- ***** Découverte  End ***** -->



@endsection
