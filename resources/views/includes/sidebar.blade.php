<div class="side-menu absolute-wrapper">
    <nav class="navbar navbar-default" role="navigation">
        <!-- Main Menu -->
        <div class="side-menu-container">
            <ul class="nav navbar-nav side-menu">
                <!-- Dropdown-->
                <li class="panel panel-default" id="dropdown">
                    <a data-toggle="collapse" href="#dropdown-lvl1">
                        <span class="glyphicon glyphicon-user"></span> Sites <span class="caret"></span>
                    </a>

                    <!-- Dropdown level 1 -->
                    <div id="dropdown-lvl1" class="panel-collapse collapse">
                        <div class="panel-body">
                            <ul class="nav navbar-nav">
                                <li><a href="{{route('booked.site')}}">Booked Sites</a></li>
                                <li><a href="{{route('closed.site')}}">Closed Sites</a></li>

                            </ul>

                        </div>
                    </div>
                </li>
                <!-- Dropdown-->
                <li class="panel panel-default" id="dropdown">
                    <a data-toggle="collapse" href="#dropdown-lvl2">
                        <span class="glyphicon glyphicon-user"></span> Clients <span class="caret"></span>
                    </a>

                    <!-- Dropdown level 1 -->
                    <div id="dropdown-lvl2" class="panel-collapse collapse">
                        <div class="panel-body">
                            <ul class="nav navbar-nav">
                                <li><a href="{{route('client.dashboard')}}">Add Client</a></li>
                            </ul>
                        </div>
                    </div>
                </li>
                <!-- Dropdown-->
                <li class="panel panel-default" id="dropdown">
                    <a data-toggle="collapse" href="#dropdown-lvl3">
                        <span class="glyphicon glyphicon-user"></span>Booking<span class="caret"></span>
                    </a>

                    <!-- Dropdown level 1 -->
                    <div id="dropdown-lvl3" class="panel-collapse collapse">
                        <div class="panel-body">
                            <ul class="nav navbar-nav">
                                <li><a href="{{route('book.site')}}">Book Site</a></li>
                            </ul>

                        </div>
                    </div>
                </li>
            </ul>
        </div><!-- /.navbar-collapse -->
    </nav>

</div>
