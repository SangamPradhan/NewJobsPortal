<!DOCTYPE html>
<html class="no-js" lang="en_AU" />
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <title>New World | Employment Service</title>
    <meta name="description" content="" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no, maximum-scale=1, user-scalable=no" />
    <meta name="HandheldFriendly" content="True" />
    <meta name="pinterest" content="nopin" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css" />
    <link rel="stylesheet" type="text/css" href="assets/css/style.css" />
    <link rel="stylesheet" href="home/css/style.css">

    <!-- Fav Icon -->
    <link rel="shortcut icon" type="image/x-icon" href="#" />
</head>

@include('home.header')




<!-- Form Start -->
<form method="POST" action="{{ route('addjob') }}" enctype="multipart/form-data">
	@csrf
<body data-instant-intensity="mousedown">
            <div class="container-fluid pt-4 px-4">
                <div class="row g-4">
                    <!-- Form Section Start -->
                    <div class="col-lg-9">
                        <div class="card border-0 shadow mb-4">
                            <div class="card-body card-form p-4">
                                <h3 class="fs-4 mb-1">Job Details</h3>
                                <form method="POST" action="{{ route('addjob') }}" enctype="multipart/form-data">
                                    @csrf
                                    <div class="row">
                                        <div class="col-md-6 mb-4">
                                            <label for="title" class="mb-2">Title<span class="req">*</span></label>
                                            <input type="text" placeholder="Job Title" id="title" name="title" class="form-control">
                                        </div>
                                        <div class="col-md-6 mb-4">
                                            <label for="category" class="mb-2">Category<span class="req">*</span></label>
                                            <select name="category" class="form-select">
                                                {{--  @foreach($categories as $category)
                                                    <option value="{{ $category->id }} ">{{ $category->title }}</option>
                                                @endforeach  --}}
                                            </select>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-6 mb-4">
                                            <label for="job_nature" class="mb-2">Job Nature<span class="req">*</span></label>
                                            <select name="job_nature" class="form-select">
                                                <option>Full Time</option>
                                                <option>Part Time</option>
                                                <option>Remote</option>
                                                <option>Freelance</option>
                                            </select>
                                        </div>
                                        <div class="col-md-6 mb-4">
                                            <label for="vacancy" class="mb-2">Vacancy<span class="req">*</span></label>
                                            <input type="number" min="1" placeholder="Vacancy" id="vacancy" name="vacancy" class="form-control">
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-6 mb-4">
                                            <label for="salary" class="mb-2">Salary</label>
                                            <input type="text" placeholder="Salary" id="salary" name="salary" class="form-control">
                                        </div>
                                        <div class="col-md-6 mb-4">
                                            <label for="location" class="mb-2">Location<span class="req">*</span></label>
                                            <input type="text" placeholder="Location" id="location" name="location" class="form-control">
                                        </div>
                                    </div>

                                    <div class="mb-4">
                                        <label for="description" class="mb-2">Description<span class="req">*</span></label>
                                        <textarea class="form-control" name="description" id="description" cols="5" rows="5" placeholder="Description"></textarea>
                                    </div>

                                    <div class="mb-4">
                                        <label for="benefits" class="mb-2">Benefits</label>
                                        <textarea class="form-control" name="benefits" id="benefits" cols="5" rows="5" placeholder="Benefits"></textarea>
                                    </div>

                                    <div class="mb-4">
                                        <label for="qualifications" class="mb-2">Qualifications</label>
                                        <textarea class="form-control" name="qualifications" id="qualifications" cols="5" rows="5" placeholder="Qualifications"></textarea>
                                    </div>

                                    <div class="mb-4">
                                        <label for="keywords" class="mb-2">Keywords<span class="req">*</span></label>
                                        <input type="text" placeholder="Keywords" id="keywords" name="keywords" class="form-control">
                                    </div>

                                    <div class="mb-4">
                                        <label for="deadline" class="mb-2">Deadline</label>
                                        <input type="date" name="deadline" class="form-control">
                                        @error('deadline')
                                            <div class="text-danger">{{ $message }}</div>
                                        @enderror
                                    </div>

                                    <div class="mb-4">
                                        <label for="photo" class="mb-2">Photo</label>
                                        <input type="file" name="photo" class="form-control">
                                        @error('photo')
                                            <div class="text-danger">{{ $message }}</div>
                                        @enderror
                                    </div>

                                    <button type="submit" class="btn btn-primary">Submit</button>
                                </form>
                            </div>
                        </div>
                    </div>
                    <!-- Form Section End -->
                </div>
            </div>
            <!-- Form End -->


    <!-- SCRIPTS -->
    <script src="home/js/jquery.js"></script>
    <script src="home/js/bootstrap.min.js"></script>
    <script src="home/js/owl.carousel.min.js"></script>
    <script src="home/js/smoothscroll.js"></script>
    <script src="home/js/custom.js"></script>
</body>

<!-- FOOTER -->


</html>
@include('home.footer')
