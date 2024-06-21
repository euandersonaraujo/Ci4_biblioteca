<div class="container">
    <h2>Obra</h2><hr>

    <!-- Button trigger modal -->
    <button type="button" class="btn btn-outline-success" data-bs-toggle="modal" data-bs-target="#cadModal">
        Nova Obra
    </button>

<table class="table">
    <thead>
        <tr>
            <td>ID</td>
            <td>TITULO</td>
            <td>CATEGORIA</td>
            <td>ANO</td>
            <td>ISBN</td>
            <td>EDITORA</td>
        </tr>
    </thead>
    <tbody>
        <?php foreach($listaObras as $ob) : ?>
            <tr>
                <td><?=$ob['id']?></td>
                <td>
                    <?=anchor("Obra/editar/".$ob["id"],$ob["titulo"])?>
                </td>
                <td><?=$ob['categoria']?></td>
                <td><?=$ob['ano_publicacao']?></td>
                <td><?=$ob['isbn']?></td>
                <td><?=$ob['id_editora']?></td>
                <?php
                    foreach($listaEditoras as $editora){
                        $editoras[$editora['id']] = $editora['nome'];
                    }
                ?>
                <td>
                </td>
            </tr>
            <?php endforeach ?>
        </tbody>
    </table>
    <!-- Modal -->
    <div class="modal fade" id="cadModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <?=form_open("Obra/cadastrar")?>
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Nova Obra</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="form-group">
                        <label for="titulo">Título</label>
                        <input class='form-control' type="text" id="titulo" name="titulo">
                    </div>
                    <div class="form-group">
                        <label for="categoria">Categoria</label>
                        <input class='form-control' type="text" id="categoria" name="categoria">
                    </div>
                    <div class="form-group">
                        <label for="ano_publicacao">Ano</label>
                        <input class='form-control' type="text" id="ano_publicacao" name="ano_publicacao">
                    </div>
                    <div class="form-group">
                        <label for="isbn">ISBN</label>
                        <input class='form-control' type="text" id="isbn" name="isbn">
                    </div>
                    <div class="form-group">
                        <label for="id_editora">Editora</label>
                        <select class='form-control' name='id_editora' id='id_editora'>
                        <option value="">Selecione uma Editora</option>
                        <?php foreach($listaEditoras as $editora) : ?>
                            <option value="<?=$editora['id']?>"><?=$editora['nome']?></option>
                            <?php endforeach?>
                        </select>
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
