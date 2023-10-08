function loadNavbar() {
    var xhr = new XMLHttpRequest();
    xhr.open('GET', 'navbar.html');
    xhr.onload = function() {
      if (xhr.status === 200) {
        document.querySelector('nav').innerHTML = xhr.responseText;
      }
    };
    xhr.send();
  }
  