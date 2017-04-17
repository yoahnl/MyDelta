@extends('layout.master')
@section('content')


    <section class="carrousel-section section1" data-midnight="trans" id="section1">
        <div id="jssor_1" Class="carousel-one">
            <!-- Loading Screen -->
            <div data-u="slides" Class="carousel-two" style="">
                <div Class='slide-one' data-p="225.00">
                    <div class="txt-carousel">LE MÉCÉNAT À L'HEURE DU COLLABORATIF</div>
                </div>
                <div Class='slide-two' data-p="225.00" style="display: flex;">

                    <div class="txt-carousel ">devener mécène de projets associatifs</div>
                </div>
                <div Class='slide-tree' data-p="225.00" data-po="80% 55%" style="display: none;">

                    <div class="txt-carousel">Soutener ceux qui vous tienne a coeur!</div>
                </div>
            </div>
            <span data-u="arrowleft" class="jssora22l" data-autocenter="2"><i class="fa fa-angle-left" aria-hidden="true"></i></span>
            <span data-u="arrowright" class="jssora22r" data-autocenter="2"><i class="fa fa-angle-right" aria-hidden="true"></i></span>
        </div>
    </section>

    <div class="row grey lighten-5 content-card-flex">
        <div class="container">
            <div class="col m5 offset-m1 log-card">
                <div class="card-panel hoverable card-panel-organisation">
                    <div class="card-flex">
                        <i class="fa fa-building-o" aria-hidden="true"></i>
                        <br>
                        <h3>ENTREPRISES</h3>
                        <p>Devenez mécène d'associations choisies par vos clients et collaborateurs.</p>
                        <a class="waves-effect waves-light btn btn-align-center">C'est parti !</a>
                    </div>
                </div>
            </div>
            <div class="col m5 log-card">
                <div class="card-panel hoverable card-panel-organisation">
                    <div class="card-flex">
                        <i class="fa fa-users" aria-hidden="true"></i>
                        <br>
                        <h3>ASSOCIATIONS</h3>
                        <p>Financez-vous <strong>gratuitement</strong> auprès d'entreprises mécènes.</p>

                        <a class="waves-effect waves-light btn btn-align-center">C'est parti !</a>
                    </div>
                </div>
            </div>
        </div>

    </div>
    <div class="row  grey lighten-5 center-align description-text">
        La plateforme de mécénat d'entreprise collaboratif, où chaque entreprise peut soutenir des associations choisies par ses clients et collaborateurs.
    </div>
    <div class="row association-content">
        <h4>
            NOS ASSOCIATIONS PARTENAIRES
        </h4>
        <div class="col m12">
            <div class="content">
                <div class="col m3">
                    <div class="card card-size sticky-action" style="overflow: hidden;">
                        <div class="card-image waves-effect waves-block waves-light bg-img-card card-one">
                            <img class="activator" src="img/asso-logo1.png">
                        </div>
                        <div class="card-content">
                            <span class="card-title tilte-asso grey-text text-darken-4">Envole vert</span>
                            <p>Qui cum venisset ob haec festinatis itineribus Antiochiam, praestrictis palatii ianuis, contempto Caesare</p>
                            <span class="card-title activator footer-card-active grey-text text-darken-4"><span class="name-asso"><img src="img/asso-logo1.png" alt=""></span><i class="btn waves-effect white grey-text darken-text-2 right more-info">en savoir plus</i></span>
                        </div>
                        <div class="card-reveal" style="display: none; transform: translateY(0px);">
                            <span class="card-title grey-text text-darken-4">Envol vert<i class="material-icons right">close</i></span>
                            <p>Here is some more information about this product that is only revealed once clicked on.</p>
                        </div>
                    </div>
                </div>
                <div class="col m3">
                    <div class="card card-size sticky-action" style="overflow: hidden;">
                        <div class="card-image waves-effect waves-block waves-light bg-img-card card-two">

                        </div>
                        <div class="card-content">
                            <span class="card-title tilte-asso grey-text text-darken-4">Enfant du mekong</span>
                            <p>Qui cum venisset ob haec festinatis itineribus Antiochiam, praestrictis palatii ianuis, contempto Caesare</p>
                            <span class="card-title activator footer-card-active grey-text text-darken-4"><span class="name-asso"><img src="img/asso-logo2.png" alt=""></span><i class="btn waves-effect white grey-text darken-text-2 right more-info">en savoir plus</i></span>
                        </div>
                        <div class="card-reveal" style="display: none; transform: translateY(0px);">
                            <span class="card-title grey-text text-darken-4">Enfant du mekong<i class="material-icons right">close</i></span>
                            <p>Here is some more information about this product that is only revealed once clicked on.</p>
                        </div>
                    </div>
                </div>
                <div class="col m3">
                    <div class="card card-size sticky-action" style="overflow: hidden;">
                        <div class="card-image waves-effect waves-block waves-light bg-img-card card-tree">

                        </div>
                        <div class="card-content">
                            <span class="card-title tilte-asso grey-text text-darken-4">Elevages sans frontiere</span>
                            <p>Qui cum venisset ob haec festinatis itineribus Antiochiam, praestrictis palatii ianuis, contempto Caesare</p>
                            <span class="card-title activator footer-card-active grey-text text-darken-4"><span class="name-asso"><img src="img/asso-logo3.png" alt=""></span><i class="btn waves-effect white grey-text darken-text-2 right more-info">en savoir plus</i></span>
                        </div>
                        <div class="card-reveal" style="display: none; transform: translateY(0px);">
                            <span class="card-title grey-text text-darken-4">Elevages sans frontiere<i class="material-icons right">close</i></span>
                            <p>Here is some more information about this product that is only revealed once clicked on.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col m12">
            <div class="content">
                <div class="col m3 offset-m2">
                    <div class="card card-size sticky-action" style="overflow: hidden;">
                        <div class="card-image waves-effect waves-block waves-light bg-img-card card-for">

                        </div>
                        <div class="card-content">
                            <span class="card-title tilte-asso grey-text text-darken-4">Schola afrika</span>
                            <p>Qui cum venisset ob haec festinatis itineribus Antiochiam, praestrictis palatii ianuis, contempto Caesare</p>
                            <span class="card-title activator footer-card-active grey-text text-darken-4"><span class="name-asso"><img src="img/asso-logo4.png" alt=""></span><i class="btn waves-effect white grey-text darken-text-2 right more-info">en savoir plus</i></span>
                        </div>
                        <div class="card-reveal" style="display: none; transform: translateY(0px);">
                            <span class="card-title grey-text text-darken-4">Scola afrika<i class="material-icons right">close</i></span>
                            <p>Here is some more information about this product that is only revealed once clicked on.</p>
                        </div>
                    </div>
                </div>
                <div class="col m3">
                    <div class="card card-size sticky-action" style="overflow: hidden;">
                        <div class="card-image waves-effect waves-block waves-light bg-img-card card-five">

                        </div>
                        <div class="card-content">
                            <span class="card-title tilte-asso grey-text text-darken-4">Reseau proactif</span>
                            <p>Qui cum venisset ob haec festinatis itineribus Antiochiam, praestrictis palatii ianuis, contempto Caesare</p>
                            <span class="card-title activator footer-card-active grey-text text-darken-4"><span class="name-asso"><img src="img/asso-logo5.png" alt=""></span><i class="btn waves-effect white grey-text darken-text-2 right more-info">en savoir plus</i></span>
                        </div>
                        <div class="card-reveal" style="display: none; transform: translateY(0px);">
                            <span class="card-title grey-text text-darken-4">Reseaux proactif<i class="material-icons right">close</i></span>
                            <p>Here is some more information about this product that is only revealed once clicked on.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row grey lighten-5 contact">
        <div class="row">
            <div class="col m4 push-m2">
                <h3>
                    UNE QUESTION ?
                </h3>
                <hr class="hr-mydelta">
                <div class="row">
                    <div class="input-field col m5 push-m1">
                        <i class="material-icons prefix">account_circle</i>
                        <input id="name" name="name" type="text" class="validate">
                        <label for="icon_prefix" class="">Name</label>
                    </div>
                    <div class="input-field col m5 push-m1">
                        <i class="material-icons prefix">email</i>
                        <input id="email" name="email" type="email" class="validate">
                        <label for="icon_prefix">Email</label>
                    </div>
                </div>
                <div class="row">
                    <div class="input-field col m10 push-m1">
                        <i class="material-icons prefix">chat_bubble_outline</i>
                        <input id="email" name="email" type="text" class="validate">
                        <label for="icon_prefix">Email</label>
                    </div>
                </div>
                <div class="row">
                    <div class="input-field col m10 push-m1">
                        <i class="small material-icons">mode_edit</i>
                        <textarea id="message" name="message" class="materialize-textarea"></textarea>
                        <label for="textarea1"></label>
                    </div>
                </div>
            </div>
            <div class="row col m3 push-m4 contact-send">
                <a class="waves-effect waves-light btn btn-align-center btn-large" href="http://yoahnlinard.eu/contact"> <i class="material-icons right">send</i>NOUS CONTACTER</a>
            </div>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.2.1.min.js" integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.98.1/js/materialize.min.js"></script>
    <script src="js/index.js"></script>
    <script src="js/carousel.js"></script>








@endsection


@section('js')

@endsection

