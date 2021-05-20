<?php 
$data = $_POST['data'];
$hora = $_POST['hora'];
$id_medico = $_POST['id_medico'];
$sala = $_POST['sala'];
$id_paciente = $_POST['id_paciente'];


include "../includes/conexao.php";
$sqlInserir = "INSERT INTO tb_agenda(data, hora, id_medico, sala, id_paciente) values('{$data}' , '{$hora}' , '{$id_medico}' , '{$sala}' , '{$id_paciente}');";

$resultado = mysqli_query($conexao, $sqlInserir);

if($resultado){
    echo "Consulta marcada com sucesso! <br>";
    echo "<a href='agenda-listar.php'>voltar</a>";
}else{
    echo "Algum erro aconteceu";
}
?>