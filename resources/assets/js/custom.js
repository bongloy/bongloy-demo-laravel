$(document).ready(function(){

  $('[data-toggle="tooltip"]').tooltip()

  $('[data-name="cardNumber"]').each(function() {
    new Cleave(this, {
      creditCard: true,
      creditCardStrictMode: true,
      onCreditCardTypeChanged: function (type) {
        var icons = ["mastercard", "visa", "diners", "discover", "jcb", "dankort", "unionpay"];
        var icon = (icons.includes(type.toLowerCase()) ? type.toLowerCase() : "credit-card");
        document.getElementById("card-brand-icon").className = "pf pf-" + icon;
      }
    });
  });

  // Validating Form - nosir/cleave.js
  new Cleave('[data-name="cardNumber"]', {
    creditCardStrictMode: true,
    creditCard: true,
  });

  new Cleave('[data-name="expiry"]', {
      date: true,
      datePattern: ['m', 'y']
  });

  new Cleave('[data-name="cvc"]', {
      numeral: true,
      numeralThousandsGroupStyle: 'none'
  });

});
