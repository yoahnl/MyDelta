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
            <div class="col s6 offset-s3">
                <!-->
                <div class="card-panel hoverable">
                <div class="panel panel-default">
                    <div class="panel-heading resume-heading">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="col-xs-12 col-sm-4">
                                    <figure>
                                        <img class="img-thumbnail img-responsive" alt="" src="{{$association->image}}">
                                    </figure>
                                </div>
                                <div class="col-xs-12 col-sm-8">
                                    <ul class="list-group">
                                        <li class="list-group-item"><strong>Name: </strong>{{$association->name}}</li>
                                        <li class="list-group-item"> <strong>Category: </strong>{{$association->type}}</li>
                                        <li class="list-group-item">{{$association->description}}</li>
                                    </ul>
                                </div>
                            </div>
                            <!-- Modal -->

                            <a class="modal-trigger waves-effect waves-light btn" href="#modal1">Faire un don</a>
                            <div id="modal1" class="modal modal-fixed-footer">
                                <div class="modal-content">
                                    <div class="form-group">
                                        <div class="row">
                                            <h6 class="modal-title" id="myModalLabel">Afin de soutenir gratuitement cette association, veuillez saisir ci-dessous le code qui vous a été communiqué.</h6>
                                            <img class="img-thumbnail img-responsive" alt="" src="{{$association->image}}">

                                            <form class="form-horizontal" role="form" method="POST" action="{{URL::to('give/'.$association->name)}}">
                                                {{csrf_field()}}
                                                <div class="row">
                                                    <div class="input-field col s4 offset-s4">
                                                        <input type="text" name="code" id="code" class="validate">
                                                        <label for="code">Mydelta code</label>
                                                    </div>
                                                </div>
                                                <input type="hidden" name="assocation" id="association">
                                                <div class="modal-footer">
                                                    <div class="col s3 offset-s4">
                                                        <div class="text-center">
                                                            <button type="submit" class="btn btn-primary">Donner !</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- End of Modal -->
                        </div>
                    </div>
                </div>
                </div>
                <!-->
            </div>
        </div>
    </div>

@endsection

@section('js')
    <script>
        $(document).ready(function(){
            // the "href" attribute of .modal-trigger must specify the modal ID that wants to be triggered
            $('.modal').modal();
        });

    </script>
@endsection