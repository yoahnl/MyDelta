@extends('layout.master')
@section('content')


    <div class="row association-content-all">
        <h3 class="center-align">Nos association</h3>
        <div class="col m12">
            <div class="col m2">
                <ul class="selec-asso">
                    <li class="center-align titleli">Filtres :</li>
                    @foreach($typeAssociations as $typeAssociation)

                        <a href="{{URL::to('/association/'.$typeAssociation)}}"><li class="hoverli">{{$typeAssociation}}</li></a>
                    @endforeach
                </ul>
            </div>
            <?php
            $i = 0;
            ?>
            @foreach($associations as $association)
                @if($i == 4)
                    <?php
                    echo '<br>';
                    echo '</div>';
                    echo '<div class="row">';
                    echo '<div class="col s12">';
                    $i = 0;
                    ?>
                @endif
                <div class="col m2">
                    <div class="card card-size sticky-action" style="overflow: hidden;">
                        <div class="card-image waves-effect waves-block waves-light bg-img-card card-one">
                            <img class="activator" src="{{$association->logo}}">
                        </div>
                        <div class="card-content">
          <span class="card-title tilte-asso grey-text text-darken-4">{{$association->name}}
              <div class="separator"></div>
          </span>
                            <p>Qui cum venisset ob haec festinatis itineribus Antiochiam, praestrictis palatii ianuis, contempto Caesare</p>
                            <a href="{{URL::to('give/'.$association->name)}}">
                                <span class="card-title activator footer-card-active grey-text text-darken-4"><span class="name-asso"></span><i class="btn waves-effect white grey-text darken-text-2 right more-info">en savoir plus</i></span>
                            </a>
                        </div>
                    </div>
                </div>
                <?php
                if ($i == 4)
                {
                    echo '</div>';
                    echo '</div>';
                }
                $i++; ?>
            @endforeach
        </div>
    </div>
@endsection