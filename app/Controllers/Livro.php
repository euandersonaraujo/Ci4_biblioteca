<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;
use App\Models\LivroModel;
use App\Models\ObraModel;

class Livro extends BaseController
{
    private $livroModel;
    public function __construct(){
        $this->livroModel = new livroModel();
        $this->obraModel = new obraModel();
    }
    private $obraModel;

    public function index()
    {
        $dados = $this->livroModel->findAll();
        $dadosobra = $this->obraModel->findAll();
        echo view('_partials/header');
        echo view('_partials/navbar');
        echo view('livro/index',['listaLivro' => $dados,'listaObra' => $dadosobra]);
        echo view('_partials/footer');
    }
    public function cadastrar()
    {
        $livro = $this->request->getPost();
        $livro['senha'] = md5("senhaforte");
        $this->livroModel->save($livro);
        return redirect()->to('Livro/index');
    }
    public function editar($id)
    {
        $dados = $this->livroModel->find($id);
        $dadosobra = $this->obraModel->findAll();
        echo view('_partials/header');
        echo view('_partials/navbar');
        echo view('livro/edit',['livro' => $dados,'listaObra' => $dadosobra]);
        echo view('_partials/footer');
    }
    public function salvar(){
        $dados = $this->request->getPost();
        $this->livroModel->save($dados);
        return redirect()->to('Livro/index');
    }
    public function excluir(){
        $dados = $this->request->getPost();
        $this->livroModel->delete($dados);
        return redirect()->to('Livro/index');
    }
}
