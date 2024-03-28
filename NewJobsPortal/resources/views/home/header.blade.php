
<section class="navbar custom-navbar navbar-fixed-top" role="navigation">
    <div class="container">

        <div class="navbar-header">
            <button class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="icon icon-bar"></span>
                <span class="icon icon-bar"></span>
                <span class="icon icon-bar"></span>
            </button>

        <!-- Logo -->
        <a href="/" class="navbar-brand" style="display: flex; align-items: flex-start;">
            <img src="home/images/logo2.png" alt="Company Logo" style="max-height: 300px; width: 75px; margin-right: 10px;">
            <p style="font-size: 17px; color: black; margin: 0; align-items: flex-start;"><span style="font-size: 18px; color: green">New World </span>| Employment Service</p>
        </a>
        <!-- End Logo -->



        </div>

        <!-- MENU LINKS -->
        <div class="collapse navbar-collapse">
            <ul class="nav navbar-nav navbar-nav-first">
                <li class="active"><a href="/">Home</a></li>
                <li><a href="jobs">Jobs</a></li>
                <li><a href="about">About Us</a></li>
                <li><a href="blogs">Blog</a></li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true"
                        aria-expanded="false">More <span class="caret"></span></a>

                    <ul class="dropdown-menu">
                        @if(auth()->check())
                            <!-- If user is logged in, redirect to logout and then login page -->
                            <li><a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Admin</a></li>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                @csrf
                            </form>
                        @else
                            <!-- If user is not logged in, redirect directly to login page -->
                            <li><a href="{{ route('login') }}">Admin</a></li>
                        @endif

                        {{-- Show only when logged in --}}
                            @auth
                            <li><a href="applied_jobs">Applied Jobs</a></li>
                            @endauth
                        <li><a href="teams">Team</a></li>
                        <li><a href="moretestimonials">Testimonials</a></li>
                        <li><a href="moreterms">Terms</a></li>
                    </ul>
                </li>
                <li><a href="contactus">Contact Us</a></li>
                {{-- Show only when logged in --}}


                @if (Route::has('login'))

                @auth

                <li class="dropdown">
                    <a href="#" class="btn btn-primary dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true"
                        aria-expanded="false" style="background-color: lightgreen; color: black;">Log Out <span class="caret"></span></a>

                    <ul class="dropdown-menu">
                        <li><a href="{{ route('dashboard') }}" >Profile</a></li>
                        <li><a href="{{ route('logout') }}">Logout</a></li>
                    </ul>
                </li>
{{--  <x-app-layout>
</x-app-layout>  --}}
                {{--  <li class="nav-item">
                <x-app-layout>
                </x-app-layout>
                </li>  --}}
                @else
                <li class="dropdown">
                    <a href="#" class="btn btn-primary dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true"
                        aria-expanded="false" style="background-color: lightgreen; color: black;">Log In <span class="caret"></span></a>

                    <ul class="dropdown-menu">
                        <li><a href="{{ route('login') }}">Login as User</a></li>
                        <li><a href="{{ route('login') }}">Login as Company</a></li>
                        <li><a href="{{ route('register') }}">Register</a></li>
                    </ul>
                </li>

                @endauth
                @endif
            </ul>
        </div>

    </div>



    </ul>

</div>


</section>
