<?php 
include "../includes/cabecalho.php"; 
     
include   "../includes/conexao.php";

$id_paciente = $_GET['id'];

$sqlBusca = "SELECT * FROM tb_pacientes WHERE id = {$id_paciente}";
$listaDePacientes = mysqli_query($conexao , $sqlBusca);

 $nome = $telefone = $convenio = $diagnostico = $data_nascimento = $foto =  "";

while($paciente = mysqli_fetch_assoc($listaDePacientes)){
    $foto = $paciente['foto'];
    $nome = $paciente['nome'];
    $telefone = $paciente['telefone'];
    $convenio = $paciente['convenio'];
    $diagnostico = $paciente['diagnostico'];
    $data_nascimento = $paciente['data_nascimento'];
}
?>

<form name="formulario-pacientes" method="post" action="pacientes-alterar.php" enctype="multipart/form-data">
<input name="id_paciente" type="hidden" value="<?php echo $id_paciente;?>">
<p>
    <label>Nome:</label>
    <input class="btn btn-danger" name="nome" value="<?php echo $nome ;?>">
</p>
<p>
<label>Telefone:</label>
<input  class="btn btn-danger" name="telefone" value="<?php echo $telefone;?>">
</p>
<p>
<label>Data de Nascimento:</label>
<input  class="btn btn-danger" name="data_nascimento" type="date"  value="<?php echo $data_nascimento;?>">
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
<textarea class="btn btn-danger" name="diagnostico" ><?php echo $diagnostico ;?></textarea>
</p>
<p>  
<label>Foto: <label>
<input type="file" name="arquivo" class="btn btn-danger">
</p>
<p>
<button class="btn btn-danger" type="submit">Salvar</button>
</p>


<?php include "../includes/rodape.php"; ?>