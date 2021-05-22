<?php
include "../includes/conexao.php";

$id_paciente = $_POST['id_paciente'];
$nome = $_POST['nome'];
$telefone = $_POST['telefone'];
$data_nascimento = $_POST['data_nascimento'];

$convenio = "";
if(isset($_POST['convenio'])){
    $convenio = $_POST['convenio'];
}

$diagnostico = $_POST['diagnostico'];

$dir = "imagens/";
$arquivo = $_FILES['arquivo'];
$foto = $dir . $arquivo['name'];

if(move_uploaded_file($arquivo['tmp_name'] , "$dir/" . $arquivo['name'])){
    echo "Arquivo enviado com sucesso";
}else{
    echo "Arquivo deu erro";
}

$sqlAlterar = "UPDATE tb_pacientes SET
                nome = '{$nome}' ,
                telefone = '{$telefone}' ,
                data_nascimento = '{$data_nascimento}' ,
                convenio = '{$convenio}' ,
                diagnostico = '{$diagnostico}' , 
                foto = '{$foto}'
                WHERE id = {$id_paciente}
                ;";

$resultado = mysqli_query($conexao, $sqlAlterar);

if($resultado){
    header('Location:pacientes-listar.php');
}else{
    echo "Algum erro aconteceu";
}
?>