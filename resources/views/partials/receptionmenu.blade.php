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
                            <a class="nav-link menu-link" href="{{route('reception-dashboard')}}">
                                <i class="ri-layout-3-line"></i> <span data-key="t-dashboard">Dashboard</span>
                            </a>
                        </li>


                        <li class="nav-item">
                            <a class="nav-link menu-link" href="{{route('reception-patient')}}">
                                <i class="ri-layout-3-line"></i> <span data-key="t-dashboard">Patients</span>
                            </a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link menu-link" href="{{route('reception-appointment')}}">
                                <i class="ri-pages-line"></i> <span data-key="t-dashboard">Appointment</span>
                            </a>
                        </li>



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
