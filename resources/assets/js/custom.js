$(document).ready(function(){
  // Generating Credit Card - jessepollak/card
  new Card({
      form: 'form', // *required*
      container: '.card-wrapper', // *required*

      formSelectors: {
          numberInput: 'input[data-name="cardNumber"]', // optional — default input[name="number"]
          expiryInput: 'input[data-name="expiry"]', // optional — default input[name="expiry"]
          cvcInput: 'input[data-name="cvc"]', // optional — default input[name="cvc"]
          nameInput: 'input[data-name="cardName"]' // optional - defaults input[name="name"]
      },

      formatting: true, // optional - default true
      width: 350, // optional — default 350px

      // Strings for translation - optional
      messages: {
          validDate: 'valid\ndate', // optional - default 'valid\nthru'
          monthYear: 'mm/yyyy', // optional - default 'month/year'
      },

      // Default placeholders for rendered fields - optional
      placeholders: {
          number: '•••• •••• •••• ••••',
          name: 'Name on Card',
          expiry: '••/••',
          cvc: '•••'
      },

      debug: true // optional - default false
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

  new Cleave('[data-name="amount"]', {
      numeral: true
  });

});
