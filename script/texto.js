  // Obtener una lista de elementos por su clase
  var inputs = document.getElementsByClassName('texto');

  // Iterar sobre los elementos y aplicar el evento y la lógica de validación a cada uno
  for (var i = 0; i < inputs.length; i++) {
    inputs[i].addEventListener('input', function() {
        var regex = /^[a-zA-ZñÑ\s]*$/; // Expresión regular para permitir solo letras y espacios en blanco
        var inputValue = this.value;

      if (regex.test(inputValue)) {
        this.style.backgroundColor = 'white';
      } else {
        this.style.backgroundColor = 'red';
      }
    });
  }


  var regex = /^[a-zA-ZñÑ\s]*$/; // Expresión regular para permitir solo letras y espacios en blanco
