<?php

namespace App\Http\Controllers;

use App\Http\Requests\ChargeRequest;
use Kris\LaravelFormBuilder\FormBuilder;
use Config;
use Illuminate\Http\Request;
use Stripe\Charge as BongloyCharge;

class ChargesController extends Controller
{
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
    return redirect()->back()->with('message',"Your Charge was successfully created! You can view it on your Dashboard <a href='https://sandbox.bongloy.com/dashboard/charges/$charge->id' target='_blank'>here</a>");
  }

  /**
     * Function post charge for Mobile app demo
     *
     * @param $request form request
     * @return $charge
  */
  public function charge(Request $request)
  {
    $charge = BongloyCharge::create([
      'amount' => $this->amount_cents($request->amount),
      'currency' => $request->currency,
      'source' => $request->token
    ]);

    return response()->json($charge);
  }
}
