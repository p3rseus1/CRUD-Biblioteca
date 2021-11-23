<h1>Categoria listar</h1>

<?php

$sql = "SELECT * FROM categoria ORDER BY id_categoria";

$res = $conn->query($sql) or die($conn->error);

$qtd_linha = $res->num_rows;

print "<p>Encontrou <b>$qtd_linha</b> resultado(s)</p>";

if ($qtd_linha > 0) {
    print "<table class='table table-striped'>";

    print "<tr>";
    print "<th>#</th>";
    print "<th>Nome da categoria</th>";
    print "<th>Ações</th>";
    print "</tr>";

    while ($row = $res->fetch_object()) {
        print "<tr>";
        print "<td>" . $row->id_categoria . "</td>";
        print "<td>" . $row->nome_categoria . "</td>";
        print "<td><button class='btn btn-success' onclick=\"location.href='?page=categoria-editar&id_categoria=" . $row->id_categoria . "';\">Editar</button>
        <button class='btn btn-danger' onclick=\"if(confirm('Tem certeza que deseja apagar essa categoria?')){location.href='?page=categoria-salvar&acao=excluir&id_categoria=" . $row->id_categoria . "';}else{false;}\">Excluir</button></td>";
        print "</tr>";
    }

    print "</table>";
} else {
    print "<div class='alert alert-danger'>Não foi encontrado nenhum registro.</div>";
}
