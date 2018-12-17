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


    //Validaciones modals de GUARDAER ARL
    $('#modal_arlL').validate({
        rules: { 
            nameARL: {
                required: true,
                maxlength: 45                
                
                
            },
            percentagearl: {
                required: true,
                number:true
                
            }
        },
        messages: { 
            nameARL: {
                required: "Por favor, ingrese la descripción.",
                maxlength: "No puede ingresar más de 45 carácteres.",
                
                
            },
            percentagearl: {
                required: "Por favor, ingrese el valor de la ARL."  ,
                number:   "por favor ingrese solo números",
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


         //Validaciones modals de EDITAR ARL
    $('#modal_arl_edits').validate({
        rules: { 
            nameARL_edit: {
                required: true,
                maxlength: 45                
                
                
            },
            percentageARL_EDIT: {
                required: true,
                number:true
                
            }
        },
        messages: { 
            nameARL_edit: {
                required: "Por favor, ingrese la descripción.",
                maxlength: "No puede ingresar más de 45 carácteres.",
                
                
            },
            percentageARL_EDIT: {
                required: "Por favor, ingrese el valor de la ARL."  ,
                number:   "por favor ingrese solo números",
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


        
         //Validaciones agregar comisiones modals
    $('#modal_commissionss').validate({
        rules: { 
            nameCommission: {
                required: true,
                maxlength: 45                                                
            }
        },
        messages: { 
            nameCommission: {
                required: "Por favor, ingrese la descripción.",
                maxlength: "No puede ingresar más de 45 carácteres.",
                
                
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
              
     //Validaciones editar comisiones modals
    $('#modal_commissionsEdits').validate({
        rules: { 
            nameComissionMdl: {
                required: true,
                maxlength: 45                                                
            }
        },
        messages: { 
            nameComissionMdl: {
                required: "Por favor, ingrese la descripción.",
                maxlength: "No puede ingresar más de 45 carácteres.",
                
                
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
        
     //Validaciones modals de GUARDAR EPS
    $('#modal_epss').validate({
        rules: { 
            nameEPS: {
                required: true,
                maxlength: 45                
                
                
            },
            percentageEPS: {
                required: true,
                number:true
                
            }
        },
        messages: { 
            nameEPS: {
                required: "Por favor, ingrese la descripción.",
                maxlength: "No puede ingresar más de 45 carácteres.",
                
                
            },
            percentageEPS: {
                required: "Por favor, ingrese el valor de la EPS."  ,
                number:   "por favor ingrese solo números",
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

  //Validaciones modals de EDITAR EPS
  $('#modal_eps_editt').validate({
    rules: { 
        nameEPS_edit: {
            required: true,
            maxlength: 45                
            
            
        },
        percentageEPSEdit: {
            required: true,
            number:true
            
        }
    },
    messages: { 
        nameEPS_edit: {
            required: "Por favor, ingrese la descripción.",
            maxlength: "No puede ingresar más de 45 carácteres.",
            
            
        },
        percentageEPSEdit: {
            required: "Por favor, ingrese el valor de la EPS."  ,
            number:   "por favor ingrese solo números",
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


     //Validaciones agregar estado civil modals
     $('#modal_maritalStatuss').validate({
        rules: { 
            nameMaritalStatus: {
                required: true,
                maxlength: 45                                                
            }
        },
        messages: { 
            nameMaritalStatus: {
                required: "Por favor, ingrese la descripción.",
                maxlength: "No puede ingresar más de 45 carácteres.",
                
                
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

        
      //Validaciones editar estado civil modals
     $('#modal_maritalStatus_editt').validate({
        rules: { 
            nameMaritalStatus_edit: {
                required: true,
                maxlength: 45                                                
            }
        },
        messages: { 
            nameMaritalStatus_edit: {
                required: "Por favor, ingrese la descripción.",
                maxlength: "No puede ingresar más de 45 carácteres.",
                
                
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



     //Validaciones modals de GUARDAR horasextra
    $('#modal_overtimess').validate({
        rules: { 
            descriptionOvertime: {
                required: true,
                maxlength: 45                
                
                
            },
            percent: {
                required: true,
                number:true
                
            }
        },
        messages: { 
            descriptionOvertime: {
                required: "Por favor, ingrese la descripción.",
                maxlength: "No puede ingresar más de 45 carácteres.",
                
                
            },
            percent: {
                required: "Por favor, ingrese el valor de la hora extra."  ,
                number:   "por favor ingrese solo números",
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

    //Validaciones modals de EDITAR horasextra
    $('#modal_overtimes_editt').validate({
        rules: { 
            descriptionOvertime_edit: {
                required: true,
                maxlength: 45                
                
                
            },
            percent_edit: {
                required: true,
                number:true
                
            }
        },
        messages: { 
            descriptionOvertime_edit: {
                required: "Por favor, ingrese la descripción.",
                maxlength: "No puede ingresar más de 45 carácteres.",
                
                
            },
            percent_edit: {
                required: "Por favor, ingrese el valor de la hora extra."  ,
                number:   "por favor ingrese solo números",
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

//Validaciones modals de Agregar pensiones
$('#modal_pensionss').validate({
    rules: { 
        namePensions: {
            required: true,
            maxlength: 45                
            
            
        },
        percentagePension: {
            required: true,
            number:true
            
        }
    },
    messages: { 
        namePensions: {
            required: "Por favor, ingrese la descripción.",
            maxlength: "No puede ingresar más de 45 carácteres.",
            
            
        },
        percentagePension: {
            required: "Por favor, ingrese el valor de la pensión."  ,
            number:   "por favor ingrese solo números",
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

    //Validaciones modals de editar pensiones
$('#modal_pensionss').validate({
    rules: { 
        namePensions: {
            required: true,
            maxlength: 45                
            
            
        },
        percentagePension: {
            required: true,
            number:true
            
        }
    },
    messages: { 
        namePensions: {
            required: "Por favor, ingrese la descripción.",
            maxlength: "No puede ingresar más de 45 carácteres.",
            
            
        },
        percentagePension: {
            required: "Por favor, ingrese el valor de la pensión."  ,
            number:   "por favor ingrese solo números",
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


    //Validaciones modals de editar pensiones
    $('#modal_pensions_editt').validate({
        rules: { 
            namePensions_edit: {
                    required: true,
                    maxlength: 45                
            
            
        },
        percentagePension_Edit: {
            required: true,
            number:true
            
        }
    },
    messages: { 
             namePensions_edit: {
                required: "Por favor, ingrese la descripción.",
                maxlength: "No puede ingresar más de 45 carácteres.",
            
            
        },
        percentagePension_Edit: {
            required: "Por favor, ingrese el valor de la pensión."  ,
            number:   "por favor ingrese solo números",
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

    //Validaciones agregar profesion modals
    $('#modal_professionss').validate({
        rules: { 
            nameProfession: {
                required: true,
                maxlength: 45                                                
            }
        },
        messages: { 
            nameProfession: {
                required: "Por favor, ingrese la descripción.",
                maxlength: "No puede ingresar más de 45 carácteres.",
                
                
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


        //Validaciones editar profesion modals
    $('#modal_professions_editt').validate({
        rules: { 
            nameProfession_edit: {
                required: true,
                maxlength: 45                                                
            }
        },
        messages: { 
            nameProfession_edit: {
                required: "Por favor, ingrese la descripción.",
                maxlength: "No puede ingresar más de 45 carácteres.",
                
                
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

    
    //Validaciones modals de GUARDAER cesantias
    $('#addLayoffstt').validate({
        rules: { 
            descriptionLayoffs: {
                required: true,
                maxlength: 45                
                
                
            },
            valueLayoffs: {
                required: true,
                number:true
                
            }
        },
        messages: { 
            descriptionLayoffs: {
                required: "Por favor, ingrese la descripción.",
                maxlength: "No puede ingresar más de 45 carácteres.",
                
                
            },
            valueLayoffs: {
                required: "Por favor, ingrese el valor de la cesantía."  ,
                number:   "por favor ingrese solo números",
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


        //Validaciones modals de editar cesantías
    $('#form_editLayoffss').validate({
        rules: { 
            descriptionLayoffsE: {
                required: true,
                maxlength: 45                
                
                
            },
            valueLayoffsE: {
                required: true,
                number:true
                
            }
        },
        messages: { 
            descriptionLayoffsE: {
                required: "Por favor, ingrese la descripción.",
                maxlength: "No puede ingresar más de 45 carácteres.",
                
                
            },
            valueLayoffsE: {
                required: "Por favor, ingrese el valor de la cesantía."  ,
                number:   "por favor ingrese solo números",
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


     //Validaciones modals de agregar cargo
    $('#modal_ratesJobb').validate({
        rules: { 
            nameJob: {
                required: true,
                maxlength: 45                
                
                
            },
            ratesValue: {
                required: true,
                number:true
                
            }
        },
        messages: { 
            nameJob: {
                required: "Por favor, ingrese la descripción.",
                maxlength: "No puede ingresar más de 45 carácteres.",
                
                
            },
            ratesValue: {
                required: "Por favor, ingrese el salario del cargo."  ,
                number:   "por favor ingrese solo números",
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


        //Validaciones modals de editar cargo
    $('#modal_ratesJob_editt').validate({
        rules: { 
            nameJob_edit: {
                required: true,
                maxlength: 45                
                
                
            },
            ratesValue_edit: {
                required: true,
                number:true
                
            }
        },
        messages: { 
            nameJob_edit: {
                required: "Por favor, ingrese la descripción.",
                maxlength: "No puede ingresar más de 45 carácteres.",
                
                
            },
            ratesValue_edit: {
                required: "Por favor, ingrese el salario del cargo."  ,
                number:   "Por favor ingrese solo números",
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

    //Validaciones modals de agregar resolución
    $('#modal_resolutionss').validate({
        rules: { 
            nameResolution: {
                required: true,
                maxlength: 45                
                
                
            }
        },
        messages: { 
            nameResolution: {
                required: "Por favor, ingrese la descripción.",
                maxlength: "No puede ingresar más de 45 carácteres.",
                
                
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


        //Validaciones modals de editar resolución
    $('#modal_resolutions_editt').validate({
        rules: { 
            nameResolution_edit: {
                required: true,
                maxlength: 45                
                
                
            }
        },
        messages: { 
            nameResolution_edit: {
                required: "Por favor, ingrese la descripción.",
                maxlength: "No puede ingresar más de 45 carácteres.",
                
                
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


        //Validaciones modals de agregar tipo de contrato
    $('#modal_typeContractt').validate({
        rules: { 
            descriptionType: {
                required: true,
                maxlength: 45                
                
                
            }
        },
        messages: { 
            descriptionType: {
                required: "Por favor, ingrese la descripción.",
                maxlength: "No puede ingresar más de 45 carácteres.",
                
                
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


        //Validaciones modals de editar tipo de contrato
    $('#modal_typeContract_editt').validate({
        rules: { 
            descriptionType_edit: {
                required: true,
                maxlength: 45                
                
                
            }
        },
        messages: { 
            descriptionType_edit: {
                required: "Por favor, ingrese la descripción.",
                maxlength: "No puede ingresar más de 45 carácteres.",
                
                
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


        
    //Validaciones modals de agregar fonde de compensación cargo
    $('#modal_compensationFoundd').validate({
        rules: { 
            description: {
                required: true,
                maxlength: 45                
                
                
            },
            percentageFound: {
                required: true,
                number:true
                
            }
        },
        messages: { 
            description: {
                required: "Por favor, ingrese la descripción.",
                maxlength: "No puede ingresar más de 45 carácteres.",
                
                
            },
            percentageFound: {
                required: "Por favor, ingrese el valor del fondo de compensación."  ,
                number:   "Por favor ingrese solo números",
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


        //Validaciones modals de editar fondo de compensación cargo
    $('#modal_compensationFound_editt').validate({
        rules: { 
            description_edit: {
                required: true,
                maxlength: 45                
                
                
            },
            percentageFound_edit: {
                required: true,
                number:true
                
            }
        },
        messages: { 
            description_edit: {
                required: "Por favor, ingrese la descripción.",
                maxlength: "No puede ingresar más de 45 carácteres.",
                
                
            },
            percentageFound_edit: {
                required: "Por favor, ingrese el valor del fondo de compensación."  ,
                number:   "Por favor ingrese solo números",
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

