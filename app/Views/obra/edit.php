<div class="container p-3">
    <?=form_open('Obra/salvar')?>
    <input type="hidden" value='<?=$obra['id']?>' name="id">
    <div class="row p-2">
        <div class="col-2">
            <label for="titulo">Título</label>
        </div>
        <div class="col-10">
            <input value='<?=$obra['titulo']?>' type="text" name="titulo" id="titulo" class="form-control">
        </div>
    </div>
    <div class="row p-2">
        <div class="col-2">
            <label for="categoria">Categoria</label>
        </div>
        <div class="col-10">
            <input value='<?=$obra['categoria']?>' type="categoria" name="categoria" id="categoria" class="form-control">
        </div>
    </div>
    <div class="row p-2">
        <div class="col-2">
            <label for="ano_publicacao">Ano</label>
        </div>
        <div class="col-10">
            <input value='<?=$obra['ano_publicacao']?>' type="text" name="ano_publicacao" id="ano_publicacao" class="form-control">
        </div>
    </div>
    <div class="row p-2">
        <div class="col-2">
            <label for="isbn">ISBN</label>
        </div>
        <div class="col-10">
            <input value='<?=$obra['isbn']?>' type="text" name="isbn" id="isbn" class="form-control">
        </div>
    </div>
    <div class="row p-2">
        <div class="col-2">
            <label for="id_editora">Editora</label>
        </div>
        <div class="col-10">
            <input value='<?=$obra['id_editora']?>' type="text" name="id_editora" id="id_editora" class="form-control">
        </div>
        <div class="row p-2">
        <div class="col-2">
            <label for="autores">Autores</label>
        </div>
        <div class="col-10">
        <?php
                $autores;
                foreach($listaAutores as $autor){
                    $autores[$autor['id']] = $autor['nome'];
                }
            ?>
            <?php foreach($listaAutorObra as $lao) : ?>
                <?php if($lao['id_obra'] == $obra['id']) : ?>
                    <div><?=$autores[$lao['id_autor']]?></div>
                <?php endif ?>
            <?php endforeach ?> 
            <!-- Button Adicionar Autor da Obra -->
            <div>
                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#cadModal">
                    Adicionar...
                </button>
            </div>
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

    <?=form_open('Obra/excluir')?>
        <div class="modal fade" id="excModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="modal-title fs-5" id="exampleModalLabel">Excluir Obra</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div class="form-group">
                        <input value='<?=$obra['id']?>' type="hidden" name="id">
                            <p>Você deseja excluir a Obra <?=$obra['titulo']?></p>
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
        <?=form_open("Obra/adicionarAutor")?>
        <input value="<?=$obra['id']?>" type="hidden" name='id_obra' id='id_obra'>
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Lista de Autores</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="form-group">
                        <label for="autor">Autor</label>
                        <select class='form-control' name='id_autor' id='id_editora' required>
                            <option value="">Selecione...</option>
                        <?php foreach($listaAutores as $autor) : ?>
                            <option value="<?=$autor['id']?>"><?=$autor['nome']?></option>
                        <?php endforeach?>
                        </select>
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