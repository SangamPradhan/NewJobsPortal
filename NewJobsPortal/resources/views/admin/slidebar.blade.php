<div class="sidebar pe-4 pb-3">
            <nav class="navbar bg-secondary navbar-dark">
                <a href="madmin/index.html" class="navbar-brand mx-4 mb-3">
                    <h3 class="text-primary"><i class="fa fa-user-edit me-2"></i>Admin Panel</h3>
                </a>
                <div class="d-flex align-items-center ms-4 mb-4">
                    <div class="position-relative">
                {{-- Use if-else condition to display profile photo  --}}
                        @if(auth()->user()->profile_photo_path)
                            <img class="rounded-circle" src="{{ asset(auth()->user()->profile_photo_path) }}" alt="Profile Photo" style="width: 40px; height: 40px;">
                        @else
                            <img class="rounded-circle" src="{{ asset('madmin/img/user.jpg') }}" alt="Default Profile Photo" style="width: 40px; height: 40px;">
                        @endif
                        <div class="bg-success rounded-circle border-2 border-white position-absolute end-0 bottom-0 p-1"></div>
                    </div>
                    <div class="ms-3">
                        <h6 class="mb-0">{{ auth()->user()->name }}</h6>
                        <span>Admin</span>
                    </div>
                </div>
                <div class="navbar-nav w-100">
                    <a href="{{url('/admin')}}" class="nav-item nav-link active"><i class="fa fa-tachometer-alt me-2"></i>Dashboard</a>
                    {{--  <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown"><i class="fa fa-laptop me-2"></i>Elements</a>
                        <div class="dropdown-menu bg-transparent border-0">
                            <a href="button.html" class="dropdown-item">Buttons</a>
                            <a href="typography.html" class="dropdown-item">Typography</a>
                            <a href="element.html" class="dropdown-item">Other Elements</a>
                        </div>
                    </div>  --}}
                    <a href="{{url('view_category')}}" class="nav-item nav-link"><i class="fa fa-th me-2"></i>Categories</a>
                    {{--  <a href="widgets" class="nav-item nav-link"><i class="fa fa-th me-2"></i>Widgets</a>  --}}
                    <a href="addjob" class="nav-item nav-link"><i class="fa fa-keyboard me-2"></i>Add Jobs</a>
                    <a href="{{url('admin_jobs')}}" class="nav-item nav-link"><i class="fa fa-table me-2"></i>View Jobs</a>
                    <a href="madmin/chart.html" class="nav-item nav-link"><i class="fa fa-chart-bar me-2"></i>Charts</a>
                    <a href="{{url('applications')}}" class="nav-item nav-link"><i class="far fa-file-alt me-2"></i>Applications</a>

            </nav>
        </div>
