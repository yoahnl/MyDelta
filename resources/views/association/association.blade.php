@extends('layout.master')

@section('content')

        <div class="row">

                <!--/.ads-->
                <div class="row">
                <div class="col s12 offset-s8">
                    <h4>Categories</h4>
                    <div class="row">
                        <div class="col s12">
                            <ul class="arrow">
                                @foreach($cates as $cate)
                                   <h6> <li><a href="{{URL::to('/association/'.$cate->type)}}">{{$cate->type}}</a></li> </h6>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                </div>
                </div>
                <!--/.categories-->
                <div class="widget tags">
            <!-->
            <div class="row">
                @foreach($associations as $association)
                    <div class="col s8">

                    <div class="card-panel hoverable">
                        <div class="blog-item">
                            <a href="{{URL::to('give/'.$association->name)}}" >
                                <img class="img-thumbnail img-responsive" alt="" src="{{$association->image}}">
                                <div class="blog-content">
                                    <h3>{{$association->name}}</h3>
                                    <h6>Catégorie: {{$association->type}}</h6>
                                    <p>{{$association->description}}</p>
                            </a>

                            <hr>

                                <li class="list-group-item">{{$association->url}}</li>
                            <p>&nbsp;</p>
                        </div>
                    </div><!--/.blog-item-->
            </div>
            </div>
            <!-->
            <br>
            @endforeach

        </div><!--/.row-->
@endsection