@extends('layouts.dashboard')
@section('content')
    <!-- start loader -->
    <div id="pageloader-overlay" class="visible incoming">
        <div class="loader-wrapper-outer">
            <div class="loader-wrapper-inner">
                <div class="loader"></div>
            </div>
        </div>
    </div>
    <!-- end loader -->

    <!-- Start wrapper-->
    <div id="wrapper">

        <!--Start sidebar-wrapper-->
        @include("dashboard.header.header")
        <!--End sidebar-wrapper-->


        <!--Start topbar header-->
        <header class="topbar-nav">
            <nav class="navbar navbar-expand fixed-top">
                <ul class="mr-auto navbar-nav align-items-center">
                    <li class="nav-item">
                        <a class="nav-link toggle-menu" href="javascript:void();">
                            <i class="icon-menu menu-icon"></i>
                        </a>
                    </li>
                    <li class="nav-item">
                        <form class="search-bar">
                            <input type="text" class="form-control" placeholder="Enter keywords">
                            <a href="javascript:void();"><i class="icon-magnifier"></i></a>
                        </form>
                    </li>
                </ul>

                <ul class="navbar-nav align-items-center right-nav-link">
                    <li class="nav-item dropdown-lg">
                        <a class="nav-link dropdown-toggle dropdown-toggle-nocaret waves-effect" data-toggle="dropdown"
                            href="javascript:void();">
                            <i class="fa fa-envelope-open-o"></i></a>
                    </li>
                    <li class="nav-item dropdown-lg">
                        <a class="nav-link dropdown-toggle dropdown-toggle-nocaret waves-effect" data-toggle="dropdown"
                            href="javascript:void();">
                            <i class="fa fa-bell-o"></i></a>
                    </li>
                    <li class="nav-item language">
                        <a class="nav-link dropdown-toggle dropdown-toggle-nocaret waves-effect" data-toggle="dropdown"
                            href="javascript:void();"><i class="fa fa-flag"></i></a>
                        <ul class="dropdown-menu dropdown-menu-right">
                            <li class="dropdown-item"> <i class="mr-2 flag-icon flag-icon-gb"></i> English</li>
                            <li class="dropdown-item"> <i class="mr-2 flag-icon flag-icon-fr"></i> French</li>
                            <li class="dropdown-item"> <i class="mr-2 flag-icon flag-icon-cn"></i> Chinese</li>
                            <li class="dropdown-item"> <i class="mr-2 flag-icon flag-icon-de"></i> German</li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link dropdown-toggle dropdown-toggle-nocaret" data-toggle="dropdown" href="#">
                            <span class="user-profile"><img src="https://via.placeholder.com/110x110" class="img-circle"
                                    alt="user avatar"></span>
                        </a>
                        <ul class="dropdown-menu dropdown-menu-right">
                            <li class="dropdown-item user-details">
                                <a href="javaScript:void();">
                                    <div class="media">
                                        <div class="avatar"><img class="mr-3 align-self-start"
                                                src="https://via.placeholder.com/110x110" alt="user avatar"></div>
                                        <div class="media-body">
                                            <h6 class="mt-2 user-title">Sarajhon Mccoy</h6>
                                            <p class="user-subtitle">mccoy@example.com</p>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li class="dropdown-divider"></li>
                            <li class="dropdown-item"><i class="mr-2 icon-envelope"></i> Inbox</li>
                            <li class="dropdown-divider"></li>
                            <li class="dropdown-item"><i class="mr-2 icon-wallet"></i> Account</li>
                            <li class="dropdown-divider"></li>
                            <li class="dropdown-item"><i class="mr-2 icon-settings"></i> Setting</li>
                            <li class="dropdown-divider"></li>
                            <li class="dropdown-item"><i class="mr-2 icon-power"></i> Logout</li>
                        </ul>
                    </li>
                </ul>
            </nav>
        </header>
        <!--End topbar header-->
        <div class="clearfix"></div>

        <div class="content-wrapper">
            <div class="container-fluid">

                <div class="mt-3 row">
                    <div class="col-lg-6">
                        <div class="card">
                            <div class="card-body">
                                <div class="card-title">Vertical Form</div>
                                <hr>
                                <form>
                                    <div class="form-group">
                                        <label for="input-1">Name</label>
                                        <input type="text" class="form-control" id="input-1"
                                            placeholder="Enter Your Name">
                                    </div>
                                    <div class="form-group">
                                        <label for="input-2">Email</label>
                                        <input type="text" class="form-control" id="input-2"
                                            placeholder="Enter Your Email Address">
                                    </div>
                                    <div class="form-group">
                                        <label for="input-3">Mobile</label>
                                        <input type="text" class="form-control" id="input-3"
                                            placeholder="Enter Your Mobile Number">
                                    </div>
                                    <div class="form-group">
                                        <label for="input-4">Password</label>
                                        <input type="text" class="form-control" id="input-4"
                                            placeholder="Enter Password">
                                    </div>
                                    <div class="form-group">
                                        <label for="input-5">Confirm Password</label>
                                        <input type="text" class="form-control" id="input-5"
                                            placeholder="Confirm Password">
                                    </div>
                                    <div class="py-2 form-group">
                                        <div class="icheck-material-white">
                                            <input type="checkbox" id="user-checkbox1" checked="" />
                                            <label for="user-checkbox1">I Agree Terms & Conditions</label>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <button type="submit" class="px-5 btn btn-light"><i class="icon-lock"></i>
                                            Register</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-6">
                        <div class="card">
                            <div class="card-body">
                                <div class="card-title">Round Vertical Form</div>
                                <hr>
                                <form>
                                    <div class="form-group">
                                        <label for="input-6">Name</label>
                                        <input type="text" class="form-control form-control-rounded" id="input-6"
                                            placeholder="Enter Your Name">
                                    </div>
                                    <div class="form-group">
                                        <label for="input-7">Email</label>
                                        <input type="text" class="form-control form-control-rounded" id="input-7"
                                            placeholder="Enter Your Email Address">
                                    </div>
                                    <div class="form-group">
                                        <label for="input-8">Mobile</label>
                                        <input type="text" class="form-control form-control-rounded" id="input-8"
                                            placeholder="Enter Your Mobile Number">
                                    </div>
                                    <div class="form-group">
                                        <label for="input-9">Password</label>
                                        <input type="text" class="form-control form-control-rounded" id="input-9"
                                            placeholder="Enter Password">
                                    </div>
                                    <div class="form-group">
                                        <label for="input-10">Confirm Password</label>
                                        <input type="text" class="form-control form-control-rounded" id="input-10"
                                            placeholder="Confirm Password">
                                    </div>
                                    <div class="py-2 form-group">
                                        <div class="icheck-material-white">
                                            <input type="checkbox" id="user-checkbox2" checked="" />
                                            <label for="user-checkbox2">I Agree Terms & Conditions</label>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <button type="submit" class="px-5 btn btn-light btn-round"><i
                                                class="icon-lock"></i> Register</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div><!--End Row-->

                <!--start overlay-->
                <div class="overlay toggle-menu"></div>
                <!--end overlay-->

            </div>
            <!-- End container-fluid-->

        </div><!--End content-wrapper-->
        <!--Start Back To Top Button-->
        <a href="javaScript:void();" class="back-to-top"><i class="fa fa-angle-double-up"></i> </a>
        <!--End Back To Top Button-->

        <!--Start footer-->
        <footer class="footer">
            <div class="container">
                <div class="text-center">
                    Copyright © 2018 Dashtreme Admin
                </div>
            </div>
        </footer>
        <!--End footer-->

        <!--start color switcher-->
        <div class="right-sidebar">
            <div class="switcher-icon">
                <i class="zmdi zmdi-settings zmdi-hc-spin"></i>
            </div>
            <div class="right-sidebar-content">

                <p class="mb-0">Gaussion Texture</p>
                <hr>

                <ul class="switcher">
                    <li id="theme1"></li>
                    <li id="theme2"></li>
                    <li id="theme3"></li>
                    <li id="theme4"></li>
                    <li id="theme5"></li>
                    <li id="theme6"></li>
                </ul>

                <p class="mb-0">Gradient Background</p>
                <hr>

                <ul class="switcher">
                    <li id="theme7"></li>
                    <li id="theme8"></li>
                    <li id="theme9"></li>
                    <li id="theme10"></li>
                    <li id="theme11"></li>
                    <li id="theme12"></li>
                    <li id="theme13"></li>
                    <li id="theme14"></li>
                    <li id="theme15"></li>
                </ul>

            </div>
        </div>
        <!--end color switcher-->

    </div><!--End wrapper-->
@endsection
