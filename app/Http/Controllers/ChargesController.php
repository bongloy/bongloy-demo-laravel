<?php

namespace App\Http\Controllers;

use App\Http\Requests\ChargeRequest;
use Kris\LaravelFormBuilder\FormBuilder;
use Stripe\Stripe as Bongloy;
use Stripe\Charge as BongloyCharge;
use Config;

class ChargesController extends Controller
{

  public function __construct()
  {
    $this->initialize_attributes_for_bongloy();
  }

  private function initialize_attributes_for_bongloy(){
    Bongloy::$apiBase = Config::get('bongloy.api_base');
    Bongloy::setApiKey(Config::get('bongloy.api_key'));
  }

  private function amount_cents($amount){
    return filter_var($amount, FILTER_SANITIZE_NUMBER_INT) * 100;
  }

  public function create(FormBuilder $paymentForm){
    $form = $paymentForm->create(\App\Forms\PaymentForm::class, [
            'method' => 'POST',
            'url' => route('charge.store'),
            'data-name'=> 'paymentForm',
            'autocomplete'=> 'on',
            'novalidate'=>"novalidate"
        ]);
    return view('charge.create', compact('form'));
  }

  public function store(ChargeRequest $request)
  {
    $charge = BongloyCharge::create([
      'amount' => $this->amount_cents($request->amount),
      'currency' => $request->currency,
      'source' => $request->token
    ]);

    return redirect()->back()->with('message',"Your Charge was successfully created! You can view it on your Dashboard <a href='https://sandbox.bongloy.com/dashboard/charges/$charge->id' target='_blank'>here</a><div class='help-block'>Use the following credentials to sign in:<dl class='dl-horizontal'><dt>Email</dt><dd>".Config::get('bongloy.bongloy_test_account_email')."</dd><dt>Password</dt><dd>".Config::get('bongloy.bongloy_test_account_password')."</dd></dl></div>");
  }
}
