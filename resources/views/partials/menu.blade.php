<div class="app-menu navbar-menu">
    <!-- LOGO -->
    <div class="navbar-brand-box">
        <!-- Dark Logo-->
        <a href="index.html" class="logo logo-dark">
            <span class="logo-sm">
                <br />
                <img src="{{asset('assets/images/users/user-dummy-img.jpg')}}" alt="" style="width: 80px; border-radius: 50%">
                <br />
                    Welcome <strong>{{ auth()->user()->name }}</strong>
            </span>
            <span class="logo-lg">
                <br />
                <img src="{{asset('assets/images/users/user-dummy-img.jpg')}}" alt=""  style="width: 80px; border-radius: 50%">
                <br />
                    Welcome <strong>{{ auth()->user()->name }}</strong>
            </span>
        </a>
        <!-- Light Logo-->
        <a href="index.html" class="logo logo-light">
            <span class="logo-sm">
                <br />
                <img src="{{asset('assets/images/users/user-dummy-img.jpg')}}" alt=""  style="width: 80px; border-radius: 50%">
                <br />
                    Welcome <strong>{{ auth()->user()->name }}</strong>
            </span>
            <span class="logo-lg">
                <br />
                <img src="{{asset('assets/images/users/user-dummy-img.jpg')}}" alt="" style="width: 80px; border-radius: 50%">
                <br />
                    Welcome <strong>{{ auth()->user()->name }}</strong>
            </span>
        </a>
        <button type="button" class="btn btn-sm p-0 fs-20 header-item float-end btn-vertical-sm-hover"
            id="vertical-hover">
            <i class="ri-record-circle-line"></i>
        </button>
    </div>

            <div id="scrollbar">
                <div class="container-fluid">

                    <div id="two-column-menu">
                    </div>
                    <ul class="navbar-nav" id="navbar-nav">
                        <li class="menu-title"><span data-key="t-menu">Menu</span></li>




                        <li class="nav-item">
                            <a class="nav-link menu-link" href="{{route('admin-dashboard')}}">
                                <i class="ri-layout-3-line"></i> <span data-key="t-dashboard">Dashboard</span>
                            </a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link menu-link" href="{{route('patient-index')}}">
                                <i class="ri-layout-3-line"></i> <span data-key="t-dashboard">Patients</span>
                            </a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link menu-link" href="{{route('doctor-index')}}">
                                <i class="ri-layout-3-line"></i> <span data-key="t-dashboard">Doctors</span>
                            </a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link menu-link" href="{{route('reception-index')}}">
                                <i class="ri-layout-3-line"></i> <span data-key="t-dashboard">Receptionist</span>
                            </a>
                        </li>

                        {{-- <li class="nav-item">
                            <a class="nav-link menu-link" href="{{route('pharm-index')}}">
                                <i class="ri-layout-3-line"></i> <span data-key="t-dashboard">Pharmacy</span>
                            </a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link menu-link" href="{{route('lab-index')}}">
                                <i class="ri-layout-3-line"></i> <span data-key="t-dashboard">Laboratory</span>
                            </a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link menu-link" href="{{route('accountant-index')}}">
                                <i class="ri-layout-3-line"></i> <span data-key="t-dashboard">Accountant</span>
                            </a>
                        </li> --}}


                        <li class="nav-item">
                            <a class="nav-link menu-link" href="{{route('users-index')}}">
                                <i class="ri-user-line"></i> <span data-key="t-dashboard">Users</span>
                            </a>
                        </li>


                        <li class="nav-item">
                            <a class="nav-link menu-link" href="{{route('appointment-index')}}">
                                <i class="ri-pages-line"></i> <span data-key="t-dashboard">Appointment</span>
                            </a>
                        </li>

                        {{-- <li class="nav-item">
                            <a class="nav-link menu-link" href="{{route('dashboard')}}">
                                <i class="ri-honour-line"></i> <span data-key="t-widgets">Reports</span>
                            </a>
                        </li> --}}

                        <li class="nav-item">
                            <a class="nav-link menu-link" href="{{ url('logout') }}">
                                <span data-key="t-widgets">Logout</span>
                            </a>
                        </li>
                    </ul>
                </div>
                <!-- Sidebar -->
            </div>

            <div class="sidebar-background"></div>
        </div>
