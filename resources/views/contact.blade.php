@extends('layout.master')

@section('content')
    <!--Section: Contact v.2-->
    <section class="section">

        <!--Section heading-->
        <h1 class="section-heading">Contact v.2</h1>
        <!--Section sescription-->
        <p class="section-description mb-5">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Fugit, error amet numquam iure provident voluptate esse quasi, veritatis totam voluptas nostrum quisquam eum porro a pariatur accusamus veniam. Quia, minima?</p>

        <div class="row">

            <!--First column-->
            <div class="col-md-8">
                <form>
                    <!--First row-->
                    <div class="row">
                        <!--First column-->
                        <div class="col-md-6">
                            <div class="md-form">
                                <div class="md-form">
                                    <input type="text" id="form41" class="form-control">
                                    <label for="form41" class="">Your name</label>
                                </div>
                            </div>
                        </div>

                        <!--Second column-->
                        <div class="col-md-6">
                            <div class="md-form">
                                <div class="md-form">
                                    <input type="text" id="form52" class="form-control">
                                    <label for="form52" class="">Your email</label>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--/.First row-->

                    <!--Second row-->
                    <div class="row">
                        <div class="col-md-12">
                            <div class="md-form">
                                <input type="text" id="form51" class="form-control">
                                <label for="form51" class="">Subject</label>
                            </div>
                        </div>
                    </div>
                    <!--/Second row-->

                    <!--Third row-->
                    <div class="row">
                        <!--First column-->
                        <div class="col-md-12">

                            <div class="md-form">
                                <textarea type="text" id="form76" class="md-textarea"></textarea>
                                <label for="form76">Your message</label>
                            </div>

                        </div>
                    </div>
                    <!--/.Third row-->
                </form>

                <div class="center-on-small-only">
                    <button type="button" class="btn btn-default">Default</button>

                </div>
            </div>
            <!--.First column-->

            <!--Second column-->
            <div class="col-md-4">
                <ul class="contact-icons">
                    <li><i class="fa fa-map-marker fa-2x"></i>
                        <p>New York, NY 10012, USA</p>
                    </li>

                    <li><i class="fa fa-phone fa-2x"></i>
                        <p>+ 01 234 567 89</p>
                    </li>

                    <li><i class="fa fa-envelope fa-2x"></i>
                        <p>contact@mdbootstrap.com</p>
                    </li>
                </ul>
            </div>
            <!--.Second column-->

        </div>
    </section>

    <!--/Section: Contact v.2-->
@endsection