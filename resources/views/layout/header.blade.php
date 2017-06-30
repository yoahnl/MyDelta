
<?php
$companys = \App\Company::all();
?>
<div class="navbar-fixed">
<nav>
    <div class="nav-wrapper">
        <a href="{{URL::to('/')}}" class="brand-logo"><img src="{{ asset('images/logo/logo.png') }}" width="200" ></a>
        <a href="#" data-activates="mobile-demo" class="button-collapse"><i class="material-icons">menu</i></a>
        <ul class="right hide-on-med-and-down">
            <li><a href="{{URL::to('association')}}">Associations</a></li>
            <li><a href="{{URL::to('company')}}">Entreprises</a></li>
            <li><a href="{{URL::to('about-us')}}">Notre entreprise</a></li>
            <li><a href="{{URL::to('faq')}}">FAQ</a></li>

        @if (Auth::guest())
            @else
                <li><a href="{{URL::to('admin')}}">Administration du site</a></li>
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
        <ul class="side-nav" id="mobile-demo">
            <li><a href="{{URL::to('association')}}">ASSOCIATIONS</a></li>
            @if (Auth::guest())
            @else
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
</nav>
</div>
