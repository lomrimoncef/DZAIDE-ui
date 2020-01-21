@extends('./layouts.cadre')
@section('content')



    <div class="container h-100  mt-150 align-self-end">







        <div class="row  height-700  align-items-center justify-content-center">
            <div class="col-md-5 pr-lg-5 mb-5 mb-md-0">
                <img src="https://res.cloudinary.com/mhmd/image/upload/v1569543678/form_d9sh6m.svg" alt="" class="img-fluid mb-3 d-none d-md-block">
                <h1>Create an Account</h1>
                <p class="font-italic text-muted mb-0">Create a minimal registeration page using Bootstrap 4 HTML form elements.</p>

                </p>
            </div>

            <div class="col-7 col-md-7  mb-50  ">
                <div class="hero-content ">


                    <!-- Material form login -->
                    <div class="card ">

                        <h5 class="gradient-card-header blue-gradient white-text text-center py-4"">
                        <strong>Sign in</strong>
                        </h5>

                        <!--Card content-->
                        <div class="card-body px-lg-5 pt-0">

                            <!-- Form -->
                            <form class="text-center" style="color: #757575;" action="#!">

                                <!-- Email -->
                                <div class="md-form ">
                                    <!--Blue select-->
                                    <select id="mystuff"class="mdb-select md-form colorful-select dropdown-secondary">
                                        <option value="0">-- Choose One --</option>
                                        <option value="opt1">House</option>
                                        <option value="opt2">Car</option>
                                        <option value="opt3">Bicycle</option>
                                    </select>





                                    <!--/Blue select-->
                                </div>

                            </form>

                            <div class="mystaff_hide mystaff_opt1">
                                <form  class="text-center " method="POST" action="{{ route('register') }}"  style="color: #757575;">
                                    @csrf

                                    <div class="form-row">
                                        <div class="col">
                                            <!-- First name -->
                                            <div class="md-form">
                                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                                @error('name')
                                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                                @enderror
                                                <label for="materialRegisterFormFirstName">Nom de famille</label>
                                            </div>
                                        </div>
                                        <div class="col">
                                            <!-- Last name -->
                                            <div class="md-form">
                                                <input id="prenom" type="text" class="form-control @error('prenom') is-invalid @enderror" name="prenom" value="{{ old('prenom') }}" required autocomplete="prenom" autofocus>

                                                @error('prenom')
                                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                                @enderror
                                                <label for="materialRegisterFormLastName">Prénom</label>
                                            </div>
                                        </div>
                                    </div>




                                    <!-- sex & date de naissance -->



                                    <div class="form-row">
                                        <div class="col">
                                            <!-- date de naissance -->
                                            <div class="md-form">
                                                <div class="md-form">
                                                    <input placeholder="Date de naissance" type="text" id="date-picker-example" name="date_naissance"class="form-control datepicker">

                                                </div>



                                            </div>
                                        </div>
                                        <div class="col">
                                            <!-- sex -->
                                            <div class="md-form">
                                                <div>
                                                    <select class="mdb-select md-form colorful-select dropdown-primary" id="sex" name="sex" required>
                                                        <option value="" disabled selected>Sex</option>
                                                        <option value="1">Homme</option>
                                                        <option value="0">Femme</option>

                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                    </div>








                                    <!-- Email   -->



                                    <div class="md-form">

                                        <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                        <label for="materialLoginFormEmail">E-mail</label>
                                        @error('email')
                                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                        @enderror
                                    </div>


























                                    <!-- Password -->

                                    <div class="form-row">
                                        <div class="col">

                                            <div class="md-form">
                                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                                @error('password')

                                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                                @enderror
                                                <label for="materialRegisterFormPassword">Password</label>
                                                <small id="materialRegisterFormPasswordHelpBlock" class="form-text text-muted mb-4">
                                                    At least 8 characters and 1 digit
                                                </small>
                                            </div>
                                        </div>
                                        <div class="col">
                                            <div class="md-form">
                                                <input id="password2" type="password" class="form-control @error('password') is-invalid @enderror" name="password_confirmation" required autocomplete="new-password">
                                                @error('password')
                                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                                @enderror
                                                <label for="materialRegisterFormPassword">Confirm Password</label>
                                            </div>
                                        </div>
                                    </div>






                                    <!-- VILLE  & adresse -->



                                    <div class="form-row">
                                        <div class="col">
                                            <!-- VILLE -->
                                            <div class="md-form ">
                                                <div>
                                                    <select class="mdb-select md-form colorful-select dropdown-primary" id="ville">
                                                        <option value="" disabled selected>Ville</option>
                                                        <option value="1">Alger</option>
                                                        <option value="2">Oran</option>

                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col">
                                            <!-- adresse -->


                                            <div class="md-form ">


                                                <input type="text" id="adresse"  name="adresse" class="form-control"required>
                                                <label for="form1">Adresse</label>
                                            </div>
                                        </div>
                                    </div>














                                    <!-- Phone number -->
                                    <div class="md-form">

                                        <input id="phone_number" type="text"  class="form-control @error('phone_number') is-invalid @enderror" name="phone_number" pattern="^\d{10}$" required>

                                        @error('phone_number')
                                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                        @enderror

                                        <label for="materialRegisterFormPhone">Phone number</label>
                                        <small id="materialRegisterFormPhoneHelpBlock" class="form-text text-muted mb-4">
                                            (format: 0xxxxxxxxx)
                                        </small>
                                    </div>











                                    <!-- Newsletter -->
                                    <div class="form-check">
                                        <input type="checkbox" class="form-check-input" id="materialRegisterFormNewsletter">
                                        <label class="form-check-label" for="materialRegisterFormNewsletter">Subscribe to our newsletter</label>
                                    </div>

                                    <!-- Sign up button -->
                                    <button  class="btn blue-gradient btn-block btn-rounded z-depth-1a" type="submit">Sign in</button>

                                    <!-- Social register -->
                                    <p>or sign up with:</p>

                                    <a type="button" class="btn-floating btn-fb btn-sm"  href="{{ url('/auth/redirect/facebook') }}">
                                        <i class="fab fa-facebook-f"></i>
                                    </a>

                                    <a type="button" class="btn-floating btn-gle btn-sm" href="{{ url('/auth/redirect/google') }}">
                                        <i class="fab fa-google fa-fw red-text"></i>
                                    </a>



                                    <hr>

                                    <!-- Terms of service -->
                                    <p>By clicking
                                        <em>Sign up</em> you agree to our
                                        <a href="" target="_blank">terms of service</a>

                                </form>
                                <!-- Form -->
                            </div>











                            <div class="mystaff_hide mystaff_opt2">
                                <form  class="text-center " method="POST" action="{{ route('register') }}"  style="color: #757575;">
                                    @csrf

                                    <div class="form-row">
                                        <div class="col">
                                            <!-- First name -->
                                            <div class="md-form">
                                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                                @error('name')
                                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                                @enderror
                                                <label for="materialRegisterFormFirstName">Nom de famille</label>
                                            </div>
                                        </div>
                                        <div class="col">
                                            <!-- Last name -->
                                            <div class="md-form">
                                                <input id="prenom" type="text" class="form-control @error('prenom') is-invalid @enderror" name="prenom" value="{{ old('prenom') }}" required autocomplete="prenom" autofocus>

                                                @error('prenom')
                                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                                @enderror
                                                <label for="materialRegisterFormLastName">Prénom</label>
                                            </div>
                                        </div>
                                    </div>




                                    <!-- sex & date de naissance -->



                                    <div class="form-row">
                                        <div class="col">
                                            <!-- date de naissance -->
                                            <div class="md-form">
                                                <div class="md-form">
                                                    <input placeholder="Date de naissance" type="text" id="date-picker-example" name="date_naissance"class="form-control datepicker">

                                                </div>



                                            </div>
                                        </div>
                                        <div class="col">
                                            <!-- sex -->
                                            <div class="md-form">
                                                <div>
                                                    <select class="mdb-select md-form colorful-select dropdown-primary" id="sex" name="sex" required>
                                                        <option value="" disabled selected>Sex</option>
                                                        <option value="1">Homme</option>
                                                        <option value="0">Femme</option>

                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                    </div>








                                    <!-- Email && Phone number   -->





                                    <div class="form-row">
                                        <div class="col">

                                            <div class="md-form">

                                                <div class="col">
                                                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                                    <label for="materialLoginFormEmail">E-mail</label>
                                                    @error('email')
                                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                                    @enderror
                                                </div>




                                            </div>
                                        </div>
                                        <div class="col">


                                            <div class="md-form">

                                                <input id="phone_number" type="text"  class="form-control @error('phone_number') is-invalid @enderror" name="phone_number" pattern="^\d{10}$" required>

                                                @error('phone_number')
                                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                                @enderror

                                                <label for="materialLoginFormEmail">Phone number</label>
                                                <small id="materialRegisterFormPhoneHelpBlock" class="form-text text-muted mb-4">
                                                    (format: 0xxxxxxxxx)
                                                </small>
                                            </div>
                                        </div>
                                    </div>
























                                    <!-- Password -->

                                    <div class="form-row">
                                        <div class="col">

                                            <div class="md-form">
                                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                                @error('password')

                                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                                @enderror
                                                <label for="materialRegisterFormPassword">Password</label>
                                                <small id="materialRegisterFormPasswordHelpBlock" class="form-text text-muted mb-4">
                                                    At least 8 characters and 1 digit
                                                </small>
                                            </div>
                                        </div>
                                        <div class="col">
                                            <div class="md-form">
                                                <input id="password2" type="password" class="form-control @error('password') is-invalid @enderror" name="password_confirmation" required autocomplete="new-password">
                                                @error('password')
                                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                                @enderror
                                                <label for="materialRegisterFormPassword">Confirm Password</label>
                                            </div>
                                        </div>
                                    </div>






                                    <!-- VILLE  & adresse -->



                                    <div class="form-row">
                                        <div class="col">
                                            <!-- VILLE -->
                                            <div class="md-form ">
                                                <div>
                                                    <select class="mdb-select md-form colorful-select dropdown-primary" id="ville">
                                                        <option value="" disabled selected>Ville</option>
                                                        <option value="1">Alger</option>
                                                        <option value="2">Oran</option>

                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col">
                                            <!-- adresse -->


                                            <div class="md-form ">


                                                <input type="text" id="adresse"  name="adresse" class="form-control"required>
                                                <label for="form1">Adresse</label>
                                            </div>
                                        </div>
                                    </div>





                                    <!-- Newsletter -->
                                    <div class="form-check">
                                        <input type="checkbox" class="form-check-input" id="materialRegisterFormNewsletter">
                                        <label class="form-check-label" for="materialRegisterFormNewsletter">Subscribe to our newsletter</label>
                                    </div>

                                    <!-- Sign up button -->
                                    <button  class="btn blue-gradient btn-block btn-rounded z-depth-1a" type="submit">Sign in</button>

                                    <!-- Social register -->
                                    <p>or sign up with:</p>

                                    <a type="button" class="btn-floating btn-fb btn-sm"  href="{{ url('/auth/redirect/facebook') }}">
                                        <i class="fab fa-facebook-f"></i>
                                    </a>

                                    <a type="button" class="btn-floating btn-gle btn-sm" href="{{ url('/auth/redirect/google') }}">
                                        <i class="fab fa-google fa-fw red-text"></i>
                                    </a>



                                    <hr>

                                    <!-- Terms of service -->
                                    <p>By clicking
                                        <em>Sign up</em> you agree to our
                                        <a href="" target="_blank">terms of service</a>

                                </form>
                            </div>












                            <div class="mystaff_hide mystaff_opt3">
                                some content to show on option Bicycle selected
                            </div>





                            <div id="msgbox"></div>
                            <!-- Form -->

                        </div>

                    </div>
                    <!-- Material form login -->















                </div>

            </div>
        </div>









































    </div>
@endsection
