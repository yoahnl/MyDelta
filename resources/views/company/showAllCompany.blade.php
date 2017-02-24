@extends('layout.master')

@section('content')
    <hr>
    @foreach($companys as $company)
        <section id="blog" class="container">
            <a href="{{URL::to('company/'.$company->name)}}" ><h1 class="text-center">Société : {{$company->name}}</h1> </a>
            <hr>
        </section><!--/#blog-->
    @endforeach


    @endsection