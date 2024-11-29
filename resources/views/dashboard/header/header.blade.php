<!--Start sidebar-wrapper-->
<div id="sidebar-wrapper" data-simplebar="" data-simplebar-auto-hide="true">
    <div class="brand-logo">
        <a href="{{route('dashboard.index')}}">
            <img src="{{ asset('img/WhatsApp Image 2024-11-20 at 23.57.31.jpeg') }}" class="logo-icon" alt="logo icon">
            <h5 class="logo-text">Tuwala Kukula</h5>
        </a>
    </div>
    <ul class="sidebar-menu do-nicescrol">
        <li class="sidebar-header">MAIN NAVIGATION</li>
        <li>
            <a href="{{route('dashboard.index')}}">
                <i class="zmdi zmdi-view-dashboard"></i> <span>Dashboard</span>
            </a>
        </li>

        <li>
            <a href="{{route('dashboard.ui-icons')}}">
                <i class="zmdi zmdi-invert-colors"></i> <span>UI Icons</span>
            </a>
        </li>

        <li>
            <a href="{{route('dashboard.forms')}}">
                <i class="zmdi zmdi-format-list-bulleted"></i> <span>Forms</span>
            </a>
        </li>

        <li>
            <a href="{{route('dashboard.tables')}}">
                <i class="zmdi zmdi-grid"></i> <span>Tables</span>
            </a>
        </li>

        <li>
            <a href="{{route('dashboard.calendar')}}">
                <i class="zmdi zmdi-calendar-check"></i> <span>Calendar</span>
                <small class="badge float-right badge-light">New</small>
            </a>
        </li>

        <li>
            <a href="{{route('dashboard.profile')}}">
                <i class="zmdi zmdi-face"></i> <span>Profile</span>
            </a>
        </li>

        <li>
            <a href="{{route('dashboard.login')}}" target="_blank">
                <i class="zmdi zmdi-lock"></i> <span>Login</span>
            </a>
        </li>

        <li>
            <a href="{{route('dashboard.registration')}}" target="_blank">
                <i class="zmdi zmdi-account-circle"></i> <span>Registration</span>
            </a>
        </li>

        <li class="sidebar-header">LABELS</li>
        <li><a href="javaScript:void();"><i class="zmdi zmdi-coffee text-danger"></i> <span>Important</span></a>
        </li>
        <li><a href="javaScript:void();"><i class="zmdi zmdi-chart-donut text-success"></i>
                <span>Warning</span></a></li>
        <li><a href="javaScript:void();"><i class="zmdi zmdi-share text-info"></i> <span>Information</span></a>
        </li>

    </ul>

</div>
<!--End sidebar-wrapper-->
