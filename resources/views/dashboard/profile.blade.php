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
        @include('dashboard.header.header')
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
                    <div class="col-lg-4">
                        <div class="card profile-card-2">
                            <div class="card-img-block">
                                <img class="img-fluid" src="https://via.placeholder.com/800x500" alt="Card image cap">
                            </div>
                            <div class="pt-5 card-body">
                                <img src="https://via.placeholder.com/110x110" alt="profile-image" class="profile">
                                <h5 class="card-title">Mark Stern</h5>
                                <p class="card-text">Some quick example text to build on the card title and make up the
                                    bulk of the card's content.</p>
                                <div class="icon-block">
                                    <a href="javascript:void();"><i class="text-white fa fa-facebook bg-facebook"></i></a>
                                    <a href="javascript:void();"> <i class="text-white fa fa-twitter bg-twitter"></i></a>
                                    <a href="javascript:void();"> <i
                                            class="text-white fa fa-google-plus bg-google-plus"></i></a>
                                </div>
                            </div>

                            <div class="card-body border-top border-light">
                                <div class="media align-items-center">
                                    <div>
                                        <img src="asset/images/timeline/html5.svg" class="skill-img" alt="skill img">
                                    </div>
                                    <div class="ml-3 text-left media-body">
                                        <div class="progress-wrapper">
                                            <p>HTML5 <span class="float-right">65%</span></p>
                                            <div class="progress" style="height: 5px;">
                                                <div class="progress-bar" style="width:65%"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <hr>
                                <div class="media align-items-center">
                                    <div><img src="asset/images/timeline/bootstrap-4.svg" class="skill-img"
                                            alt="skill img"></div>
                                    <div class="ml-3 text-left media-body">
                                        <div class="progress-wrapper">
                                            <p>Bootstrap 4 <span class="float-right">50%</span></p>
                                            <div class="progress" style="height: 5px;">
                                                <div class="progress-bar" style="width:50%"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <hr>
                                <div class="media align-items-center">
                                    <div><img src="asset/images/timeline/angular-icon.svg" class="skill-img"
                                            alt="skill img"></div>
                                    <div class="ml-3 text-left media-body">
                                        <div class="progress-wrapper">
                                            <p>AngularJS <span class="float-right">70%</span></p>
                                            <div class="progress" style="height: 5px;">
                                                <div class="progress-bar" style="width:70%"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <hr>
                                <div class="media align-items-center">
                                    <div><img src="asset/images/timeline/react.svg" class="skill-img" alt="skill img">
                                    </div>
                                    <div class="ml-3 text-left media-body">
                                        <div class="progress-wrapper">
                                            <p>React JS <span class="float-right">35%</span></p>
                                            <div class="progress" style="height: 5px;">
                                                <div class="progress-bar" style="width:35%"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>

                    </div>

                    <div class="col-lg-8">
                        <div class="card">
                            <div class="card-body">
                                <ul class="nav nav-tabs nav-tabs-primary top-icon nav-justified">
                                    <li class="nav-item">
                                        <a href="javascript:void();" data-target="#profile" data-toggle="pill"
                                            class="nav-link active"><i class="icon-user"></i> <span
                                                class="hidden-xs">Profile</span></a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="javascript:void();" data-target="#messages" data-toggle="pill"
                                            class="nav-link"><i class="icon-envelope-open"></i> <span
                                                class="hidden-xs">Messages</span></a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="javascript:void();" data-target="#edit" data-toggle="pill"
                                            class="nav-link"><i class="icon-note"></i> <span
                                                class="hidden-xs">Edit</span></a>
                                    </li>
                                </ul>
                                <div class="p-3 tab-content">
                                    <div class="tab-pane active" id="profile">
                                        <h5 class="mb-3">User Profile</h5>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <h6>About</h6>
                                                <p>
                                                    Web Designer, UI/UX Engineer
                                                </p>
                                                <h6>Hobbies</h6>
                                                <p>
                                                    Indie music, skiing and hiking. I love the great outdoors.
                                                </p>
                                            </div>
                                            <div class="col-md-6">
                                                <h6>Recent badges</h6>
                                                <a href="javascript:void();" class="badge badge-dark badge-pill">html5</a>
                                                <a href="javascript:void();" class="badge badge-dark badge-pill">react</a>
                                                <a href="javascript:void();"
                                                    class="badge badge-dark badge-pill">codeply</a>
                                                <a href="javascript:void();"
                                                    class="badge badge-dark badge-pill">angularjs</a>
                                                <a href="javascript:void();" class="badge badge-dark badge-pill">css3</a>
                                                <a href="javascript:void();"
                                                    class="badge badge-dark badge-pill">jquery</a>
                                                <a href="javascript:void();"
                                                    class="badge badge-dark badge-pill">bootstrap</a>
                                                <a href="javascript:void();"
                                                    class="badge badge-dark badge-pill">responsive-design</a>
                                                <hr>
                                                <span class="badge badge-primary"><i class="fa fa-user"></i> 900
                                                    Followers</span>
                                                <span class="badge badge-success"><i class="fa fa-cog"></i> 43
                                                    Forks</span>
                                                <span class="badge badge-danger"><i class="fa fa-eye"></i> 245
                                                    Views</span>
                                            </div>
                                            <div class="col-md-12">
                                                <h5 class="mt-2 mb-3"><span
                                                        class="float-right fa fa-clock-o ion-clock"></span> Recent Activity
                                                </h5>
                                                <div class="table-responsive">
                                                    <table class="table table-hover table-striped">
                                                        <tbody>
                                                            <tr>
                                                                <td>
                                                                    <strong>Abby</strong> joined ACME Project Team in
                                                                    <strong>`Collaboration`</strong>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td>
                                                                    <strong>Gary</strong> deleted My Board1 in
                                                                    <strong>`Discussions`</strong>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td>
                                                                    <strong>Kensington</strong> deleted MyBoard3 in
                                                                    <strong>`Discussions`</strong>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td>
                                                                    <strong>John</strong> deleted My Board1 in
                                                                    <strong>`Discussions`</strong>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td>
                                                                    <strong>Skell</strong> deleted his post Look at Why this
                                                                    is.. in <strong>`Discussions`</strong>
                                                                </td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                        </div>
                                        <!--/row-->
                                    </div>
                                    <div class="tab-pane" id="messages">
                                        <div class="alert alert-info alert-dismissible" role="alert">
                                            <button type="button" class="close" data-dismiss="alert">&times;</button>
                                            <div class="alert-icon">
                                                <i class="icon-info"></i>
                                            </div>
                                            <div class="alert-message">
                                                <span><strong>Info!</strong> Lorem Ipsum is simply dummy text.</span>
                                            </div>
                                        </div>
                                        <div class="table-responsive">
                                            <table class="table table-hover table-striped">
                                                <tbody>
                                                    <tr>
                                                        <td>
                                                            <span class="float-right font-weight-bold">3 hrs ago</span>
                                                            Here is your a link to the latest summary report from the..
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <span class="float-right font-weight-bold">Yesterday</span>
                                                            There has been a request on your account since that was..
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <span class="float-right font-weight-bold">9/10</span>
                                                            Porttitor vitae ultrices quis, dapibus id dolor. Morbi venenatis
                                                            lacinia rhoncus.
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <span class="float-right font-weight-bold">9/4</span>
                                                            Vestibulum tincidunt ullamcorper eros eget luctus.
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <span class="float-right font-weight-bold">9/4</span>
                                                            Maxamillion ais the fix for tibulum tincidunt ullamcorper eros.
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                    <div class="tab-pane" id="edit">
                                        <form>
                                            <div class="form-group row">
                                                <label class="col-lg-3 col-form-label form-control-label">First
                                                    name</label>
                                                <div class="col-lg-9">
                                                    <input class="form-control" type="text" value="Mark">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-lg-3 col-form-label form-control-label">Last name</label>
                                                <div class="col-lg-9">
                                                    <input class="form-control" type="text" value="Jhonsan">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-lg-3 col-form-label form-control-label">Email</label>
                                                <div class="col-lg-9">
                                                    <input class="form-control" type="email" value="mark@example.com">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-lg-3 col-form-label form-control-label">Change
                                                    profile</label>
                                                <div class="col-lg-9">
                                                    <input class="form-control" type="file">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-lg-3 col-form-label form-control-label">Website</label>
                                                <div class="col-lg-9">
                                                    <input class="form-control" type="url" value="">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-lg-3 col-form-label form-control-label">Address</label>
                                                <div class="col-lg-9">
                                                    <input class="form-control" type="text" value=""
                                                        placeholder="Street">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-lg-3 col-form-label form-control-label"></label>
                                                <div class="col-lg-6">
                                                    <input class="form-control" type="text" value=""
                                                        placeholder="City">
                                                </div>
                                                <div class="col-lg-3">
                                                    <input class="form-control" type="text" value=""
                                                        placeholder="State">
                                                </div>
                                            </div>

                                            <div class="form-group row">
                                                <label class="col-lg-3 col-form-label form-control-label">Username</label>
                                                <div class="col-lg-9">
                                                    <input class="form-control" type="text" value="jhonsanmark">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-lg-3 col-form-label form-control-label">Password</label>
                                                <div class="col-lg-9">
                                                    <input class="form-control" type="password" value="11111122333">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-lg-3 col-form-label form-control-label">Confirm
                                                    password</label>
                                                <div class="col-lg-9">
                                                    <input class="form-control" type="password" value="11111122333">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-lg-3 col-form-label form-control-label"></label>
                                                <div class="col-lg-9">
                                                    <input type="reset" class="btn btn-secondary" value="Cancel">
                                                    <input type="button" class="btn btn-primary" value="Save Changes">
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>

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
