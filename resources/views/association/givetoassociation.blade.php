@extends('layout.master')
@section('content')
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
    <div class="row bg-asso" style="background-image: URL({{$association->bg_image}}); width:100%;">
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
                        <span><img src="{{URL::to("images/marquer.png")}}" alt="">{{$association->location}}</span>
                        <span><img src="{{URL::to("images/main.png")}}" alt="">{{$association->type}}</span>
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
                <h3 class="center-align">{{$association->title1}}</h3>
                <div class="separator"></div>
              </span>
                            <p>
                                {{$association->left_content1}}
                            </p>
                            </span>
                        </div>
                    </div>
                </div>
                <div class="col m6">
                    <div class="card white darken-1">
                        <div class="card-content">
            <span class="title">
              <h3 class="center-align">{{$association->left_title2}}</h3>
              <div class="separator"></div>
            </span>
                            <p>
                                {{$association->left_content2}}
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
                            <img src="{{$association->cell_1_image}}">
                        </div>
                        <div class="card-title center-align white-text">{{$association->right_title1}}</div>
                        <div class="card-content">

                            <p>
                                {{$association->right_content1}}
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col m4">
                    <div class="card">
                        <div class="card-image">
                            <img src="{{$association->cell_2_image}}">
                        </div>
                        <div class="card-title center-align white-text">{{$association->right_title2}}</div>
                        <div class="card-content">
                            <p>
                                {{$association->right_content2}}
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col m4">
                    <div class="card">
                        <div class="card-image">
                            <img src="{{$association->cell_3_image}}">
                        </div>
                        <div class="card-title center-align white-text">{{$association->left_title2}}</div>
                        <div class="card-content">
                            <p>
                                {{$association->left_content3}}
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="slider">
            <ul class="slides">
                <li>
                    <img src="{{$association->carrousel_1_image}}"> <!-- random image -->
                    <div class="caption center-align">

                    </div>
                </li>
                <li>
                    <img src="{{$association->carrousel_2_image}}"> <!-- random image -->
                    <div class="caption left-align">

                    </div>
                </li>
                <li>
                    <img src="{{$association->carrousel_3_image}}"> <!-- random image -->
                    <div class="caption right-align">

                    </div>
                </li>
            </ul>
        </div>
    </div>


    <div class="container social">
        <div class="row">
            <div class="card white position-card">
                <div class="card-content">
                    <h3 class="center-align">A propos
                        <div class="separator"></div>
                    </h3>
                    <div class="img-asso">
                        <img class="center-align" src="{{$association->cell_1_image}}" alt="">
                    </div>
                    <p class="center-align"><a href="#">{{$association->url}}</a></p>
                    <p class="center-align join">Rejoignez-les sur :</p>
                    <div class="social-network">

                        @if($association->facebook)
                            <a href="{{$association->facebook}}"><div class="social-facebook">
                                    <i class="fa fa-facebook" aria-hidden="true"></i>
                                </div></a>
                        @else
                            <br>
                        @endif

                        @if($association->twitter)
                            <a href="{{$association->twitter}}"><div class="social-twitter">
                                    <i class="fa fa-twitter" aria-hidden="true"></i>
                                </div></a>
                        @else
                            <br>
                        @endif

                        @if($association->instagram)
                            <a href="{{$association->instagram}}"><div class="social-insta">
                                    <i class="fa fa-instagram" aria-hidden="true"></i>
                                </div></a>
                        @else
                            <br>
                        @endif

                        @if($association->youtube)
                            <a href="{{$association->youtube}}"><div class="social-youtube">
                                    <i class="fa fa-youtube-play" aria-hidden="true"></i>
                                </div></a>
                        @else
                            <br>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div id="modal1" class="modal">
        <div class="modal-content">
            <h5 class="center-align">Afin de soutenir gratuitement cette association,<br> veuillez saisir ci-dessous le code qui vous a été communiqué.</h5>

            <form class="form-horizontal" role="form" method="POST" action="{{URL::to('give/'.$association->name)}}">
                {{csrf_field()}}
                <div class="input-field col s6 offset-s3">
                    <input id="code" name="code" type="text" class="validate">
                    <label for="code">Code</label>
                </div>
                <input type="hidden" name="assocation" id="association">
                <div class="modal-footer">
                    <div class="col-sm-12">
                        <div class="center-align">
                            <button type="submit" class="btn btn-primary">Donner !</button>
                        </div>
                    </div>
                </div>
            </form>
        </div>

    </div>

@endsection
@section('js')
    <script>
        $(document).ready(function(){
            $('.modal').modal();
        });
        $(document).ready(function(){
            $('.slider').slider();

        });
    </script>
@endsection
