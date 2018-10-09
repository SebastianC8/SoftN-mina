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


