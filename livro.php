<?php


class Livro {


    private $livros =[
        ['titulo' => 'Dom Casmurro', 'autor' => 'Machado de Assis' , 'ano' => 1899],
        ['titulo' => 'Memórias Póstumas de Brás Cubas', 'autor' => 'Machado de Assis' , 'ano' => 1881],
        ['titulo' => 'A Revolução dos Bichos', 'autor' => 'George Orwell' , 'ano' => 1945],
        ['titulo' => 'O Pequeno Príncipe', 'autor' => 'Antoine de Saint-Exupéry:' , 'ano' => 1943],
        ['titulo' => 'A Hora da Estrela', 'autor' => 'Clarice Lispector' , 'ano' => 1977],
        
    ];


    public function editarLivros(){
        return $this ->livros;
    }
    public function listarLivros(){
        return $this ->livros;
    }
}
?>