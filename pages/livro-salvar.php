<h1>Livro salvar</h1>

<?php
switch ($_REQUEST['acao']) {
    case 'cadastrar':

        $categoria = $_POST['categoria_id_categoria'];
        $titulo = $_POST['titulo_livro'];
        $autor = $_POST['autor_livro'];
        $editora = $_POST['editora_livro'];
        $edicao = $_POST['edicao_livro'];
        $ano = $_POST['ano_livro'];
        $localidade = $_POST['localidade_livro'];
        $isbn = $_POST['isbn_livro'];

        $sql = "INSERT INTO livro (categoria_id_categoria, titulo_livro, autor_livro, editora_livro, edicao_livro, ano_livro, localidade_livro, isbn_livro) VALUES ('{$categoria}', '{$titulo}', '{$autor}', '{$editora}', '{$edicao}', '{$ano}', '{$localidade}', '{$isbn}')";

        $res = $conn->query($sql) or die($conn->error);

        if ($res == true) {
            print "<script>alert('Livro cadastrado com sucesso! Redirecionando...')</script>";
            print "<script>location.href='?page=livro-listar'</script>";
        } else {
            print "<script>alert('Algo de errado, não está certo. Contate o administrador! Redirecionando...')</script>";
            print "<script>location.href='?page=livro-listar'</script>";
        }

        break;

    case 'editar':
        $categoria = $_POST['categoria_id_categoria'];
        $titulo = $_POST['titulo_livro'];
        $autor = $_POST['autor_livro'];
        $editora = $_POST['editora_livro'];
        $edicao = $_POST['edicao_livro'];
        $ano = $_POST['ano_livro'];
        $localidade = $_POST['localidade_livro'];
        $isbn = $_POST['isbn_livro'];

        $sql = "UPDATE livro SET categoria_id_categoria = '{$categoria}', titulo_livro = '{$titulo}', autor_livro = '{$autor}', editora_livro = '{$editora}', edicao_livro = '{$edicao}', ano_livro = '{$ano}', localidade_livro = '{$localidade}', isbn_livro = '{$isbn}' WHERE id_livro = " . $_REQUEST['id_livro'];

        $res = $conn->query($sql) or die($conn->error);

        if ($res == true) {
            print "<script>alert('Livro editado com sucesso! Redirecionando...')</script>";
            print "<script>location.href='?page=livro-listar'</script>";
        } else {
            print "<script>alert('Algo de errado, não está certo. Contate o administrador! Redirecionando...')</script>";
            print "<script>location.href='?page=livro-listar'</script>";
        }

        break;

    case 'excluir':
        $sql = "DELETE FROM livro WHERE id_livro = " . $_REQUEST['id_livro'];

        $res = $conn->query($sql) or die($conn->error);

        if ($res == true) {
            print "<script>alert('Livro excluído com sucesso! Redirecionando...')</script>";
            print "<script>location.href='?page=livro-listar'</script>";
        } else {
            print "<script>alert('Algo de errado, não está certo. Contate o administrador! Redirecionando...')</script>";
            print "<script>location.href='?page=livro-listar'</script>";
        }

        break;
}
