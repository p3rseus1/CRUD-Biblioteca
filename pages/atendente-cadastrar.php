<h1>Atendente cadastrar</h1>

<form action="?page=atendente-salvar" method="POST">
    <input type="hidden" name="acao" value="cadastrar">
    <div class="mb-3">
        <label for="">Nome da biblioteca:</label>
        <select name="biblioteca_id_biblioteca" class="form-control">
            <?php

            $sql = "SELECT * FROM biblioteca";

            $res = $conn->query($sql) or die($conn->error);

            if ($res->num_rows > 0) {
                while ($row = $res->fetch_object()) {
                    print "<option value='" . $row->id_biblioteca . "'>" . $row->nome_biblioteca . "</option>";
                }
            } else {
                print "<option>Não há biblioteca cadastrada!</option>";
            }

            ?>
        </select>
    </div>
    <div class="mb-3">
        <label for="">Nome do Atendente:</label>
        <input type="text" name="nome_atendente" class="form-control">
    </div>
    <div class="mb-3">
        <button type="submit" class="btn btn-success">Enviar</button>
    </div>
</form>