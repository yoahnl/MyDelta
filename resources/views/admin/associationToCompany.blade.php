@extends('layout.master')

@section('content')
    <hr>
    <div class="row">
        @include('layout.flash')
    </div>
    <form class="form-horizontal" role="form" method="POST" action="{{URL::to('admin/setcompany')}}">
        {{csrf_field()}}
        <section id="blog" class="container">
            <div class="row">
                <aside class="col-sm-4 col-sm-push-8">

                    <!--/.ads-->

                    <div class="widget tags">
                </aside>
                <div class="col-sm-8 col-sm-pull-4">
                    @foreach($companys as $company)
                        <div class="blog">
                            <div class="blog-item">
                                <div class="blog-content">
                                    <a href="{{URL::to('company/'.$company->name)}}"><h3>{{$company->name}}</h3></a>
                                    <hr>
                                    @foreach($associations as $association)
                                        <?php
                                        $companys_association_array;
                                        $companys_association_array = explode(",", $company->association);
                                        ?>
                                        @if(in_array($association->name, $companys_association_array))
                                            <input id="association_{{$company->name}}[]" name="association_{{$company->name}}[]" type="checkbox" value="{{$association->name}}" checked data-toggle="toggle" data-onstyle="success" data-offstyle="warning" > &nbsp; &nbsp; &nbsp; &nbsp;{{$association->name}} <br>
                                        @elseif(!in_array($association->name, $companys_association_array))
                                            <input id="association_{{$company->name}}[]" name="association_{{$company->name}}[]" type="checkbox" value="{{$association->name}}" data-toggle="toggle" data-onstyle="success" data-offstyle="warning" >&nbsp; &nbsp; &nbsp; &nbsp;{{$association->name}} <br>

                                        @endif
                                    @endforeach
                                </div>
                            </div><!--/.blog-item-->
                        </div>
                    @endforeach
                </div><!--/.row-->
                <div class="form-group">
                    <label class="col-md-4 control-label" for="singlebutton"></label>
                    <div class="col-md-4">
                        <button type="submit" id="singlebutton" name="singlebutton" class="btn btn-primary">Générer</button>
                    </div>
                </div>
        </section><!--/#blog-->
    </form>
@endsection