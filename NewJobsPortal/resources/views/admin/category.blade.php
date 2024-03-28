<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Admin</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="madmin/img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600&family=Roboto:wght@500;700&display=swap" rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="madmin/lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="madmin/lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css" rel="stylesheet" />

    <!-- Customized Bootstrap Stylesheet -->
    <link href="madmin/css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="madmin/css/style.css" rel="stylesheet">
</head>

<body>
    <div class="container-fluid position-relative d-flex p-0">
        <!-- Spinner Start -->
        {{--  <div id="spinner" class="show bg-dark position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
            <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
                <span class="sr-only">Loading...</span>
            </div>
        </div>  --}}
        <!-- Spinner End -->


        <!-- Sidebar Start -->
        @include('admin.slidebar')
        <!-- Sidebar End -->

        <!-- Content Start -->
        <div class="content">
            <!-- Navbar Start -->
            @include('admin.navbar')
            <!-- Navbar End -->

            <!-- Category Container Start -->
            <div class="container-fluid pt-4 px-4">

                @if(session()->has('message'))
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">X</button>
                    {{ session()->get('message') }}
                </div>

                @endif

                <div class="row vh-80 bg-secondary rounded mx-0">
                <h3> <br> Add Your required Categories Here:</h3>
                    <div class="col-md-12">
                        <form action="{{url('/add_category')}}" method="post">
                        @csrf
                        <br>
                        {{--  form-control bg-dark  --}}
                            <input class="input_color" type="text" name="category" placeholder="Write category name" required>
                            <input class="input_color" type="text" name="abbr" placeholder="Abbr for category" required>
                            <input type="submit"  name="add_category" class="btn btn-success m-2" value="Add Category">
                        </form>
                    </div>
                </div>

                <div class="col-12">
                        <div class="bg-secondary rounded h-100 p-4">
                            <br><br> <h4 class="mb-4">Categories Table</h4>
                            <div class="table-responsive">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th scope="col">ID</th>
                                            <th scope="col">Title</th>
                                            <th scope="col">abbr</th>
                                            <th scope="col">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($data as $data)
                                        <tr>
                                            <th scope="row">{{$data->id}}</th>
                                            <td>{{$data->title}}</td>
                                            <td>{{$data->abbr}}</td>
                                            <td>
                                                <a onclick="return confirm('Are you sure to DELETE this CATEGORY?')" class="btn btn-danger" href="{{url('delete_category', $data->id)}}">Delete</a>
                                            </td>
                                        </tr>
                                        @endforeach

                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>

            </div>




            <!-- Category Container End -->

            <!-- Footer -->
            @include('admin.footer')
        </div>



    <!-- Back to Top -->
        <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>
    </div>


    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="madmin/lib/chart/chart.min.js"></script>
    <script src="madmin/lib/easing/easing.min.js"></script>
    <script src="madmin/lib/waypoints/waypoints.min.js"></script>
    <script src="madmin/lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="madmin/lib/tempusdominus/js/moment.min.js"></script>
    <script src="madmin/lib/tempusdominus/js/moment-timezone.min.js"></script>
    <script src="madmin/lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js"></script>

    <!-- Template Javascript -->
    <script src="madmin/js/main.js"></script>madmin/
</body>

</html>
