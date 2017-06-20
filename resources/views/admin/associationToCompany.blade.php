@extends('layout.master-admin')
@section('content')
    <div class="row">
        <div style="padding-top: 10%">
            @include('layout.flash')

        </div>
    </div>
    <form class="form-horizontal" role="form" method="POST" action="{{URL::to('admin/setcompany')}}" style="padding-left: 10%">
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
                                        $companys_association_array = json_decode($company->association);
                                        if ($companys_association_array == NULL)
                                            {
                                                $companys_association_array = array("", "", "", "");
                                            }
                                        ?>


                                        @if(in_array($association->name, $companys_association_array))

                                            <div class="switch">
                                                <label>
                                                    <h5>
                                                        {{$association->name}}
                                                    </h5>
                                                    <br>
                                                    <input id="association_{{$company->name}}[]" name="association_{{$company->name}}[]" type="checkbox" value="{{$association->name}}" checked>
                                                    <span class="lever"></span>
                                                </label>
                                            </div>
                                        @elseif(!in_array($association->name, $companys_association_array))
                                            <div class="switch">
                                                <label>
                                                    {{$association->name}} <br>
                                                    <input id="association_{{$company->name}}[]" name="association_{{$company->name}}[]" type="checkbox" value="{{$association->name}}">
                                                    <span class="lever"></span>
                                                </label>
                                            </div>
                                        @endif
                                    @endforeach
                                </div>
                            </div><!--/.blog-item-->
                            <br>
                            <br>
                            <hr>
                        </div>
                    @endforeach
                </div><!--/.row-->
                <div class="col m3 push-m5">
                    <br>
                    <br>
                    <br>
                    <div class="form-group">
                        <label class="col-md-4 control-label" for="singlebutton"></label>
                        <div class="col-md-4">
                            <button type="submit" id="singlebutton" name="singlebutton" class="btn btn-primary">Générer</button>
                        </div>
                    </div>
                </div>

        </section><!--/#blog-->
    </form>
    </div>
    </div>
@endsection


