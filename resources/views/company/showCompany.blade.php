@extends('layout.master')

@section('content')
    <hr>

    <section id="blog" class="container">
        <h1 class="text-center">Société : {{$id}}</h1>
        <hr>
        <h3>
            {{$id}} soutient les associations suivantes:
        </h3>
        <div class="col-md-4 ">
        <ul class="list-group">
            @foreach($associations as $association)
                <a href="{{URL::to('give/'.$association)}}" > <li class="list-group-item">{{$association}}</li> </a>
                @endforeach
        </ul>
        </div>
    </section><!--/#blog-->
@endsection