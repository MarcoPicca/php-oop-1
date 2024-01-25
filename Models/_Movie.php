<?php

class Movie {
    public $img;
    public $title;
    public $author;
    public $genre;
    public $description;
    

    public function __construct($_img, $_title, $_author, $_genre, $_description){
        $this->img = $_img;
        $this->title = $_title;
        $this->author = $_author;
        $this->genre = $_genre;
        $this->description = $_description;
    }


    
}