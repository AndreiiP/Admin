<!-- Main Header -->
<header class="main-header">

    <!-- Logo -->
    <a href="#" class="logo"><b>Admin</b>LTE</a>

    <!-- Header Navbar -->
    <nav class="navbar navbar-static-top" role="navigation">
        <!-- Sidebar toggle button-->
        <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
            <span class="sr-only">Toggle navigation</span>
        </a>
        <!-- Navbar Right Menu -->
        <div class="navbar-custom-menu">
            <ul class="nav navbar-nav">

                <!-- User Account Menu -->
                <li class="dropdown user user-menu">
                    <!-- Menu Toggle Button -->
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">

                        <span class="hidden-xs  glyphicon glyphicon-cog"></span>
                    </a>
                    <ul class="dropdown-menu" style="width: 50px">
                        <!-- The user image in the menu -->
                        <li class="user-header" style="height: 60px">
                            <div class="pull-left">
                                <a href="/profile" class="btn btn-block btn-info">Profile</a>
                            </div>
                            <div class="pull-right">
                                <a class="dropdown-item btn btn-block btn-danger" href="{{ route('logout') }}"
                                   onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                    {{ __('Logout') }}
                                </a>
                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                    @csrf
                                </form>
                            </div>

                        </li>
                        <!-- Menu Body -->
                        

                    </ul>
                </li>
            </ul>
        </div>
    </nav>
</header>