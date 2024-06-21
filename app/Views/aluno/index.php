<div class="container">
    <h2>Aluno</h2><hr>

    <!-- Button trigger modal -->
    <button type="button" class="btn btn-outline-success" data-bs-toggle="modal" data-bs-target="#cadModal">
        Novo Aluno
    </button>

<table class="table">
    <thead>
        <tr>
            <td>ID</td>
            <td>CPF</td>
            <td>NOME</td>
            <td>E-MAIL</td>
            <td>TELEFONE</td>
            <td>TURMA</td>
            <td> </td>
        </tr>
    </thead>
    <tbody>
        <?php foreach($listaAlunos as $a) : ?>
            <tr>
                <td>
                    <?=$a['id']?>
                </td>
                <td>
                    <?=$a['cpf']?>
                </td>
                <td>
                    <?=$a['nome']?>
                </td>
                <td>
                    <?=$a['email']?>
                </td>
                <td>
                    <?=$a['telefone']?>
                </td>
                <td>
                    <?=$a['turma']?>
                </td>
                <td>
                    <?=anchor("Aluno/editar/".$a['id'],'Editar',['class'=>'btn btn-primary ml-5'])?>
                </td>
                <td>
                </td>
            </tr>
            <?php endforeach ?>
        </tbody>
    </table>
    <!-- Modal -->
    <div class="modal fade" id="cadModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <?=form_open("Aluno/cadastrar")?>
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Novo Aluno</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                <div class="form-group">
                        <label for="cpf">CPF</label>
                        <input class='form-control' type="text" id="cpf" name="cpf">
                    </div>
                    <div class="form-group">
                    btn btn-primary       <label for="nome">Nome</label>
                        <input class='form-control' type="text" id="nome" name="nome">
                    </div>
                    <div class="form-group">
                        <label for="email">E-mail</label>
                        <input class='form-control' type="text" id="email" name="email">
                    </div>
                    <div class="form-group">
                        <label for="telefone">Telefone</label>
                        <input class='form-control' type="text" id="telefone" name="telefone">
                    </div> <br>
                    <div class="form-group">
                        <label for="turma">Turma</label>
                        <select id="turma" name="turma">
                            <option value="1a">1 A</option>
                            <option value="1b">1 B</option>
                            <option value="1c">1 C</option>
                            <option value="1d">1 D</option>
                            <option value="2a">2 A</option>
                            <option value="2b">2 B</option>
                            <option value="2c">2 C</option>
                            <option value="2d">2 D</option>
                            <option value="3a">3 A</option>
                            <option value="3b">3 B</option>
                            <option value="3c">3 C</option>
                            <option value="3d">3 D</option>
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
