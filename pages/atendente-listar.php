<h1>Atendente listar</h1>

<?php

$sql = "SELECT * FROM atendente AS a LEFT JOIN biblioteca AS b ON a.biblioteca_id_biblioteca = b.id_biblioteca ORDER BY id_atendente";

$res = $conn->query($sql) or die($conn->error);

$qtd_linhas = $res->num_rows;

print "<p>Encontrou <b>$qtd_linhas</b> resultado(s)</p>";

if ($qtd_linhas > 0) {
    print "<table class='table table-striped'>";
    print "<tr>";
    print "<th>#</th>";
    print "<th>Nome da biblioteca</th>";
    print "<th>Nome do atendente</th>";
    print "<th>Ações</th>";
    print "</tr>";
    while ($row = $res->fetch_object()) {
        print "<tr>";
        print "<td>" . $row->id_atendente . "</td>";
        if ($row->nome_biblioteca != "") {
            print "<td>" . $row->nome_biblioteca . "</td>";
        } else {
            print "<td>N/A</td>";
        }
        print "<td>" . $row->nome_atendente . "</td>";
        print "<td><button class='btn btn-success' onclick=\"location.href='?page=atendente-editar&id_atendente=" . $row->id_atendente . "';\">Editar</button>
                   <button class='btn btn-danger' onclick=\"if(confirm('Tem certeza que deseja apagar esse atendente?')){location.href='?page=atendente-salvar&acao=excluir&id_atendente=" . $row->id_atendente . "';}else{false;}\">Excluir</button>
               </td>";
        print "</tr>";
    }
} else {
    print "<div class='alert alert-danger'>Não foi encontrado nenhum registro.</div>";
}
