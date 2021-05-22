<?php include "../includes/cabecalho.php"?>

<?php include "../includes/conexao.php";
$sqlBusca = "SELECT  
                tb_agenda.id,
                tb_agenda.data,
                tb_agenda.hora,
                tb_medicos.nome as 'nome_medico',
                tb_agenda.sala,
                tb_pacientes.nome as 'nome_paciente'
                from tb_agenda
                inner join tb_pacientes on tb_agenda.id_paciente = tb_pacientes.id
                inner join tb_medicos on tb_agenda.id_medico = tb_medicos.id";     
$listaDeAgenda = mysqli_query($conexao , $sqlBusca);
?><hr>

<?php if(isset($_GET['mensagem'])){
        if($_GET['mensagem'] == 'cadastrado'){
        ?> 
        <div class="alert alert-success">
            Cadastrado com sucesso!
        </div>
        <?php
        }

        if($_GET['mensagem'] == 'excluido'){
            ?>
        <div class="alert alert-success">
        Excluído com sucesso!
        </div>
        <?php
    }
}
    ?>

<a href="agenda-formulario-inserir.php" class=" btn btn-success">Nova Consulta</a>
<table class="table table-hover">
    <tr>
        <th>ID</th>
        <th>Data</th>
        <th>Hora</th>
        <th>Médico</th>
        <th>Sala</th>
        <th>Paciente</th>
        <th>Ações</th>
    </tr>

<?php 
while($agenda = mysqli_fetch_assoc($listaDeAgenda)){
    echo "<tr>";
    echo "<td>{$agenda['id']}</td>";
    echo "<td>{$agenda['data']}</td>";
    echo "<td>{$agenda['hora']}</td>";
    echo "<td>{$agenda['nome_medico']}</td>";
    echo "<td>{$agenda['sala']}</td>";
    echo "<td>{$agenda['nome_paciente']}</td>";
    echo "<td> <a type='button' class='btn btn-outline-success' href='agenda-formulario-alterar.php?id_agenda={$agenda['id']}'>Alterar <a type='button' class='btn btn-outline-success' href='agenda-excluir.php?id_agenda={$agenda['id']}'> Excluir</td>";
    echo "</tr>";
}?>
</table>


<?php include "../includes/rodape.php"?>