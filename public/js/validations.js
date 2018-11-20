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

//Validaciones modals de registrar bonos
$('#form_bonuses').validate({
rules: {

descriptionBonus: {
    required: true,
    maxlength: 45
},
valueBonus: {
    required: true,
    number: true
}
},
messages: {

descriptionBonus: {
    required: "Por favor, ingrese la descripción del bonus.",
    minlength: "No puede ingresar más de 45 carácteres."
},
valueBonus: {
    required: "Por favor, ingrese el valor del bonus.",
    number: "Este campo solo permite valores numéricos"
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

//Validaciones modals de registrar vacaciones
$('#form_holidays').validate({
    rules: {
        descriptionHolidays: {
        required: true,
        maxlength: 45
    },
    dateStart: {
        required: true,
        type:Date
    }
    },
    messages: {
    
        descriptionHolidays: {
        required: "Por favor,ingrese la descripción.",
        maxlength: "No puede ingresar más de 45 carácteres."
    },
    dateStart: {
        required: "Por favor, ingrese la fecha inicial",        
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

//Validaciones modals de editar vacaciones
    $('#modal_holidays_editForm').validate({
        rules: { 
            descriptionHolidays_edit: {
                required: true,
                maxlength: 45                
                
                
            },
            dateStart_edit: {
                required: true,
                
            }
        },
        messages: { 
            descriptionHolidays_edit: {
                required: "Por favor, ingrese la descripción.",
                maxlength: "No puede ingresar más de 45 carácteres.",
                
                
            },
            dateStart_edit: {
                required: "Por favor, ingrese el valor del bonus."                
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

