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
        <div class="row">
            <div class="col s12">
                <img src="{{$association->image}}" alt="{{$association->name}}" width="250">
                <div class="col s10">
                    <h6 class="grey-black_delta">
                        {{$association->small_description}}
                        <br>
                        <br>
                    </h6>
                </div>
            </div>

            <div class="row">
                <div class="col s3"><img src="{{URL::asset('images/association/location_button.png')}}" width="60">{{$association->location}}</div>
                <div class="col s5"><img src="{{URL::asset('images/association/url_button.png')}}" width="60">{{$association->url}}</div>
            </div>

            <br>
            <div class="row">
                <div class="col s6">
                    <h3 class="orange_delta">
                        <strong>
                            {{$association->title1}}
                        </strong>
                    </h3>
                    <br>
                    <h5>
                        {{$association->left_title1}}
                    </h5>
                    <br>
                    <p>
                        {{$association->left_content1}}
                    </p>
                    <br>
                    <h5>
                        {{$association->left_title2}}
                    </h5>
                    <br>
                    <p>
                        {{$association->left_content2}}
                    </p>
                    <br>
                    <h5>
                        {{$association->left_title3}}
                    </h5>
                    <br>
                    <p>
                        {{$association->left_content3}}
                    </p>
                </div>
                <div class="col s6">
                    <h3 class="orange_delta">
                        <strong>
                            {{$association->title2}}
                        </strong>
                    </h3>
                    <br>
                    <h5>
                        {{$association->right_title1}}
                    </h5>
                    <br>
                    <p>
                        {{$association->right_content1}}
                    </p>
                    <br>
                    <h5>
                        {{$association->right_title2}}
                    </h5>
                    <br>
                    <p>
                        {{$association->right_content2}}

                    </p>
                </div>
            </div>

            <div class="col s6 offset-s3">
                <hr>
                <br>
            </div>
            <div style="text-align: center">
                <br>
                <div class="row">

                </div>
                <a class="waves-effect waves-light btn" href="#modal1">Faire un don pour {{$association->name}}</a>

                <!-- Modal Structure -->
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