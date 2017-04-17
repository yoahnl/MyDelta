@extends('layout.master-admin')

@section('content')
    <div style="padding-left: 50%; padding-top: 10%">

    </div>




    @if(Session::has('flash_message'))
        <h3 class="text-center">Nouveaux coupons </h3>

        <hr>
        <div class="row">
            <div class="col s10 offset-s2">

                <div class="fixed-table-body">
                    <table id="grid" class="table table-striped table-hover" data-toolbar="#toolbargrid" data-pagination="true" data-search="true">
                        <thead>
                        <tr>
                            <th class="text-left" style="">
                                <div class="th-inner sortable">ID</div>
                                <div class="fht-cell"></div>
                            </th>
                            <th class="text-left" style="">
                                <div class="th-inner sortable">code</div>
                                <div class="fht-cell"></div>
                            </th>
                            <th class="text-left" style="">
                                <div class="th-inner sortable">Montant</div>
                                <div class="fht-cell"></div>
                            </th>
                            <th class="text-left" style="">
                                <div class="th-inner sortable">Société</div>
                                <div class="fht-cell"></div>
                            </th>

                        </tr>
                        </thead>
                        <tbody>
                        @foreach($newcode as $code)
                            <tr data-index="0">
                                <td class="text-left" style="">{{$code->id}}</td>
                                <td class="text-left" style="">{{$code->code}}</td>
                                <td class="text-left" style="">{{$code->donation}}</td>
                                <td class="text-left" style="">{{$code->linkedto}}</td>
                            </tr>
                        @endforeach
                        </tbody>
                        <tfoot></tfoot>
                    </table>
                </div>
            </div>
            @endif
            <br>
            <br>
            <div class="row">
                <div class="col s8 offset-s2">
                    <div>
                        <form class="form-horizontal" role="form" method="POST" action="{{URL::to('admin/create')}}">

                            {{csrf_field()}}

                            <fieldset>

                                <!-- Form Name -->
                                <div class="row">
                                    <div class="col s1 offset-s2"></div>
                                    <h1 class="text-center">Générateur de code</h1>
                                </div>

                                <!-- Select Basic -->
                                <div class="row">
                                    <div class="input-field col s12">
                                        <input id="valeur" name="valeur" type="text" class="validate">
                                        <label for="valeur">Nombre de code</label>
                                    </div>
                                </div>
                                <!-- Text input-->
                                <div class="input-field col s12">
                                    <select id="company_name" name="company_name" class="form-control">
                                        <option value="" disabled selected>Selectionner une entreprise</option>
                                        @foreach($company as $companys)
                                            <option value="{{$companys->name}}">{{$companys->name}}</option>
                                        @endforeach
                                    </select>

                                </div>

                                <!-- Select Basic -->

                                <div class="row">
                                    <div class="input-field col s12">
                                        <input id="coupon" name="coupon" type="text" class="validate">
                                        <label for="coupon">Valeur des coupons</label>
                                    </div>
                                </div>
                                <!-- Button -->
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
        </div>


@endsection

