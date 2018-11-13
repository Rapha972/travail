<?php
class Post {
    protected $id;
    protected $author;
    protected $title;
    protected $content;
    protected $date;
    
    function getId() {
        return $this->id;
    }
    function getAuthor() {
        return $this->author;
    }
    function getTitle() {
        return $this->title;
    }
    function getContent() {
        return $this->content;
    }
    function getDate() {
        return $this->date;
    }
    function setId($id) {
        $this->id = $id;
    }
    function setAuthor($author) {
        $this->author = $author;
    }
    function setTitle($title) {
        $this->title = $title;
    }
    function setContent($content) {
        $this->content = $content;
    }
    function setDate($date) {
        $this->date = $date;
    }
}