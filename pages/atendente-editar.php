<h1>Atendente editar</h1>

<?php
$sql_1 = "SELECT * FROM atendente WHERE id_atendente = " . $_REQUEST['id_atendente'];

$res_1 = $conn->query($sql_1) or die($conn->error);

$row_1 = $res_1->fetch_object();
?>

<form action="?page=atendente-salvar" method="POST">
    <input type="hidden" name="acao" value="editar">
    <input type="hidden" name="id_atendente" value="<?php print $row_1->id_atendente ?>">
    <div class="mb-3">
        <label for="">Nome da biblioteca:</label>
        <select name="biblioteca_id_biblioteca" class="form-control">
            <?php

            $sql = "SELECT * FROM biblioteca";

            $res = $conn->query($sql) or die($conn->error);

            while ($row = $res->fetch_object()) {
                if ($row_1->biblioteca_id_biblioteca == $row->id_biblioteca) {
                    print "<option value='$row->id_biblioteca' selected>$row->nome_biblioteca</option>";
                } else {
                    print "<option value='" . $row->id_biblioteca . "'>" . $row->nome_biblioteca . "</option>";
                }
            }

            ?>
        </select>
    </div>
    <div class="mb-3">
        <label for="">Nome do Atendente:</label>
        <input type="text" name="nome_atendente" class="form-control" value="<?php print $row_1->nome_atendente; ?>">
    </div>
    <div class="mb-3">
        <button type="submit" class="btn btn-success">Enviar</button>
    </div>
</form>