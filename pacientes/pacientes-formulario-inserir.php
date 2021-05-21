<?php include "../includes/cabecalho.php"; ?>
<form name="formulario-pacientes" method="post" action="pacientes-inserir.php">
<p>
    <label>Nome:</label>
    <input class="btn btn-danger" name="nome">
</p>
<p>
<label>Telefone:</label>
<input  class="btn btn-danger" name="telefone">
</p>
<p>
<label>Data de Nascimento:</label>
<input  class="btn btn-danger" name="data_nascimento" type="date">
</p>
<p>
<label>Convênio:</label>
<input name="convenio" type="checkbox" value="sim">
</p>
<p>
<label>Diagnóstico:</label>
<textarea class="btn btn-danger" name="diagnostico"></textarea>
</p>
<p>
<button class="btn btn-danger" type="submit">Salvar</button>
</p>


<?php include "../includes/rodape.php"; ?>