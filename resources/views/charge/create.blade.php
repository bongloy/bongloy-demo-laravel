@extends('layouts.app')
@section('content')
  <div class="container">
    <div class="row">
      <div class="col">
       <div class="row">
          <div class="col">
             <h2 class="text-center">
                Securely collect payment information using Bongloy.js
             </h2>
          </div>
       </div>
       <div class="row">
        <div class="col-md-3 col-sm-1"></div>
        <div class="col">
          <div class="alert alert-danger d-none" data-name="errorMessages" role="alert"></div>
            {!! form_start($form) !!}
              <div class="form-group hidden new_charge_token">
                 <div class="input-group">
                      {!! form_row($form->token) !!}
                 </div>
              </div>
              <div class="form-group tel required new_charge_card_number">
                 <div class="input-group">
                    <div class="input-group-prepend">
                      <span class="input-group-text"><i id="card-brand-icon" class="pf pf-credit-card"></i></span>
                    </div>
                      {!! form_widget($form->card_number) !!}
                 </div>
                 <small class="form-text text-muted">Use a sample card number listed below</small>
              </div>
              <div class="row">
                 <div class="col">
                    <div class="form-group tel required new_charge_expiry">
                       <div class="input-group">
                        {!! form_widget($form->expiry) !!}
                       </div>
                    </div>
                 </div>
                 <div class="col">
                    <div class="form-group tel required new_charge_cvc">
                       <div class="input-group">
                        {!! form_widget($form->cvc) !!}
                       </div>
                    </div>
                 </div>
              </div>
              <div class="row">
                 <div class="col">
                    <input type="submit" name="commit" value="Buy" class="btn btn btn-success float-right" data-disable-with="Buy">
                 </div>
              </div>
            {!! form_end($form, false) !!}
        </div>
        <div class="col-md-3 col-sm-1"></div>
       </div>
       <div class="row">
          <div class="col">
             <p></p>
            @include('charge.samples_card')
          </div>
       </div>
      </div>
    </div>
  </div>
@endsection
