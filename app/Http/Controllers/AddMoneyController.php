<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Stripe\Charge;
use \Stripe\Stripe;

class AddMoneyController extends Controller
{
    public function getStripeTest()
    {
        return view('addmoney.paywithstripe');
    }

    public function postStripeTest(\Cartalyst\Stripe\Stripe $stripe)
    {
        $form = request();

        if (!$form->stripeToken)
        {
            return "le $form->stripeToken ne marche pas...";
        }
        Stripe::setApiKey('sk_test_UaY01L3pP8CFh9QXagAJ6nki');
        try
        {

            Charge::create(array(
                "amount" => $form->amount * 100,
                "currency" => "eur",
                "source" => $form->stripeToken,
                "description" => "test"
            ));
        }
        catch (\Exception $e)
        {
            var_dump($e->getMessage());
            echo $form->_token;
            return view('addmoney.paywithstripe');

        }
        return view('welcome');
    }
}
