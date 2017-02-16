<header class="navbar navbar-inverse navbar-fixed-top wet-asphalt" role="banner">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="{{URL::to('home')}}"><img src="{{ asset('images/logo.png') }}" width="240" alt="logo"></a>
        </div>
        <div class="collapse navbar-collapse" >
            <ul class="nav navbar-nav navbar-right">
                <li ><a href="{{URL::to('home')}}">Home</a></li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">Pages <i class="icon-angle-down"></i></a>
                    <ul class="dropdown-menu">
                        <li><a href="blog-item.html">Blog Single</a></li>
                        <li><a href="pricing.html">Pricing</a></li>
                        <li><a href="404.html">404</a></li>
                        <li><a href="registration.html">Registration</a></li>
                        <li class="divider"></li>
                        <li><a href="privacy.html">Privacy Policy</a></li>
                        <li><a href="terms.html">Terms of Use</a></li>
                    </ul>
                </li>
                <li><a href="{{URL::to('association')}}">Association</a></li>
                @if (Auth::guest())
                @else
                    <li>
                        <a href="{{URL::to('admin')}}">{{Auth::user()->name}}</a>
                    </li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Administration du site <i class="icon-angle-down"></i></a>
                        <ul class="dropdown-menu">
                            <li><a href="{{URL::to('admin/create')}}">Create new code</a></li>
                            <li><a href="{{URL::to('admin/allcodes')}}">All Codes</a></li>
                            <li><a href="{{URL::to('admin/download')}}">Dowload</a></li>
                            <li><a href="{{URL::to('admin/delete')}}">Delete</a></li>
                            <li><a href="{{URL::to('admin/createassociation')}}">Rajouter association</a></li>
                            <li><a href="{{URL::to('admin/modif')}}">Modifier association</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="{{ url('logout') }}"
                           onclick="event.preventDefault();
         document.getElementById('logout-form').submit();">
                            Logout
                        </a>
                        <form id="logout-form"
                              action="{{ url('logout') }}"
                              method="POST"
                              style="display: none;">
                            {{ csrf_field() }}
                        </form>
                    </li>
                @endif
            </ul>
        </div>
    </div>
</header>