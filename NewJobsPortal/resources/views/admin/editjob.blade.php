<!DOCTYPE html>
<html lang="en">
<base href="/public">
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
        <div id="spinner"
            class="show bg-dark position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
            <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
                <span class="sr-only">Loading...</span>
            </div>
        </div>
        <!-- Spinner End -->


        <!-- Sidebar Start -->
        @include('admin.slidebar')
        <!-- Sidebar End -->


        <!-- Content Start -->
        <div class="content">

            <!-- Navbar Start -->
            @include('admin.navbar')
            <!-- Navbar End -->

            @if(session('success'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                {{ session('success') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">X</button>
            </div>
            @endif

            <div class="container-fluid pt-4 px-4">

                    <div class="bg-secondary text-center rounded p-4"> <!-- Centering the form contents -->
                        <h1 style="font-size: 2.5rem;" class="mb-4 text-center">Edit Your Job Vacancy Post Details:</h1>

                        <div class="mb-4 text-center">
                    {{--  <div class="col-sm-12 col-xl-6">  --}}

                                <form action="{{url('/update_job', $job->id)}}" method="post" enctype="multipart/form-data">
                                    @csrf
                                    <div class="row mb-3">
                                        <label for="category" class="col-sm-3 col-form-label">Category</label>
                                        <div class="col-sm-9">
                                            <select class="form-control" name="category" id="category" data-live-search="true" placeholder="{{ old('category', $job->category) }}" value="{{$job->category}}"
                                                title="Select Category">
                                                @foreach ($categories as $category)
                                                    <option value="{{ $category->id }}">{{ $category->title }}</option>
                                                @endforeach
                                            </select>
                                            @error('category')
                                                <div class="error-message">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="row mb-3">
                                        <label for="type" class="col-sm-3 col-form-label">Type</label>
                                        <div class="col-sm-9">
                                            <select class="form-control" id="type" name="type"
                                                data-style="btn-black" data-width="100%" data-live-search="true"
                                                title="Select Type of Job" placeholder="{{ old('type', $job->type) }}" value="{{$job->type}}">
                                                <option value="Full-Time">Full-Time</option>
                                                <option value="Part-Time">Part-Time</option>
                                                <option value="Intern">Intern</option>
                                            </select>
                                            @error('type')
                                                <div class="error-message">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>


                                    <div class="row mb-3">
                                        <label for="region" class="col-sm-3 col-form-label">Job Region</label>
                                        <div class="col-sm-9">
                                            <select class="form-control" id="region" name="region"
                                                data-style="btn-black" data-width="100%" data-live-search="true"
                                                title="Select Region" placeholder="{{ old('location', $job->location) }}" value="{{$job->location}}">
                                                <option value="Anywhere">Anywhere</option>
                                                <option value="Gandaki Province">Gandaki Province</option>
                                                <option value="Madhesh Pradesh">Madhesh Pradesh</option>
                                                <option value="Lumbini">Lumbini</option>
                                                <option value="Bagmati">Bagmati</option>
                                                <option value="Sudurpaschim">Sudurpaschim</option>
                                            </select>
                                            @error('region')
                                                <div class="error-message">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>


                                    <div class="row mb-3">
                                        <label for="title" class="col-sm-3 col-form-label">Job Title</label>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control" id="title" name="title"
                                                placeholder="Enter Job Title" value="{{ old('title', $job->title) }}" required>
                                            @error('title')
                                                <div class="error-message">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>


                                    <div class="row mb-3">
                                        <label for="description" class="col-sm-3 col-form-label">Job Description</label>
                                        <div class="col-sm-9">
                                            <textarea class="form-control" id="description" name="description" rows="4" placeholder="Enter Job Description" required>{{ $job->description }}</textarea>
                                                @error('description')
                                                    <div class="error-message">{{ $message }}</div>
                                                @enderror
                                        </div>
                                    </div>


                                    <div class="row mb-3">
                                        <label for="qualifications" class="col-sm-3 col-form-label">Qualifications
                                            Required</label>
                                        <div class="col-sm-9">
                                            <select class="form-control" id="qualification" name="qualification"
                                                data-style="btn-black" data-width="100%" data-live-search="true"
                                                title="Select Qualifications" value="{{ old('qualification', $job->qualification) }}">
                                                <option value="+2">+2</option>
                                                <option value="Bachelor">Bachelors Degree</option>
                                                <option value="Masters">Masters Degree</option>
                                                <option value="PhD">PhD Degree</option>
                                            </select>
                                            @error('qualification')
                                                <div class="error-message">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="row mb-3">
                                        <label for="vacancy" class="col-sm-3 col-form-label">Vacancy</label>
                                        <div class="col-sm-9">
                                            <input type="number" class="form-control" id="vacancy" name="vacancy"
                                                data-style="btn-black" data-width="100%" data-live-search="true"
                                                title="Enter Available Vacancies" value="{{ old('vacancy', $job->vacancy) }}">
                                            @error('vacancy')
                                                <div class="error-message">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="row mb-3">
                                        <label for="keywords" class="col-sm-3 col-form-label">Salary</label>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control" id="salary"
                                                name="salary" placeholder="Enter Salary in figure" value="{{ old('salary', $job->salary) }}">
                                            @error('salary')
                                                <div class="error-message">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>


                                    <div class="row mb-3">
                                        <label for="benefits" class="col-sm-3 col-form-label">Benefits</label>
                                        <div class="col-sm-9">
                                            <textarea class="form-control" id="benefits" name="benefits" rows="4" placeholder="{{ old('benefits', $job->benefits) }}"> {{$job->benefits}} </textarea>
                                            @error('benefits')
                                                <div class="error-message">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>


                                    <div class="row mb-3">
                                        <label for="keywords" class="col-sm-3 col-form-label">Keywords</label>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control" id="keyword"
                                                name="keyword" placeholder="Enter Keywords" value="{{ old('keyword', $job->keyword) }}">
                                            @error('keyword')
                                                <div class="error-message">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>


                                    <div class="row mb-3">
                                        <label for="deadline" class="col-sm-3 col-form-label">Deadline</label>
                                        <div class="col-sm-9">
                                            <input type="datetime-local" class="form-control form-control-lg mb-4"
                                                style="background-color: #5a5858" name="deadline" id="deadline" value="{{ date('Y-m-d\TH:i', strtotime($job->deadline)) }}">
                                            @error('deadline')
                                                <div class="error-message">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>

                                    <script>
                                        // Get tomorrow's date
                                        var tomorrow = new Date();
                                        tomorrow.setDate(tomorrow.getDate() + 1);

                                        // Convert to the format required by datetime-local input
                                        var year = tomorrow.getFullYear();
                                        var month = tomorrow.getMonth() + 1;
                                        var day = tomorrow.getDate();
                                        var hours = '00'; // Set to the beginning of the day
                                        var minutes = '00'; // Set to the beginning of the day

                                        // Add leading zero if needed
                                        if (month < 10) {
                                            month = '0' + month;
                                        }
                                        if (day < 10) {
                                            day = '0' + day;
                                        }

                                        // Set the minimum value for the datetime-local input (beginning of tomorrow)
                                        var minDateTime = year + '-' + month + '-' + day + 'T' + hours + ':' + minutes;
                                        document.getElementById('deadline').min = minDateTime;
                                    </script>

                                    <div class="row mb-3">
                                        <label for="photo" class="col-sm-3 col-form-label">Current Logo</label>
                                        <div class="col-sm-9">
                                            <img src="/product/{{ $job->photo }}" alt="Product Image" height="600px" width="600px" class="img-fluid">
                                        </div>
                                    </div>


                                    <div class="row mb-3">
                                        <label for="photo" class="col-sm-3 col-form-label">Update Logo</label>
                                        <div class="col-sm-9">
                                            <input type="file" class="form-control" id="photo"
                                                name="photo">
                                            @error('photo')
                                                <div class="error-message">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>

                                    {{--  <div class="row g-4" style="margin-top: 20px;">
                                        <div class="navbar bg-secondary navbar-dark" style="width: 100%;">
                                            <input  onclick="return confirm('Are you sure to edit this job??')" type="submit" value="Update Job" class="btn btn-lg btn-success"
                                                style="background-color: green; color: white; font-size: 1.2rem; padding: 10px 20px; width: 100%;">
                                        </div>
                                    </div>  --}}
                                    <div class="row g-4" style="margin-top: 20px;">
                                    <div class="navbar bg-secondary navbar-dark" style="width: 100%;">
                                        <input  onclick="return confirm('Are you sure to edit this job??')" type="submit" value="Update Job" class="btn btn-lg btn-success"
                                            style="background-color: green; color: white; font-size: 1.2rem; padding: 10px 20px; width: 49%;">

                                        <!-- Cancel Button -->
                                        <a href="{{ url('/admin_jobs') }}" class="btn btn-lg btn-danger" style="font-size: 1.2rem; padding: 10px 20px; width: 49%;">
                                            Cancel
                                        </a>
                                    </div>
                                </div>

                                </form>



                        </div>
                    </div>


            </div>




            <!-- Footer Start -->
            @include('admin.footer')
            <!-- Footer End -->


        </div>
        <!-- Content End -->


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
