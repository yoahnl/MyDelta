@extends('layout.master')

@section('content')

    <hr>
    <div class="container">

        @if(Session::has('flash_message'))
            @if(Session::get('type') == 'error')
                <div class="alert alert-danger col-lg-4 col-lg-offset-4">
                    <button class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                    {{Session::get('flash_message')}}
                </div>
            @endif
            @if(Session::get('type') == 'sucess')
                <div class="alert alert-success col-lg-4 col-lg-offset-4">
                    <button class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                    {{Session::get('flash_message')}}

                </div>
            @endif
            <hr>
        @endif
    </div>
    <form class="form-horizontal" role="form" method="POST" action="{{URL::to('admin/modif')}}">
        {{csrf_field()}}
        <h3 class="text-center" >Changer les informations d'une association</h3>

        <fieldset>

            <!-- Form Name -->

            <!-- Text input-->
            <div class="form-group">
                <label class="col-md-4 control-label" for="textinput">Nom de la société</label>
                <div class="col-md-12">
                    <div class='col-md-7'>
                        <select class="selectpicker" data-live-search="true" id="name" name="name">
                            <option data-tokens=""></option>
                            @foreach($associations as $association)
                                <option data-tokens="{{$association->name}}">{{$association->name}}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
            </div>



            <!-- Button -->
            <div class="form-group">
                <label class="col-md-4 control-label" for="singlebutton">Ajouter l'association</label>
                <div class="col-md-4">
                    <button id="singlebutton" name="singlebutton" class="btn btn-primary">Changer</button>
                </div>
            </div>

        </fieldset>
    </form>

@endsection