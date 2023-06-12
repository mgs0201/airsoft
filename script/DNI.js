  // Obtener una lista de elementos por su clase
  var inputs = document.getElementsByClassName('DNI');

  // Expresión regular para validar el formato de DNI español
  var regex = /^\d{8}[A-HJ-NP-TV-Z]$/;

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