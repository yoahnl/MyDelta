@extends('layout.master')

@section('content')

    <section class="banner-enterprise">
        <div class="row">
            <div class="col m12 flexcol">
                <div class="feature">
                    <p class="text-svg">Vous êtes</p>
                    <svg class="img-feature" xmlns="http://www.w3.org/2000/svg" viewBox="-1.492537313432834 -1.9425304469777558 202.98507462686567 202.98507462686567" preserveAspectRatio="xMidYMid meet" style="stroke-width: 1px;">
                        <g>
                            <path d="M48.1 120.5l-7.7 13.7c-.5.8-1.3 1.4-2.3 1.4h-7.9c-12.5 0-25 6.1-25 19.7v4c0 1.5-1.2 2.6-2.6 2.6S0 160.7 0 159.2v-4c0-14.7 12.5-24.9 30.3-24.9h6.3l6.9-12.4c.7-1.3 2.3-1.7 3.6-1 1.3.7 1.8 2.3 1 3.6zm40.5 9.8h-6.5l-8.4-12.6c-.8-1.2-2.4-1.5-3.7-.7-1.2.8-1.5 2.4-.7 3.7l9.2 13.7c.5.7 1.3 1.2 2.2 1.2h7.9c13.9 0 21.9 7.2 21.9 19.7v4c0 1.5 1.2 2.6 2.6 2.6 1.5 0 2.6-1.2 2.6-2.6v-4c.1-15.5-10.3-25-27.1-25zm42.1 0h-6.5l-7.2-10.7c5.8-6.2 7.1-15.8 7.3-25.1 5.3-.9 7.2-4.4 7.2-7.7V76.3c0-2.4 0-6.6-5.3-7.7v-8.1c0-8.6-2.3-14.8-6.8-18.5-4.7-3.9-11.5-4.8-20.7-3-1.4.3-2.4 1.7-2.1 3.1.3 1.4 1.6 2.4 3.1 2.1 7.6-1.5 13-.9 16.4 1.9 3.2 2.6 4.8 7.5 4.8 14.4V71c0 1.5 1.2 2.6 2.6 2.6 2.6 0 2.6 0 2.6 2.6v10.5c0 .7 0 2.6-4.6 2.6-1.5 0-2.6 1.2-2.6 2.6 0 9.5-.9 19.6-6.9 24.9l-.1.1c-.8.7-1.8 1.4-2.8 1.9-1.3.7-1.8 2.2-1.2 3.5.5.9 1.4 1.4 2.3 1.4.4 0 .8-.1 1.2-.3.5-.2.9-.5 1.3-.8l7.7 11.5c.5.7 1.3 1.2 2.2 1.2h7.9c13.9 0 21.9 7.2 21.9 19.7v4c0 1.5 1.2 2.6 2.6 2.6s2.6-1.2 2.6-2.6v-4c.3-15.2-10.1-24.7-26.9-24.7zm42.1 0h-6.5l-7.2-10.7c5.8-6.2 7.1-15.8 7.3-25.1 2.1-.3 3.9-1.1 5.1-2.3 1.4-1.4 2.1-3.2 2.1-5.3V76.3c0-2.4 0-6.6-5.3-7.7v-8.1c0-8.6-2.3-14.8-6.8-18.5-4.7-3.8-11.5-4.8-20.7-3-1.4.3-2.4 1.7-2.1 3.1.3 1.4 1.7 2.4 3.1 2.1 7.6-1.5 13-.9 16.4 1.9 3.2 2.6 4.8 7.5 4.8 14.4V71c0 1.5 1.2 2.6 2.6 2.6 2.6 0 2.6 0 2.6 2.6v10.5c0 1-.4 1.4-.5 1.6-.7.7-2.1 1-4 1A2.732 2.732 0 0 0 161 92c0 9.5-.9 19.7-6.9 25l-.1.1c-.8.7-1.8 1.4-2.8 1.9-1.3.7-1.8 2.2-1.2 3.5.5.9 1.4 1.4 2.3 1.4.4 0 .8-.1 1.2-.3.5-.2.9-.5 1.3-.8l7.7 11.5c.5.7 1.3 1.2 2.2 1.2h7.9c13.9 0 21.9 7.2 21.9 19.7v4c0 1.5 1.2 2.6 2.6 2.6s2.6-1.2 2.6-2.6v-4c.3-15.4-10.1-24.9-26.9-24.9zM56.6 117.1c-30.8 0-41.8-17.2-44.5-22.5-.4-.8-.4-1.8.1-2.5 2.5-4.2 9.2-15.9 10.2-20.3 5-21.4 17.5-33.6 34.1-33.6s29.1 12.2 34.1 33.6c1 4.4 7.7 16.1 10.2 20.3.5.8.5 1.7.1 2.5-2.4 5.3-13.5 22.5-44.3 22.5zm39.1-23.6c-2.4-4-8.8-15.4-10.1-20.5-2.1-8.9-9.1-29.6-29-29.6S29.7 64.1 27.6 73c-1.2 5.1-7.7 16.5-10.1 20.5 3.2 5.6 13.4 18.4 39.1 18.4s35.9-12.8 39.1-18.4z"></path>
                        </g>
                    </svg>
                    <p class="text-svg">{{$used_codes}}</p>
                </div>
                <div class="feature">
                    <p class="text-svg">A avoir distribuer</p>
                    <svg class="img-feature" xmlns="http://www.w3.org/2000/svg" viewBox="8.500000127156568 8.5000077565511 182.9999844868978 182.9999844868978" preserveAspectRatio="xMidYMid meet" style="stroke-width: 1px;">
                        <g>
                            <path d="M169.9 143.7l16.4-13.7-25.8-17.6c1.8-2.8 4.5-7.3 6.5-11.4.3-.6 2.6-5.8 3.7-9.4 2.3-7.5 3.4-14.4 3.4-21.2 0-27.7-21.7-50.3-48.3-50.3C113.3 20 101 25.2 92 34.4 83.1 25.2 70.8 20 58.3 20 31.7 20 10 42.6 10 70.3c0 7 1.2 14.2 3.4 21.2.1.2 2 6.1 3.7 9.5 10.2 21.9 29.8 39.7 44.4 50.8 15.6 11.8 28.9 18.6 29.5 18.9l1 .5 1-.5c.1-.1 13.7-7 29.5-18.9 2.1-1.6 5-4 7.7-6.2l5.2 21.7 17.9-13.1 21.9 25.8 14.8-12.5-20.1-23.8zM92 166.2c-6.5-3.5-53.4-29.6-70.9-67.1V99c-1.6-3.1-3.5-8.8-3.5-8.8-2.1-6.6-3.2-13.3-3.2-19.9 0-25.3 19.7-45.9 43.8-45.9 12.1 0 23.8 5.3 32.1 14.6l1.7 1.9 1.7-1.9c8.3-9.3 20-14.6 32.1-14.6 24.2 0 43.8 20.6 43.8 45.9 0 6.3-1.1 12.9-3.2 19.9-1.1 3.5-3.5 8.9-3.5 8.9-1.5 3.2-4 7.5-6 10.8l-42-28.7 14.2 59.4C111.7 155.4 94.3 165 92 166.2zm62-18l-15.8 11.6-16.3-68.3 57.1 39-15.4 12.8 20.2 23.8-8.1 6.8-21.7-25.7z"></path>
                        </g>
                    </svg>

                    <p class="text-svg">{{$sommes}} €</p>
                </div>
                <div class="feature">
                    <p class="text-svg">pour soutenir</p>
                    <svg class="img-feature" xmlns="http://www.w3.org/2000/svg" viewBox="50 0 99.99998474121094 200" preserveAspectRatio="xMidYMid meet" style="stroke-width: 0px;">
                        <g>
                            <path d="M97 0h7v33h-7V0z"></path>
                            <path d="M75.2 36.9L66.6 22l6.5-3.6 8.5 14.8-6.4 3.7z"></path>
                            <path d="M106 60.5v7.4c11 0 20.4 8.8 20.4 20.2 0 .1-.1 0-.1 0h7.4c.2-15-12-27.7-27.4-28-.1 0-.3.4-.3.4z"></path>
                            <path d="M100 42.1c-27.6 0-50 22.3-50 49.9 0 8 1.9 15.9 5.6 23 2.5 5.7 5.8 11.2 9.3 16.3C69.3 138 73 143.6 73 150v33c0 2 1.6 2.2 3.7 2.2h7.5c.6 7 7.4 14.8 15.8 14.8s15.2-7.8 15.8-14.8h7.5c2.1 0 3.7 0 3.7-2.2v-33c0-6.4 3.8-12.1 8.2-18.7 3.7-5.3 6.9-10.9 9.4-16.8 3.5-7 5.4-14.7 5.4-22.5 0-27.5-22.4-49.9-50-49.9zm0 150.5c-4.3 0-7.8-4.4-8.3-7.4h16.7c-.6 3-4.1 7.4-8.4 7.4zm20-14.4H81v-10h39v10zm0-12H81v-7h39v7zm0-9H81v-6h39v6zm17.9-47.1h-.9v1.4c-2 5.6-4.9 10.7-8.3 15.7-4.7 7.1-8.4 13-8.7 22H80.7c-.3-9-4.5-14.9-9.1-22-3-4.7-6.5-9.4-8.5-15.2v-.3c-3-6-5.2-12.8-5.2-19.6 0-23.5 18.9-42.5 42.4-42.5s42.4 18.4 42.4 41.9c-.1 6.7-1.8 13.6-4.8 18.6z"></path>
                            <path d="M125.3 36.9l-6.4-3.7 8.5-14.8 6.4 3.7-8.5 14.8z"></path>
                        </g>
                    </svg>
                    <p class="text-svg">{{$association_number}} associations</p>
                </div>
            </div>
        </div>
    </section>

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

    <section class="enterprise-mov">
        <div class="row">
            <div class="col m12">
                @if($associations != NULL)
                    @foreach($associations as $association)
                        @foreach($list_associations as $list_association)
                        @if($list_association->name == $association)

                <div class="content">
                    <div class="col m3">
                        <div class="card stand-card">
                            <div class="card-image waves-effect waves-block waves-light size-head-card">
                                <img class="activator" src="{{URL::to($list_association->image)}}">
                            </div>
                            <div class="card-content code-card">
                                <p class="localisation"><img src="{{asset('images/marquer.png')}}" alt=""><span>{{$list_association->location}}</span></p>
                                <p class="localisation"><img src="{{asset('images/main.png')}}" alt=""><span>{{$list_association->description}}</span></p>
                                <a class="modal-trigger waves-effect waves-light btn btn-align-center code-enter-page" href="{{URL::to('give/'.$list_association->name)}}">j'ai un delta code !</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @endif
            @endforeach
            @endforeach

        </div>
        @else
            <div>
                <p>
                    l'entreprise ne soutient aucune association.
                </p>
            </div>
            @endif
        </div>
            <div class="col m3">
                <div class="card stand-card">
                    <div class="card-image waves-effect waves-block waves-light size-head-card">
                        <img class="activator" src="{{asset('images/amp.png')}}" >

                    </div>
                    <div class="card-content code-card">
                        <h5 class="center-align">Votre projet</h5>
                        <p class="localisation"><span>Vous souhaitez pouvoir faire un don gratuit à une association qui n'est pas présentée ici ?Ajoutez-la !</span></p>
                        <a class="btn-floating btn-large waves-effect waves-light add-btn-code code-enter-page"><i class="material-icons">add</i></a>
                    </div>
                </div>

            </div>
    </section>

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