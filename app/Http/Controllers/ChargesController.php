<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Kris\LaravelFormBuilder\FormBuilder;

class ChargesController extends Controller
{

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

  public function store(FormBuilder $paymentForm)
    {
        $form = $paymentForm->create(\App\Forms\PaymentForm::class);

        if (!$form->isValid()) {
            return redirect()->back()->withErrors($form->getErrors())->withInput();
        }

    }

}
