

$(document).ready(function($) {

	$('#datatable').dataTable({
		"aoConlumnDefs":[
			{"aTargets" : [0]}
		],
		"aaSorting": [[0, 'asc']],
		"aLeengthMenu": [
			[20, 50, 100, -1],
			[20, 50, 100, "All"]
		],
		"iDisplayLegngth": 20,
	})
	
});


// -- cadastro de clientes
	var pf = $("#pf");
	var pj = $("#pj");

	if (pf.is(':checked')) {

		$(".pj").hide();
		$(".pf").show();
		$("input[name=cpf_cnpj]").mask("999.999.999-99");
	}

	if (pj.is(':checked')) {

		$(".pf").hide();
		$(".pj").show();
		$("input[name=cpf_cnpj]").mask("99.999.999/9999-99");

	}

	pf.click(function(){

		$(".pj").hide();
		$(".pf").show();
		$("input[name=cpf_cnpj]").mask("999.999.999-99");

	});

	pj.click(function(){

		$(".pf").hide();
		$(".pj").show();
		$("input[name=cpf_cnpj]").mask("99.999.999/9999-99");
		
	});

// --fim cadastro de clientes

//MASCARAS DO CADASTRO DE CLIENTE

$("input[name=data_nascimento]").mask("99/99/9999");
$("input[name=telefone]").mask("(99) 99999-9999");
$("input[name=cep]").mask("99999-999");



