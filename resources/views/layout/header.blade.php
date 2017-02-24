<!-- First DropDown -->
<?php
$companys = \App\Company::all();
?>

<ul id="dropdown1" class="dropdown-content">
    @foreach($companys as $company)
        <li><a href="{{URL::to('company/'.$company->name)}}">{{$company->name}}</a></li>
    @endforeach
</ul>


<ul id="dropdownAdmin" class="dropdown-content">
    <li><a href="{{URL::to('admin/create')}}">Create new code</a></li>
    <li><a href="{{URL::to('admin/allcodes')}}">All Codes</a></li>
    <li><a href="{{URL::to('admin/download')}}">Dowload</a></li>
    <li><a href="{{URL::to('admin/delete')}}">Delete</a></li>
    <li><a href="{{URL::to('admin/createassociation')}}">Rajouter association</a></li>
    <li><a href="{{URL::to('admin/modif')}}">Modifier association</a></li>
    <li><a href="{{URL::to('admin/setcompany')}}">Modifier Gestion des associations</a></li>

</ul>
<!-- End of First DropDown -->

<!-- NavBar -->
<div class="navbar-fixed">
<nav>
    <div class="nav-wrapper-fixed">
        <a href="{{URL::to('/')}}" class="brand-logo"><img src="{{ asset('images/logo/logo.png') }}" width="200"></a>
        <ul class="right hide-on-med-and-down">
            <li><a href="{{URL::to('association')}}">ASSOCIATIONS</a></li>
            <!-- Dropdown Trigger -->
            <li><a class="dropdown-button" href="#!" data-activates="dropdown1">ENTREPRISES<i class="material-icons right"></i></a></li>
            @if (Auth::guest())
            @else
            <li><a class="dropdown-button" href="#!" data-activates="dropdownAdmin">ADMIN<i class="material-icons right"></i></a></li>
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


<!-- End of NavBar -->
