<?php include "../includes/cabecalho.php"; ?>
<form name="formulario-pacientes" method="post" action="pacientes-alterar.php">
<input name="id_paciente" type="hidden" value="<?php echo $_GET['id'];?>">
<p>
    <label>Nome:</label>
    <input class="btn btn-success" name="nome" >
</p>
<p>
<label>Telefone:</label>
<input  class="btn btn-success" name="telefone" >
</p>
<p>
<label>Data de Nascimento:</label>
<input  class="btn btn-success" name="data_nascimento" type="date" >
</p>
<p>
<label>Convênio:</label>
<?php
$marcado = "";
if($convenio == "sim"){
    $marcado = "checked";
}
?>
<input name="convenio" type="checkbox" value="sim" <?php echo $marcado; ?>>
</p>
<p>
<label>Diagnóstico:</label>
<textarea class="btn btn-success" name="diagnostico" ></textarea>
</p>
<p>
<button class="btn btn-success" type="submit">Salvar</button>
</p>


<?php include "../includes/rodape.php"; ?>