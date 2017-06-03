@extends('layout.master')
@section('content')

    <div class="container">
        <div class="row">
            <div class="col s12 col l12">
                <!-- CREDIT CARD FORM STARTS HERE -->
                <div class="row">
                    <div class="row" >
                        <div class="row" >
                            <h3>Payment Details</h3>
                            <div class="display-td" >
                                <img class="img-responsive pull-right" src="http://i76.imgup.net/accepted_c22e0.png">
                            </div>
                        </div>
                    </div>
                    <div class="panel-body">
                        <div class="row" id="charge-error" class="alert alert-danger {{ !Session::has('error') ? 'hidden' : ''}}">
                            {{Session::get('error')}}
                        </div>


                        <div class="row">
                            <form class="form-horizontal col s10" role="form" method="POST" action="{{URL::to('stripe')}}" id="payment-form">

                                <div class="row">
                                    <div class="input-field col s12">
                                        <input name="amount" id="amount" type="text" data-length="10" required>
                                        <label for="amount" name="amount" id="amount">Amount</label>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="input-field col s12">
                                        <input name="name" id="name" type="text" data-length="10" required>
                                        <label for="name" name="name" id="name">Name</label>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="input-field col s12">
                                        <input type="text" data-length="16" required data-stripe="number">
                                        <label>Card Number</label>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="input-field col s6">
                                        <input type="text" data-length="2" required data-stripe="exp_month">
                                        <label>MM</label>
                                    </div>

                                    <div class="input-field col s6">
                                        <input type="text" data-length="4" required data-stripe="exp_year">
                                        <label>YY</label>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="input-field col s3">
                                        <input type="text" data-length="3" required data-stripe="cvc">
                                        <label>CVC</label>
                                    </div>
                                </div>
                                <button class="waves-effect waves-light btn-large" type="submit" id="button">Submit</button>
                                {{csrf_field()}}
                            </form>
                        </div>
                    </div>
                </div>
                <!-- CREDIT CARD FORM ENDS HERE -->


            </div>

        </div>
    </div>
@endsection

@section('js')
    <script type="text/javascript" src="https://js.stripe.com/v2/"></script>
    <script>
        Stripe.setPublishableKey('pk_test_n7BchL0L9C3SNNe6ucDbRbCR');

        var $form = $('#payment-form');
        $form.submit(
            function (e)
            {
                e.preventDefault()
                $form.find('#button').attr('disabled', true)
                Stripe.card.createToken(
                    $form
                    ,
                    function (status, response)
                    {
                        //debugger
                        if (response.error)
                        {
                            $form.find('.message').remove();
                            $form.prepend('<div class="alert alter-danger" role="alert"> <p>' + response.error.message +' </p></div>');
                        }
                        else if (!response.error)
                        {
                            var token = response.id; // On récupère le token
                            // On crée un champs cachée qui contiendra notre token
                            $form.append($('<input type="hidden" name="stripeToken" />').val(token));
                            $form.get(0).submit(); // On soumet le formulaire
                        }
                    }
                );
            }
        );
    </script>

@endsection
