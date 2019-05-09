<form id="quadro">
	<h2 id="title">Gerador de cobrança</h2>
	<fieldset id="quadro_cadastro">
		<img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTrYnyRSwco6f8Xe-rcPiHTfYpHBDqfM2UPqNLERIuF4wgqOLGC" id="rge" alt="Logo Rge">
		<div>
			<label for="codigo">Codigo</label>
			<input type="text" name="codigo" id="codigo">
		</div>

		<div>
			<label for="nome">Nome</label>
			<input type="text" name="nome" id="nome">
		</div>

		<div>
			<label for="kwh">kwh/Mês</label>
			<input type="text" name="kwh" id="kwh">
		</div>

		<div class="select">
			<label id="select">Tipo consumidor: </label>
			<select class="tipo" id="tipo">
				<option value="0.8">Residencial</option>
				<option value="0.9">Comercial</option>
				<option value="1">Industrial</option>
			</select>
		</div>

		<div class="select">
			<label class="mes">Mês: </label>
			<select id="mes">
				<option value="1">Janeiro</option>
				<option value="2">Fevereiro</option>
				<option value="3">Março</option>
				<option value="4">Abril</option>
				<option value="5">Maio</option>
				<option value="6">Junho</option>
				<option value="7">Julho</option>
				<option value="8">Agosto</option>
				<option value="9">Setembro</option>
				<option value="10">Outubro</option>
				<option value="11">Novembro</option>
				<option value="12">Dezembro</option>
			</select>
		</div>

		<div id="btn_valor">
		<input id="btn" type="button" name="gerar_valor" value="Gerar cobrança"/>
		</div>
	</fieldset>
</form>