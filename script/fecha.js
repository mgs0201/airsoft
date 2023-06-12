  var fechaInput = document.getElementById('fecha');

  fechaInput.addEventListener('input', function() {
    var regex = /^(19|20)\d{2}-(0[1-9]|1[0-2])-(0[1-9]|[12][0-9]|3[01])$/;
    var inputValue = fechaInput.value;

    if (regex.test(inputValue)) {
      fechaInput.style.backgroundColor = 'white';
    } else {
      fechaInput.style.backgroundColor = 'red';
    }
  });
