@extends('layout.master')
@section('content')
    <br>
    <div class="row">
        <div class="col s12">
            <div id="associationmydelta1_hype_container" style="margin:auto;position:relative;width:450px;height:100px;overflow:hidden;" aria-live="polite">
                <script type="text/javascript" charset="utf-8" src="association_mydelta_1.hyperesources/associationmydelta1_hype_generated_script.js?37685"></script>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col s12 m4 l3"> <!-- Note that "m4 l3" was added -->
            <ul class="arrow">
                <a href="{{URL::to('/association')}}"><h4 class="grey-black_delta">Catégories</h4></a>
                @foreach($cates as $cate)
                    <h6> <li><a href="{{URL::to('/association/'.$cate->type)}}" class="grey-text text-darken-2"> > {{$cate->type}}</a></li> </h6>
                @endforeach
            </ul>
        </div>
        <div class="col s12 m8 l9"> <!-- Note that "m8 l9" was added -->
            @foreach($associations as $association)
                <div class="col s10">
                    <div class="card-panel hoverable">
                        <a href="{{URL::to('give/'.$association->name)}}" class="grey_delta">
                            <img src="{{$association->image}}" alt="{{$association->name}}" width="100">
                            <h5 class="center grey-black_delta">{{$association->name}}</h5>
                            <h6>Catégorie: {{$association->type}}</h6>
                            <p class="light">{{$association->small_description}}</p>
                            <hr>
                            <?php
                                $url = "http://".$association->url;
                                ?>
                            <a href={{url($url)}} >
                                <button type="submit" id="singlebutton" name="singlebutton" class="btn btn-primary">En savoir plus</button>
                            </a>
                        </a>
                    </div>
                </div>
@endforeach
        </div>
    </div>
@endsection
