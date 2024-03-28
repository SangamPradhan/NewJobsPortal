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
            <div class="row">
                <div class="col-lg-3 col-md-3 col-xs-12">
                    <div>
                        <br>

                        <img src="product/{{$job->photo}}" width="80%" height="80%" alt="" class="img-responsive wc-image">

                        <br>
                    </div>
                </div>

                <div class="col-lg-9 col-md-9 col-xs-12">
                    <form action="#" method="get" class="form">
                        <h2>{{$job->title}}</h2>

                        <p class="lead"><strong class="text-primary">${{$job->salary}}</strong> <small> per month</small></p>

                        <p class="lead">
                            <i class="fa fa-briefcase"></i> {{$job->keyword}} &nbsp;&nbsp;
                            <i class="fa fa-map-marker"></i> {{$job->location}} &nbsp;&nbsp;
                            <i class="fa fa-calendar"></i> {{$job->deadline}} &nbsp;&nbsp;
                            <i class="fa fa-file"></i> {{$job->type}}
                        </p>


                    </form>
                </div>
            </div>

            <div class="panel panel-default">
                <div class="panel-heading">
                    <h4>Job Description</h4>
                </div>

                <div class="panel-body">
                    <p>{{$job->description}}.</p>

                    <h4>Responsibillitites:</h4>

                    <p>Regular Report Writing, Liaison between the team and the client and head office, Door
                        Supervision, Staff Search, Random Searches, TAG detector procedures, Risk Assessment, Fire
                        Drills, Alarm Checks, immaculate customer services, deterrent and apprehension of offenders,
                        liaisons with emergency services.</p>

                    <h4>Qualifications:</h4>
                    <p>- Education : {{$job->qualification}}.</p>
                    <p>- MUST be Fluent in the English Language (speaking and writing).</p>
                    <p>- MUST hold a valid SIA Door Supervisor Licence.</p>
                </div>
            </div>

            <div class="panel panel-default">
                <div class="panel-heading">
                    <h4>About Our </h4>
                </div>

                <div class="panel-body">
                    <p>Looking for a job for JOB at your near place? If so, we will provide you vacancy for the
                        {{$job->title}} and professionally licensed personnel. From a
                        {{$job->title}} for {{$job->location}} to private event {{$job->title}}, you can be sure to get
                        the very best from our site.</p>

                    <div class="row">
                        <div class="col-lg-6">

                        </div>

                        <div class="col-lg-6">

                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6">
                            <p>
                                <span>Job Title</span>

                                <br>

                                <strong>{{$job->title}}</strong>
                            </p>
                        </div>

                        <div class="col-md-6">
                            <p>
                                <span>Contact name</span>

                                <br>

                                <strong>Paul Gordon</strong>
                            </p>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6">
                            <p>
                                <span>Phone</span>

                                <br>

                                <strong><a href="tel:123-456-789">123-456-789</a></strong>
                            </p>
                        </div>

                        <div class="col-md-6">
                            <p>
                                <span>Mobile phone</span>

                                <br>

                                <strong><a href="tel:456789123">456789123</a></strong>
                            </p>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6">
                            <p>
                                <span>Email</span>

                                <br>

                                <strong><a href="mailto:john@carsales.com">john@carsales.com</a></strong>
                            </p>
                        </div>

                        <div class="col-md-6">
                            <p>
                                <span>Website</span>

                                <br>

                                <strong><a href="http://www.cannonguards.com/">http://www.cannonguards.com/</a></strong>
                            </p>
                        </div>
                    </div>

                    <p>
                        <span>City</span>

                        <br>

                        <strong>{{$job->location}}</strong>
                    </p>
                </div>
            </div>

            <form method="POST" action="{{ url('apply_job',$job->id) }}" enctype="multipart/form-data">
            @csrf
            <div class="row">
                <div class="col-md-12">
                    <div class="form-group">
                        <label for="cover_letter">Cover Letter</label>
                        <textarea class="form-control" id="cover_letter" name="cover_letter" rows="5"></textarea>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-12">
                    <div class="form-group">
                        <label for="attachment">Attachment</label>
                        <input type="file" class="form-control-file" id="attachment" name="attachment" required>
                    </div>
                </div>
            </div>

            <input type="hidden" name="job_id" value="{{ $job->id }}">

            @if (Auth::check())
                <button type="submit" class="section-btn btn btn-primary pull-left">Apply for this job</button>
            @else
                <a href="{{ route('login') }}" class="btn btn-primary">Login to Apply</a>
            @endif


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
