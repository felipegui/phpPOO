<?php
class Post {
    private int $id;
    private int $likes = 0;

    public function setId($identifier) {
        $this->id = $identifier;
    }
    public function getId() {
        return $this->id;
    }

    public function setLikes($like) {
        $this->likes = $like;
    }
    public function getLikes() {
        return $this->likes;
    }
}

//Aqui inicia a herança de classes
class Photo extends Post {
    private string $url;

    public function __construct($id) {
        $this->setId($id);
    }

    public function setUrl($u) {
        $this->url = $u;
    }

    public function getUrl() {
        return $this->url;
    }
}

$photo = new Photo(20);
$photo->setLikes(12);
$photo->setUrl("abc");

echo "Post da foto: ".$photo->getId()."</br>";
echo "Likes: ".$photo->getLikes()."</br>";
echo "url: ".$photo->getUrl();
?>