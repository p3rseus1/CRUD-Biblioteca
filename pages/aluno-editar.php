<h1>Aluno editar</h1>
<?php

$sql = "SELECT * FROM aluno WHERE id_aluno = " . $_REQUEST['id_aluno'];

$res = $conn->query($sql) or die($conn->error);

$row = $res->fetch_object();

?>

<form action="?page=aluno-salvar" method="POST">
    <input type="hidden" name="acao" value="editar">
    <input type="hidden" name="id_aluno" value="<?php print $row->id_aluno; ?>">
    <div class="mb-3">
        <label for="">Nome do aluno: </label>
        <input type="text" name="nome_aluno" class="form-control" value="<?php print $row->nome_aluno; ?>">
    </div>
    <div class="mb-3">
        <label for="">Endereço do aluno: </label>
        <input type="text" name="end_aluno" class="form-control" value="<?php print $row->end_aluno; ?>">
    </div>
    <div class="mb-3">
        <label for="">Email do aluno: </label>
        <input type="email" name="email_aluno" class="form-control" value="<?php print $row->email_aluno; ?>">
    </div>
    <div class="mb-3">
        <label for="">Número do aluno: </label>
        <input type="tel" name="fone_aluno" class="form-control" value="<?php print $row->fone_aluno; ?>">
    </div>
    <div class="mb-3">
        <label for="">Data de nascimento do aluno: </label>
        <input type="date" name="data_nasc_aluno" class="form-control" value="<?php print $row->data_nasc_aluno; ?>">
    </div>
    <div class="mb-3">
        <legend>Gênero do aluno:</legend>

        <?php

        if ($row->genero_aluno == 'Feminino') {
            print '<label for="feminino" class="form-check-label me-2">
                       <input type="radio" id="feminino" name="genero_aluno" value="Feminino" class="form-check-input" checked> Feminino
                   </label>
                   <label for="masculino" class="form-check-label me-2">
                       <input type="radio" id="masculino" name="genero_aluno" value="Masculino" class="form-check-input"> Masculino
                   </label>
                   <label for="outros" class="form-check-label me-2">
                       <input type="radio" id="outros" name="genero_aluno" value="Outros" class="form-check-input"> Outros
                   </label>';
        } elseif ($row->genero_aluno == 'Masculino') {
            print '<label for="feminino" class="form-check-label me-2">
                       <input type="radio" id="feminino" name="genero_aluno" value="Feminino" class="form-check-input"> Feminino
                   </label>
                   <label for="masculino" class="form-check-label me-2">
                       <input type="radio" id="masculino" name="genero_aluno" value="Masculino" class="form-check-input"checked> Masculino
                   </label>
                   <label for="outros" class="form-check-label me-2">
                       <input type="radio" id="outros" name="genero_aluno" value="Outros" class="form-check-input"> Outros
                   </label>';
        } elseif ($row->genero_aluno == 'Outros') {
            print '<label for="feminino" class="form-check-label me-2">
                       <input type="radio" id="feminino" name="genero_aluno" value="Feminino" class="form-check-input"> Feminino
                   </label>
                   <label for="masculino" class="form-check-label me-2">
                       <input type="radio" id="masculino" name="genero_aluno" value="Masculino" class="form-check-input"> Masculino
                   </label>
                   <label for="outros" class="form-check-label me-2">
                       <input type="radio" id="Outros" name="genero_aluno" value="Outros" class="form-check-input" checked> Outros
                   </label>';
        } else {
            print '<label for="feminino" class="form-check-label me-2">
                       <input type="radio" id="feminino" name="genero_aluno" value="Feminino" class="form-check-input"> Feminino
                   </label>
                   <label for="masculino" class="form-check-label me-2">
                       <input type="radio" id="masculino" name="genero_aluno" value="Masculino" class="form-check-input"> Masculino
                   </label>
                   <label for="outros" class="form-check-label me-2">
                       <input type="radio" id="Outros" name="genero_aluno" value="Outros" class="form-check-input"> Outros
                   </label>';
        }

        ?>

    </div>
    <div class="mb-3">
        <button type="submit" class="btn btn-success">Enviar</button>
    </div>
</form>