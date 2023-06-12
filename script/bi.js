
  // Obtener una lista de elementos por su clase
  var inputs = document.getElementsByClassName('bi');

  // Iterar sobre los elementos y aplicar el evento y la lógica de validación a cada uno
  for (var i = 0; i < inputs.length; i++) {
    inputs[i].addEventListener('input', function() {
      var regex = /^[01]*$/;
      var inputValue = this.value;

      if (regex.test(inputValue)) {
        this.style.backgroundColor = 'white';
      } else {
        this.style.backgroundColor = 'red';
      }
    });
  }
