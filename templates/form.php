<form action="data/save_resume.php" method="post" enctype="multipart/form-data">
    <div class="form-group">
        <label for="nome">Nome:</label>
        <input type="text" class="form-control" id="nome" name="nome" required>
    </div>
    <div class="form-group">
        <label for="data_nascimento">Data de Nascimento:</label>
        <input type="date" class="form-control" id="data_nascimento" name="data_nascimento" required>
    </div>
    <div class="form-group">
        <label for="idade">Idade:</label>
        <input type="number" class="form-control" id="idade" name="idade" required>
    </div>
    <div class="form-group">
        <label for="email">E-mail:</label>
        <input type="email" class="form-control" id="email" name="email" required>
    </div>
    <div class="form-group">
        <label for="foto_perfil">Foto de Perfil:</label>
        <input type="file" class="form-control" id="foto_perfil" name="foto_perfil" accept="image/*">
    </div>
    <div id="experiencias" class="mb-3">
        <label>Experiências Profissionais:</label>
        <div class="form-group">
            <input type="text" class="form-control mt-2" name="empresa[]" placeholder="Empresa">
            <input type="text" class="form-control mt-2" name="cargo[]" placeholder="Cargo">
            <input type="text" class="form-control mt-2" name="descricao[]" placeholder="Descrição das Atividades">
        </div>
    </div>
    <button type="button" class="btn btn-secondary mb-3" id="adicionarExperiencia">Adicionar Experiência</button>
    
    <div class="form-group">
    <label for="cor_fundo">Cor de Fundo:</label>
    <input type="color" class="form-control" id="cor_fundo" name="cor_fundo" value="#ffffff">
</div>

    
    <button type="submit" class="btn btn-success">Gerar Currículo</button>
</form>
