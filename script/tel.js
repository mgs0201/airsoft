  var telefonoInput = document.getElementById('tel');

  telefonoInput.addEventListener('input', function() {
    var regex = /^\d{9}$/;
    var inputValue = telefonoInput.value;

    if (regex.test(inputValue)) {
      telefonoInput.style.backgroundColor = 'white';
    } else {
      telefonoInput.style.backgroundColor = 'red';
    }
  });