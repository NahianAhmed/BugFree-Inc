@php
use App\OurProject;
use App\Setting;
use App\Services;
$project=OurProject::all();
$logo=Setting::where('field','logo')->first();
$service=Services::all();

@endphp
<header id="header" class="header-effect-shrink"
    data-plugin-options="{'stickyEnabled': true, 'stickyEffect': 'shrink', 'stickyEnableOnBoxed': true, 'stickyEnableOnMobile': true, 'stickyChangeLogo': true, 'stickyStartAt': 30, 'stickyHeaderContainerHeight': 70}">

    <div class="header-body">
        <div class="header-container container">
            <div class="header-row">
                <div class="header-column">
                    <div class="header-row">
                        <div class="header-logo">
                            <a href="{{url('/')}}">
                                <img alt="Porto" width="100" height="48" data-sticky-width="82" data-sticky-height="40"
                                    src="{{asset($logo->values)}}">
                            </a>
                        </div>
                    </div>
                </div>
                <div class="header-column justify-content-end">
                    <div class="header-row">
                        <div
                            class="header-nav header-nav-line header-nav-top-line header-nav-top-line-with-border order-2 order-lg-1">
                            <div
                                class="header-nav-main header-nav-main-square header-nav-main-effect-2 header-nav-main-sub-effect-1">
                                <nav class="collapse">
                                    <ul class="nav nav-pills" id="mainNav">
                                        <li class="dropdown">
                                            <a class="dropdown-item dropdown-toggle active" href="{{url('/')}}">
                                                Home
                                            </a>
                                        </li>

                                        <li class="dropdown">
                                            <a class="dropdown-item dropdown-toggle" href="#">
                                                Our Services
                                            </a>
                                            <ul class="dropdown-menu">
                                                
                                                @foreach($service as $service)
                                                <li><a class="dropdown-item" href="{{url('/our-service')}}/{{$service->id}}">{{$service->name}}</a></li>
                                                @endforeach
                                                
                                            </ul>
                                        </li>




                                        <li class="dropdown">
                                            <a class="dropdown-item" href="{{url('our-experts')}}">
                                                Our Experts
                                            </a>

                                        </li>
                                            </a>
                                        <li class="dropdown">
                                            <a class="dropdown-item" href="#">
                                                Our Event
                                            </a>

                                        </li>

                                        <li class="dropdown">
                                            <a class="dropdown-item dropdown-toggle" href="#">
                                                Our Projects
                                            </a>
                                            <ul class="dropdown-menu">

                                                 @foreach($project as $project)
                                                <li><a class="dropdown-item" href="{{url('/our-project')}}/{{$project->id}}">{{$project->title}}</a>
                                                </li>
                                                @endforeach



                                            </ul>
                                        </li>
                                        <li class="dropdown">
                                            <a class="dropdown-item" href="{{url('/contact-with-us')}}">
                                                Contact with us
                                            </a>

                                        </li>
                                        <li class="dropdown">
                                             <a class="dropdown-item" href="{{url('/about-us')}}">
                                               About us
                                            </a>

                                        </li>
                                        <li class="dropdown">

                                        @if(session('UserType'))
                                             <a class="dropdown-item" href="{{url('/login')}}">
                                             Dashbord
                                            </a>
                                        @else 
                                            <a class="dropdown-item" href="{{url('/login')}}">
                                             Login
                                              
                                            </a>
                                         @endif
                                        </li>



                                    </ul>

                                </nav>
                            </div>
                            <button class="btn header-btn-collapse-nav" data-toggle="collapse"
                                data-target=".header-nav-main nav">
                                <i class="fas fa-bars"></i>
                            </button>
                        </div>
                        <!-- <div class="header-nav-features order-1 order-lg-2">
                            <div class="header-nav-feature header-nav-features-social-icons d-inline-flex">
                                <ul class="header-social-icons social-icons d-none d-sm-block social-icons-clean ml-0">
                                    <li class="social-icons-facebook"><a href="http://www.facebook.com/" target="_blank"
                                            title="Facebook"><i class="fab fa-facebook-f"></i></a></li>
                                    <li class="social-icons-twitter"><a href="http://www.twitter.com/" target="_blank"
                                            title="Twitter"><i class="fab fa-twitter"></i></a></li>
                                    <li class="social-icons-linkedin"><a href="http://www.linkedin.com/" target="_blank"
                                            title="Linkedin"><i class="fab fa-linkedin-in"></i></a></li>
                                </ul>
                            </div>
                        </div> -->

                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
