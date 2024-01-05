<header class="topbar-nav">
    <nav class="navbar navbar-expand fixed-top">
        <ul class="navbar-nav mr-auto align-items-center">
            <li class="nav-item">
                <a class="nav-link toggle-menu" href="javascript:void();">
                    <i class="icon-menu menu-icon"></i>
                </a>
            </li>
        </ul>

        <ul class="navbar-nav align-items-center right-nav-link">
            <li class="nav-item">
                <a class="nav-link dropdown-toggle dropdown-toggle-nocaret" data-toggle="dropdown" href="#">
                    <span class="user-profile"><img src="{{ url('public/assets/images/winwin.jpg') }}"
                            class="img-circle" alt="user avatar"></span>
                    <h2 class="logo-text">Dong Shi-Cheng</h2>
                </a>
                <ul class="dropdown-menu dropdown-menu-right">
                    <li class="dropdown-item user-details">
                        <a href="javaScript:void();">
                            <div class="media">
                                <div class="avatar"><img class="align-self-start mr-3"
                                        src="{{ url('public/assets/images/winwin.jpg') }}" alt="user avatar"></div>
                                <div class="media-body">
                                    <h6 class="mt-2 user-title">Dong Shi-cheng</h6>
                                    <p class="user-subtitle">mccoy@example.com</p>
                                </div>
                            </div>
                        </a>
                    </li>
                    <li class="dropdown-divider"></li>
                    <li class="dropdown-item"><i class="icon-user mr-2"></i> Account</li>
                    <li class="dropdown-divider"></li>
                    <li class="dropdown-item"><i class="icon-settings mr-2"></i> Setting</li>
                    <li class="dropdown-divider"></li> <a href="{{ url('logout') }}" class="dropdown-item"></a>
                    <li class="dropdown-item"><i class="icon-power mr-2"></i> Logout</li>
                </ul>
            </li>
        </ul>
    </nav>
</header>
