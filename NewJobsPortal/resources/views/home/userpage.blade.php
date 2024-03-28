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

    <!-- HOME -->
    <section id="home">
        <div class="row">
            <div class="owl-carousel owl-theme home-slider">
                <div class="item item-first">
                    <div class="caption">
                        <div class="container">
                            <div class="col-md-6 col-sm-12">
                                <h1>Lorem ipsum dolor sit amet.</h1>
                                <h3>Voluptas dignissimos esse, explicabo cum fugit eaque, perspiciatis quia ab nisi
                                    sapiente delectus eiet.</h3>
                                <a href="jobs" class="section-btn btn btn-default">Browse Jobs</a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="item item-second">
                    <div class="caption">
                        <div class="container">
                            <div class="col-md-6 col-sm-12">
                                <h1>Distinctio explicabo vero animi culpa facere voluptatem.</h1>
                                <h3>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nemo, excepturi.</h3>
                                <a href="jobs" class="section-btn btn btn-default">Browse Jobs</a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="item item-third">
                    <div class="caption">
                        <div class="container">
                            <div class="col-md-6 col-sm-12">
                                <h1>Efficient Learning Methods</h1>
                                <h3>Nam eget sapien vel nibh euismod vulputate in vel nibh. Quisque eu ex eu urna
                                    venenatis sollicitudin ut at libero.</h3>
                                <a href="jobs" class="section-btn btn btn-default">Browse Jobs</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <main>
        <section>
            <div class="container">
                <div class="row">
                    <div class="col-md-12 col-sm-12">
                        <div class="text-center">
                            <h2>About us</h2>

                            <br>

                            <p class="lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Inventore
                                molestias ipsa veritatis nihil iusto maiores natus dolor, a reiciendis corporis
                                obcaecati ex. Totam assumenda impedit aut eum, illum distinctio saepe explicabo.
                                Consequuntur molestiae similique id quos, quasi quas perferendis laboriosam, fugit natus
                                odit totam! Id dolores saepe, sint debitis rerum dolorem tempora aliquid, pariatur enim
                                nisi. Quia ab iusto assumenda.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>

        {{--  Featured jobs  --}}
        @include('home.slider')

        <!-- Services -->
        @include('home.services')

        <!-- Testimonials -->
        @include('home.testimonials')


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
