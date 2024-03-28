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

            <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>





            <div class="container-fluid pt-4 px-4">

            @if(session('update'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                {{ session('update') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">X</button>
            </div>
            @endif

                <div class="bg-secondary text-center rounded p-4">
                    <div class="d-flex align-items-center justify-content-between mb-4">
                        <h6 class="mb-0">Available Jobs</h6>
                        <a href="">Show All</a>
                    </div>
                    <div class="table-responsive">
                        <table class="table text-start align-middle table-bordered table-hover mb-0">
                            <thead>
                                <tr class="text-white">
                                    <th scope="col">ID</th>
                                    <th scope="col">Job Title</th>
                                    <th scope="col">Type</th>
                                    <th scope="col">Location</th>
                                    <th scope="col">Qualification</th>
                                    <th scope="col">Vacancy</th>
                                    <th scope="col">Salary</th>
                                    <th scope="col">Deadline</th>
                                    <th scope="col">Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($jobs as $job)
                                    <tr>
                                        <th scope="row">{{ $job->id }}</th>
                                        <td>{{ $job->title }}</td>
                                        <td>{{ $job->type }}</td>
                                        {{--  <td>{{ Str::limit($job->description, 50) }}</td>  --}}
                                        <td>{{ $job->location }}</td>
                                        <td>{{ $job->qualification }}</td>
                                        <td>{{ $job->vacancy }}</td>
                                        <td>{{ $job->salary }}</td>
                                        <td>{{ $job->deadline }}</td>
                                        <td>
                                            <a onclick="return confirm('Do you want to edit this job??')"
                                                class="btn btn-success" href="{{ url('editjob', $job->id) }}">Edit</a>
                                            <a onclick="return confirm('Are you sure to DELETE this JOB?')"
                                                class="btn btn-danger"
                                                href="{{ url('delete_job', $job->id) }}">Delete</a>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <!-- Footer Start -->
            @include('admin.footer')
            <!-- Footer End -->
        </div>

        {{--  <script>
    document.querySelectorAll('.delete-job-btn').forEach((btn) => {
        btn.addEventListener('click', (e) => {
            if (confirm("Are you sure you want to delete this job?")) {
                fetch("{{ route('job_delete', $job->id) }}", {
                    method: "DELETE",
                })
                .then((response) => response.text())
                .then((data) => {
                    if (data) {
                        location.reload();
                    }
                })
                .catch((error) => {
                    console.error("Error:", error);
                });
            }
        });
    });
</script>  --}}

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
