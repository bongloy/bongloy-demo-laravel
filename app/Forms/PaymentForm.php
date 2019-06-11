<?php

namespace App\Forms;

use Kris\LaravelFormBuilder\Form;

class PaymentForm extends Form
{
    public function buildForm()
    {
      $this->add('token','hidden',
            [
              'attr' => [
                'data-name' => 'cardToken'
              ]
            ]
          )
          ->add('card_number','tel',
            [
              'label_show' => false,
              'attr' => [
                'placeholder' => 'Card Number',
                'data-name' => 'cardNumber'
              ]
            ]
          )
          ->add('expiry','tel',
            [
              'label_show' => false,
              'attr' => [
                'placeholder' => 'Expiry',
                'data-name' => 'expiry'
              ]
            ])
          ->add('cvc','tel',
            [
              'label_show' => false,
              'attr' => [
                'placeholder' => 'CVC',
                'data-name' => 'cvc',
                'rules' => 'required|max:4'
              ]
            ])
          ->add('Buy','submit',
            [
              'label_show' => false,
              'value' => 'Buy',
              'attr' => [
                'class' => 'btn-success form-control'
              ]
            ]);
    }
}
