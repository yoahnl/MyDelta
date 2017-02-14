@extends('layout.master')

@section('content')

<form class="form-horizontal" role="form" method="POST" action="{{URL::to('admin/getshit')}}">
    {{csrf_field()}}

    <fieldset>

        <!-- Form Name -->
        <h1 class="text-center">Télécharger code sous fichier excel</h1>
        <hr>
        <!-- Select Basic -->
        <div class="form-group">
            <label class="col-md-4 control-label" for="textinput">Nombre de code</label>
            <div class="col-md-4">
                <input id="valeur" name="valeur" type="text" placeholder="nombre de code à générer" class="form-control input-md">
            </div>
        </div>

        <!-- Text input-->
        <div class="form-group">
            <label class="col-md-4 control-label" for="textinput">Nom de la société</label>
            <div class="col-md-4">
                <input id="societe" name="societe" type="text" placeholder="nom de la société" class="form-control input-md">
            </div>
        </div>

        <!-- Select Basic -->
        <div class="form-group">
            <label class="col-md-4 control-label" for="textinput">Valeur des coupons</label>
            <div class="col-md-4">
                <input id="coupon" name="coupon" type="text" placeholder="valeur des coupons" class="form-control input-md">
            </div>
        </div>


        <!-- Select Basic -->
        <div class="form-group">
            <label class="col-md-4 control-label" for="textinput">Utilisés</label>
            <div class="col-md-4">
                <input id="used" name="used" type="text" placeholder="utilisés" class="form-control input-md">
            </div>
        </div>
        <!-- get last code generated -->


        <!-- Button -->
        <div class="form-group">
            <label class="col-md-4 control-label" for="singlebutton">Single Button</label>
            <div class="col-md-4">
                <button type="submit" id="singlebutton" name="singlebutton" class="btn btn-primary">Générer</button>
            </div>
        </div>



    </fieldset>
</form>

@endsection
