<h1>Reserva salvar</h1>

<?php
switch ($_REQUEST['acao']) {
    case 'cadastrar':
        $nome_aluno = $_POST['aluno_id_aluno'];
        $titulo_livro = $_POST['livro_id_livro'];
        $nome_atendente = $_POST['atendente_id_atendente'];
        $emprestimo = $_POST['emprestimo'];
        $devolucao = $_POST['devolucao'];

        $sql = "INSERT INTO reserva (aluno_id_aluno, livro_id_livro, atendente_id_atendente, emprestimo, devolucao) VALUES ({$nome_aluno}, {$titulo_livro}, {$nome_atendente}, '{$emprestimo}','{$devolucao}')";

        $res = $conn->query($sql) or die($conn->error);

        if ($res == true) {
            print "<script>alert('Reserva cadastrado com sucesso! Redirecionando...')</script>";
            print "<script>location.href='?page=reserva-listar'</script>";
        } else {
            print "<script>alert('Algo de errado não está certo. Contate o Administrador!')</script>";
            print "<script>location.href='?page=reserva-listar'</script>";
        }

        break;

    case 'editar':
        $nome_aluno = $_POST['aluno_id_aluno'];
        $titulo_livro = $_POST['livro_id_livro'];
        $nome_atendente = $_POST['atendente_id_atendente'];
        $emprestimo = $_POST['emprestimo'];
        $devolucao = $_POST['devolucao'];

        $sql = "UPDATE reserva SET aluno_id_aluno = {$nome_aluno}, livro_id_livro = {$titulo_livro}, atendente_id_atendente = {$nome_atendente}, emprestimo = '{$emprestimo}', devolucao = '{$devolucao}' WHERE id_reserva = ".$_REQUEST['id_reserva'];

        $res = $conn->query($sql) or die($conn->error);

        if ($res == true) {
            print "<script>alert('Reserva editada com sucesso! Redirecionando...')</script>";
            print "<script>location.href='?page=reserva-listar'</script>";
        } else {
            print "<script>alert('Algo de errado não está certo. Contate o Administrador!')</script>";
            print "<script>location.href='?page=reserva-listar'</script>";
        }

        break;

    case 'excluir':
        $sql = "DELETE FROM reserva WHERE id_reserva = ".$_REQUEST['id_reserva'];
        $res = $conn->query($sql) or die($conn->error);

        if ($res == true) {
            print "<script>alert('Reserva excluída com sucesso! Redirecionando...')</script>";
            print "<script>location.href='?page=reserva-listar'</script>";
        } else {
            print "<script>alert('Algo de errado não está certo. Contate o Administrador!')</script>";
            print "<script>location.href='?page=reserva-listar'</script>";
        }


}