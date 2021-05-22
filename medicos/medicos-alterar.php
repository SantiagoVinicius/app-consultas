<?php
include "../includes/conexao.php";

$id_medico = $_POST['id_medico'];
$nome = $_POST['nome'];
$telefone = $_POST['telefone'];
$crm = $_POST['crm'];
$especialidade = $_POST['especialidade'];

$dir = "imagens/";
$arquivo = $_FILES['arquivo'];
$foto = $dir . $arquivo['name'];

if(move_uploaded_file($arquivo['tmp_name'] , "$dir/" . $arquivo['name'])){
    echo "Arquivo enviado com sucesso";
}else{
    echo "Arquivo deu erro";
}

$sqlAlterar = "UPDATE tb_medicos set
                nome = '{$nome}' ,
                telefone = '{$telefone}' , 
                crm = '{$crm}' ,
                especialidade = '{$especialidade}' , 
                foto = '{$foto}'
                WHERE id = {$id_medico}";
$resultado = mysqli_query($conexao , $sqlAlterar);

if($resultado){
    header('Location:medicos-listar.php');
}else{
    echo "Ocorreu algum erro";
}
?>