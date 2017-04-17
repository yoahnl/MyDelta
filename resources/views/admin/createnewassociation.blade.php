@extends('layout.master')

@section('content')

    <br>

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
        <div class="col s12">
                <form class="form-horizontal" role="form" method="POST" action="{{URL::to('admin/createassociation')}}">
                    {{csrf_field()}}

                    <fieldset>

                        <!-- Form Name -->
                        <div class="row">
                            <div class="col s2"></div>
                            <h1 class="center-align">Ajouter l'association</h1>
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

                        <div class="row">
                            <div class="input-field col s12">
                                <input id="location" name="location" type="text" class="validate">
                                <label for="coupon">Catégorie de l'association</label>
                            </div>
                        </div>

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
                        <br>
                        <br>
                        <hr>
                        <br>
                        <br>
                        <!-- Left part for Description -->

                        <div class="row">
                            <div class="col s12">
                                <div class="row">
                                    <div class="input-field col s6">
                                        <input placeholder="left" id="title1" name="title1" type="text" class="validate">
                                        <label for="first_name">Titre 1</label>
                                    </div>

                                    <div class="input-field col s6">
                                        <input placeholder="Placeholder" id="title2" name="title2" type="text" class="validate">
                                        <label for="first_name">Titre 2</label>
                                    </div>

                                    <div class="input-field col s6">
                                        <input placeholder="Placeholder" id="left_title1" name="left_title1" type="text" class="validate">
                                        <label for="first_name">titre 1 gauche</label>
                                    </div>

                                    <div class="input-field col s6">
                                        <input placeholder="Placeholder" id="right_title1" name="right_title1" type="text" class="validate">
                                        <label for="first_name">titre 1 droite</label>
                                    </div>

                                            <div class="input-field col s6">
                                                <textarea id="left_content1" name="left_content1" class="materialize-textarea"></textarea>
                                                <label for="textarea1">Textarea</label>
                                            </div>


                                            <div class="input-field col s6">
                                                <textarea id="right_content1" name="right_content1" class="materialize-textarea"></textarea>
                                                <label for="textarea1">Textarea</label>
                                            </div>

                                    <div class="input-field col s6">
                                        <input placeholder="Placeholder" id="left_title2" name="left_title2" type="text" class="validate">
                                        <label for="first_name">titre 2 gauche</label>
                                    </div>

                                    <div class="input-field col s6">
                                        <input placeholder="Placeholder" id="right_title2" name="right_title2" type="text" class="validate">
                                        <label for="first_name">titre 2 droite</label>
                                    </div>

                                    <div class="input-field col s6">
                                        <textarea id="letft_content2" name="left_content2" class="materialize-textarea"></textarea>
                                        <label for="textarea1">Textarea</label>
                                    </div>

                                    <div class="input-field col s6">
                                        <textarea id="right_content2" name="right_content2" class="materialize-textarea"></textarea>
                                        <label for="textarea1">Textarea</label>
                                    </div>
                                    <div class="input-field col s7">
                                        <input placeholder="right" id="left_title3" name="left_title3" type="text" class="validate">
                                        <label for="first_name">titre 3 gauche</label>
                                    </div>
                                    <br>
                                    <div class="input-field col s6">
                                        <textarea id="left_content3" name="left_content3" class="materialize-textarea"></textarea>
                                        <label for="textarea1">Textarea</label>
                                    </div>
                                </div>
                            </div>
                        </div>



                        <!-- End of Left part for Description-->

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
@endsection

@section('js')
    <script>
        $('#small_description').trigger('autoresize');
        $('#description').trigger('autoresize');
    </script>
@endsection