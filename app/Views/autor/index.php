<div class="container">
    <h2>Autor</h2><hr>

    <!-- Button trigger modal -->
    <button type="button" class="btn btn-outline-success" data-bs-toggle="modal" data-bs-target="#cadModal">
        Novo Autor
    </button>

<table class="table">
    <thead>
        <tr>
            <td>ID</td>
            <td>NOME</td>
        </tr>
    </thead>
    <tbody>
        <?php foreach($listaAutores as $au) : ?>
            <tr>
                <td>
                    <?=$au['id']?>
                </td>
                <td>
                    <?=$au['nome']?>
                </td>
                <td>
                    <?=anchor("Autor/editar/".$au['id'],'Editar',['class'=>'btn btn-primary ml-5'])?>
                </td>
                <td>
                </td>
            </tr>
            <?php endforeach ?>
        </tbody>
    </table>
    <!-- Modal -->
    <div class="modal fade" id="cadModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <?=form_open("Autor/cadastrar")?>
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Novo Autor</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="form-group">
                        <label for="nome">Nome</label>
                        <input class='form-control' type="text" id="nome" name="nome">
                    </div>
                </div>
                <div class="modal-footer">
                <button type="submit" class="btn btn-outline-success">Cadastrar</button>
                <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">Cancelar</button>
                </div>
            </div>
        </div>
        <?=form_close()?>
    </div>
</div>
