<?php

require 'include.php';

if($_GET['controller'] === 'index' && $_GET['action'] == 'renderIndex'){
    $indexController = new IndexController();
    $indexController->renderIndexAction();
}
else if($_GET['controller'] === 'book' && $_GET['action'] === 'addBook'){
    $bookController = new BookController();
    $bookController->addBook();
}
else if($_GET['controller'] === 'index' && $_GET['action'] === 'addBook'){
    $bookController = new BookController();
    $bookController->formBookAction();
}
else if($_GET['controller'] === 'index' && $_GET['action'] === 'delete' && isset($_GET['id'])){
    $bookController = new BookController();
    $bookController->deleteBook($_GET['id']);
}


?>