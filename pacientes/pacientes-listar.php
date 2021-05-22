<?php include "../includes/cabecalho.php"; ?>

<?php
include "../includes/conexao.php";

$sqlBusca = "SELECT * FROM tb_pacientes";

$listaDePacientes = mysqli_query($conexao, $sqlBusca);
?>
<p>
<hr>
<?php if(isset($_GET['mensagem'])){
        if($_GET['mensagem'] == 'cadastrado'){
        ?> 
        <div class="alert alert-danger">
            Cadastrado com sucesso!
        </div>
        <?php
        }

        if($_GET['mensagem'] == 'excluido'){
            ?>
        <div class="alert alert-danger">
        Excluído com sucesso!
        </div>
        <?php
    }
}
    ?>
<a href="pacientes-formulario-inserir.php" class="btn btn-danger">Novo Paciente</a>
</p>

<table class="table table-hover">
    <tr>
        <td>Foto</td>
        <td>ID</td>
        <td>Nome</td>
        <td>Telefone</td>
        <td>Data de nascimento</td>
        <td>Convênio</td>
        <td>Ações</td>
    </tr>
    <?php
    while($paciente = mysqli_fetch_assoc($listaDePacientes)){
        echo "<tr>";
        echo "<td><img src='{$paciente['foto']}'></td>";
        echo "<td>{$paciente['id']}</td>";
        echo "<td>{$paciente['nome']}</td>";
        echo "<td>{$paciente['telefone']}</td>";

        $dataBrasil = date('d/m/Y' , strtotime($paciente['data_nascimento']));
        echo "<td>{$dataBrasil}</td>";

        echo "<td>{$paciente['convenio']}</td>";
        echo "<td><a type='button' class='btn btn-outline-danger' href='pacientes-formulario-alterar.php?id={$paciente['id']}'>Alterar</a>  ";
        echo "<a type='button' class='btn btn-outline-danger' href='pacientes-excluir.php?id={$paciente['id']}'>Excluir</a></td>";
        echo "</tr>";
    }
    ?>
</table>




<?php include "../includes/rodape.php"; ?>