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
          ->add('card_number','text',
            [
              'label_show' => false,
              'attr' => [
                'placeholder' => 'Card Number',
                'data-name' => 'cardNumber'
              ]
            ]
          )
          ->add('card_name','text',
            [
              'label_show' => false,
              'attr' => [
                'placeholder' => 'Name on card',
                'data-name' => 'cardName'
              ]
            ])
            ->add('expiry','text',
              [
                'label_show' => false,
                'attr' => [
                  'placeholder' => 'Expiry',
                  'data-name' => 'expiry'
                ]
              ])
            ->add('cvc','text',
              [
                'label_show' => false,
                'attr' => [
                  'placeholder' => 'CVC',
                  'data-name' => 'cvc',
                  'rules' => 'required|max:4'
                ]
              ])
            ->add('amount','text',
              [
                'label_show' => false,
                'attr' => [
                  'placeholder' => 'Amount',
                  'data-name' => 'amount'
                ]
              ])
            ->add('currency','text',
              [
                'label_show' => false,
                'value' => 'USD',
                'attr' => [
                  'readonly' => true
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
