@extends('layout.master')
@section('content')
    <div class="container">
        <hr>
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-offset-1 col-md-10 col-lg-offset-2 col-lg-8">
                <div class="panel panel-default">
                    <div class="panel-heading resume-heading">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="col-xs-12 col-sm-4">
                                    <figure>
                                        <img class="img-circle img-responsive" alt="" src="{{$association->image}}">
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
                                                        <h4 class="modal-title" id="myModalLabel">Rentrez votre code !</h4>
                                                        <hr>
                                                    </div>
                                                    <div class="form-group">
                                                        <div class="row">
                                                            <form class="form-horizontal" role="form" method="POST" action="{{ URL::to('transfert') }}">
                                                                {{csrf_field()}}
                                                                <input type="text" name="code" id="code" >
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