@extends('./layouts.cadre')

@section('content')
<<<<<<< HEAD



    <div class="container h-100  mt-150 align-self-end">








        <div class="row  height-700  align-items-center justify-content-center">
=======
<section class="dorne-welcome-area " >
    <div class="container h-100">
        <div class="row h-100 align-items-center justify-content-center">
>>>>>>> 1da6a0610e792bcb63252bd0af2ff604b0547ef4
            <div class="col-md-5 pr-lg-5 mb-5 mb-md-0">
                <img src="https://res.cloudinary.com/mhmd/image/upload/v1569543678/form_d9sh6m.svg" alt="" class="img-fluid mb-3 d-none d-md-block">
                <h1>Create an Account</h1>
                <p class="font-italic text-muted mb-0">Create a minimal registeration page using Bootstrap 4 HTML form elements.</p>

                </p>
            </div>

            <div class="col-7 col-md-7  mb-50  ">
                <div class="hero-content ">

                @include('includes.alerts')
                    <!-- Material form login -->
                    <div class="card z-depth-4 rounded ">

                        <h5 class="gradient-card-header blue-gradient white-text text-center py-4"">
                        <strong>Sign in</strong>
                        </h5>

                        <!--Card content-->
                        <div class="card-body px-lg-5 pt-0">

                            <!-- Form -->
                            <form  class="text-center" method="POST" action="{{ route('login') }}" style="color: #13072c;">
                            @csrf
                                <!-- Email -->
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
                                <div class="md-form">
                                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
                                    <label for="materialLoginFormPassword">Password</label>
                                    @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror

                                </div>

                                <div class="d-flex justify-content-around">
                                    <div>
                                        <!-- Remember me -->
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                            <label class="form-check-label" for="remember">
                                                {{ __('Remember Me') }}
                                            </label>
                                        </div>
                                    </div>
                                    <div>
                                        <!-- Forgot password -->
                                        @if (Route::has('password.request'))
                                            <a  href="{{ route('password.request') }}">
                                                {{ __('Forgot Your Password?') }}
                                            </a>
                                        @endif
                                    </div>
                                </div>

                                <!-- Sign in button -->
                                <button  class="btn blue-gradient btn-block btn-rounded z-depth-1a" type="submit">Sign in</button>

                                <!-- Register -->
                                <p>Not a member?
                                    <a href="{{ route('register') }}">Register</a>
                                </p>

                                <!-- Social login -->
                                <p>or sign in with:</p>
                                <a type="button" class="btn-floating btn-fb btn-sm"  href="{{ url('/auth/redirect/facebook') }}">
                                    <i class="fab fa-facebook-f"></i>
                                </a>

                                <a type="button" class="btn-floating btn-gle btn-sm" href="{{ url('/auth/redirect/google') }}">
                                    <i class="fab fa-google fa-fw red-text"></i>
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
</section>
@endsection



