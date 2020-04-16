
@extends('./layouts.cadre')
@section('content')



    <div class="container  ">





        <div class="row wow fadeIn    mt-50" data-wow-delay="0.2s" style="visibility: visible; animation-delay: 0.2s; animation-name: fadeIn;">



            <div class="col-12 col-sm-3    ">



            <div class="card card-cascade  view-cascade " >


                <h5 class="card-header info-color white-text text-center py-4">
                    <strong>Filter</strong>
                </h5>

                <!-- Card content -->
                <div class="card-body" style="">


                    <form  class="text-center " method="POST" action="{{ route('register3') }}"  style="color: #757575;">
                    @csrf

                        <div class="form-row">
                            <div class="col">
                                <!-- First name -->
                                <div class="md-form">
                                    <div>
                                        <select class="mdb-select md-form colorful-select dropdown-success" id="sex" name="sex" required>
                                            <option value="" disabled selected>Domaine</option>
                                            <option value="1">Homme</option>
                                            <option value="0">Femme</option>

                                        </select>
                                    </div>
                                </div>
                            </div>

                        </div>


                        <div class="form-row">
                            <div class="col">
                                <!-- First name -->
                                <div class="md-form">
                                    <div>
                                        <select class="mdb-select md-form colorful-select dropdown-success" id="sex" name="sex" required>
                                            <option value="" disabled selected>Type Activité</option>
                                            <option value="1">Homme</option>
                                            <option value="0">Femme</option>

                                        </select>
                                    </div>
                                </div>
                            </div>

                        </div>


                        <div class="form-row">
                            <div class="col">
                                <!-- First name -->
                                <div class="md-form">
                                    <div>
                                        <select class="mdb-select md-form colorful-select dropdown-success" id="sex" name="sex" required>
                                            <option value="" disabled selected>Wilaya</option>
                                            <option value="1">Homme</option>
                                            <option value="0">Femme</option>

                                        </select>
                                    </div>
                                </div>
                            </div>

                        </div>



</form>

                </div>



            </div>


</div>






            <div class="col-12 col-sm-9   ">


                <!-- Card Regular -->
                <div class="card card-cascade  view-cascade " >


                    <h5 class="card-header info-color white-text text-center py-4">
                        <strong>Recherche</strong>
                    </h5>

                    <!-- Card content -->
                    <div class="card-body" style="">





                        <div class=" input-group mb-3">
                            <input type="text" class="form-control" placeholder="Recipient's username" aria-label="Recipient's username"
                                   aria-describedby="MaterialButton-addon2">
                            <div class="input-group-append">
                                <button class="btn btn-md btn-secondary btn-rounded m-0 px-3" type="button" id="MaterialButton-addon2">Recherche</button>
                            </div>
                        </div>




                            <select class="mdb-select md-form colorful-select dropdown-success" id="sex" name="sex" required>
                                <option value="" disabled selected>Trier par :</option>
                                <option value="1">Activités récentes</option>
                                <option value="2">Wilaya d'actvité</option>
                                <option value="3">df</option>

                            </select>










                    </div>



                </div>
                <!-- Card Regular -->

            </div>














        </div>












            <div class="container">












        <div class="row wow fadeIn  mb-50  mt-50" data-wow-delay="0.2s" style="visibility: visible; animation-delay: 0.2s; animation-name: fadeIn;">






            <div class="col-12 col-lg-12   ">


                <!-- Card Regular -->
                <div class="card card-cascade  view-cascade "  >

                    <!-- Card image -->
                    <!-- Card image -->


                    <!-- Button -->
                    <a class="btn-floating btn-action ml-auto mr-4 mdb-color deep-purple darken-4accent-4"><i
                                class="fas  fa-info "></i></a>

                    <!-- Card content -->
                    <div class="card-body">
                        <div class="row">
                        <div class="col-4 col-md-4 align-self-start  ">
                        <!-- Title -->
                        <h4 class="card-title">Titre Activite  <span class="counter">22</span></h4>
                        <hr>
                        <!-- Text -->




                        <img src="img/icone/2.jpg" class="img-thumbnail  " alt="responsive" style="height: 240px;width: 300px;" >

                        </div>








                        <div class="col-8 col-xs-8  ">


                        <blockquote class="blockquote bq-primary align-self-start">
                            <h4 class="card-title">Titre Activite</h4>
                            <hr>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's
                                content.

                                me quick example text to build on the card title and make up the bulk of the card's
                                content.
                                me quick example text to build on the card title and make up the bulk of the card's
                                content.

                            <ul class="list-unstyled list-inline font-small   "  >
                                <button class="btn btn-outline-secondary btn-rounded waves-effect  float-md-right" ><i class="fas fa-plus mr-1"></i> Details</button>
                                <li class="list-inline-item pr-2 red-text"><i class="far fa-clock pr-1"></i><b>Début activité le :</b> 05/10/2015</li>
                                <li class="list-inline-item pr-2 red-text"><i class="far fa-clock pr-1"></i><b>Fin activite le :</b> 05/10/2015</li>

                                <li class="list-inline-item pr-2 red-text"><i class="far fa-clock pr-1"></i><b>Type Activite :</b> Dons de sang</li>







                                    <li class="list-inline-item pr-2 red-text"><i class="far fa-clock pr-1"></i><b>Rating :</b>     <span id="rateMe4"  class="feedback black-text "> </span></li>











                            </ul>


                        </blockquote>


                    <!-- Card footer -->

                    <div class="card-footer color-block blue-gradient  text-center " >
                        <ul class="list-unstyled list-inline font-small">

                            <li class="list-inline-item pr-2 white-text uppercase"><i class="far fa-clock pr-1"></i>Publiée par : sjsjsjs </li>
                            <li class="list-inline-item pr-2 white-text"><i class="far fa-clock pr-1"></i> le : 05/10/2015</li>
                            <li class="list-inline-item pr-2"><a href="#" class="white-text"><i
                                            class="far fa-comments pr-1"></i>12</a></li>

                        </ul>
                    </div>


                        </div>

                        </div>



                </div>
                <!-- Card Regular -->

            </div>

            </div>










        </div>

        <hr style="background-color: #4285f4; ">









                <!-- Card -->
                <div class="card promoting-card" style="">

                    <!-- Card content -->
                    <div class="card-body d-flex flex-row">

                        <!-- Avatar -->
                        <img src="https://mdbootstrap.com/img/Photos/Avatars/avatar-8.jpg" class="rounded-circle mr-3" height="50px" width="50px" alt="avatar">

                        <!-- Content -->
                        <div>

                            <!-- Title -->
                            <h4 class="card-title font-weight-bold mb-2">New spicy meals</h4>
                            <!-- Subtitle -->
                            <p class="card-text"><i class="far fa-clock pr-2"></i>07/24/2018</p>

                        </div>

                    </div>

                    <!-- Card image -->
                    <div class="view overlay">
                        <img class="card-img-top rounded-0" src="https://mdbootstrap.com/img/Photos/Horizontal/Food/full page/2.jpg" alt="Card image cap">
                        <a href="#!">
                            <div class="mask rgba-white-slight"></div>
                        </a>
                    </div>

                    <!-- Card content -->
                    <div class="card-body">

                        <span class="float-left">49$ <span class="discount">199$</span></span>
                        <span class="float-right"><a class="" data-toggle="tooltip" data-placement="top" title="Add to Wishlist"><i
                                        class="fas fa-heart"></i></a></span>
                        <a class="" data-toggle="tooltip" data-placement="top" title="Quick Look"><i class="fas fa-eye mr-3"></i></a>
                        <a class="" data-toggle="tooltip" data-placement="top" title="Add to Wishlist"><i class="fas fa-heart"></i></a>

                    </div>

                </div>
                <!-- Card -->





















        <hr style="background-color: #4285f4; ">







        <hr style="background-color: #4285f4; ">






        <hr style="background-color: #4285f4; ">







        <hr style="background-color: #4285f4; ">












</div>






        <nav aria-label="Page navigation example">
            <ul class="pagination pg-blue justify-content-center">
                <li class="page-item ">
                    <a class="page-link" tabindex="-1">Previous</a>
                </li>
                <li class="page-item"><a class="page-link">1</a></li>
                <li class="page-item active">
                    <a class="page-link">2 <span class="sr-only">(current)</span></a>
                </li>
                <li class="page-item"><a class="page-link">3</a></li>
                <li class="page-item ">
                    <a class="page-link">Next</a>
                </li>
            </ul>
        </nav>



    </div>
@endsection


















