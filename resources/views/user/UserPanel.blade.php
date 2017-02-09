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

                            <!--<div class="col-xs-10 col-sm-10 hidden-md hidden-lg"> <br>
                              <dl>
                                <dt>DEPARTMENT:</dt>
                                <dd>Administrator</dd>
                                <dt>HIRE DATE</dt>
                                <dd>11/12/2013</dd>
                                <dt>DATE OF BIRTH</dt>
                                   <dd>11/12/2013</dd>
                                <dt>GENDER</dt>
                                <dd>Male</dd>
                              </dl>
                            </div>-->
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
                                <a class="btn btn-primary" role="button" data-toggle="collapse" href="#collapseExample" aria-expanded="false" aria-controls="collapseExample">
                                    Association Supportées
                                </a>
                                <div class="collapse" id="collapseExample">
                                    <div class="well">
                                        ...
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection