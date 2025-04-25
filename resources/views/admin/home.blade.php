<x-layout>

    <div class="container" bis_skin_checked="1">
        <div class="row g-4" bis_skin_checked="1">

            <!-- Sidenav START -->
            <div class="col-lg-3 mx-auto" bis_skin_checked="1">

                <!-- Advanced filter responsive toggler START -->
                <div class="d-flex align-items-center d-lg-none" bis_skin_checked="1">
                    <button class="border-0 bg-transparent" type="button" data-bs-toggle="offcanvas"
                        data-bs-target="#offcanvasSideNavbar" aria-controls="offcanvasSideNavbar">
                        <span class="btn btn-primary"><i class="fa-solid fa-sliders-h"></i></span>
                        <span class="h6 mb-0 fw-bold d-lg-none ms-2">My profile</span>
                    </button>
                </div>
                <!-- Advanced filter responsive toggler END -->

                <!-- Navbar START-->
                <nav class="navbar navbar-expand-lg mx-0">
                    <div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasSideNavbar" bis_skin_checked="1">
                        <!-- Offcanvas header -->
                        <div class="offcanvas-header" bis_skin_checked="1">
                            <button type="button" class="btn-close text-reset ms-auto" data-bs-dismiss="offcanvas"
                                aria-label="Close"></button>
                        </div>

                        <!-- Offcanvas body -->
                        <div class="offcanvas-body d-block px-2 px-lg-0" bis_skin_checked="1">
                            <!-- Card START -->
                            <div class="card overflow-hidden" bis_skin_checked="1">
                                <!-- Cover image -->
                                <div class="h-50px"
                                    style="background-image:url(public/media/01.jpg); background-position: center; background-size: cover; background-repeat: no-repeat;"
                                    bis_skin_checked="1"></div>
                                <!-- Card body START -->
                                <div class="card-body pt-0" >
                                    <div class="text-center" >
                                        <!-- Avatar -->
                                        <div class="avatar avatar-lg mt-n5 mx-auto mb-3" bis_skin_checked="1">
                                            <img class="avatar-img rounded border border-white border-3"
                                                    src="{{ url('public/media/07.jpg') }}" alt="">
                                        </div>
                                        <!-- Info -->
                                        <h5 class="mb-0"> {{ Auth::user()->name }} </h5>
                                        <small>Admin</small>
                                        <p class="mt-3">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Magnam, earum.</p>

                                        <!-- User stat START -->
                                        <div class="hstack gap-2 gap-xl-3 justify-content-center" bis_skin_checked="1">
                                            <!-- User stat item -->
                                            <div bis_skin_checked="1">
                                                <h6 class="mb-0">256</h6>
                                                <small>Jobs</small>
                                            </div>
                                            <!-- Divider -->
                                            <div class="vr" bis_skin_checked="1"></div>
                                            <!-- User stat item -->
                                            <div bis_skin_checked="1">
                                                <h6 class="mb-0">2.5K</h6>
                                                <small>Followers</small>
                                            </div>
                                            <!-- Divider -->
                                            <div class="vr" bis_skin_checked="1"></div>
                                            <!-- User stat item -->
                                            <div bis_skin_checked="1">
                                                <h6 class="mb-0">365</h6>
                                                <small>Following</small>
                                            </div>
                                        </div>
                                        <!-- User stat END -->
                                    </div>

                                    <!-- Divider -->
                                    <hr>

                                    <!-- Side Nav START -->
                                    <ul class="nav nav-link-secondary flex-column fw-bold gap-2">
                                        <li class="nav-item">
                                            <a class="nav-link" href="{{ route('admin.jobs.index') }}"> <img class="me-2 h-20px fa-fw"
                                                    src="{{ url('public/media/home-outline-filled.svg') }}" alt=""><span>Jobs
                                                </span></a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="{{ route('admin.jobs.create') }}"> <img
                                                    class="me-2 h-20px fa-fw"
                                                    src="{{ url('public/media/person-outline-filled.svg') }}"
                                                    alt=""><span>Create Job </span></a>
                                        </li>
                                      
                                    </ul>
                                    <!-- Side Nav END -->
                                </div>
                                <!-- Card body END -->
                                <!-- Card footer -->
                                <a class="btn w-100 p-0 border-0" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                <div class="card-footer text-center text-light bg-primary w-100 py-2" bis_skin_checked="1">
                                     {{ __('Logout') }}
                                </div>
                                </a>
                            </div> 
                            <!-- Card END -->

                            <!-- Copyright -->
                            <p class="small text-center mt-1">©2024 <a class="text-reset" target="_blank"
                                    href="https://www.webestica.com/">  </a></p>
                        </div>
                    </div>
                </nav>
                <!-- Navbar END-->
            </div>
            <!-- Sidenav END -->



        </div> <!-- Row END -->
    </div>
</x-layout>