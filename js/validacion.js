$(document).ready(function(){
	$('#form-contact').validate({
		rules: {
			nombre: 'required',
			tel: {
				required: true,
				number: true,
				minlength: 10,
				maxlength: 12
			},
			email: {
				required: true,
				email: true
			},
			mensaje: {
				required: true,
				maxlength: 500
			}
		},
		messages: {
			tel: {
				minlength: 'Ingrese un número entre 10 y 12 dígitos.',
				maxlength: 'Ingrese un número entre 10 y 12 dígitos.'
			},
			mensaje: {
				maxlength: 'Máximo 500 caracteres.'
			}
		}
	});
});