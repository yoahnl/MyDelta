@extends('layout.master')

@section('content')

    @if(Session::has('flash_message'))
        <h3 class="text-center" >Nouveaux coupons </h3>
        <hr>
        <div class="table-responsive">
            <div class="fixed-table-container">
                <div class="fixed-table-header">
                    <table></table>
                </div>
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

                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                        <tfoot></tfoot>
                    </table>
                </div>
                @endif
                <form class="form-horizontal" role="form" method="POST" action="{{URL::to('admin/create')}}">
                    {{csrf_field()}}

                    <fieldset>

                        <!-- Form Name -->
                        <h1 class="text-center">Générateur de code</h1>
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
                        <!-- Button -->
                        <div class="form-group">
                            <label class="col-md-4 control-label" for="singlebutton">Single Button</label>
                            <div class="col-md-4">
                                <button type="submit" id="singlebutton" name="singlebutton" class="btn btn-primary">Générer</button>
                            </div>
                        </div>

                    </fieldset>
                </form>
            </div>
@endsection


