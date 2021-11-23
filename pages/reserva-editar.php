<h1>Reserva editar</h1>

<?php
$sql = "SELECT * FROM reserva WHERE id_reserva = " . $_REQUEST['id_reserva'];
$res = $conn->query($sql) or die($conn->error);
$row = $res->fetch_object();
?>

<form action="?page=reserva-salvar" method="POST">
    <input type="hidden" name="acao" value="editar">
    <input type="hidden" name="id_reserva" value="<?php print $row->id_reserva; ?>">
    <div class="mb-3">
        <label for="">Aluno: </label>
        <select name="aluno_id_aluno" class="form-control">
            <option value="">Selecione o aluno</option>
            <?php

            $sql_1 = "SELECT * FROM aluno";
            $res_1 = $conn->query($sql_1) or die($conn->error);

            while ($row_1 = $res_1->fetch_object()) {
                if ($row->aluno_id_aluno == $row_1->id_aluno) {
                    print "<option value='" . $row->aluno_id_aluno . "' selected>" . $row_1->nome_aluno . "</option>";
                } else {
                    print "<option value='" . $row_1->id_aluno . "'>" . $row_1->nome_aluno . "</option>";
                }
            }
            ?>
        </select>
    </div>
    <div class="mb-3">
        <label for="">Livro: </label>
        <select name="livro_id_livro" class="form-control">
            <option value="">Selecione o livro</option>
            <?php

            $sql_2 = "SELECT * FROM livro";
            $res_2 = $conn->query($sql_2) or die($conn->error);

            while ($row_2 = $res_2->fetch_object()) {

                if ($row->livro_id_livro == $row_2->id_livro) {
                    print "<option value='" . $row->livro_id_livro . "' selected>" . $row_2->titulo_livro . "</option>";
                } else {
                    print "<option value='" . $row_2->id_livro . "'>" . $row_2->titulo_livro . "</option>";
                }
            }
            ?>
        </select>
    </div>
    <div class="mb-3">
        <label for="">Atendente: </label>
        <select name="atendente_id_atendente" class="form-control">
            <option value="">Selecione o atendente</option>
            <?php

            $sql_3 = "SELECT * FROM atendente";
            $res_3 = $conn->query($sql_3) or die($conn->error);

            while ($row_3 = $res_3->fetch_object()) {

                if ($row->atendente_id_atendente == $row_3->id_atendente) {
                    print "<option value='" . $row->atendente_id_atendente . "' selected>" . $row_3->nome_atendente . "</option>";
                } else {
                    print "<option value='" . $row_3->id_atendente . "'>" . $row_3->nome_atendente . "</option>";
                }
            }
            ?>
        </select>
    </div>
    <div class="mb-3">
        <label for="">Data do empréstimo:</label>
        <input type="date" name="emprestimo" class="form-control" value="<?php print $row->emprestimo; ?>" required>
    </div>
    <div class="mb-3">
        <label for="">Data da devolução:</label>
        <input type="date" name="devolucao" class="form-control" value="<?php print $row->devolucao; ?>" required>
    </div>
    <div class="mb-3">
        <button class="btn btn-success">Enviar</button>
    </div>
</form>