@extends('layout.master')

@section('content')

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
    <div class="row">
        <div class="col s8 offset-s2">
            <div class="card-panel hoverable">
                <form class="form-horizontal" role="form" method="POST" action="{{URL::to('admin/newcompany')}}">
                    {{csrf_field()}}
                    <h3 class="text-center" >Ajouter une nouvelle entreprise à la base de donnée</h3>

                    <fieldset>

                        <!-- Text input-->
                        <div class="row">
                            <div class="input-field col s12">
                                <input id="name" name="name" type="text" class="validate">
                                <label for="name">nom de l'entreprise</label>
                            </div>
                        </div>


                        <!-- Text input-->
                        <div class="row">
                            <div class="input-field col s12">
                                <input id="company_image" name="company_image" type="text" class="validate">
                                <label for="name">Image de l'entreprise</label>
                            </div>
                        </div>

                        <!-- Button -->
                        <div class="form-group">
                            <label class="col-md-4 control-label" for="singlebutton"></label>
                            <div class="col-md-4">
                                <button id="singlebutton" name="singlebutton" class="btn btn-primary">Ajouter</button>
                            </div>
                        </div>

                    </fieldset>
                </form>
            </div>
        </div>
    </div>
@endsection