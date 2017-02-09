@extends('layout.master')

@section('content')

    <section id="main-slider" class="no-margin">
        <div class="carousel slide wet-asphalt">
            <ol class="carousel-indicators">
                <li data-target="#main-slider" data-slide-to="0" class="active"></li>
                <li data-target="#main-slider" data-slide-to="1"></li>
                <li data-target="#main-slider" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">
                <div class="item active" style="background-image: url(images/slider/bg1.jpg)">
                    <div class="container">
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="carousel-content centered">
                                    <h2 class="animation animated-item-1">Powerful and Responsive Web Design</h2>
                                    <p class="animation animated-item-2">Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div><!--/.item-->
                <div class="item" style="background-image: url(images/slider/bg2.jpg)">
                    <div class="container">
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="carousel-content center centered">
                                    <h2 class="boxed animation animated-item-1">Clean, Crisp, Powerful and Responsive Web Design</h2>
                                    <p class="boxed animation animated-item-2">Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas.</p>
                                    <br>
                                    <a class="btn btn-md animation animated-item-3" href="#">Learn More</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div><!--/.item-->
                <div class="item" style="background-image: url(images/slider/bg3.jpg)">
                    <div class="container">
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="carousel-content centered">
                                    <h2 class="animation animated-item-1">Powerful and Responsive Web Design Theme</h2>
                                    <p class="animation animated-item-2">Pellentesque habitant morbi tristique senectus et netus et malesuada fames</p>
                                    <a class="btn btn-md animation animated-item-3" href="#">Learn More</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div><!--/.item-->
            </div><!--/.carousel-inner-->
        </div><!--/.carousel-->
        <a class="prev hidden-xs" href="#main-slider" data-slide="prev">
            <i class="icon-angle-left"></i>
        </a>
        <a class="next hidden-xs" href="#main-slider" data-slide="next">
            <i class="icon-angle-right"></i>
        </a>
    </section><!--/#main-slider-->


    <section id="services" class="turquoise">
        <div class="container">
            <div class="row">
                <div class="col-md-3 col-sm-6">
                    <div class="media">
                        <div class="pull-left">
                            <i class="icon-credit-card icon-md"></i>
                        </div>
                        <div class="media-body">
                            <h4 class="media-heading">Création d’une plateforme aux couleurs de chaque entreprise</h4>
                            <p>
                                Elle permet à leurs clients et collaborateurs d'exprimer leur choix de mécénat en allouant, chacun, une partie de la donation d'entreprise à certains projets tout en suivant leur avancement.
                            </p>
                        </div>
                    </div>
                </div><!--/.col-md-4-->
                <div class="col-md-3 col-sm-6">
                    <div class="media">
                        <div class="pull-left">
                            <i class="icon-exchange icon-md"></i>
                        </div>
                        <div class="media-body">
                            <h4 class="media-heading">Versement des dons aux associations</h4>
                           <p>
                               Mydelta vous transfère directement les dons selon les choix des clients et collaborateurs de l'entreprise, et le tout sans commission.
                           </p>
                        </div>
                    </div>
                </div><!--/.col-md-4-->
                <div class="col-md-3 col-sm-6">
                    <div class="media">
                        <div class="pull-left">
                            <i class="icon-wrench icon-md"></i>
                        </div>
                        <div class="media-body">
                            <h4 class="media-heading">Prospection et suivi des associations</h4>
                            <p>
                                Nous proposons aux entreprises de soutenir des projets sociaux, environnementaux ou humanitaires en lien avec leurs valeurs.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="media">
                        <div class="pull-left">
                            <i class="icon-inbox icon-md"></i>
                        </div>
                        <div class="media-body">
                            <h4 class="media-heading">Formalités administratives</h4>
                            <p>
                                Mydelta s'occupe de tout, y compris de l'édition des déclarations fiscales relatives à leurs dons.
                            </p>
                        </div>
                    </div>
                </div>
                <!--/.col-md-4-->
            </div>
        </div>
    </section>

    <section id="recent-works">
        <div class="container">
            <div class="row">
                <div class="col-md-3">
                    <h3>Our Latest Project</h3>
                    <p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas.</p>
                    <div class="btn-group">
                        <a class="btn btn-danger" href="#scroller" data-slide="prev"><i class="icon-angle-left"></i></a>
                        <a class="btn btn-danger" href="#scroller" data-slide="next"><i class="icon-angle-right"></i></a>
                    </div>
                    <p class="gap"></p>
                </div>
                <div class="col-md-9">
                    <div id="scroller" class="carousel slide">
                        <div class="carousel-inner">
                            <div class="item active">
                                <div class="row">
                                    <div class="col-xs-4">
                                        <div class="portfolio-item">
                                            <div class="item-inner">
                                                <img class="img-responsive" src="images/portfolio/recent/item1.png" alt="">
                                                <h5>
                                                    Nova - Corporate site template
                                                </h5>
                                                <div class="overlay">
                                                    <a class="preview btn btn-danger" title="Malesuada fames ac turpis egestas" href="images/portfolio/full/item1.jpg" rel="prettyPhoto"><i class="icon-eye-open"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xs-4">
                                        <div class="portfolio-item">
                                            <div class="item-inner">
                                                <img class="img-responsive" src="images/portfolio/recent/item3.png" alt="">
                                                <h5>
                                                    Fornax - Apps site template
                                                </h5>
                                                <div class="overlay">
                                                    <a class="preview btn btn-danger" title="Malesuada fames ac turpis egestas" href="images/portfolio/full/item1.jpg" rel="prettyPhoto"><i class="icon-eye-open"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xs-4">
                                        <div class="portfolio-item">
                                            <div class="item-inner">
                                                <img class="img-responsive" src="images/portfolio/recent/item2.png" alt="">
                                                <h5>
                                                    Flat Theme - Business Theme
                                                </h5>
                                                <div class="overlay">
                                                    <a class="preview btn btn-danger" title="Malesuada fames ac turpis egestas" href="images/portfolio/full/item1.jpg" rel="prettyPhoto"><i class="icon-eye-open"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div><!--/.row-->
                            </div><!--/.item-->
                            <div class="item">
                                <div class="row">
                                    <div class="col-xs-4">
                                        <div class="portfolio-item">
                                            <div class="item-inner">
                                                <img class="img-responsive" src="images/portfolio/recent/item2.png" alt="">
                                                <h5>
                                                    Flat Theme - Business Theme
                                                </h5>
                                                <div class="overlay">
                                                    <a class="preview btn btn-danger" title="Malesuada fames ac turpis egestas" href="images/portfolio/full/item1.jpg" rel="prettyPhoto"><i class="icon-eye-open"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xs-4">
                                        <div class="portfolio-item">
                                            <div class="item-inner">
                                                <img class="img-responsive" src="images/portfolio/recent/item1.png" alt="">
                                                <h5>
                                                    Nova - Corporate site template
                                                </h5>
                                                <div class="overlay">
                                                    <a class="preview btn btn-danger" title="Malesuada fames ac turpis egestas" href="images/portfolio/full/item1.jpg" rel="prettyPhoto"><i class="icon-eye-open"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xs-4">
                                        <div class="portfolio-item">
                                            <div class="item-inner">
                                                <img class="img-responsive" src="images/portfolio/recent/item3.png" alt="">
                                                <h5>
                                                    Fornax - Apps site template
                                                </h5>
                                                <div class="overlay">
                                                    <a class="preview btn btn-danger" title="Malesuada fames ac turpis egestas" href="images/portfolio/full/item1.jpg" rel="prettyPhoto"><i class="icon-eye-open"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div><!--/.item-->
                        </div>
                    </div>
                </div>
            </div><!--/.row-->
        </div>
    </section>

    <section id="testimonial" class="concrete">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="center">
                        <h2>COMMENT CA MARCHE ?</h2>
                    </div>
                    <hr>
                    <div class="gap"></div>
                    <div class="row">
                        <div class="col-md-4">
                            <blockquote>
                                <h3>1.Contactez-nous et discutons de votre projet</h3>
                                <p>
                                    Mydelta vous transfère directement les dons selon les choix des clients et collaborateurs de l'entreprise, et le tout sans commission.
                                </p>
                            </blockquote>
                        </div>
                        <div class="col-md-4">
                            <blockquote>
                                <h3>1.Contactez-nous et discutons de votre projet</h3>
                                <p>
                                    Mydelta vous transfère directement les dons selon les choix des clients et collaborateurs de l'entreprise, et le tout sans commission.
                                </p>
                            </blockquote>

                        </div>
                        <div class="col-md-4">
                            <blockquote>
                                <h3>1.Contactez-nous et discutons de votre projet</h3>
                                <p>
                                    Mydelta vous transfère directement les dons selon les choix des clients et collaborateurs de l'entreprise, et le tout sans commission.
                                </p>
                            </blockquote>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


@endsection