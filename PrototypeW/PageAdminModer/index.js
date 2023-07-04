var divs = document.getElementsByClassName('myDiv');
for (var i = 0; i < divs.length; i++) {
  divs[i].addEventListener('click', function() {
    var user = this.getAttribute('data-user');
    updateSession(idquizz);
  });
}

function updateSession(user) {
  var form = document.createElement('form');
  form.method = 'post';
  form.action = '';

  var input = document.createElement('input');
  input.type = 'hidden';
  input.name = 'user';
  input.value = user;

  form.appendChild(input);
  document.body.appendChild(form);

  form.submit();
}