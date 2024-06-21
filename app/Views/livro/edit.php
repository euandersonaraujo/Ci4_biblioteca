<div class="container p-3">
    <?=form_open('Livro/salvar')?>
    <input type="hidden" value='<?=$livro['id']?>' name="id">
    <div class="row p-2">
        <div class="col-2">
            <label for="disponivel">Disponível</label>
        </div>
        <div class="col-10">
            <input value='<?=$livro['disponivel']?>' type="text" name="disponivel" id="disponivel" class="form-control">
        </div>
    </div>
    <div class="row p-2">
        <div class="col-2">
            <label for="status">Status</label>
        </div>
        <div class="col-10">
            <input value='<?=$livro['status']?>' type="status" name="status" id="status" class="form-control">
        </div>
    </div>
    <div class="row p-2">
        <div class="col-2">
            <label for="id_obra">ID_livro</label>
        </div>
        <div class="col-10">
            <input value='<?=$livro['id_obra']?>' type="text" name="id_obra" id="id_obra" class="form-control">
        </div>
</div>
    <div class="row p-2">
        <div class="col-2">
            <label for="id_obra">ID_Obra</label>
        </div>
        <div class="col-10">
            <input value='<?=$livro['id_obra']?>' type="text" name="id_obra" id="id_obra" class="form-control">
        </div>
        <div class="col-10">
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

    <?=form_open('Livro/excluir')?>
        <div class="modal fade" id="excModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="modal-title fs-5" id="exampleModalLabel">Excluir livro</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div class="form-group">
                        <input value='<?=$livro['id']?>' type="hidden" name="id">
                            <p>Você deseja excluir este livro <?=$livro['disponivel']?></p>
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

<!-- Modal -->
<div class="modal fade" id="cadModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <?=form_open("Livro/adicionarLivro")?>
        <input value="<?=$livro['id']?>" type="hidden" name='id_livro' id='id_livro'>
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Lista de Autores</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="form-group">
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
                    <button type="submit" class="btn btn-primary">Cadastrar</button>
                </div>
            </div>
        </div>
        <?=form_close()?>
    </div>