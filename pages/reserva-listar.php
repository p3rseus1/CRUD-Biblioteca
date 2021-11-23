<h1>Reserva listar</h1>

<?php

$sql = "SELECT * FROM reserva AS r LEFT JOIN aluno AS alu ON r.aluno_id_aluno = alu.id_aluno LEFT JOIN livro AS l ON r.livro_id_livro = l.id_livro LEFT JOIN atendente AS ate ON r.atendente_id_atendente = ate.id_atendente ORDER BY id_reserva; ";

$res = $conn->query($sql) or die($conn->error);

print "<p>Encontrou <b>$res->num_rows</b> resultado(s)</p>";

if ($res->num_rows > 0) {
    print "<table class='table table-striped'>";
    print "<tr>";
    print "<th>#</th>";
    print "<th>Nome do aluno</th>";
    print "<th>Título do livro</th>";
    print "<th>Nome do atendente</th>";
    print "<th>Data do empréstimo</th>";
    print "<th>Data da devolução</th>";
    print "<th>Ações</th>";
    print "</tr>";
    while ($row = $res->fetch_object()) {
        print "<tr>";
        print "<td>$row->id_reserva</td>";

        if ($row->nome_aluno != "") {
            print "<td>$row->nome_aluno</td>";
        } else {
            print "<td>N/A</td>";
        }

        if ($row->titulo_livro != "") {
            print "<td>$row->titulo_livro</td>";;
        } else {
            print "<td>N/A</td>";
        }

        if ($row->nome_atendente != "") {
            print "<td>$row->nome_atendente</td>";
        } else {
            print "<td>N/A</td>";
        }

        print "<td>$row->emprestimo</td>";
        print "<td>$row->devolucao</td>";
        print "<td>
                <button class='btn btn-success' onclick=\"location.href='?page=reserva-editar&id_reserva=" . $row->id_reserva . "';\">Editar</button>
                <button class='btn btn-danger' onclick=\"if(confirm('Tem certeza que deseja excluir essa reserva?')){location.href='?page=reserva-salvar&acao=excluir&id_reserva=" . $row->id_reserva . "'}else{false;}\">Excluir</button>
               </td>";
        print "</tr>";
    }
} else {
    print "<div class='alert alert-danger'>Não foi encontrado nenhum registro.</div>";
}
?>