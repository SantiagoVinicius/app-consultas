<?php 
include "../includes/conexao.php";
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


$sqlInserir = "INSERT INTO tb_medicos(nome, telefone, crm, especialidade, foto) values('{$nome}' , '{$telefone}' , '{$crm}' , '{$especialidade}' , '{$foto}');";

$resultado = mysqli_query($conexao, $sqlInserir);

if($resultado){
    header('Location:medicos-listar.php?mensagem=cadastrado');
}else{
    echo "Algum erro aconteceu";
}
?>