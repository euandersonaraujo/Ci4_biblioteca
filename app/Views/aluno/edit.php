<div class="container p-3">
    <?=form_open('Aluno/salvar')?>
    <input type="hidden" value='<?=$aluno['id']?>' name="id">
    <div class="row p-2">
        <div class="col-2">
            <label for="cpf">CPF</label>
        </div>
        <div class="col-10">
            <input value='<?=$aluno['cpf']?>' type="text" name="cpf" id="cpf" class="form-control" disabled>
        </div>
    </div>
    <div class="row p-2">
        <div class="col-2">
            <label for="nome">Nome</label>
        </div>
        <div class="col-10">
            <input value='<?=$aluno['nome']?>' type="text" name="nome" id="nome" class="form-control">
        </div>
    </div>
    <div class="row p-2">
        <div class="col-2">
            <label for="email">E-mail</label>
        </div>
        <div class="col-10">
            <input value='<?=$aluno['email']?>' type="email" name="email" id="email" class="form-control">
        </div>btn btn-primary
    </div>
    <div class="row p-2">
        <div class="col-2">
            <label for="telefone">Telefone</label>
        </div>
        <div class="col-10">
            <input value='<?=$aluno['telefone']?>' type="text" name="telefone" id="telefone" class="form-control">
        </div>
    </div> <br>
    <div class="row p-2">
        <div class="col-2">
            <label for="turma">Turma</label>
        </div>

        <div class="col-10">
            <?php
            $turmas = ['1A','1B','1C','1D','2A','2B','2C','2D','3A','3B','3C','3D']
            ?>
            <select name="turma" id="turma">
                <?php foreach($turmas as $t) : ?>
                    <option value="<?=$t?>"><?=$t?></option>
                <?php endforeach?>
            </select>
        </div>
    </div>
    <div class="row p-2">
        <div class="btn-group" role="group">
        <button type="submit" class="btn btn-outline-success">Atualizar</button>
            <button type="button" class="btn btn-outline-danger" data-bs-toggle="modal" data-bs-target="#excModal">Deletar</button>
            <a href="http://localhost:8080/index.php/Livro/index" class="btn btn-outline-secondary">Cancelar</a>
        </div>
    </div>
    <?=form_close()?>

    <?=form_open('Aluno/excluir')?>
        <div class="modal fade" id="excModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="modal-title fs-5" id="exampleModalLabel">Excluir Aluno?</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div class="form-group">
                        <input value='<?=$aluno['id']?>' type="hidden" name="id">
                            <p>Você deseja excluir o aluno <?=$aluno['nome']?></p>
                        </div>
                    </div>
                    <div class="modal-footer">
                    <button type="submit" class="btn btn-outline-danger">Excluir</button>
                    <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">Cancelar</button>
                        
                    </div>
                </div>
            </div>
        </div>
        <?=form_close()?>
</div>