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
        @endif
    </div>
    <!-- New Form -->
    <div class="row">
        <div class="col s8 offset-s2">
            <div class="card-panel hoverable">
                <form class="form-horizontal" role="form" method="POST" action="{{URL::to('admin/createassociation')}}">
                    {{csrf_field()}}

                    <fieldset>

                        <!-- Form Name -->
                        <div class="row">
                            <div class="col s2"></div>
                            <h1 class="text-center">Ajouter l'association</h1>
                        </div>
                        <!-- End of Form Name -->

                        <!-- Nom de l'association -->
                        <div class="row">
                            <div class="input-field col s12">
                                <input id="name" name="name" type="text" class="validate">
                                <label for="valeur">Nom de l'association</label>
                            </div>
                        </div>
                        <!-- End of Nom de l'association-->

                        <!-- Catégorie de l'association -->
                        <div class="row">
                            <div class="input-field col s12">
                                <input id="type" name="type" type="text" class="validate">
                                <label for="coupon">Catégorie de l'association</label>
                            </div>
                        </div>
                        <!-- End of Catégorie de l'association -->

                        <!-- Description rapide de l'association -->
                        <div class="row">
                            <div class="input-field col s12">
                                <textarea id="small_description" name="small_description" class="materialize-textarea"></textarea>
                                <label for="coupon">Description rapide de l'association</label>
                            </div>
                        </div>
                        <!-- End of Description rapide de l'association -->

                        <!-- Description  de l'association -->
                        <div class="row">
                            <div class="input-field col s12">
                                <textarea id="description" name="description" class="materialize-textarea"></textarea>
                                <label for="coupon">Description de l'association</label>
                            </div>
                        </div>
                        <!-- End of Description de l'association -->

                        <!-- URL de l'association -->
                        <div class="row">
                            <div class="input-field col s12">
                                <input id="url" name="url" type="text" class="validate">
                                <label for="coupon">URL de l'association</label>
                            </div>
                        </div>
                        <!-- End of URL de l'association -->

                        <!-- URL_facebook de l'association -->
                        <div class="row">
                            <div class="input-field col s12">
                                <input id="url_facebook" name="url_facebook" type="text" class="validate">
                                <label for="coupon">URL facebook de l'association</label>
                            </div>
                        </div>
                        <!-- End of URL_facebook de l'association -->

                        <!-- Image de l'association -->
                        <div class="row">
                            <div class="input-field col s12">
                                <input id="image" name="image" type="text" class="validate">
                                <label for="coupon">Image de l'association</label>
                            </div>
                        </div>
                        <!-- End of Image de l'association -->

                        <div class="form-group">
                            <label class="col-md-4 control-label" for="singlebutton"></label>
                            <div class="col-md-4">
                                <button type="submit" id="singlebutton" name="singlebutton" class="btn btn-primary">Générer</button>
                            </div>
                        </div>
                    </fieldset>
                </form>
            </div>
        </div>
    </div>
@endsection

@section('js')
    <script>
        $('#small_description').trigger('autoresize');
        $('#description').trigger('autoresize');
    </script>
@endsection