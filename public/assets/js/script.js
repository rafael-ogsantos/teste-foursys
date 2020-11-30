function mountCity(state){
	$.ajax({
		type:'GET',
		url:'http://api.londrinaweb.com.br/PUC/Cidades/'+ state +'/BR/0/10000',
		contentType: "application/json; charset=utf-8",
		dataType: "jsonp",
		async:false
	}).done(function(response){
		cities = '';

		$.each(response, function(c, city){

			cities+='<option value="'+city+'">'+city+'</option>';

		});

		// PREENCHE AS CIDADES DE ACORDO COM O ESTADO
		$('#city').html(cities);

	});
}

function mountUf(){
	$.ajax({
		type:'GET',
		url:'http://api.londrinaweb.com.br/PUC/Estados/BR/0/10000',
		contentType: "application/json; charset=utf-8",
		dataType: "jsonp",
		async:false
	}).done(function(response){
		states='';
		$.each(response, function(e, state){

			states+='<option value="'+state.UF+'">'+state.Estado+'</option>';

		});

		// PREENCHE OS ESTADOS BRASILEIROS
		$('#state').html(states);

		// CHAMA A FUNÇÃO QUE PREENCHE AS CIDADES DE ACORDO COM O ESTADO
		mountCity($('#state').val());

		// VERIFICA A MUDANÇA NO VALOR DO CAMPO ESTADO E ATUALIZA AS CIDADES
		$('#state').change(function(){
			mountCity($(this).val());
		});

	});
}


mountUf();