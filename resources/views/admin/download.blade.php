@extends('layout.master')

@section('content')

<form class="form-horizontal" role="form" method="POST" action="{{URL::to('admin/getshit')}}">
    {{csrf_field()}}

    <fieldset>

        <!-- Form Name -->
        <h1 class="text-center">Télécharger code sous fichier excel</h1>
        <hr>

        <!-- Text input-->


        <div class="form-group">
            <label class="col-md-4 control-label" for="textinput">Nom de la société</label>
            <div class="col-md-12">
                <div class='col-md-7'>
                    <select class="selectpicker" data-live-search="true" id="societe" name="societe">
                        <option data-tokens=""></option>
                        @foreach($company as $companys)
                            <option data-tokens="{{$companys->name}}">{{$companys->name}}</option>
                        @endforeach
                    </select>
                </div>
            </div>
        </div>

        <!-- get last code generated -->


        <!-- Button -->
        <div class="form-group">
            <label class="col-md-4 control-label" for="singlebutton"></label>
            <div class="col-md-4">
                <button type="submit" id="singlebutton" name="singlebutton" class="btn btn-primary">Générer</button>
            </div>
        </div>



    </fieldset>
</form>

@endsection

@section('js')
    <script>
        $(document).ready(function() {
            $('select').material_select();
        });
    </script>

@endsection