$(document).ready(function() {
    $("#adicionarExperiencia").click(function() {
        var novoExperiencia = `
            <div class="form-group">
                <input type="text" class="form-control mt-2" name="empresa[]" placeholder="Empresa">
                <input type="text" class="form-control mt-2" name="cargo[]" placeholder="Cargo">
                <input type="text" class="form-control mt-2" name="descricao[]" placeholder="Descrição das Atividades">
            </div>
        `;
        $("#experiencias").append(novoExperiencia);
    });
});
