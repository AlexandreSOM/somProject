<?php

    class BookManager extends DbManager
    {

        public function __construct()
        {
            parent::__construct();
        }

        public function selectAll(){
            $query ='SELECT * FROM book';
            $res = $this->bdd->query($query);
            $books = [];

            foreach  ($res as $data) {
                $books[] = new book($data['id'], $data['bookName'], $data['bookAuthor'], $data['bookType']);
            }
            return $books;
        }

//        public function insert(book $book)
//        {
//            $query ="INSERT INTO `book`(`bookName`, `bookAuthor`, `bookType`)
//        VALUES  ('".$book->getBookName()."','".$book->getBookAuthor()."','".$book->getBookType()."')";
//            $res = $this->bdd->prepare($query);
//            $res->execute();
//            $book->setId($this->bdd->lastInsertId());
//            var_dump("Line added to Database", false);
//        }
        public function insert(book $book)
        {
            $requete = $this->bdd->prepare("INSERT INTO book (bookName, bookAuthor, bookAuthor) VALUES (?,?,?)");
            $requete->bindParam(1, $book->getBookName());
            $requete->bindParam(2, $book->getBookAuthor());
            $requete->bindParam(3, $book->getBookType());
            $requete->execute();
            $book->setId($this->bdd->lastInsertId());
        }
        public function delete($id)
        {
            $requete = $this->bdd->prepare("DELETE FROM Book where id = ?");
            $requete->bindParam(1,$id);
            $requete->execute();
        }
    }

    ?>