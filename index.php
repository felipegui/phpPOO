<?php
class Post {
    public int $id;
    public int $likes = 0;
    public array $comments = [];
    private string $author;

    public function setAuthor($nome) {
        if ( strlen($nome) >=3 ) {
            $this->author = ucfirst($nome);
        } else {
            echo "Nome deve ter pelo menos três letras!";
        }
    }
    public function getAuthor() {
        return $this->author;
    }
}
$post1 = new Post();
$post1->setAuthor('fe');

$post2 = new Post();
$post2->setAuthor('Fulano');

echo "POST 1: ".$post1->likes." likes - ".$post1->getAuthor()."</br>";
echo "POST 2: ".$post2->likes." likes - ".$post2->getAuthor();
?>