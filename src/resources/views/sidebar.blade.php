<!-- Left side column. contains the sidebar -->
<aside class="main-sidebar">

    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">


        @php isset($user['photo'])? $user['photo'] : $user['photo'] = 'one.jpg' @endphp

        <ul class="sidebar-menu">
            <li class="header">MAIN MENU</li>

            <li class="active">
                @if (Auth::user()->role == 'admin')
                    <a class="" href="/user">
                        <i class="glyphicon glyphicon-user"></i>
                        <span>Create User</span>
                    </a>
                    <a class="" href="/dell">
                        <i class="glyphicon glyphicon-remove-sign"></i>
                        <span>Remove User</span>
                    </a>
                    <a href="/hotels">
                        <i class="glyphicon  glyphicon-align-left"></i>
                        <span>Hotels</span>
                    </a>
                @else
                    <a href="/hotel">
                        <i class="glyphicon glyphicon-list-alt"></i>
                        <span>Create Hotel</span>
                    </a>
                    <a href="/hotel/user">
                        <i class="glyphicon glyphicon-align-left"></i>
                        <span>Your Hotels</span>
                    </a>

                @endif

                </li>
            <li>

            </li>

        </ul><!-- /.sidebar-menu -->
    </section>
    <!-- /.sidebar -->
</aside>
