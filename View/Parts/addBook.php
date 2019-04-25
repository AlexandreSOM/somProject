<html>
<head>
    <?php
    include 'View/Parts/style.html';
    ?>
</head>

<body>
<div class="container">
    <h1>Ajoute ton livre </h1>


    <form method="post" action="index.php?controller=book&action=addBook">
        <label>Nom du livre </label>
        <input name="titre" class="form-control" type="text" placeholder="Ici nom du livre">

        <label>Qui est l'auteur ?</label>
        <input name="contenu" class="form-control" type="text" placeholder="Ici nom de l'auteur">

        <label>Quel genre ? </label>
        <input name="contenu" class="form-control" type="text" placeholder="Ici nom du genre">


<!--        <div class="form-group">-->
<!--            <label for="exampleFormControlSelect1"> Choisit le genre du livre : </label>-->
<!--            <select class="form-control" id="exampleFormControlSelect1">-->
<!--                <option>Roman</option>-->
<!--                <option>Conte</option>-->
<!--                <option>Nouvelle</option>-->
<!--            </select>-->
<!--        </div>-->

        <input class="btn btn-success" type="submit" value="Ajoute ton livre !">
    </form>
    <a href="../somProject/index.php?controller=index&action=renderIndex">
        <button style="margin-bottom:10px;" class="btn btn-secondary">Retour</button>
    </a>

</div>


<?php
include 'View/Parts/script.html';
?>
</body>