<?php include "../includes/cabecalho.php" ; 
$id_medico = $_GET['id_medico'];
include "../includes/conexao.php";
$sqlBuscar = "SELECT * FROM tb_medicos WHERE id={$id_medico};";
$listaDeMedicos = mysqli_query($conexao , $sqlBuscar);
$none = $telefone = $crm = $especialidade = "";
while($medico = mysqli_fetch_assoc($listaDeMedicos)){
    $nome = $medico['nome'];
    $telefone = $medico['telefone'];
    $crm = $medico['crm'];
    $especialidade = $medico['especialidade'];
}
?>

<form name="formulario-inserir-medicos" method="post" action="medicos-alterar.php">
    <input type="hidden" name="id_medico" value="<?php echo $id_medico;?>">
    <div class="row">
    <p class="col-6">
        <label class="form-label">Nome: </label><br><input name="nome" class="form-control btn btn-primary"  value="<?php echo $nome;?>">
    </p>
    <p class="col-6">
        <label class="form-label">Telefone: </label><br><input name="telefone" class="form-control btn btn-primary" value="<?php echo $telefone;?>">
    </p>
    <p class="col-6">
        <label class="form-label">CRM: </label><br><input name="crm" class="form-control btn btn-primary" value="<?php echo $crm;?>">
    </p>
    <p class="col-6">
        <label class="form-label">Especialidade:</label>
        <select name="especialidade" class="form-select btn btn-primary">
            <option value="Cardiologista"<?php if($especialidade == 'Cardiologista'){echo "selected";}?>>Cardiologista</option>
            <option value="Pediatra"<?php if($especialidade == 'Pediatra'){echo "selected";}?>>Pediatra</option>
            <option value="Ortopedista"<?php if($especialidade == 'Ortopedista'){echo "selected";}?>>Ortopedista</option>
            <option value="Geneticista"<?php if($especialidade == 'Geneticista'){echo "selected";}?>>Geneticista</option>
        </select>
        </p>
        <p>
            <button type="subtmit" class="btn btn-primary">Salvar</button>
        </p>
    </form>
<?php include "../includes/rodape.php" ; ?>