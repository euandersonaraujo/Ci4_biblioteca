<nav class="navbar navbar-expand-lg bg-secondary-subtle mb-3">
  <div class="container">
    <?=anchor("Usuario/index","Biblioteca",['class' => 'navbar-brand'])?>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <?=anchor('Usuario/index','Usuario',['class' => 'nav-link active','aria-current' => 'page'])?>
        <?=anchor('Aluno/index','Aluno',['class' => 'nav-link active','aria-current' => 'page'])?>
        <?=anchor('Editora/index','Editora',['class' => 'nav-link active','aria-current' => 'page'])?>
        <?=anchor('Obra/index','Obra',['class' => 'nav-link active','aria-current' => 'page'])?>
        <?=anchor('Autor/index','Autor',['class' => 'nav-link active','aria-current' => 'page'])?>
        <?=anchor('Livro/index','Livro',['class' => 'nav-link active','aria-current' => 'page'])?>
        <?=anchor('Emprestimo/index','Emprestismo',['class' => 'nav-link active','aria-current' => 'page'])?>
      <form class="d-flex" role="Pesquise">
        <input class="form-control me-2" type="Pesquise" placeholder="Pesquise" aria-label="Pesquise">
        <button class="btn btn-outline-success" type="submit">Pesquisar</button>
      </form>
    </div>
  </div>
</nav>
