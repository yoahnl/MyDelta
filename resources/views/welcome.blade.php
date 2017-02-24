@extends('layout.master')
@section('content')


    <!-- Carrousel -->
    <div class="parallax-container">
        <div class="parallax"><img src="images/background.jpg"></div>
    </div>
    <!-- End of Carrousel -->

    <!-- from Hype3 begin copy -->
    <div id="homemydelta_hype_container" style="margin:auto;position:relative;width:320px;height:2150px;overflow:hidden;" aria-live="polite">
        <script type="text/javascript" charset="utf-8" src="home_mydelta.hyperesources/homemydelta_hype_generated_script.js?34467"></script>
    </div>
    <!-- from Hype3 end copy -->

    <!-- text content for search engines: -->
    <div style="display:none">
        <div>Ils nous font confiance</div>
        <div>Clients et collaborateurs</div>
        <div>Le mécénat d'entreprise collaboratif</div>
        <div>Nous simplifions le mécénat d'entreprise pour le rendre plus accessible à tous.</div>
        <div>Vous devenez acteurs du mécénat de vos entreprises préférées.</div>
        <div>Devenez mécène d’associations choisies par vos clients et collaborateurs.</div>
        <div>Associations</div>
        <div></div>
        <div>Financez-vous gratuitement auprès d’entreprises mécènes et sensibilisez de nouvelles audiences.</div>
        <div>Nous vous présentons des associations en rapport avec votre métier et vos valeurs.</div>
        <div>Notre plateforme vous permet d’inviter vos clients et collaborateurs à effectuer un don gratuit en votre nom au projet de leur choix.</div>
        <div>Faites un don gratuit à l’association de votre choix !</div>
        <div>Entreprises</div>
    </div>
    <!-- end of text content for search engines: -->

    <div class="row">

        <div class="col s6 offset-s3">
            <ul class="collapsible popout" data-collapsible="expandable">
                <li>
                    <div class="collapsible-header"><i class="material-icons"></i>First</div>
                    <div class="collapsible-body"><span>Lorem ipsum dolor sit amet.</span></div>
                </li>
                <li>
                    <div class="collapsible-header"><i class="material-icons"></i>Second</div>
                    <div class="collapsible-body"><span>Lorem ipsum dolor sit amet.</span></div>
                </li>
                <li>
                    <div class="collapsible-header"><i class="material-icons"></i>Third</div>
                    <div class="collapsible-body"><span>Lorem ipsum dolor sit amet.</span></div>
                </li>
            </ul>
        </div>
    </div>

@endsection


@section('js')
<script>
    $('.carousel.carousel-slider').carousel({fullWidth: true});
    $(document).ready(function(){
        $('.parallax').parallax();
    });
    $(document).ready(function(){
        $('.collapsible').collapsible();
    });
</script>
@endsection