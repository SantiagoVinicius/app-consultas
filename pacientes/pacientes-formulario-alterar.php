<?php 
include "../includes/cabecalho.php"; 
     
include   "../includes/conexao.php";

$id_paciente = $_GET['id'];

$sqlBusca = "SELECT * FROM tb_pacientes WHERE id = {$id_paciente}";
$listaDePacientes = mysqli_query($conexao , $sqlBusca);

$nome = $telefone = $convenio = $data_nascimento = $diagnostico = "";

while($paciente = mysqli_fetch_assoc($listaDePacientes)){
    $nome = $paciente['nome'];
    $telefone = $paciente['telefone'];
    $convenio = $paciente['convenio'];
    $diagnostico = $paciente['diagnostico'];
    $data_nascimento = $paciente['data_nascimento'];
}
?>

<form name="formulario-pacientes" method="post" action="pacientes-alterar.php">
<input name="id_paciente" type="hidden" value="<?php echo $id_paciente;?>">
<p>
    <label>Nome:</label>
    <input class="btn btn-success" name="nome" value="<?php echo $nome ;?>">
</p>
<p>
<label>Telefone:</label>
<input  class="btn btn-success" name="telefone" value="<?php echo $telefone;?>">
</p>
<p>
<label>Data de Nascimento:</label>
<input  class="btn btn-success" name="data_nascimento" type="date"  value="<?php echo $data_nascimento;?>">
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
<textarea class="btn btn-success" name="diagnostico" ><?php echo $diagnostico ;?></textarea>
</p>
<p>
<button class="btn btn-success" type="submit">Salvar</button>
</p>


<?php include "../includes/rodape.php"; ?>