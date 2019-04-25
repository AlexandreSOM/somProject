<html>
    <head>
        <?php
        include 'View/Parts/style.html';
        ?>
    </head>

    <body>
    <div class="container">
    <h1>Des livres à tout va !</h1>

        <table class="table">
          <thead class="thead-dark">
            <tr>
              <th scope="col">#</th>
              <th scope="col">Nom</th>
              <th scope="col">Auteur</th>
              <th scope="col">Genre</th>
                <th scope="col">Ajouter</th>
                <th scope="col">Supprimer</th>
            </tr>
          </thead>
          <tbody>

                <?php
                    foreach ($books as $book) {
                    ?>
                <tr>
                    <td><?php echo $book->getId()?></td>
                    <td><?php echo $book->getBookName()?></td>
                    <td><?php echo $book->getBookAuthor()?></td>
                    <td><?php echo $book->getBookType()?></td>
                        <td>
                            <a href="./index.php?controller=book&action=addBook">
                                <button style="margin-bottom:10px;" class="btn btn-success">Ajouter un article</button>
                            </a>
                        </td>
                        <td>
                            <a href="/index.php?controller=index&action=delete&id=<?php echo $book->getId()?>">
                                <button style="margin-bottom:10px;" class="btn btn-danger">Supprimer</button>
                            </a>
                        </td>



                </tr>
                    <?php
                    }
                ?>

          </tbody>
        </table>

    </div>
    <?php
    include 'View/Parts/script.html';
    ?>
    </body>
</html>


