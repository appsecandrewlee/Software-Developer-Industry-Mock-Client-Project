<?php

namespace App\Controller;

use Stripe;

class StripesController extends AppController
{
    public function stripe()
    {
        $this->set("title", "Stripe Payment Gateway Integration");
    }

    public function payment()
    {
        require_once VENDOR_PATH . '/stripe/stripe-php/init.php';

        Stripe\Stripe::setApiKey(STRIPE_SECRET);
        $stripe = Stripe\Charge::create([
            "amount" => 100 * 100,
            "currency" => "aud",
            "source" => $_REQUEST["stripeToken"],
            "description" => "Test payment"
        ]);

        $this->Flash->success(__('Payment done successfully'));

        return $this->redirect(['action' => 'stripe']);
    }
}
