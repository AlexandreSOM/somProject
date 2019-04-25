<?php

    class BookController
    {
        public function addBook()
        {
            require 'View/Parts/addBook.php';
        }

        public function formBookAction()
        {
            $book = new Book (null, $_POST['bookName'], $_POST['bookAuthor'], $_POST['bookType']);
            $bookManager = new BookManager();
            $bookManager->insert($book);
            header("location: http://localhost/projectSom/index.php?controller=book&action=renderIndex");
        }
        public function deleteBook($id)
        {
            $articleManager = new BookManager();
            $articleManager->delete($id);
            header("location: http://localhost/projectSom/index.php?controller=book&action=renderIndex");
        }

    }

?>
