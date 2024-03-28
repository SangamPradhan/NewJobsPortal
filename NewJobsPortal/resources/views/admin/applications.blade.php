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
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600&family=Roboto:wght@500;700&display=swap"
        rel="stylesheet">

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

            @if (session('message'))
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    {{ session('message') }}
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
            @endif
            <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

            <script>
                // Close the alert when the close button is clicked
                $(document).ready(function() {
                    $(".alert").alert();

                    $(".close").click(function() {
                        $(this).parent().fadeTo(200, 0).slideUp(200, function() {
                            $(this).remove();
                        });
                    });
                });
            </script>

            <div class="container-fluid pt-4 px-4">
                <div class="bg-secondary text-center rounded p-4">
                    <div class="d-flex align-items-center justify-content-between mb-4">
                        <h2 style="font-size: 2.5rem;" class="mb-0">Applications Information & Status</h2>
                        <a href="">Show All</a>
                    </div>
                                        <div class="table-responsive">
                        <table class="table text-start align-middle table-bordered table-hover mb-0">
                            <thead>
                                <tr class="text-white">
                                    <th scope="col">ID</th>
                                    <th scope="col">Date</th>
                                    <th scope="col">Applicant Name</th>
                                    <th scope="col">Job Title</th>
                                    <th scope="col">Status</th>
                                    <th scope="col">Cover Letter</th>
                                    <th scope="col">Attachment</th>
                                    <th scope="col">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                            @foreach ($applications as $application)
                                <tr>
                                    <td>{{ $application->id }}</td>
                                    <td>{{ $application->created_at }}</td>
                                    <td>{{ $application->applicant_name }}</td>
                                    <td>{{ $application->job_title }}</td>
                                    <td>{{ $application->status }}</td>
                                    <td>{{ $application->cover_letter }}</td>
                                    <td style="max-width: 200px; overflow: hidden; text-overflow: ellipsis; white-space: nowrap;">
                                        <a href="{{ asset('attachments/' . $application->attachment) }}" target="_blank">{{ $application->attachment }}</a>
                                    </td>

                                    <td>
                                        <form action="{{ route('applications.accept', $application->id) }}" method="POST" style="display: inline;">
                                            @csrf
                                            @method('PUT')
                                            <button type="submit" onclick="return confirm('Do you want to ACCEPT this APPLICANT??')" class="btn btn-success">Accept</button>
                                        </form>

                                        <form action="{{ route('applications.reject', $application->id) }}" method="POST" style="display: inline;">
                                            @csrf
                                            @method('PUT')
                                            <button type="submit" onclick="return confirm('Are you sure to Reject this APPLICANT?')" class="btn btn-danger">Reject</button>
                                        </form>
                                    </td>

                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
            </div>
            <!-- Footer Start -->
            @include('admin.footer')
            <!-- Footer End -->
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
        <script src="madmin/js/main.js"></script>
</body>

</html>
