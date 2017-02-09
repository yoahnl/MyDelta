@extends('layout.master')

@section('content')
    <div class="container">
        <div class="content">
            <i class="fa fa-search" style="font-size:120px;color:#FF5959;margin-bottom:30px;"></i>
            @if(isset($record_name) && isset($record_id))
                <div class="title">{{ $record_name }} with id {{ $record_id }} not found</div>
            @else
                <div class="row">
                    <h1 class="center">
                        Page not found
                    </h1>
                    <hr>


            @endif

            @if(Auth::guest())
                <a href="{{ url('/') }}"><h4 class="center">Homepage </h4></a>
                        <hr>
                <a href="javascript:history.back()"><h4 class="center">Go Back</h4></a>
            @else
                <a href="{{ url(config('laraadmin.adminRoute')) }}">Dashboard.</a> |
                <a href="javascript:history.back()">Go Back</a>
            @endif

        </div>
    </div>

@endsection
