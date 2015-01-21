<!-- Navigation -->
<nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
    <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="{{route('home')}}">CWC 2015</a>
    </div>
    <!-- /.navbar-header -->

    <ul class="nav navbar-top-links navbar-right">
        {{--<li class="dropdown">
            <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                <i class="fa fa-envelope fa-fw"></i>  <i class="fa fa-caret-down"></i>
            </a>

        </li>--}}



        @if(!Auth::check())
            <li>
                <a href="{{route('login')}}">Login</a>
            </li>

        @endif


        @if(Auth::check())

            <li class="dropdown">
                <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                    <?php $user = Auth::user(); ?>
                    @if($user != null)
                    {{$user->name}}
                    @else
                    {{'+You'}}
                    @endif
                    <i class="fa fa-user fa-fw"></i>  <i class="fa fa-caret-down"></i>
                </a>
                <ul class="dropdown-menu dropdown-user">
                    <li>
                        <a href="{{route('user.profile.show')}}"><i class="fa fa-user fa-fw"></i> User Profile</a>
                    </li>
                    {{--<li>
                        <a href="#"><i class="fa fa-gear fa-fw"></i> Settings</a>
                    </li>--}}
                    <li class="divider"></li>

                        <li>
                            <a href="{{route('logout')}}"><i class="fa fa-sign-out fa-fw"></i> Logout</a>
                        </li>



                </ul>
                <!-- /.dropdown-user -->
            </li>
            <!-- /.dropdown -->
        @endif
    </ul>
    <!-- /.navbar-top-links -->


</nav>