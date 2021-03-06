<?php include "../includes/cabecalho.php"; ?>
<hr>
<?php if(isset($_GET['mensagem'])){
        if($_GET['mensagem'] == 'cadastrado'){
        ?> 
        <div class="alert alert-primary">
            Cadastrado com sucesso!
        </div>
        <?php
        }

        if($_GET['mensagem'] == 'excluido'){
            ?>
        <div class="alert alert-primary">
        Excluído com sucesso!
        </div>
        <?php
    }
}
    ?>
<p>
    <a href="medicos-formulario-inserir.php" class="btn btn-primary" ><i class="bi-plus-circle"></i>Novo médico</a>
</p>

<?php

include "../includes/conexao.php";
$sqlBusca = "SELECT * FROM tb_medicos;";
$listaDeMedicos = mysqli_query($conexao , $sqlBusca);
?>
<table class="table table-hover">
    <tr>
        <th>Foto</th>
        <th>ID</th>
        <th>Nome</th>
        <th>Telefone</th>
        <th>CRM</th>
        <th>Especialidade</th>
        <th>Ações</th>
    </tr>
    <?php
    while($medico = mysqli_fetch_assoc($listaDeMedicos)){
        echo "<tr>";
        echo "<td><img src='{$medico['foto']}'></td>";
        echo "<td>{$medico['id']}</td>";
        echo "<td>{$medico['nome']}</td>";
        echo "<td>{$medico['telefone']}</td>";
        echo "<td>{$medico['crm']}</td>"; 
        echo "<td>{$medico['especialidade']}</td>";
        echo "<td><a type='button' class='btn btn-outline-primary' href='medicos-formulario-alterar.php?id_medico={$medico['id']}'>Alterar</a> <a type='button' class='btn btn-outline-primary' href='medicos-excluir.php?id_medico={$medico['id']}'> Excluir</td>";
        echo "</tr>";
    }
    ?>
</table>


<?php include "../includes/rodape.php"; ?>