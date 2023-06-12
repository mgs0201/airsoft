  var urlInput = document.getElementById('URL');

  urlInput.addEventListener('input', function() {
    var regex = /^(http|https):\/\/[\w\-]+(\.[\w\-]+)+[/#?]?.*$/;
    var inputValue = urlInput.value;

    if (regex.test(inputValue)) {
      urlInput.style.backgroundColor = 'white';
    } else {
      urlInput.style.backgroundColor = 'red';
    }
  });