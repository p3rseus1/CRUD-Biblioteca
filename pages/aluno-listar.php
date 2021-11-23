<h1>Aluno listar</h1>

<?php
$sql = "SELECT * FROM aluno ORDER BY id_aluno";

$res = $conn->query($sql) or die($conn->error);

print "<p>Encontrou <b>$res->num_rows</b> resultado(s)</p>";

if ($res->num_rows > 0) {
    print "<table class='table table-striped'>";
    print "<tr>";
    print "<th>#</th>";
    print "<th>Nome do aluno</th>";
    print "<th>Endereço</th>";
    print "<th>Email</th>";
    print "<th>Telefone</th>";
    print "<th>Data de nascimento</th>";
    print "<th>Gênero</th>";
    print "<th>Ações</th>";
    print "</tr>";

    while ($row = $res->fetch_object()) {
        print "<tr>";
        print "<td>" . $row->id_aluno . "</td>";
        print "<td>" . $row->nome_aluno . "</td>";
        print "<td>" . $row->end_aluno . "</td>";
        print "<td>" . $row->email_aluno . "</td>";
        print "<td>" . $row->fone_aluno . "</td>";

        if ($row->data_nasc_aluno != "0000-00-00") {
            print "<td>" . $row->data_nasc_aluno . "</td>";
        } else {
            print "<td>N/A</td>"; // O N/A seria para No Answer
        }
        if ($row->genero_aluno != "") {
            print "<td>" . $row->genero_aluno . "</td>";
        } else {
            print "<td>N/A</td>"; // O N/A seria para No Answer
        }
        print "<td>
                    <button class='btn btn-success' onclick=\"location.href='?page=aluno-editar&id_aluno=" . $row->id_aluno . "';\">Editar</button>
                    <button class='btn btn-danger' onclick=\"if(confirm('Tem certeza que deseja excluir o aluno?')){location.href='?page=aluno-salvar&acao=excluir&id_aluno=" . $row->id_aluno . "';}else{false;}\">Excluir</button>
               </td>";
        print "</tr>";
    }

    print "</table>";
} else {
    print "<div class='alert alert-danger'>Não foi encontrado nenhum registro.</div>";
}
