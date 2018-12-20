
  $("#marcarTodo").change(function () {
      $("#aceptar input[type=checkbox]").prop('checked', $(this).prop("checked"));
  });