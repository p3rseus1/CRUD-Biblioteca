<h1>Reserva cadastrar</h1>

<form action="?page=reserva-salvar" method="POST">
    <input type="hidden" name="acao" value="cadastrar">
    <div class="mb-3">
        <label for="">Aluno: </label>
        <select name="aluno_id_aluno" class="form-control" required>

            <?php

            $sql_aluno = "SELECT * FROM aluno";
            $res_aluno = $conn->query($sql_aluno) or die($conn->error);

            if ($res_aluno->num_rows > 0) {
                print "<option value=''>Selecione o aluno</option>";

                while ($row_aluno = $res_aluno->fetch_object()) {
                    print "<option value='" . $row_aluno->id_aluno . "'>" . $row_aluno->nome_aluno . "</option>";
                }
            } else {
                print "<option value=''>Não há alunos cadastrados!</option>";
            }


            ?>
        </select>
    </div>
    <div class="mb-3">
        <label for="">Livro: </label>
        <select name="livro_id_livro" class="form-control" required>

            <?php

            $sql_livro = "SELECT * FROM livro";
            $res_livro = $conn->query($sql_livro) or die($conn->error);

            if ($res_livro->num_rows > 0) {
                print "<option value=''>Selecione o livro</option>";
                while ($row_livro = $res_livro->fetch_object()) {
                    print "<option value='" . $row_livro->id_livro . "'>" . $row_livro->titulo_livro . "</option>";
                }
            } else {
                print "<option value=''>Não há livros cadastrados!</option>";
            }


            ?>
        </select>
    </div>
    <div class="mb-3">
        <label for="">Atendente: </label>
        <select name="atendente_id_atendente" class="form-control" required>

            <?php

            $sql_atendente = "SELECT * FROM atendente";
            $res_atendente = $conn->query($sql_atendente) or die($conn->error);

            if ($res_atendente->num_rows > 0) {
                print "<option value=''>Selecione o atendente</option>";
                while ($row_atendente = $res_atendente->fetch_object()) {
                    print "<option value='" . $row_atendente->id_atendente . "'>" . $row_atendente->nome_atendente . "</option>";
                }
            } else {
                print "<option value=''>Não há atendentes cadastrados!</option>";
            }

            ?>
        </select>
    </div>

    <div class="mb-3">
        <label for="">Data do empréstimo:</label>
        <input type="date" name="emprestimo" class="form-control" required>
    </div>
    <div class="mb-3">
        <label for="">Data da devolução:</label>
        <input type="date" name="devolucao" class="form-control" required>
    </div>
    <div class="mb-3">
        <button class="btn btn-success">Enviar</button>
    </div>
</form>