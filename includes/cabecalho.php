<?php
session_start();
if(!isset($_SESSION['logado'])){
    header('Location: ../index.php?mensagem=login');
}
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>APP Consultas</title>
    <link href="../css/estilo.css" rel="stylesheet">
    <link href="../bootstrap5/css/bootstrap.css" rel="stylesheet">
</head>
<body class="bg-dark">
    <main class="container">
        <header>
            <h1>APP Consultas</h1>
            <hr>
        </header>
        <nav>
            <a href="../medicos/medicos-listar.php" class="btn btn-primary"><img src="../img/medico.png">Cadastro de médicos</a>
            <a href="../pacientes/pacientes-listar.php" class="btn btn-danger"><img src="../img/paciente.png">Cadastro de pacientes</a>
            <a href="../agenda/agenda-listar.php" class=" btn btn-success"><img src="../img/agenda.png">Agendamento de consultas</a>
        </nav>