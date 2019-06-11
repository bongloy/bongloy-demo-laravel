// JQuery is not required for Bongloy.js

// Here we get our Bongloy Publishable Key from a meta tag attribute in the HTML head
// so we don't need to hard-code it the JavaScript
var publishableKey = document.head.querySelector("meta[name=bongloy-publishable-key]").content;
Bongloy.setPublishableKey(publishableKey);

var checkoutForm = document.querySelector('[data-name="paymentForm"]');
checkoutForm.addEventListener('submit', submitHandler, false);

// Submit handler for checkout form.
function submitHandler(event) {
  event.preventDefault();

  var expiry = document.querySelector('[data-name="cardExpiry"]').value.split("/");
  var cardObject = {
    number:     document.querySelector('[data-name="cardNumber"]').value,
    exp_month:  expiry[0],
    exp_year:   expiry[1],
    cvc:        document.querySelector('[data-name="cardCVC"]').value
  };


  Bongloy.createToken('card', cardObject, function(statusCode, response) {
    console.log(response, statusCode);
    // hide error messages
    var errorMessages = document.querySelector('[data-name="errorMessages"]');
    errorMessages.classList.remove('d-block');
    errorMessages.classList.add('d-none');
    console.log(response, statusCode);
    if (statusCode === 201) {
      // On success, set token in your checkout form
      document.querySelector('[data-name="cardToken"]').value = response.id;
      console.log(response);

      // Then, submit the form
      checkoutForm.submit();
    } else {
      // If unsuccessful, display an error message.
      // Note that `response.error.message` contains a preformatted error message.
      document.querySelector("input[type=submit]").removeAttribute('disabled');
      errorMessages.classList.remove('d-none');
      errorMessages.classList.add('d-block');
      errorMessages.innerHTML = response.error.message;
    }
  });
}
