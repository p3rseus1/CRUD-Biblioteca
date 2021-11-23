<h1>Livro listar</h1>

<?php

$sql = "SELECT * FROM livro LEFT JOIN categoria ON livro.categoria_id_categoria = categoria.id_categoria ORDER BY id_livro";

$res = $conn->query($sql) or die($conn->error);

print "<p>Encontrou <b>$res->num_rows</b> resultado(s)</p>";

if ($res->num_rows > 0) {
    print "<table class='table table-striped'>";
    print "<tr>";
    print "<th>#</th>";
    print "<th>Categoria</th>";
    print "<th>Titulo</th>";
    print "<th>Autor</th>";
    print "<th>Editora</th>";
    print "<th>Edição</th>";
    print "<th>Ano do livro</th>";
    print "<th>Localidade</th>";
    print "<th>ISBN</th>";
    print "<th>Ações</th>";
    print "</tr>";

    while ($row = $res->fetch_object()) {
        print "<tr>";
        print "<td>$row->id_livro</td>";
        if ($row->nome_categoria != "") {
            print "<td>$row->nome_categoria</td>";
        } else {
            print "<td>N/A</td>";
        }
        print "<td>$row->titulo_livro</td>";
        print "<td>$row->autor_livro</td>";
        if ($row->editora_livro != "") {
            print "<td>$row->editora_livro</td>";
        } else {
            print "<td>N/A</td>";
        }

        if ($row->edicao_livro != "") {
            print "<td>$row->edicao_livro</td>";
        } else {
            print "<td>N/A</td>";
        }
        print "<td>$row->ano_livro</td>";
        print "<td>$row->localidade_livro</td>";

        if ($row->isbn_livro != "") {
            print "<td>$row->isbn_livro</td>";
        } else {
            print "<td>N/A</td>";
        }
        print "<td>
                    <button class='btn btn-success' onclick=\"location.href='?page=livro-editar&id_livro=" . $row->id_livro . "';\">Editar</button>
                    <button class='btn btn-danger' onclick=\"if(confirm('Tem certeza que deseja excluir esse livro?')){location.href='?page=livro-salvar&acao=excluir&id_livro=" . $row->id_livro . "'}else{false;};\">Excluir</button>
               </td>";
        print "</tr>";
    }

    print "</table>";
} else {
    print "<div class='alert alert-danger'>Não foi encontrado nenhum registro.</div>";
}
?>