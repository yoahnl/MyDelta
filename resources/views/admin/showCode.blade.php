@extends('layout.master')

@section('content')


    <link href="https://cdn.datatables.net/1.10.13/css/jquery.dataTables.min.css" rel="stylesheet">
    <link href="https://cdn.datatables.net/autofill/2.1.3/css/autoFill.dataTables.min.css" rel="stylesheet">
    <link href="https://cdn.datatables.net/buttons/1.2.4/css/buttons.dataTables.min.css" rel="stylesheet">
    <link href="https://cdn.datatables.net/colreorder/1.3.2/css/colReorder.dataTables.min.css" rel="stylesheet">
    <link href="https://cdn.datatables.net/fixedcolumns/3.2.2/css/fixedColumns.dataTables.min.css" rel="stylesheet">
    <link href="https://cdn.datatables.net/fixedheader/3.1.2/css/fixedHeader.dataTables.min.css" rel="stylesheet">
    <link href="https://cdn.datatables.net/keytable/2.2.0/css/keyTable.dataTables.min.css" rel="stylesheet">
    <link href="https://cdn.datatables.net/responsive/2.1.1/css/responsive.dataTables.min.css" rel="stylesheet">
    <link href="https://cdn.datatables.net/rowreorder/1.2.0/css/rowReorder.dataTables.min.css" rel="stylesheet">
    <link href="https://cdn.datatables.net/scroller/1.4.2/css/scroller.dataTables.min.css" rel="stylesheet">
    <link href="https://cdn.datatables.net/select/1.2.1/css/select.dataTables.min.css" rel="stylesheet">
    <hr>
        <h3 class="text-center" >Tous les coupons </h3>
    <hr>
            <table cellpadding="0" cellspacing="0" border="0" class="display" id="example">
                <thead>
                <tr>
                    <th>ID</th>
                    <th>code</th>
                    <th>Montant</th>
                    <th>Pour l'association</th>
                    <th>Adresse mail</th>
                    <th>Société</th>
                    <th>Créer le</th>
                    <th>Utilisé</th>

                </tr>
                </thead>
                <tbody>
                @foreach($codes as $code)
                    <tr class="gradeX">
                        <td class="text-left" style="">{{$code->id}}</td>
                        <td class="text-left" style="">{{$code->code}}</td>
                        <td class="text-left" style="">{{$code->donation}}</td>
                        <td class="text-left" style="">{{$code->duto}}</td>
                        <td class="text-left" style="">{{$code->email}}</td>
                        <td class="text-left" style="">{{$code->linkedto}}</td>
                        <td class="text-left" style="">{{$code->created_at}}</td>
                        @if($code->used == true)
                            <td class="text-left" style="">Oui</td>
                        @else
                            <td class="text-left" style="">Non</td>
                        @endif
                    </tr>
                    </tr>
                @endforeach

                <tfoot>
                <tr>
                    <th>ID</th>
                    <th>code</th>
                    <th>Montant</th>
                    <th>Pour l'association</th>
                    <th>Adresse mail</th>
                    <th>Société</th>
                    <th>Créer le</th>
                    <th>Utilisé</th>

                </tr>
                </tfoot>
            </table>
        </div>
</tbody>
    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.5/jquery.min.js"></script>
    <script>
        $(document).ready(function() {
            $('#example').DataTable();
        } );
    </script>

@endsection
