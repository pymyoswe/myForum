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
            <a href="#" class="navbar-brand logo">
                <h2>My Forum</h2>
            </a>
        </div>
        <!--Logo/-->
        <nav class="collapse navbar-collapse" id="primary-menu">
            <ul class="nav navbar-nav navbar-right">
                <li class="active"><a href="#home-page">Home</a></li>
                <li><a href="#service-page">Service</a></li>
                <li><a href="#feature-page">Features</a></li>
                <li><a href="#price-page">Pricing</a></li>
                <li><a href="#team-page">Team</a></li>
                <li><a href="#faq-page">FAQ</a></li>
                <li><a href="#blog-page">Blog</a></li>
                <li><a href="#contact-page">Contact</a></li>
                <!-- Authentication Links -->
                @guest
                    <li><a href="{{ route('user.getLogin') }}">Login</a></li>
                @else
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

<!--Header-area-->
<header class="header-area overlay full-height relative v-center" id="home-page">
    <div class="absolute anlge-bg"></div>
    <div class="container">
        <div class="row v-center">
            <div class="col-xs-12 col-md-7 header-text">
                <h2>It’s all about Promoting your Forum</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Libero ex inventore vel error quibusdam animi fugiat, doloribus dolores consectetur nulla deleniti sint blanditiis quod debitis quis vitae officiis tempora numquam.</p>
                <a href="#" class="button white">Watch video</a>
            </div>
            <div class="hidden-xs hidden-sm col-md-5 text-right">
                <div class="screen-box screen-slider">
                    <div class="item">
                        <img src="{{asset('colid-template/images/screen-1.jpg')}}" alt="">
                    </div>
                    <div class="item">
                        <img src="{{asset('colid-template/images/screen-2.jpg')}}" alt="">
                    </div>
                    <div class="item">
                        <img src="{{asset('colid-template/images/screen-3.jpg')}}" alt="">
                    </div>
                    <div class="item">
                        <img src="{{asset('colid-template/images/screen-4.jpg')}}" alt="">
                    </div>
                    <div class="item">
                        <img src="{{asset('colid-template/images/screen-5.jpg')}}" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
<!--Header-area/-->