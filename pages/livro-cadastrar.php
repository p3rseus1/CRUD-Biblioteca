<h1>Livro cadastrar</h1>


<form action="?page=livro-salvar" method="POST">
    <input type="hidden" name="acao" value="cadastrar">
    <div class="mb-3">
        <label for="">Categoria do livro:</label>
        <select name="categoria_id_categoria" class='form-control' required>

            <?php
            $sql = "SELECT * FROM categoria";

            $res = $conn->query($sql) or die($conn->error);

            if ($res->num_rows > 0) {
                print "<option value=''>Selecione uma categoria</option>";

                while ($row = $res->fetch_object()) {
                    print "<option value='" . $row->id_categoria . "'>" . $row->nome_categoria . "</option>";
                }
            } else {
                print "<option value=''>Não há categorias cadastradas!</option>";
            }

            ?>

        </select>
    </div>
    <div class="mb-3">
        <label for="">Título</label>
        <input type="text" name="titulo_livro" class="form-control">
    </div>
    <div class="mb-3">
        <label for="">Autor</label>
        <input type="text" name="autor_livro" class="form-control">
    </div>
    <div class="mb-3">
        <label for="">Editora</label>
        <input type="text" name="editora_livro" class="form-control">
    </div>
    <div class="mb-3">
        <label for="">Edição</label>
        <input type="text" name="edicao_livro" class="form-control">
    </div>
    <div class="mb-3">
        <label for="">Ano</label>
        <input type="number" min="0" max="2021" step="1" name="ano_livro" class="form-control">
    </div>
    <div class="mb-3">
        <label for="">Localidade</label>
        <input type="text" name="localidade_livro" class="form-control">
    </div>
    <div class="mb-3">
        <label for="">ISBN</label>
        <input type="number" name="isbn_livro" class="form-control">
    </div>
    <div class="mb-3">
        <button type="submit" class="btn btn-success">Enviar</button>
    </div>
</form>