<?php
switch ($_REQUEST['acao']) {
    case 'cadastrar':
        $nome = $_POST['nome_atendente'];
        $id_biblioteca = $_POST['biblioteca_id_biblioteca'];

        $sql = "INSERT INTO atendente (biblioteca_id_biblioteca, nome_atendente) VALUES ({$id_biblioteca}, '{$nome}')";

        $res = $conn->query($sql) or die($conn->error);

        if ($res == true) {
            print "<script>alert('Atendente cadastrado com sucesso!')</script>";
            print "<script>location.href='?page=atendente-listar'</script>";
        } else {
            print "<script>alert('Algo de errado não está certo. Contate o administador!')</script>";
            print "<script>location.href='?page=atendente-listar'</script>";
        }

        break;

    case 'editar':
        $nome = $_POST['nome_atendente'];
        $id_biblioteca = $_POST['biblioteca_id_biblioteca'];

        $sql = "UPDATE atendente SET nome_atendente = '{$nome}', biblioteca_id_biblioteca = '{$id_biblioteca}' where id_atendente = " . $_REQUEST['id_atendente'];

        $res = $conn->query($sql) or die($conn->error);

        if ($res == true) {
            print "<script>alert('Atendente modificado com sucesso!')</script>";
            print "<script>location.href='?page=atendente-listar'</script>";
        } else {
            print "<script>alert('Algo de errado não está certo. Contate o administador!')</script>";
            print "<script>location.href='?page=atendente-listar'</script>";
        }

        break;

    case 'excluir':
        $sql = "DELETE FROM atendente WHERE id_atendente = " . $_REQUEST['id_atendente'];

        $res = $conn->query($sql) or die($conn->error);

        if ($res == true) {
            print "<script>alert('Atendente excluído com sucesso!')</script>";
            print "<script>location.href='?page=atendente-listar'</script>";
        } else {
            print "<script>alert('Algo de errado não está certo. Contate o administador!')</script>";
            print "<script>location.href='?page=atendente-listar'</script>";
        }

        break;
}
