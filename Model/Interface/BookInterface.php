<?php
interface BookInterface {
    public function getId();
    public function setId($id);
    public function getBookName();
    public function setBookName($bookName);
    public function getBookAuthor();
    public function setBookAuthor($bookAuthor);
    public function getBookType();
    public function setBookType($bookType);

}
?>