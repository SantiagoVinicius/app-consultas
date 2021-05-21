<?php
 include "../includes/cabecalho.php";
 include "../includes/conexao.php";


$id_agenda = $_GET['id_agenda'];

$sqlBusca = "SELECT * FROM tb_agenda WHERE id = {$id_agenda}";
$listaDeAgenda = mysqli_query($conexao , $sqlBusca);

$data = $hora = $id_medico = $sala = $id_paciente = "";

while($agenda = mysqli_fetch_assoc($listaDeAgenda)){
    $data = $agenda['data'];
    $hora = $agenda['hora'];
    $id_medico = $agenda['id_medico'];
    $sala = $agenda['sala'];
    $id_paciente = $agenda['id_paciente'];
}
?>

<form name="cadastro-agenda" method="post" action="agenda-alterar.php">
<input name="id_agenda" type="hidden" value="<?php echo $id_agenda;?>">
    <p>
        <label>Data:</label>
        <input type="date" name="data" class=" btn btn-success" value="<?php echo $data?>">
    </p>
    <p>
        <label>Hora:</label>
        <input type="time" name="hora" class=" btn btn-success" value="<?php echo $hora ?>">
    </p>
    <p>
        <label>Médico:</label>
        <select name="id_medico" class=" btn btn-success" value="<?php echo $id_medico ?>">
            <?php
            $sqlBuscaMedicos = "SELECT * FROM tb_medicos";
            $listaDeMedicos = mysqli_query($conexao , $sqlBuscaMedicos);

            while($medico = mysqli_fetch_assoc($listaDeMedicos)){
                echo "<option value='{$medico['id']}'>";
                echo $medico['nome'];
                echo "</option>";
            }
        ?>
        </select>
    </p>
    <p>
        <label>Sala:</label>
        <input name="sala" class="btn btn-success" value="<?php echo $sala ?>">
    </p>
    <p>
        <label>Paciente:</label>
        <select name="id_paciente" class=" btn btn-success" value="<?php echo $id_paciente ?>">
        <?php
                $sqlBuscaPacientes = "SELECT * FROM tb_pacientes";
                $listaDePacientes = mysqli_query($conexao , $sqlBuscaPacientes);

                while($paciente = mysqli_fetch_assoc($listaDePacientes)){
                    echo "<option value='{$paciente['id']}'>";
                    echo $paciente['nome'];
                    echo "</option>";
                }
             ?>
        </select>
    </p>
    <p>
        <button type="submit" class=" btn btn-success">Salvar</button>
    </p>
</form>

<?php include "../includes/rodape.php"?>