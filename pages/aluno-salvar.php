<?php
switch ($_REQUEST['acao']) {
    case 'cadastrar':

        $nome = $_POST['nome_aluno'];
        $end = $_POST['end_aluno'];
        $email = $_POST['email_aluno'];
        $fone = $_POST['fone_aluno'];
        $nasc = $_POST['data_nasc_aluno'];
        $genero = $_POST['genero_aluno'];

        $sql = "INSERT INTO aluno (nome_aluno, end_aluno, email_aluno, fone_aluno, data_nasc_aluno, genero_aluno) VALUES ('{$nome}', '{$end}', '{$email}', '{$fone}', '{$nasc}', '{$genero}')";

        $res = $conn->query($sql) or die($conn->error);

        if ($res == true) {
            print "<script>alert('Aluno cadastrado com sucesso! Redirecionando...')</script>";
            print "<script>location.href='?page=aluno-listar'</script>";
        } else {
            print "<script>alert('Algo de errado não está certo. Contate o administrador! Redirecionando...')</script>";
            print "<script>location.href='?page=aluno-listar'</script>";
        }

        break;

    case 'editar':

        $nome = $_POST['nome_aluno'];
        $end = $_POST['end_aluno'];
        $email = $_POST['email_aluno'];
        $fone = $_POST['fone_aluno'];
        $nasc = $_POST['data_nasc_aluno'];
        $genero = $_POST['genero_aluno'];

        $sql = "UPDATE aluno SET nome_aluno = '{$nome}', end_aluno = '{$end}', email_aluno = '{$email}', fone_aluno = '{$fone}', data_nasc_aluno = '{$nasc}', genero_aluno = '{$genero}' WHERE id_aluno = " . $_REQUEST['id_aluno'];

        $res = $conn->query($sql) or die($conn->error);

        if ($res == true) {
            print "<script>alert('Cadastro do aluno editado com sucesso! Redirecionando...')</script>";
            print "<script>location.href='?page=aluno-listar'</script>";
        } else {
            print "<script>alert('Algo de errado não está certo. Contate o administrador!')</script>";
            print "<script>location.href='?page=aluno-listar'</script>";
        }

        break;

    case 'excluir':

        $sql = "DELETE FROM aluno WHERE id_aluno = " . $_REQUEST['id_aluno'];

        $res = $conn->query($sql) or die($conn->error);

        if ($res == true) {
            print "<script>alert('Cadastro do aluno excluído com sucesso! Redirecionando...')</script>";
            print "<script>location.href='?page=aluno-listar'</script>";
        } else {
            print "<script>alert('Algo de errado não está certo. Contate o administrador! Redirecionando...')</script>";
            print "<script>location.href='?page=aluno-listar'</script>";
        }

        break;
}
