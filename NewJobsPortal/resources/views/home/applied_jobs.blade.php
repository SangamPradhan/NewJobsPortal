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
<base href="/public">
    <link rel="stylesheet" href="home/css/bootstrap.min.css">
    <link rel="stylesheet" href="home/css/font-awesome.min.css">
    <link rel="stylesheet" href="home/css/owl.carousel.css">
    <link rel="stylesheet" href="home/css/owl.theme.default.min.css">

    <!-- MAIN CSS -->
    <link rel="stylesheet" href="home/css/style.css">

</head>

<body id="top" data-spy="scroll" data-target=".navbar-collapse" data-offset="50">

    <!-- PRE LOADER -->
    {{--  <section class="preloader">
        <div class="spinner">

            <span class="spinner-rotate"></span>

        </div>
    </section>  --}}


    <!-- Header -->
    @include('home.header')

    <section>

        <div class="container">
        <h1 style="width: 85%; height: 85%; margin-left: 5%;">The Jobs You Applied For are Listed Here:</h1>
        <div class="panel panel-default">

            <div class="row">
            @foreach ($applications as $application)
                <div class="col-lg-3 col-md-3 col-xs-12">
                    <div>
                        <br>

                        <img src="product/{{ $application->job->photo }}" style="width: 85%; height: 85%; margin-left: 5%;" alt="" class="img-responsive wc-image">

                        <br>
                    </div>
                </div>

                <div class="col-lg-9 col-md-9 col-xs-12">
                    <form action="#" method="get" class="form">
                        <h2>{{ $application->job->title }}</h2>

                        <p class="lead"><strong class="text-primary">${{ $application->job->salary }}</strong> <small> per month</small></p>

                        <p class="lead">
                            <i class="fa fa-briefcase"></i> {{ $application->job->keyword }} &nbsp;&nbsp;
                            <i class="fa fa-map-marker"></i> {{ $application->job->location }} &nbsp;&nbsp;
                            <i class="fa fa-calendar"></i> {{ $application->job->deadline }} &nbsp;&nbsp;

                        </p>

                        <p class="lead">Status: {{ $application->status }}</p>
                        <p class="lead">Cover Letter: {{ $application->cover_letter }}</p>
                        <p class="lead">Attachment: {{ $application->attachment }}</p>


                    </form>
                </div>
            @endforeach
            </div>
        </div>

<br><br><br>
                    <div class="clearfix">
                        {{--  <a href="#" class="section-btn btn btn-primary pull-left">Apply for this job</a>  --}}

                        <ul class="social-icon pull-right">
                            <li><a href="#" class="fa fa-facebook"></a></li>
                            <li><a href="#" class="fa fa-envelope-o"></a></li>
                            <li><a href="#" class="fa fa-linkedin"></a></li>
                        </ul>
                    </div>
                    </form>
        </div>



    </section>

    <!-- FOOTER -->
    @include('home.footer')

    <!-- SCRIPTS -->
    <script src="home/home/js/jquery.js"></script>
    <script src="home/home/js/bootstrap.min.js"></script>
    <script src="home/home/js/owl.carousel.min.js"></script>
    <script src="home/home/js/smoothscroll.js"></script>
    <script src="home/home/js/custom.js"></script>

</body>

</html>
