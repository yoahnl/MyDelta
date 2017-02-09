@extends('layout.master')

@section('content')
    <hr>
    @foreach($associations as $association)
        <a href="{{URL::to('give/'.$association->name)}}" >
    <div class="container">
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
                            </div>
                        </div>
                    </div>

                </div>
            </div>
    </div>
        </a>
    <hr>
    @endforeach
@endsection