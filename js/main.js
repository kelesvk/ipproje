
//----Validation----
(function () {
  'use strict'

  // Fetch all the forms we want to apply custom Bootstrap validation styles to
  var forms = document.querySelectorAll('.needs-validation')

  // Loop over them and prevent submission
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

$(document).on("click", "#com_delete", function () {
  var com_id = $(this).data('id');
  $(".modal-body #comment_id").val( com_id );
});

$(document).on("click", "#com_approve", function () {
  var com_id = $(this).data('id');
  $(".modal-body #comment_id").val( com_id );
});

$(document).on("click", "#u_edit", function () {
  var u_id = $(this).data('id');
  $(".modal-body #user_id").val( u_id );
});

$(document).on("click", "#u_delete", function () {
  var u_id = $(this).data('id');
  $(".modal-body #user_id").val( u_id );
});

$(document).on("click", "#s_change_img", function () {
  var s_id = $(this).data('id');
  $(".modal-body #slider_id").val( s_id );
});

$(document).on("click", "#change_text", function () {
  var s_id = $(this).data('id');
  $(".modal-body #slider_id").val( s_id );
});

$(document).on("click", "#s_delete", function () {
  var s_id = $(this).data('id');
  $(".modal-body #slider_id").val( s_id );
});

