<h1>Biblioteca listar</h1>

<?php
$sql = "SELECT * FROM biblioteca ORDER BY id_biblioteca";

$res = $conn->query($sql) or die($conn->error);

$qtd = $res->num_rows;

print "<p>Encontrou <b>$qtd</b> resultado(s)</p>";

if ($qtd > 0) {

    print "<table class='table table-striped'>";
    print "<tr>";
    print "<th>#</th>";
    print "<th>Nome da Biblioteca</th>";
    print "<th>Endereço</th>";
    print "<th>Ações</th>";
    print "</tr>";

    while ($row = $res->fetch_object()) {
        print "<tr>";

        print "<td>" . $row->id_biblioteca . "</td>";
        print "<td>" . $row->nome_biblioteca . "</td>";
        print "<td>" . $row->end_biblioteca . "</td>";

        print "<td>
                   <button class='btn btn-success' onclick=\"location.href='?page=biblioteca-editar&id_biblioteca=" . $row->id_biblioteca . "';\">Editar</button>
                   <button class='btn btn-danger' onclick=\" if(confirm('Tem certeza que deseja excluir essa biblioteca?')){location.href='?page=biblioteca-salvar&acao=excluir&id_biblioteca=" . $row->id_biblioteca . "';} else {false;} \">Excluir</button>  
        </td>";
        print "</tr>";
    }
    print "</table>";
} else {
    print "<div class='alert alert-danger'>Não foi encontrado nenhum registro.</div>";
}

?>