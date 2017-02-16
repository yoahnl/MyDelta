@extends('layout.master')

@section('content')
    <hr>

    <section id="blog" class="container">
        <div class="row">
            <aside class="col-sm-4 col-sm-push-8">

                <!--/.ads-->

                <div class="widget categories">
                    <h1>Categories</h1>
                    <hr>
                    <div class="row">
                        <div class="col-sm-12">
                            <ul class="arrow">
                                @foreach($cates as $cate)
                                   <h4> <li><a href="{{URL::to('/association/'.$cate->type)}}">{{$cate->type}}</a></li> </h4>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                </div><!--/.categories-->
                <div class="widget tags">
            </aside>
            <div class="col-sm-8 col-sm-pull-4">
                @foreach($associations as $association)
                    <div class="blog">
                        <div class="blog-item">
                            <a href="{{URL::to('give/'.$association->name)}}" >
                                <img class="img-thumbnail img-responsive" alt="" src="{{$association->image}}">
                                <div class="blog-content">
                                    <h3>{{$association->name}}</h3>
                                    <h4>Catégorie: {{$association->type}}</h4>
                                    <p>{{$association->description}}</p>
                            </a>

                            <hr>
                            <a href="{{$association->url}}" >

                                <li class="list-group-item">{{$association->url}}</li>
                            </a>
                            <p>&nbsp;</p>
                        </div>
                    </div><!--/.blog-item-->
            </div>
            @endforeach
        </div><!--/.row-->
    </section><!--/#blog-->
@endsection