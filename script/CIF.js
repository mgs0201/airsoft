  // Obtener una lista de elementos por su clase
  var inputs = document.getElementsByClassName('CIF');

  // Expresión regular para validar el formato de CIF español
  var regex = /^[A-HJ-NP-SUVW]{1}-?\d{7}[0-9A-J]{1}$/;

  // Iterar sobre los elementos y aplicar el evento y la lógica de validación a cada uno
  for (var i = 0; i < inputs.length; i++) {
    inputs[i].addEventListener('input', function() {
      var inputValue = this.value;

      if (regex.test(inputValue)) {
        this.style.backgroundColor = 'white';
      } else {
        this.style.backgroundColor = 'red';
      }
    });
  }