$('#form_areas').validate({
    rules: {
        nameArea: {
        required: true,
        maxlength: 45
    },
    bossArea: {
        required: true,
        maxlength: 45
    }
    },
    messages: {
    
        nameArea: {
        required: "Por favor, ingrese la descripción del área.",
        minlength: "No puede ingresar más de 45 carácteres."
    },
    bossArea: {
        required: "Por favor, ingrese el jefe del área",
        minlength: "No puede ingresar más de 45 carácteres."
    }
    
    },
    errorElement: 'em',
    errorPlacement: function errorPlacement(error, element) {
    error.addClass('invalid-feedback');
    
    if (element.prop('type') === 'checkbox') {
      error.insertAfter(element.parent('label'));
    } else {
      error.insertAfter(element);
    }
    },
    // eslint-disable-next-line object-shorthand
    highlight: function highlight(element) {
    $(element).addClass('is-invalid').removeClass('is-valid');
    },
    // eslint-disable-next-line object-shorthand
    unhighlight: function unhighlight(element) {
    $(element).addClass('is-valid').removeClass('is-invalid');
    }
    });