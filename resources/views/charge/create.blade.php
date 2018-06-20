@extends('layouts.app')

@section('content')
  <div class="row">
    <div class="row" id="payment_form">
      <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 col-md-offset-3 col-lg-offset-4">
        <div class="text-center card-container">
          <h3>Fill out the Payment Form</h3>
          <hr/>
          <div class="card-wrapper"></div>
          <div class="fields-wrapper">
            {!! form_start($form) !!}
              <div class="row">
                <div class="col-md-12">
                  {!! form_row($form->card_number) !!}
                </div>
              </div>
              <div class="row">
                <div class="col-md-12">
                  {!! form_row($form->card_name) !!}
                </div>
              </div>
              <div class="row">
                <div class="col-md-6 col-sm-6 col-xs-6">
                  {!! form_row($form->expiry) !!}
                </div>
                <div class="col-md-6 col-sm-6 col-xs-6">
                  {!! form_row($form->cvc) !!}
                </div>
              </div>
              <div class="row">
                <div class="col-md-8 col-sm-8 col-xs-12">
                  {!! form_row($form->amount) !!}
                </div>
                <div class="col-md-4 col-sm-8 col-xs-12">
                  {!! form_row($form->currency) !!}
                </div>
              </div>
              <div id="submit_payment_form" class="form-group">
                  {!! form_row($form->Buy) !!}
              </div>
            {!! form_end($form, false) !!}
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection
