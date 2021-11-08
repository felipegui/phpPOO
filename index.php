<?php

//A classe contém as propriedades do objeto que eu estou querendo criar
class Post {
    //Usando a palavra "public" para poder ter acesso as propriedades fora da classe
    public $likes = 0;
    public $comment = [];
    public $author;
}

//criando o objeto a partir da classe
$post1 = new Post();
//acessando as propriedades da classe Post
$post1->likes = 3;

$post2 = new Post();
$post2->likes = 10;

echo "Post 1: ".$post1->likes."</br>";
echo "Post 2: ".$post2->likes;
?>