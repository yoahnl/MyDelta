@extends('layout.master')
@section('content')
    <div class="container">
        <hr>
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
                    <div class="alert alert-success col-lg-4 col-lg-offset-4">
                        <button class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                        {{Session::get('flash_message')}}
                        <p>
                            Ne ratez rien de l’avancée de leur projet !
                             Nous vous envoyons des nouvelles régulières de cette association, et relayons les informations qu’elles souhaitent partager avec vous.  Il vous suffit simplement de renseigner votre adresse mail ici: 
                        </p>
                        <form class="form-horizontal" role="form" method="POST" action="{{URL::to('newsletter/'.$association->name)}}">
                            {{csrf_field()}}
                            <input type="email" name="email" id="email" class="form-control" placeholder="Email" aria-describedby="basic-addon1">
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
            <div class="col-xs-12 col-sm-12 col-md-offset-1 col-md-10 col-lg-offset-2 col-lg-8">
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
                            <!-- Button trigger modal -->
                            <div class="row">
                                <div class="col-sm-12">
                                    <div class="text-center">
                                        <button type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#myModal">
                                            Faire un don !
                                        </button>
                                        <!-- Modal -->
                                        <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                                            <div class="modal-dialog" role="document">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                                        <h4 class="modal-title" id="myModalLabel">Afin de soutenir gratuitement cette association, veuillez saisir ci-dessous le code qui vous a été communiqué.</h4>
                                                        <hr>
                                                    </div>
                                                    <div class="form-group">
                                                        <div class="row">
                                                            <form class="form-horizontal" role="form" method="POST" action="{{URL::to('give/'.$association->name)}}">
                                                                {{csrf_field()}}
                                                                <input type="text" name="code" id="code" >
                                                                <input type="hidden" name="assocation" id="association">
                                                                <div class="modal-footer">
                                                                    <div class="col-sm-12">
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
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <hr>
@endsection