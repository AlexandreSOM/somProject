<?php
class indexController{
    public function renderIndexAction(){
        $bookManager = new BookManager();
        $books = $bookManager->selectAll();

        require './View/Parts/home.php';
    }
}
?>