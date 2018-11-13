<?php
class Comment {
    protected $id;
    protected $post_id;
    protected $author;
    protected $comment;
    protected $comment_date;
    
    function getId() {
        return $this->id;
    }
    function getPost_id() {
        return $this->post_id;
    }
    function getAuthor() {
        return $this->author;
    }
    function getComment() {
        return $this->comment;
    }
    function getComment_date() {
        return $this->comment_date;
    }
    function setId($id) {
        $this->id = $id;
    }
    function setPost_id($post_id) {
        $this->post_id = $post_id;
    }
    function setAuthor($author) {
        $this->author = $author;
    }
    function setComment($comment) {
        $this->comment = $comment;
    }
    function setComment_date($comment_date) {
        $this->comment_date = $comment_date;
    }
    
}