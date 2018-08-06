<div class="preloader">
    <div class="sk-folding-cube">
        <div class="sk-cube1 sk-cube"></div>
        <div class="sk-cube2 sk-cube"></div>
        <div class="sk-cube4 sk-cube"></div>
        <div class="sk-cube3 sk-cube"></div>
    </div>
</div>
<!--Mainmenu-area-->
<div class="mainmenu-area" data-spy="affix" data-offset-top="100">
    <div class="container">
        <!--Logo-->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#primary-menu">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a href="{{route('/')}}" class="navbar-brand logo">
                <h2>My Forum</h2>
            </a>
        </div>
        <!--Logo/-->
        <nav class="collapse navbar-collapse" id="primary-menu">
            <ul class="nav navbar-nav navbar-right">
                <li class="active"><a href="{{route('/')}}">Home</a></li>
                <li>
                    <a class="dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        General Information <span class="caret"></span>
                    </a>
                    <ul class="dropdown-menu">
                        <li>
                            <a href="{{route('about-forum')}}">About The Forum</a>
                        </li>
                        <li>
                            <a href="{{route('call-for-paper')}}">Call For Papers</a>
                        </li>
                        <li>
                            <a href="{{route('important-date')}}">Important Date</a>
                        </li>
                    </ul>
                </li>

                <li>
                    <a class="dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Program <span class="caret"></span>
                    </a>
                    <ul class="dropdown-menu">
                        <li>
                            <a href="#">Speakers</a>
                        </li>
                    </ul>
                </li>

                <li>
                    <a class="dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Registration <span class="caret"></span>
                    </a>
                    <ul class="dropdown-menu">
                        <li>
                            <a href="{{route('registration-fee')}}">Registration Fees</a>
                        </li>
                    </ul>
                </li>


                <li><a href="#contact-page">Contact</a></li>

                <!-- Authentication Links -->
                @guest
                    <li><a href="{{ route('user.getLogin') }}">Login</a></li>
                @else
                    <li><a href="{{route('proposal-session')}}">Proposal Sessions</a></li>
                    <li>
                        <a class="dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            {{ Auth::user()->name }} <span class="caret"></span>
                        </a>
                        <ul class="dropdown-menu">
                            <li>
                                <a href="{{ route('user.logout') }}"
                                   onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                    LOGOUT <span class="glyphicon glyphicon-log-out pull-right"></span>
                                </a>
                            </li>
                            <form id="logout-form" action="{{ route('user.logout') }}" method="POST" style="display: none;">
                                @csrf
                            </form>
                        </ul>
                    </li>
                @endguest
            </ul>
        </nav>
    </div>
</div>
<!--Mainmenu-area/-->