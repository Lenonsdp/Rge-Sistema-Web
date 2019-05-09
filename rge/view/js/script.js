$(function() {
	vincularEventos();

	if ($('#forma_tabela').length) {
		filtrar();
	}
});

function vincularEventos() {
	$('#btn').on('click', function() {
		$.ajax({
			'type': 'POST',
			'url': 'recebeDadosFormulario.php',
			'data': {
				'action': 'criarCobranca',
				'codigo': $('#codigo').val(),
				'nome': $('#nome').val(),
				'kwh': $('#kwh').val(),
				'tipo': $('#tipo').val(),
				'mes': $('#mes').val()
			},
			'complete': function(resp) {
				$('#codigo').val('');
				$('#nome').val('');
				$('#kwh').val('');
			}
		});
	});

	$('#codigo_busca, #nome_busca, #kwh_busca, #tipo_busca, #mes_busca').on('keyup', function() {
		filtrar();
	});
}

function mostrarDadosTabela(clientes) {
	$('#tabela_resultados tbody').empty();
	$.each(clientes, function(key, cliente) {
		$('#tabela_resultados tbody').append(
			$('<tr>').append(
				$('<td>', {'text': cliente.id}),
				$('<td>', {'text': cliente.codigo}),
				$('<td>', {'text': cliente.nome}),
				$('<td>', {'text': cliente.Kwh}),
				$('<td>', {'text': obterTipo(cliente.tipo)}),
				$('<td>', {'text': obterMes(cliente.mes)}),
				$('<td>', {'text': currencyFormatted(parseFloat(cliente.tipo) * parseInt(cliente.Kwh) * 4, 'R$')})
			)
		);                         
	});
};

function obterMes(value) {
	var mes = '';

	switch (value) {
		case '1':
			mes = 'Janeiro'; 
			break;
		case '2':
			mes = 'Fevereiro';
			break;
		case '3':
			mes = 'Março';
			break;
		case '4':
			mes = 'Abril';
			break;
		case '5':
			mes = 'Maio';
			break;
		case '6':
			mes = 'Junho';
			break;
		case '7':
			mes = 'Julho';
			break;
		case '8':
			mes = 'Agosto';
			break;
		case '9':
			mes = 'Setembro';
			break;
		case '10':
			mes = 'Outubro';
			break;
		case '11':
			mes = 'Novembro';
			break;
		case '12':
			mes = 'Dezembro';
			break;
	}

	return mes;
}

function obterTipo (value){
	var tipo = '';

	switch (value) {
		case '0.8':
			tipo = 'Residencial'; 
			break;
		case '0.9':
			tipo = 'Comercial';
			break;
		case '1':
			tipo = 'Industrial';
			break;
	}
	return tipo;
}

function currencyFormatted(value, str_cifrao) {
    return str_cifrao + ' ' + value.formatMoney(2, ',', '.');
}

Number.prototype.formatMoney = function (c, d, t) {
    var n = this,
        c = isNaN(c = Math.abs(c)) ? 2 : c,
        d = d == undefined ? "." : d,
        t = t == undefined ? "," : t,
        s = n < 0 ? "-" : "",
        i = parseInt(n = Math.abs(+n || 0).toFixed(c)) + "",
        j = (j = i.length) > 3 ? j % 3 : 0;
    return s + (j ? i.substr(0, j) + t : "") + i.substr(j).replace(/(\d{3})(?=\d)/g, "$1" + t) + (c ? d + Math.abs(n - i).toFixed(c).slice(2) : "");
};

function filtrar() {
	$.ajax({
		'type': 'POST',
		'url': 'recebeDadosFormulario.php',
		'data': {
			'action': 'filtrar',
			'codigo_busca': $('#codigo_busca').val(),
			'nome_busca': $('#nome_busca').val(),
			'kwh_busca': $('#kwh_busca').val(),
			'tipo_busca': $('#tipo_busca').val(),
			'mes_busca': $('#mes_busca').val()
		},
		'success': function(resp) {
			mostrarDadosTabela($.parseJSON(resp));
		}
	});
}