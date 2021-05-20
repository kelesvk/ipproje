$(document).on("click", "#c_delete", function () {
  var c_id = $(this).data('id');
  $(".modal-body #category_id").val( c_id );
});

$(document).on("click", "#c_change", function () {
  var c_id = $(this).data('id');
  $(".modal-body #category_id").val( c_id );
});

$(document).on("click", "#a_delete", function () {
  var a_id = $(this).data('id');
  $(".modal-body #article_id").val( a_id );
});

//----Validation----


(function () {
  'use strict'


  var forms = document.querySelectorAll('.needs-validation')

  
  Array.prototype.slice.call(forms)
    .forEach(function (form) {
      form.addEventListener('submit', function (event) {
        if (!form.checkValidity()) {
          event.preventDefault()
          event.stopPropagation()
        }

        form.classList.add('was-validated')
      }, false)
    })
})()

