@extends('layout.master')

@section('content')

    <form class="form-horizontal" role="form" method="POST" action="{{URL::to('admin/delete')}}">
        {{csrf_field()}}

        <fieldset>

            <!-- Form Name -->
            <h1 class="text-center">Supprimer tous les codes</h1>
            <hr>

            <!-- Button -->
            <div class="form-group">
                <label class="col-md-4 control-label" for="singlebutton"></label>
                <div class="col-md-4">
                    <button type="submit" id="singlebutton" name="singlebutton" class="btn btn-primary">Supprimer</button>
                </div>
            </div>



        </fieldset>
    </form>

@endsection