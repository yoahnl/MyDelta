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
    <form class="form-horizontal" role="form" method="POST" action="{{URL::to('admin/newcompany')}}">
        {{csrf_field()}}
        <h3 class="text-center" >Ajouter une nouvelle entreprise à la base de donnée</h3>

        <fieldset>

            <!-- Text input-->
            <div class="form-group">
                <label class="col-md-4 control-label" for="textinput">Nom de l'entreprise</label>
                <div class="col-md-4">
                    <input id="name" name="name" type="text" placeholder="nom de l'entreprise" class="form-control input-md">
                </div>
            </div>



            <!-- Button -->
            <div class="form-group">
                <label class="col-md-4 control-label" for="singlebutton">Ajouter l'entreprise</label>
                <div class="col-md-4">
                    <button id="singlebutton" name="singlebutton" class="btn btn-primary">Ajouter</button>
                </div>
            </div>

        </fieldset>
    </form>

@endsection