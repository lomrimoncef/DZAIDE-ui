<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <!-- The above 4 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <!-- Favicon -->
    <link rel="icon" href="img/core-img/favicon.ico">

    <!-- Core Stylesheet -->
    <link href="css/mdbootstrap.css" rel="stylesheet">
    <link href="css/all.css" rel="stylesheet">
    
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
    @yield('head')

</head>

<body>

<div id="wrapper">


<!-- ***** Search Form Area ***** -->
<div class="dorne-search-form d-flex align-items-center">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="search-close-btn" id="closeBtn">
                    <i class="pe-7s-close-circle" aria-hidden="true"></i>
                </div>
                <form action="#" method="get">
                    <input type="search" name="caviarSearch" id="search" placeholder="Search Your Desire Destinations or Events">
                    <input type="submit" class="d-none" value="submit">
                </form>
            </div>
        </div>
    </div>
</div>

<!-- ***** Header Area Start ***** -->
<header class="header_area" id="header">

    <div class="row h-100">
        <div class="col-12 h-100">

            <nav class=" navbar navbar-expand-lg   nav-fill h-100 ">
                <a class="navbar-brand" href="index.html"><img src="img/core-img/logo.png" alt=""></a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#dorneNav" aria-controls="dorneNav" aria-expanded="false" aria-label="Toggle navigation"><span class="fa fa-bars"></span></button>
                <!-- Nav -->
                <div class="collapse navbar-collapse" id="dorneNav">
                    <ul class="navbar-nav mr-auto" id="dorneMenu">
                        <li class="nav-item {{ Request::is('index') ? 'active' : '' }}">
                            <a class="nav-link" href="{{ url('index') }}">Home <span class="sr-only">(current)</span></a>
                        </li>
                        <li class="nav-item dropdown {{ Request::is('demandes_annonces') ? 'active' : '' }}">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown2" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Annonces</a>
                            <div class="dropdown-menu dropdown-secondary" aria-labelledby="navbarDropdown2">
                                <a class="dropdown-item" href="{{ url('demandes_annonces') }}">Demandes d'aide</a>
                                <a class="dropdown-item" href="{{ url('propositions_annonces') }}">Propositions d'aide</a>
                            </div>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown2" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Bénévolats</a>
                            <div class="dropdown-menu dropdown-secondary" aria-labelledby="navbarDropdown2">
                                <a class="dropdown-item" href="index.html">Demandes de bénévols</a>
                                <a class="dropdown-item" href="explore.html">Propositions de services bénévols</a>
                            </div>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="contact.html">Activités Association</a>
                        </li>
                        <!-- <li class="nav-item">
                            <a class="nav-link" href="contact.html">Services Professionnels</a>
                        </li>-->
                        <li class="nav-item">
                            <a class="nav-link" href="contact.html">Contact</a>
                        </li>
                    </ul>



                        @guest
                        <div class="dorne-signin-btn">
                            <a href="{{ route('login') }}">Connexion</a>
                        </div>
                                @if (Route::has('register'))
                                    <div class="dorne-signin-btn">
                                        <a href="{{ route('register') }}">Inscription</a>
                                    </div>
                                @endif

                        @else


                        <!--Dropdown primary-->
                            <div class="dropdown">
                                <!--Trigger-->

                                <button class="btn btn-primary dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown"
                                        aria-haspopup="true" aria-expanded="false"> {{ Auth::user()->name }}</button>
                                <!--Menu-->
                                <div class="dropdown-menu dropdown-primary dropdown-menu-right">
                                    <a class="dropdown-item" href="{{ route('logout') }}"> Profile</a>
                                    
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                    onclick="event.preventDefault();
                                                        document.getElementById('logout-form').submit();"> Logout</a>
                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </div>
                        <!--/Dropdown primary-->
                    @endguest

                <!-- Add listings btn -->

                        </div>
            </nav>
        </div>

    </div>
</header>


<!-- ***** Welcome Area Start ***** -->



    @yield('content')


    

<!-- ***** Welcome Area End ***** -->
<!-- ****** Footer Area Start ****** -->
<footer class="dorne-footer-area">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12 d-md-flex align-items-center justify-content-between">
                <div class="footer-text">
                    <p>
                        <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                        Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | Made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a> &amp; distributed by <a href="https://themewagon.com" target="_blank">ThemeWagon</a>
                        <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                    </p>
                </div>
                <div class="footer-social-btns">
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
                            <!--
                    <a href="#"><i class="fa fa-linkedin" aria-haspopup="true"></i></a>
                    <a href="#"><i class="fa fa-behance" aria-hidden="true"></i></a>
                    <a href="#"><i class="fa fa-dribbble" aria-hidden="true"></i></a>
                    <a href="#"><i class="fa fa-twitter" aria-haspopup="true"></i></a>
                    <a href="#"><i class="fa fa-facebook" ></i></a>-->
                </div>
            </div>
        </div>
    </footer>


    <!-- ****** Footer Area End ****** -->









<!-- SCRIPTS -->
<!-- JQuery -->
<script src="mdb-pro_4.8.10/js/jquery-3.4.1.min.js"></script>
<!-- Bootstrap tooltips -->
<script type="text/javascript" src="mdb-pro_4.8.10/js/popper.min.js"></script>
<!-- Bootstrap core JavaScript -->
<script type="text/javascript" src="mdb-pro_4.8.10/js/bootstrap.min.js"></script>
<!-- MDB core JavaScript -->
<script type="text/javascript" src="mdb-pro_4.8.10/js/mdb.min.js"></script>
 
<script src="js/others/plugins.js"></script>
<!-- All Plugins js -->

<!-- Active JS -->
<script src="js/active.js"></script>
@yield('js')


<!-- rating.js file -->
<script type="text/javascript" src="mdb-pro_4.8.10/js/addons/rating.js"></script>






<!--

<script type="text/javascript">


    //add collapse to all tags hiden and showed by select mystuff
    $('.mystaff_hide').addClass('collapse');

    //on change hide all divs linked to select and show only linked to selected option
    $('#mystuff').change(function(){
        //Saves in a variable the wanted div
        var selector = '.mystaff_' + $(this).val();

        //hide all elements
        $('.mystaff_hide').collapse('hide');

        //show only element connected to selected option
        $(selector).collapse('show');
    });

</script>








<script type="text/javascript">// Data Picker Initialization

    // Material Select Initialization
    $(document).ready(function() {
        $('.mdb-select').materialSelect();
    });


    // Rating Initialization
    $(document).ready(function() {
        $('#rateMe4').mdbRate();
    });




    // Extend the default picker options for all instances.
    $.extend($.fn.pickadate.defaults, {
        monthsFull: ['Janvier', 'Février', 'Mars', 'Avril', 'Mai', 'Juin', 'Juillet', 'Août', 'Septembre', 'Octobre',
            'Novembre', 'Décembre'],
        weekdaysShort: ['Dim', 'Lun', 'Mar', 'Mer', 'Jeu', 'Ven', 'Sam'],
        today: 'aujourd\'hui',
        clear: 'effacer',
        format:'yyyy-mm-dd',
        formatSubmit: 'yyyy-mm-dd'
    })

    // Or, pass the months and weekdays as an array for each invocation.
    $('.datepicker').pickadate({
        monthsFull: ['Janvier', 'Février', 'Mars', 'Avril', 'Mai', 'Juin', 'Juillet', 'Août', 'Septembre', 'Octobre',
            'Novembre', 'Décembre'],
        weekdaysShort: ['Dim', 'Lun', 'Mar', 'Mer', 'Jeu', 'Ven', 'Sam'],
        today: 'aujourd\'hui',
        clear: 'effacer',
        format:'yyyy-mm-dd',
        formatSubmit: 'yyyy-mm-dd'
    })

</script>

-->

</body>
</html>