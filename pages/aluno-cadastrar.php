<h1>Aluno cadastrar</h1>

<form action="?page=aluno-salvar" method="POST">
    <input type="hidden" name="acao" value="cadastrar">
    <div class="mb-3">
        <label for="">Nome do aluno: </label>
        <input type="text" name="nome_aluno" class="form-control">
    </div>
    <div class="mb-3">
        <label for="">Endereço do aluno: </label>
        <input type="text" name="end_aluno" class="form-control">
    </div>
    <div class="mb-3">
        <label for="">Email do aluno: </label>
        <input type="email" name="email_aluno" class="form-control">
    </div>
    <div class="mb-3">
        <label for="">Número do aluno: </label>
        <input type="tel" name="fone_aluno" class="form-control">
    </div>
    <div class="mb-3">
        <label for="">Data de nascimento do aluno: </label>
        <input type="date" name="data_nasc_aluno" class="form-control">
    </div>
    <div class="mb-3">
        <legend>Gênero do aluno:</legend>
        <label for="feminino" class="form-check-label me-2">
            <input type="radio" id="Feminino" name="genero_aluno" value="Feminino" class="form-check-input"> Feminino
        </label>
        <label for="masculino" class="form-check-label me-2">
            <input type="radio" id="Masculino" name="genero_aluno" value="Masculino" class="form-check-input"> Masculino
        </label>
        <label for="outros" class="form-check-label me-2">
            <input type="radio" id="Outros" name="genero_aluno" value="Outros" class="form-check-input"> Outros
        </label>
    </div>
    <div class="mb-3">
        <button type="submit" class="btn btn-success">Enviar</button>
    </div>
</form>