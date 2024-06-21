<div class="container p-3">
    <?=form_open('Usuario/salvar')?>
    <input type="hidden" value='<?=$usuario['id']?>' name="id">
    <div class="row p-2">
        <div class="col-2">
            <label for="nome">Nome</label>
        </div>
        <div class="col-10">
            <input value='<?=$usuario['nome']?>' type="text" name="nome" id="nome" class="form-control">
        </div>
    </div>
    <div class="row p-2">
        <div class="col-2">
            <label for="email">E-mail</label>
        </div>
        <div class="col-10">
            <input value='<?=$usuario['email']?>' type="email" name="email" id="email" class="form-control">
        </div>
    </div>
    <div class="row p-2">
        <div class="col-2">
            <label for="telefone">Telefone</label>
        </div>
        <div class="col-10">
            <input value='<?=$usuario['telefone']?>' type="text" name="telefone" id="telefone" class="form-control">
        </div>
    </div>
    <div class="row p-4">
        <div class="btn-group" role="group">
        <button type="submit" class="btn btn-outline-success">Atualizar</button>
            <button type="button" class="btn btn-outline-danger" data-bs-toggle="modal" data-bs-target="#excModal">Deletar</button>
            <a href="http://localhost:8080/index.php/Livro/index" class="btn btn-outline-secondary">Cancelar</a>
        </div>
    </div>
    <?=form_close()?>

    <?=form_open('Usuario/excluir')?>
        <div class="modal fade" id="excModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="modal-title fs-5" id="exampleModalLabel">Excluir Usuario</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div class="form-group">
                        <input value='<?=$usuario['id']?>' type="hidden" name="id">
                            <p>Você deseja excluir o usuario <?=$usuario['nome']?></p>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
                        <button type="submit" class="btn btn-primary">Excluir</button>
                    </div>
                </div>
            </div>
        </div>
        <?=form_close()?>
</div>