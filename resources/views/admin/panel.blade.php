@extends('layout.master')

@section('content')
    <div class="container">
        <hr>

        <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 col-xs-offset-0 col-sm-offset-0 col-md-offset-3 col-lg-offset-3 toppad" >


            <div class="panel panel-info">
                <div class="panel-heading">
                    <h3 class="panel-title">{{Auth::user()->name}} {{Auth::user()->surname}}</h3>
                </div>
                <div class="panel-body">
                    <div class="row">

                        <div class=" col-md-9 col-lg-9 ">
                            <table class="table table-user-information">
                                <tbody>
                                <tr>
                                    <td>Company
                                    </td>
                                    <td>{{Auth::user()->company}}</td>
                                </tr>
                                <tr>
                                    <td>Email</td>
                                    <td><a href="{{Auth::user()->email}}">{{Auth::user()->email}}</a></td>
                                </tr>



                                </tbody>
                            </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
@endsection
