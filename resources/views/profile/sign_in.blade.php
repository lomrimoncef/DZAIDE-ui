@extends('layouts.cadre')
@section('content')
    <div class="container h-100">








        <div class="row h-100 align-items-center justify-content-center">
            <div class="col-md-5 pr-lg-5 mb-5 mb-md-0">
                <img src="https://res.cloudinary.com/mhmd/image/upload/v1569543678/form_d9sh6m.svg" alt="" class="img-fluid mb-3 d-none d-md-block">
                <h1>Create an Account</h1>
                <p class="font-italic text-muted mb-0">Create a minimal registeration page using Bootstrap 4 HTML form elements.</p>

                </p>
            </div>

            <div class="col-7 col-md-7">
                <div class="hero-content ">




                    <!-- Material form login -->
                    <div class="card">

                        <h5 class="gradient-card-header blue-gradient white-text text-center py-4">
                            <strong>Sign in</strong>
                        </h5>

                        <!--Card content-->
                        <div class="card-body px-lg-5 pt-0"  style="font-family:-apple-system,BlinkMacSystemFont,'Segoe UI',Roboto-Thin;">

                            <!-- Form -->
                            <form class="text-center" style="color: #13072c;" action="#!">

                                <!-- Email -->
                                <div class="md-form">
                                    <input type="email" id="materialLoginFormEmail" class="form-control">
                                    <label for="materialLoginFormEmail">E-mail</label>
                                </div>

                                <!-- Password -->
                                <div class="md-form">
                                    <input type="password" id="materialLoginFormPassword" class="form-control">
                                    <label for="materialLoginFormPassword">Password</label>
                                </div>

                                <div class="d-flex justify-content-around">
                                    <div>
                                        <!-- Remember me -->
                                        <div class="form-check">
                                            <input type="checkbox" class="form-check-input" id="materialLoginFormRemember">
                                            <label class="form-check-label" for="materialLoginFormRemember">Remember me</label>
                                        </div>
                                    </div>
                                    <div>
                                        <!-- Forgot password -->
                                        <a href="">Forgot password?</a>
                                    </div>
                                </div>

                                <!-- Sign in button -->
                                <button class="btn btn-outline-blue  btn-rounded btn-block my-4 waves-effect z-depth-0" type="submit">Sign in</button>

                                <!-- Register -->
                                <p>Not a member?
                                    <a href="register.html">Register</a>
                                </p>

                                <!-- Social login -->
                                <p>or sign in with:</p>
                                <a type="button" class="btn-floating btn-fb btn-sm">
                                    <i class="fab fa-facebook-f"></i>
                                </a>
                                <a type="button" class="btn-floating btn-tw btn-sm">
                                    <i class="fab fa-twitter"></i>
                                </a>
                                <a type="button" class="btn-floating btn-li btn-sm">
                                    <i class="fab fa-linkedin-in"></i>
                                </a>
                                <a type="button" class="btn-floating btn-git btn-sm">
                                    <i class="fab fa-github"></i>
                                </a>

                            </form>
                            <!-- Form -->

                        </div>

                    </div>
                    <!-- Material form login -->





                </div>

            </div>
        </div>









































    </div>
@endsection
