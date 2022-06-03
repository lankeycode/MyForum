<?php
require 'actions/questions/publishQuestionAction.php';
require 'actions/users/securityAction.php';
?>
<!DOCTYPE html>
<html lang="fr-FR">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./styles/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
</head>

<body>
    <?php require './includes/navbar.php' ?>

    <br><br>
    <form class="container" method="POST">

        <?php
        if (isset($errorMsg)) {
            echo '<p>' . $errorMsg . '</p>';
        } elseif (isset($successMsg)) {
            echo '<p>' . $successMsg . '</p>';
        }
        ?>

        <div class="mb-3 ">
            <label for="inputTitle" class="form-label">Titre de la question</label>
            <input type="text" class="form-control" name="title">

        </div>
        <div class="mb-3 ">
            <label for="inputDescription" class="form-label">Description de la question</label>
            <textarea class="form-control" name="description"></textarea>

        </div>
        <div class="mb-3">
            <label for="inputContent" class="form-label">Contenu de la question</label>
            <textarea class="form-control" name="content"></textarea>

        </div>

        <button type="submit" class="btn btn-primary" name="validate">Publier la question</button>
        <br><br>

    </form>




    <?php require 'includes/footer.php'; ?>
</body>

</html>