<?php include "../includes/cabecalho.php" ; ?>

<form name="formulario-inserir-medicos" method="post" action="medicos-inserir.php">
    <p>
        <label>Nome: </label><br><input class="btn btn-primary" name="nome">
    </p>
    <p>
        <label>Telefone: </label><br><input class="btn btn-primary" name="telefone">
    </p>
    <p>
        <label>CRM: </label><br><input class="btn btn-primary" name="crm">
    </p>
    <p>
        <label>Especialidade:</label>
        <select class="btn btn-primary" name="especialidade">
            <option value="Cardiologista">Cardiologista</option>
            <option value="Pediatra">Pediatra</option>
            <option value="Ortopedista">Ortopedista</option>
            <option value="Geneticista">Geneticista</option>
        </select>
        </p>
        <p>
            <button type="subtmit" class="btn btn-primary">Salvar</button>
        </p>
    </form>
<?php include "../includes/rodape.php" ; ?>