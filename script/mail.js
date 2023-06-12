  var emailInput = document.getElementById('mail');

  emailInput.addEventListener('input', function() {
    var regex = /^[a-zA-Z0-9]+@[a-zA-Z0-9]+\.[A-Za-z]+$/;
    var inputValue = emailInput.value;

    if (regex.test(inputValue)) {
      emailInput.style.backgroundColor = 'white';
    } else {
      emailInput.style.backgroundColor = 'red';
    }
  });