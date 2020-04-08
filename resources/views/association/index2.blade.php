
@extends('./layouts.cadre')
@section('content')



    <div class="container  ">





































        <div class="row wow fadeIn    mt-50" data-wow-delay="0.2s" style="visibility: visible; animation-delay: 0.2s; animation-name: fadeIn;">



            <div class="col-12 col-sm-3 mb-15     ">



                <div class="card card-cascade  view-cascade " >


                    <h5 class="card-header info-color white-text text-center py-4">
                        <strong>Filter</strong>
                    </h5>

                    <!-- Card content -->
                    <div class="card-body" style="">


                        <form  class="text-center " method="POST" action="{{ route('register') }}"  style="color: #757575;">
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


                @foreach($activites as $activite)


                    <div class="col-12 col-lg-4 mb-15  mt-15  ">


                        <!-- Card -->
                        <div class="card promoting-card" style="">

                            <!-- Card content -->
                            <div class="card-body d-flex flex-row">

                                <!-- Avatar -->
                                <img src="img/icone/2.jpg" class="rounded-circle mr-3" height="50px" width="50px" alt="avatar">

                                <!-- Content -->
                                <div>

                                    <!-- Title -->
                                    <h4 class="card-title font-weight-bold mb-2">{{ $activite->id }}{{ $activite->titre_activite }}</h4>


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
                                <p  id="collapseContent">{{ $activite->details }}   Recently, we added several exotic new dishes to our restaurant menu. They come from countries such as Mexico, Argentina, and Spain. Come to us, have some delicious wine and enjoy our juicy meals from around the world.</p>


                                <ul class="list-unstyled list-inline font-small">
                                    <li class="list-inline-item pr-2 black-text"><i class="far fa-clock pr-1"></i>05/10/2015</li>
                                    <li class="list-inline-item pr-2"><a href="#" class="black-text"><i
                                                    class="far fa-comments pr-1"></i>12</a></li>
                                    <li class="list-inline-item pr-2"><a href="#" class="black-text"><i class="fab fa-facebook-f pr-1">
                                            </i>21</a></li>
                                    <li class="list-inline-item"><a href="#" class="black-text"><i class="fab fa-twitter pr-1"> </i>5</a></li>
                                </ul>


                            </div>

                        </div>
                        <!-- Card -->


                    </div>







                @endforeach





































            </div>

            <hr style="background-color: #4285f4; ">



























<div >
            {!! $activites->links() !!}
        </div>


        </div>









    </div>
@endsection


















