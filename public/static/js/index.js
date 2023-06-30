
(() => {
  'use strict'

  const forms = document.querySelectorAll('.needs-validation')

  Array.from(forms).forEach(form => {
    form.addEventListener('submit', event => {
      if (!form.checkValidity()) {
        event.preventDefault()
        event.stopPropagation()
      }
      form.classList.add('was-validated')
    }, false)
  })
})()


window.onload = function() {
  const alertArea = document.getElementById('alert-area');
  const alert = document.querySelector('.alert');
  if (alert) {
    alert.style.opacity = 1;
    alertArea.style.height = '70px';
    setTimeout(() => {
      alert.style.opacity = 0;
    }, 2000);
    setTimeout(() => {
      alertArea.style.height = '0px';
    }, 2200);
    setTimeout(() => {
      new bootstrap.Alert(alert).close();
    }, 2500);
  }
}


function deleteModal(element) {
  const name = element.getAttribute('data-name');
  document.getElementById('deleteModalName').value = name;
  const url = element.getAttribute('data-url');
  document.getElementById('deleteModalForm').action = url;
}


function showModal(element) {
  const textObj = element.getAttribute('data-object');
  const obj = JSON.parse(textObj);
  document.getElementById('showModalId').value = obj['id'];
  document.getElementById('showModalName').value = obj['name'];
  document.getElementById('showModalCreatedAt').value =obj['created_at'];
  document.getElementById('showModalUpdatedAt').value = obj['updated_at'];
}


function updateModal(element) {
  const name = element.getAttribute('data-name');
  document.getElementById('updateModalName').value = name;
  const url = element.getAttribute('data-url');
  document.getElementById('updateModalForm').action = url;
}
