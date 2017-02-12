@extends('layout.master')

@section('content')

        <h3 class="text-center" >Tous les coupons </h3>
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

                            <th class="text-left" style="">
                                <div class="th-inner sortable">Créer le</div>
                                <div class="fht-cell"></div>
                            </th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($codes as $code)
                            <tr data-index="0">
                                <td class="text-left" style="">{{$code->id}}</td>
                                <td class="text-left" style="">{{$code->code}}</td>
                                <td class="text-left" style="">{{$code->donation}}</td>
                                <td class="text-left" style="">{{$code->linkedto}}</td>
                                <td class="text-left" style="">{{$code->created_at}}</td>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                        <tfoot></tfoot>
                    </table>
                </div>
            </div>
@endsection
