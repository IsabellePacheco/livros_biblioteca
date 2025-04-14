<?php
// incluir o arquivo 'livro.php', que contem a class livro.
// incluir livrosView.php, que contem a função exibirLivro().

require_once 'livro.php';
require_once 'livrosView.php';

// declaração da classe livroController.
// essa classe é responsavel pela comunicação entre o livro.php (movel) e o livrossView.php (view)

class livroController {
// criar uma propriedade privada chamada $model.
// ela sera usada para armazenar uma instancia da classe livro.
private $model;

// criar um metodo constructor da classe, ele é chamado automaticamente quando um objeto for criado.
public function __construct(){
    // criar uma nova instancia da classe livro, armazenar na propriedade $model

    $this->model= new Livro();
}

// metodo publico chamado listar.
// serve para buscar a lista de livros e passar pra o view.

public function listar(){
    // chama o metodo listarLivros()do modelo e armazena na variavel $livros.

    $livros = $this->model-> listarLivros();
    // chama função exiber livros e envia a lista para mostrar no navegador

    exibirLivros($livros);
}
}

// execução do codigo
// aqui for da classe é criado um objeto do tipo AlunoController.
$controler = new livroController();
// apos criar o objeto é chamado o metodo listar.

$controler->listar();




?>
