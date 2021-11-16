<?php

//A classe contém as propriedades do objeto que eu estou querendo criar
class Post {
    //Usando a palavra "public" para poder ter acesso as propriedades fora da classe
    public int $likes = 0;//Typed properties (7.4)
    public array $comments = [];//Typed properties (7.4)
    public string $author;//Typed properties (7.4)

    public function aumentarLikes(){
        $this->likes++;
    }
}

//criando o objeto a partir da classe
$post1 = new Post();
//acessando as propriedades da classe Post
$post1->likes = 3;
$post1->author = "Felipe";

$post2 = new Post();
$post2->likes = 10;

echo "Post 1: ".$post1->likes."</br>";
echo "Post 2: ".$post1->author;
?>