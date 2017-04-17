@extends('layout.master')

@section('content')
    <section>
        <div class="row">
            <h3>Get in touch</h3>
            <form class="form-horizontal" role="form" method="POST" action="{{ url('contact') }}">
                {{csrf_field()}}
                <div class="row">
                    <div class="row">
                        <div class="input-field col m5 push-m1">
                            <i class="material-icons prefix">account_circle</i>
                            <input id="name" name="name" type="text" class="validate">
                            <label for="icon_prefix">Name</label>
                        </div>
                        <div class="input-field col m5 push-m1">
                            <i class="material-icons prefix">account_circle</i>
                            <input id="email" name="email" type="text" class="validate">
                            <label for="icon_prefix">Email</label>
                        </div>
                    </div>
                    <div class="row">
                        <div class="input-field col m10 push-m1">
                            <i class="material-icons prefix">chat_bubble_outline</i>
                            <input id="subject" name="subject" type="tel" class="validate">
                            <label for="icon_telephone">Sujet</label>
                        </div>
                    </div>
                    <div class="row">
                        <div class="row">
                            <form class="col m6">
                                <div class="row">
                                    <div class="input-field col m10 push-m1">
                                        <i class="small material-icons">mode_edit</i>
                                        <textarea id="message" name="message" class="materialize-textarea"></textarea>
                                        <label for="textarea1"></label>
                                    </div>
                                </div>
                                <div class="col-sm-12">
                                    <div class="center-align">
                                        <button type="submit" class="btn btn-primary">Envoyer !</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
            </form>
        </div>
        </div>
    </section>
@endsection