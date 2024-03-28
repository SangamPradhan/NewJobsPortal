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



    <section class="section-background">
    <div class="container">

    <!-- About Section -->
    <div class="container">
        <div class="text-center">
            <h1>Jobs Listing</h1>
            <br>
            <p class="lead">You can search your desired Jobs using the select by Category Method.</p>
        </div>

        <form action="{{ route('jobs.searchByCategory') }}" method="GET">
            <div class="form-group">
                <label for="category">Category: </label>
                <select class="form-control" name="category" id="category">
                    <option value="">All Categories</option>
                    @foreach($categories as $category)
                        <option value="{{ $category->id }}">{{ $category->title }}</option>
                    @endforeach
                </select>
            </div>

            <button type="submit" class="btn btn-primary">Search</button>
        </form> <br><br><br>


        <div class="row">
            @foreach ($data as $job)
            <div class="col-lg-6 col-md-4 col-sm-6">
                <div class="courses-thumb courses-thumb-secondary">
                    <div class="courses-top">
                        <div class="courses-image">
                            <img src="product/{{$job->photo}}" width="80%" height="80%" class="img-responsive" alt="">
                        </div>
                        <div class="courses-date">
                            <span title="Posted on"><i class="fa fa-calendar"></i> {{ $job->deadline }}</span>
                            <span title="Location"><i class="fa fa-map-marker"></i> {{ $job->location }}</span>
                            <span title="Type"><i class="fa fa-file"></i> {{ $job->type }}</span>
                        </div>
                    </div>

                    <div class="courses-detail">
                        {{--  <h3><a href="{{ route('job.details', $job->id) }}">{{ $job->title }}</a></h3>  --}}

                        <h3>{{ $job->company }} Job Title: {{ $job->title }}</h3>
                        <p class="lead"><strong>Rs. {{ $job->salary }}</strong></p>
                        <p>{{ $job->company }} Available Vacancy: <strong>{{ $job->vacancy }}</strong></p>
                        <p> Jobs for <strong>{{ $job->type }}</strong></p>
                    </div>

                    <div class="courses-info">
                        <a href="{{ url('/job_details', $job->id) }}" class="section-btn btn btn-primary btn-block">View Details</a>
                    </div>
                </div>
            </div>
            @endforeach



        </div>
        <span style="padding-top: 20px;">
        {!!$data->withQueryString()->links('pagination::bootstrap-5')!!}
        </span>
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
