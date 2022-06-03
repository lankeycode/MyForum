<?php
require './actions/questions/myQuestionsAction.php';
require './actions/users/securityAction.php';
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
    <?php include './includes/navbar.php'; ?>
    <br />
    <div class="container">
        <?php

        while ($question = $getAllMyQuestions->fetch()) {
        ?>

            <div class="card">
                <div class="card-header">
                    <?= $question['title']; ?>
                </div>
                <div class="card-body">
                    <p class="card-text">
                        <?= $question['description']; ?>
                    </p>
                    <a href="#" class="btn btn-primary" data-bs-toggle=" tooltip" data-bs-placement="top" title="Accéder à la question">Accéder<span class="bi bi-cursor-fill"></span></a>
                    <a href="#" class="btn btn-warning" data-bs-toggle=" tooltip" data-bs-placement="top" title="Modifier la question">Modifier<span class="bi bi-share-fill"></span></a>
                    <i class="bi bi-share-fill"></i>
                </div>
            </div>
            <br />
        <?php
        }
        ?>
    </div>

    <?php include 'includes/footer.php'; ?>
</body>

</html>