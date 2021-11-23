<h1>Livro editar</h1>

<?php

$sql_1 = "SELECT * FROM livro WHERE id_livro = ".$_REQUEST['id_livro'];

$res_1 = $conn->query($sql_1) or die($conn->error);

$row_1 = $res_1->fetch_object();

?>

<form action="?page=livro-salvar" method="POST">
    <input type="hidden" name="acao" value="editar">
    <input type="hidden" name="id_livro" value="<?php print $row_1->id_livro ?>">
    <div class="mb-3">
        <label for="">Categoria do livro:</label>
        <select name="categoria_id_categoria" class='form-control' required>

            <option value="">Selecione uma categoria</option>

            <?php
            $sql = "SELECT * FROM categoria";

            $res = $conn->query($sql) or die($conn->error);

            while ($row = $res->fetch_object()) {
                if ($row_1->categoria_id_categoria == $row->id_categoria) {
                    print "<option value='".$row_1->categoria_id_categoria."' selected>".$row->nome_categoria."</option>";
                } else {
                    print "<option value='".$row->id_categoria."'>".$row->nome_categoria."</option>";
                }
            }

            ?>

        </select>
    </div>
    <div class="mb-3">
        <label for="">Título</label>
        <input type="text" name="titulo_livro" class="form-control" value="<?php print $row_1->titulo_livro ?>">
    </div>
    <div class="mb-3">
        <label for="">Autor</label>
        <input type="text" name="autor_livro" class="form-control" value="<?php print $row_1->autor_livro ?>">
    </div>
    <div class="mb-3">
        <label for="">Editora</label>
        <input type="text" name="editora_livro" class="form-control" value="<?php print $row_1->editora_livro ?>">
    </div>
    <div class="mb-3">
        <label for="">Edição</label>
        <input type="text" name="edicao_livro" class="form-control" value="<?php print $row_1->edicao_livro ?>">
    </div>
    <div class="mb-3">
        <label for="">Ano</label>
        <input type="number" min="0" max="2021" name="ano_livro" class="form-control"
               value="<?php print $row_1->ano_livro ?>">
    </div>
    <div class="mb-3">
        <label for="">Localidade</label>
        <input type="text" name="localidade_livro" class="form-control" value="<?php print $row_1->localidade_livro ?>">
    </div>
    <div class="mb-3">
        <label for="">ISBN</label>
        <input type="number" name="isbn_livro" class="form-control" value="<?php print $row_1->isbn_livro ?>">
    </div>
    <div class="mb-3">
        <button type="submit" class="btn btn-success">Enviar</button>
    </div>
</form>