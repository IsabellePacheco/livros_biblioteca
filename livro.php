<?php
// defina classe chamada aluno

class Livro {
    // criar uma propriedade privada (encapsulamento) chamada $livros
    // essa propriedade é um array que armazena dados de bibliotecas.
    // cada aluno é representado por array associativo com titulo, autor e ano de publicação

    private $livros =[
        ['titulo' => 'Dom Casmurro', 'autor' => 'Machado de Assis' , 'ano' => 1899],
        ['titulo' => 'Memórias Póstumas de Brás Cubas', 'autor' => 'Machado de Assis' , 'ano' => 1881],
        ['titulo' => 'A Revolução dos Bichos', 'autor' => 'George Orwell' , 'ano' => 1945],
        ['titulo' => 'O Pequeno Príncipe', 'autor' => 'Antoine de Saint-Exupéry:' , 'ano' => 1943],
        ['titulo' => 'A Hora da Estrela', 'autor' => 'Clarice Lispector' , 'ano' => 1977],
        
    ];

    // define um metodo publico chamado listarLivros.
    // esse metodo serve para listar "retornar" o conteudo do array $livros
    public function editarLivros(){
        return $this ->livros;
    }
    public function listarLivros(){
        return $this ->livros;
    }
}
?>