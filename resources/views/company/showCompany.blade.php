@extends('layout.master')

@section('content')

    <div class="row">
        <div>
            <br>
            <div class="col s4 push-s2">
                <br>
                <br>
                <img class="responsive-img" src="{{$company->image}}" width="200">
            </div>
            <div class="col s6">
                <br>
                <br>
                <br>
                <h4 style="color: #e54f21">
                    Soutenons ensemble les causes qui vous tiennent à coeur !
                </h4>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col s3 offset-s1">
            <h4 class="push-s2" style="color: #e54f21">
                Avec nous, vous êtes :
            </h4>
            <h5 style="color: #40a5bf">
                {{$used_codes}}
            </h5>
            <img src="{{asset('images/company/mydelta_people.jpeg')}}" alt="" width="100">

        </div>
        <div class="col s3 offset-s1">
            <h4 class="push-s2" style="color: #e54f21">
                A avoir distribué :
            </h4>
            <h5 style="color: #40a5bf">
                {{$sommes}} €
            </h5>
            <img src="{{asset('images/company/mydelta_handHeart.jpeg')}}" alt="" width="100">

        </div>
        <div class="col s3 offset-s1">
            <h4 class="offset-s2" style="color: #e54f21">
                Pour soutenir :
            </h4>
            <h5 style="color: #40a5bf">
                3 projets
            </h5>
            <img src="{{asset('images/company/mydelta_thumb.jpeg')}}" alt="" width="100">
        </div>
    </div>
    <br>
    <div class="row">
        <div class="col s12">
            <hr class="hr-mydelta-blue">
        </div>
    </div>
    <br>
    <br>

    <ul id="slide-out" class="side-nav" style="background: #ec6f75">
        <br>
        <br>
        <br>
        <div>
            <h3 style="color: #ffffff" class="center-align">
                C'est tout simple !
            </h3>

            <div class="div_radius col s3" style="background: white">
                <ul>
                    <li>
                        1) Rendez-vous sur la page Mydelta de l'entreprise.
                    </li>
                    <li>
                        2) Choisissez l'association que vous souhaitez soutenir.
                    </li>
                    <li>
                        3) Entrez votre code Mydelta fourni par l'entreprise.
                    </li>
                </ul>
            </div>
        </div>

    </ul>
    <div class="row">
        <div style="text-align: center">
            <a href="#" data-activates="slide-out" class="btn-custom">Commment ça marche ?</a>
        </div>
    </div>

    <?php
            $list_associations =\App\Association::all();
    ?>
    <div class="row">
    @foreach($associations as $association)
        @foreach($list_associations as $list_association)
        @if($list_association->name == $association)
                    <a href="{{URL::to('give/'.$list_association->name)}}" >
                        <div class="col m4">
                            <div class="card-panel hoverable">
                                <img src="{{URL::to($list_association->image)}}" alt="" width="150">
                                <p >
                                    {{$list_association->small_description}}
                                </p>
                            </div>
                        </div>
                    </a>
        @endif
        @endforeach
    @endforeach
    </div>

@endsection




@section('js')

    <script>
        $('.btn-custom').sideNav({
                menuWidth: 700, // Default is 300
                edge: 'right', // Choose the horizontal origin
                closeOnClick: true, // Closes side-nav on <a> clicks, useful for Angular/Meteor
                draggable: true // Choose whether you can drag to open on touch screens
            }
        );
    </script>
@endsection