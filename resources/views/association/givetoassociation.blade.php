@extends('layout.master')
@section('content')
    <br>
    <div class="container">
        @if(Session::has('flash_message'))
            @if(Session::get('type') == 'warning')
                <div class="alert alert-warning col-lg-4 col-lg-offset-4">
                    <button class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                    {{Session::get('flash_message')}}
                </div>
            @endif
            @if(Session::get('type') == 'danger')
                <div class="alert alert-danger col-lg-4 col-lg-offset-4">
                    <button class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                    {{Session::get('flash_message')}}
                </div>
            @endif
            @if(Session::get('type') == 'sucess')
                <div class="alert alert-info col-lg-4 col-lg-offset-4">
                    <button class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                    {{Session::get('flash_message')}}
                    <p>
                        Ne ratez rien de l’avancée de leur projet !
                         Nous vous envoyons des nouvelles régulières de cette association, et relayons les informations qu’elles souhaitent partager avec vous.  Il vous suffit simplement de renseigner votre adresse mail ici: 
                    </p>
                    <form class="form-horizontal" role="form" method="POST" action="{{URL::to('newsletter/'.$association->name)}}">
                        {{csrf_field()}}

                        <input type="email" name="email" id="email" placeholder="Email" aria-describedby="basic-addon1">
                        <input type="hidden" name="assocation" id="association">
                        <div class="text-center">
                            <button type="submit" class="btn btn-primary">S'incrire</button>
                        </div>
                        {{Session::put('code',$code_id)}}
                    </form>
                </div>
            @endif
            @if(Session::get('type') == 'email_done')
                <div class="alert alert-success col-lg-4 col-lg-offset-4">
                    <button class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                    {{Session::get('flash_message')}}
                </div>
            @endif

        @endif
            <div class="row bg-asso" style="background-image: URL({{$association->logo}});">
                <div class="col m4 offset-m4">
                    <div class="card white position-card">
                        <div class="card-content">
          <span class="card-title center-align">{{$association->name}}
            <div class="separator"></div>
          </span>
                            <div class="img-asso">
                                <img class="center-align" src="{{$association->logo}}" alt="">
                            </div>
                            <p>
                                <span><img src="images/marquer.png" alt="">{{$association->location}}</span>
                                <span><img src="images/main.png" alt="">{{$association->type}}</span>
                            </p>
                        </div>
                        <div class="card-action center-align">
                            <a class="modal-trigger waves-effect waves-light btn btn-align-center" href="#modal1">j'ai un delta code !</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="text-asso-block">
                <div class="container">
                    <div class="row">
                        <div class="col m6">
                            <div class="card white darken-1">
                                <div class="card-content">
              <span class="title">
                <h3 class="center-align">Notre action</h3>
                <div class="separator"></div>
              </span>
                                    <p>
                                        Face à la souffrance des enfants et des familles qui vivent en Asie du Sud Est dans l'extrême pauvreté, Enfants du Mékong se développe  depuis plus de 50 ans pour répondre à leurs besoins et reconnaître leur dignités.<br><br>
                                        Éduquer, former et accompagner les enfants et les jeunes, afin de leur permettre d'améliorer leurs conditions de vie matérielles et de se construire, intellectuellement, affectivement et moralement.
                                    </p>
                                    </span>
                                </div>
                            </div>
                        </div>
                        <div class="col m6">
                            <div class="card white darken-1">
                                <div class="card-content">
            <span class="title">
              <h3 class="center-align">Notre action</h3>
              <div class="separator"></div>
            </span>
                                    <p>
                                        Ce sont près de 22 000 enfants parrainés et 60 000 enfants soutenus qui peuvent ainsi accéder à l'éducation. Enfants du Mékong soutient la construction d'une centaine de projets de développement par an (écoles, puits...) et gère 10 centres et 78 foyers.<br><br>
                                        60 volontaires de solidarité internationale, les Bambous, sont envoyés sur le terrain pour des missions d'une durée minimum d'un an de suivi des différents projets de l'ONG.
                                        Enfants du Mékong  intervient dans 7 pays : Vietnam, Thaïlande, Laos, Philippines, Cambodge, Birmanie et Chine.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <h3 class="center-align tilte-project-asso">Nos project en cours <div class="separator"></div></h3>
            <div class="project-asso">
                <div class="container">
                    <div class="row">
                        <div class="col m4">
                            <div class="card">
                                <div class="card-image">
                                    <img src="img/assobg5.jpg">
                                </div>
                                <div class="card-title center-align white-text">Caisse de santé pour nos filleuls en Asie</div>
                                <div class="card-content">

                                    <p>Ce projet vise à prendre en charge par une caisse spécialement réservée,  les frais médicaux ou d’hospitalisation qui ne peuvent pas être couverts localement par le budget des parrainages ou  de nos centres scolaires.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col m4">
                            <div class="card">
                                <div class="card-image">
                                    <img src="img/assobg5.jpg">
                                </div>
                                <div class="card-title center-align white-text">Aider nos jeunes à poursuive leurs études à Daumaguete</div>
                                <div class="card-content">
                                    <p>Grâce à cette bourse d’études, ils ont les moyens de tout mettre en œuvre pour que certains de leurs rêves deviennent réalité et espèrent bien un jour devenir des professionnels reconnus et venir à leur tour en aide à leur famille.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col m4">
                            <div class="card">
                                <div class="card-image">
                                    <img src="img/assobg5.jpg">
                                </div>
                                <div class="card-title center-align white-text">Aider nos jeunes à poursuive leurs études à Sisophon</div>
                                <div class="card-content">
                                    <p>Le Centre de Sisophon né en 1993 à Sisophon (Cambodge) comprend aujourd’hui 41 foyers et un centre scolaire. Il offre à 1 695 enfants un havre de paix et une structure familiale, propice à l’éducation et au développement personnel.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container">
                <section class="carrousel-section section1" data-midnight="trans" id="section1">
                    <div id="jssor_1" Class="carousel-one">

                        <div data-u="slides" Class="carousel-two" style="">
                            <div Class='slide-one' data-p="225.00">
                            </div>
                            <div Class='slide-two' data-p="225.00" style="display: flex;">
                            </div>
                            <div Class='slide-tree' data-p="225.00" data-po="80% 55%" style="display: none;">
                            </div>
                        </div>
                        <span data-u="arrowleft" class="jssora22l" data-autocenter="2"><i class="fa fa-angle-left" aria-hidden="true"></i></span>
                        <span data-u="arrowright" class="jssora22r" data-autocenter="2"><i class="fa fa-angle-right" aria-hidden="true"></i></span>
                    </div>
                </section>
            </div>
            <div class="container social">
                <div class="row">
                    <div class="card white position-card">
                        <div class="card-content">
                            <h3 class="center-align">A propos
                                <div class="separator"></div>
                            </h3>
                            <div class="img-asso">
                                <img class="center-align" src="img/assologo-2-2.png" alt="">
                            </div>
                            <p class="center-align"><a href="#">www.enfantsdumekong.com</a></p>
                            <p class="center-align join">Rejoignez-les sur :</p>
                            <div class="social-network">
                                <a href="#"><div class="social-facebook">
                                        <i class="fa fa-facebook" aria-hidden="true"></i>
                                    </div></a>
                                <a href="#"><div class="social-twitter">
                                        <i class="fa fa-twitter" aria-hidden="true"></i>
                                    </div></a>
                                <a href="#"><div class="social-google">
                                        <i class="fa fa-google-plus" aria-hidden="true"></i>
                                    </div></a>
                                <a href="#"><div class="social-youtube">
                                        <i class="fa fa-youtube-play" aria-hidden="true"></i>
                                    </div></a>
                                <a href="#"><div class="social-pine">
                                        <i class="fa fa-pinterest-p" aria-hidden="true"></i>
                                    </div></a>
                                <a href="#"><div class="social-insta">
                                        <i class="fa fa-instagram" aria-hidden="true"></i>
                                    </div></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        @endsection

@section('js')
    <script>
        $(document).ready(function(){
            $('.modal').modal();
        });

    </script>
@endsection