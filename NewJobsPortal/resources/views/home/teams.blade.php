<!DOCTYPE html>
<html lang="en">

<head>

    <title>New World | Employment Service</title>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <meta name="description" content="">
    <meta name="keywords" content="">
    <meta name="author" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

    <link rel="stylesheet" href="home/css/bootstrap.min.css">
    <link rel="stylesheet" href="home/css/font-awesome.min.css">
    <link rel="stylesheet" href="home/css/owl.carousel.css">
    <link rel="stylesheet" href="home/css/owl.theme.default.min.css">

    <!-- MAIN CSS -->
    <link rel="stylesheet" href="home/css/style.css">

</head>

<body id="top" data-spy="scroll" data-target=".navbar-collapse" data-offset="50">

    <!-- PRE LOADER -->
    <section class="preloader">
        <div class="spinner">
            <span class="spinner-rotate"></span>
        </div>
    </section>

<!-- Header -->
@include('home.header')

    <section>
        <div class="container">
            <div class="text-center">
                <h1>Team</h1>

                <br>

                <p class="lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illo, alias.</p>
            </div>
        </div>
    </section>

    <section id="team" class="section-background">
        <div class="container">
            <div class="row">
                <div class="col-md-3 col-sm-6">
                    <div class="team-thumb">
                        <div class="team-image">
                            <img src="home/images/author-image-1-646x680.jpg" class="img-responsive" alt="">
                        </div>
                        <div class="team-info">
                            <h3>John Doe</h3>
                            <span>CEO</span>
                        </div>
                        <ul class="social-icon">
                            <li><a href="#" class="fa fa-facebook-square" attr="facebook icon"></a></li>
                            <li><a href="#" class="fa fa-twitter"></a></li>
                            <li><a href="#" class="fa fa-instagram"></a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="team-thumb">
                        <div class="team-image">
                            <img src="home/images/author-image-2-646x680.jpg" class="img-responsive" alt="">
                        </div>
                        <div class="team-info">
                            <h3>Jane Doe</h3>
                            <span>CTO</span>
                        </div>
                        <ul class="social-icon">
                            <li><a href="#" class="fa fa-google"></a></li>
                            <li><a href="#" class="fa fa-instagram"></a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="team-thumb">
                        <div class="team-image">
                            <img src="home/images/author-image-3-646x680.jpg" class="img-responsive" alt="">
                        </div>
                        <div class="team-info">
                            <h3>Beky Fox</h3>
                            <span>Marketing Expert</span>
                        </div>
                        <ul class="social-icon">
                            <li><a href="#" class="fa fa-twitter"></a></li>
                            <li><a href="#" class="fa fa-envelope-o"></a></li>
                            <li><a href="#" class="fa fa-linkedin"></a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="team-thumb">
                        <div class="team-image">
                            <img src="home/images/author-image-4-646x680.jpg" class="img-responsive" alt="">
                        </div>
                        <div class="team-info">
                            <h3>Daniel Smith</h3>
                            <span>Customer Support</span>
                        </div>
                        <ul class="social-icon">
                            <li><a href="#" class="fa fa-twitter"></a></li>
                            <li><a href="#" class="fa fa-google"></a></li>
                            <li><a href="#" class="fa fa-behance"></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>



        <!-- CONTACT -->
    @include('home.contact')

    <!-- FOOTER -->
    @include('home.footer')

    <!-- SCRIPTS -->
    <script src="home/js/jquery.js"></script>
    <script src="home/js/bootstrap.min.js"></script>
    <script src="home/js/owl.carousel.min.js"></script>
    <script src="home/js/smoothscroll.js"></script>
    <script src="home/js/custom.js"></script>

</body>

</html>
