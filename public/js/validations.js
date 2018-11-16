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


$('#form_register_contract_employees').validate({
    rules: {
        documentType_id: {
            required: true,
            min: 1
        },
        nameEmployee:{
            required: true,
            maxlength: 45,
        },
        birthDate:{
            required: true,
            date: true,
        },
        email: {
            required:true,
            email:true
        },
        numberSons: {
            required:true,
            number:true
        },
        holidays_id:{
            required:true,
            min: 1
        },
        area_id:{
            required: true,
            min: 1
        },
        document:{
            required:true,
            number:true
        },
        lastName:{
            maxlength:45
        },
        address:{
            minlength: 5,
            maxlength: 45
        },
        Phone:{
            number: true
        },
        entryDate:{
            required:true,
            date:true
        },
        maritalStatus_id:{
            required:true,
            min: 1
        },
        level_educative_id:{
            required: true,
            min: 1
        },
        professions_id:{
            required: true,
            min: 1
        },
        yearStart:{
            required: true,
            date: true
        },
        yearEnd:{
            required: true,
            date: true
        },
        descriptionContract:{
            required: true,
            maxlength: 45
        },
        dateStart:{
            required: true,
            date: true
        },
        bonus_id:{
            required: true,
            min: 1
        },
        ratesJob_id:{
            required: true,
            min: 1
        },
        workDay:{
            required:true,
            maxlength: 45
        },
        payment_period:{
            required:true,
            number:true
        },
        typeContract_id: {
            required: true,
            min: 1
        },
        dateEnd:{
            required: true,
            date: true
        },
        company_id:{
            required: true,
            min: 1
        },
        hoursDaily:{
            required: true,
            number: true
        },
        resolution_idResolution:{
            required: true,
            min: 1
        },
        eps_id:{
            required:true,
            min:1
        },
        arl_id:{
            required:true,
            min:1
        },
        pensions_id:{
            required:true,
            min:1
        },
        compensationfound_id:{
            required:true,
            min:1
        },
        layoffs_id:{
            required:true,
            min:1
        }
    },
    messages: {
        documentType_id:{
            required: "El campo tipo de documento no puede estar vacío.",
            min: "Por favor, seleccione una opción correcta."
        },
        nameEmployee:{
            required: "Por favor, ingrese el nombre del empleado.",
            maxlength: "El nombre debe tener menos de 45 caracteres.",
        },
        birthDate:{
            required: "La fecha de nacimiento es obligatoria.",
            date: "La fecha debe tener un formato correcto. (dd/mm/yyyy)",
        },
        email: {
            required: "Por favor, ingrese el correo electrónico del empleado.",
            email: "Por favor, ingrese un formato correcto de correo."
        },
        numberSons: {
            required: "Por favor, ingrese la cantidad de hijos del empleado.",
            number: "La cantidad solo puede ser ingresada en números enteros."
        },
        holidays_id:{
            required: "Por favor, ingrese las vacaciones del empleado.",
            min: "Por favor, seleccione una opción correcta."
        },
        area_id:{
            required: "Por favor, seleccione el área de trabajo del empleado",
            min: "Por favor, seleccione una opción correcta."
        },
        document:{
            required: "El número de documento es un campo obligatorio.",
            number: "El número de documento debe contener valores enteros."
        },
        lastName:{
            maxlength: "El apellido debe tener menos de 45 caracteres."
        },
        address:{
            minlength: "La dirección debe contener más de 5 caracteres.",
            maxlength: "La dirección debe contener menos de 45 caracteres."
        },
        Phone:{
            number: "El teléfono solo debe contener valores numéricos."
        },
        entryDate:{
            required: "Por favor, ingrese la fecha de ingreso del empleado a la empresa.",
            date: "La fecha debe tener un formato correcto."
        },
        maritalStatus_id:{
            required: "Por favor, seleccione el estado civil del empleado.",
            min: "Por favor, seleccione una opción correcta."
        },
        level_educative_id:{
            required: "Por favor, seleccione el nivel educativo del empleado.",
            min: "Por favor, seleccione una opción correcta."
        },
        professions_id:{
            required: "Por favor, seleccione la profesión empleado.",
            min: "Por favor, seleccione una opción correcta."
        },
        yearStart:{
            required: "Por favor, seleccione la fecha de inicio de sus estudios.",
            date: "La fecha debe tener un formato correcto."
        },
        yearEnd: {
            required: "Por favor, seleccione la fecha de finalización de sus estudios.",
            date: "La fecha debe tener un formato correcto."
        },
        descriptionContract:{
            required: "La descripción del contrato no puede estar vacía.",
            maxlength: "La descripción del contrato no puede tener más de 45 caracteres."
        },
        dateStart:{
            required: "La fecha de inicio del empleado no puede estar vacía.",
            date: "La fecha debe tener un formato correcto."
        },
        bonus_id:{
            required: "Por favor, seleccione una respuesta.",
            min: "Por favor, seleccione una opción correcta."
        },
        ratesJob_id:{
            required: "Por favor, seleccione el cargo del empleado.",
            min: "Por favor, seleccione una opción correcta."
        },
        workDay:{
            required: "La jornada laboral del empleado no puede estar vacía",
            maxlength: "La jornada laboral no puede tener más de 45 caracteres."
        },
        payment_period:{
            required: "Por favor, ingrese el periodo de pago al empleado.",
            number: "Este campo solo permite valores numéricos."
        },
        typeContract_id: {
            required: "Por favor, seleccione un tipo de contrato.",
            min: "Por favor, seleccione una opción correcta."
        },
        dateEnd:{
            required: "Por favor, ingrese la fecha de fin del contrato.",
            date: "La fecha debe tener un formato correcto."
        },
        company_id:{
            required: "Por favor, seleccione una compañía.",
            min: "Por favor, seleccione una opción correcta."
        },
        hoursDaily:{
            required: "La cantidad de horas de trabajo diarias son obligatorias.",
            number: "Este campo solo permite valores numéricos."
        },
        resolution_idResolution:{
            required: "Por favor, seleccione la resolución que rige este contrato.",
            min: "Por favor, seleccione una opción correcta."
        },
        eps_id:{
            required: "Por favor, seleccione la EPS del empleado.",
            min:"Por favor, seleccione una opción correcta."
        },
        arl_id:{
            required: "Por favor, seleccione la ARL del empleado.",
            min: "Por favor, seleccione una opción correcta."
        },
        pensions_id:{
            required: "Por favor, seleccione la pensión del empleado.",
            min: "Por favor, seleccione una opción correcta."
        },
        compensationfound_id:{
            required: "Por favor, seleccione el fondo de compensación del empleado.",
            min: "Por favor, seleccione una opción correcta."
        },
        layoffs_id:{
            required: "Por favor, seleccione las cesantías del empleado del empleado.",
            min: "Por favor, seleccione una opción correcta."
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
