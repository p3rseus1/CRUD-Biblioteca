<h1>biblioteca cadastrar</h1>

<form action="?page=biblioteca-salvar" method="POST">
    <input type="hidden" name="acao" value="cadastrar">
    <div class="mb-3">
        <label for="">Nome da Biblioteca: </label>
        <input type="text" name="nome_biblioteca" class="form-control">
    </div>
    <div class="mb-3">
        <label for="">Endereço: </label>
        <input type="text" name="end_biblioteca" class="form-control">
    </div>
    <div class="mb-3">
        <button type="submit" class="btn btn-success">Enviar</button>
    </div>
</form>