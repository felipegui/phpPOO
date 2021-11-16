<?php

class Post {
    
    public int $likes = 0;
    public array $comments = [];
    public string $author;

    //Criando o método construtor
    public function __construct($qtLikes) {
        $this->likes = $qtLikes;
    }

    public function aumentarLikes(){
        $this->likes++;
    }
}

$post1 = new Post(25);
$post2 = new Post(0);

echo "Post 1: ".$post1->likes."</br>";
echo "Post 2: ".$post2->likes;
?>