<?php

    class Book {
        private $id;
        private $bookName;
        private $bookAuthor;
        //private $bookType[] = array();

        /**
         * Book constructor.
         * @param $id
         * @param $bookName
         * @param $bookAuthor
         * @param $bookType
         */
        public function __construct($id = null, $bookName, $bookAuthor, $bookType)
        {
            $this->id = $id;
            $this->bookName = $bookName;
            $this->bookAuthor = $bookAuthor;
            $this->bookType = $bookType;
        }

        /**
         * @return mixed
         */
        public function getId()
        {
            return $this->id;
        }

        /**
         * @param mixed $id
         */
        public function setId($id)
        {
            $this->id = $id;
        }

        /**
         * @return mixed
         */
        public function getBookName()
        {
            return $this->bookName;
        }

        /**
         * @param mixed $bookName
         */
        public function setBookName($bookName)
        {
            $this->bookName = $bookName;
        }

        /**
         * @return mixed
         */
        public function getBookAuthor()
        {
            return $this->bookAuthor;
        }

        /**
         * @param mixed $bookAuthor
         */
        public function setBookAuthor($bookAuthor)
        {
            $this->bookAuthor = $bookAuthor;
        }

        /**
         * @return mixed
         */
        public function getBookType()
        {
            return $this->bookType;
        }

        /**
         * @param mixed $bookType
         */
        public function setBookType($bookType)
        {
            $this->bookType = $bookType;
        }


    }