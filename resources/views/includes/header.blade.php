<header>
    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="nav navbar-left ">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="{{route('dashboard')}}">Dashboard</a>

        </div>
        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav">
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true"
                       aria-expanded="false">Clients <span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li><a href="{{route('client.dashboard')}}">Add Client</a></li>
                        {{--  <li><a href="#">Another action</a></li>
                          <li><a href="#">Something else here</a></li>
                          <li role="separator" class="divider"></li>
                          <li><a href="#">Separated link</a></li>
                          <li role="separator" class="divider"></li>
                          <li><a href="#">One more separated link</a></li>--}}
                    </ul>
                </li>
                <li class="active"><a href="{{route('transaction')}}">View Transactions</a></li>
                <li class="active"><a href="{{route('test')}}">Test <span class="sr-only">(current)</span></a></li>


            </ul>


            <!-- Top Menu Items -->
            <ul class="nav navbar-nav pull-right">
                <li class="dropdown pull-right">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i
                                class="fa fa-user"></i> {{ Auth::user()->username }}&nbsp; <b
                                class="caret"></b></a>
                    <ul class="dropdown-menu">
                        <li>
                            <a href="{{route('users')}}"><i class="fa fa-fw fa-user"></i> System Users</a>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-fw fa-envelope"></i> Inbox</a>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-fw fa-gear"></i> Settings</a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="{{route('logout')}}"><i class="fa fa-fw fa-power-off"></i> Log Out</a>
                        </li>
                    </ul>
                </li>
            </ul>
        </div><!-- /.navbar-collapse -->


    </nav>

</header>