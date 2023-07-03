var divs = document.getElementsByClassName('myDiv');
for (var i = 0; i < divs.length; i++) {
  divs[i].addEventListener('click', function() {
    var idquizz = this.getAttribute('data-idquizz');
    updateSession(idquizz);
  });
}

function updateSession(idquizz) {
  var form = document.createElement('form');
  form.method = 'post';
  form.action = 'debutjeu.php';

  var input = document.createElement('input');
  input.type = 'hidden';
  input.name = 'idquizz';
  input.value = idquizz;

  form.appendChild(input);
  document.body.appendChild(form);

  form.submit();
}