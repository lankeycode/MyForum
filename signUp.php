<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./styles/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
</head>

<body>


    <?php
    require 'actions/users/signUpAction.php';
    include 'includes/head.php';
    include './includes/navbar.php';
    ?>
    <br><br>
    <form class="container" method="POST">

        <?php
        if (isset($errorMsg)) {
            echo '<p>' . $errorMsg . '</p>';
        } ?>
        <div class="mb-3 ">
            <label for="inputPseudo" class="form-label">Pseudo</label>
            <input type="text" class="form-control" name="pseudo" id="inputPseudo" aria-describedby="pseudoHelp">
            <div id="emailHelp" class="form-text"></div>
        </div>
        <div class="mb-3 ">
            <label for="inputName" class="form-label">Prénom</label>
            <input type="text" class="form-control" name="name" id="inputName" aria-describedby="nameHelp">
            <div id="nameHelp" class="form-text"></div>
        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Email address</label>
            <input type="email" class="form-control" name="email" id="exampleInputEmail1" aria-describedby="emailHelp">
            <div id="emailHelp" class="form-text">Nous ne partagerons jamais votre e-mail avec quelqu'un d'autre.</div>
        </div>
        <div class="mb-3">
            <label for="inputPassword" class="form-label">Password</label>
            <input type="password" class="form-control" name="password" id="inputPassword">
        </div>
        <button type="submit" class="btn btn-primary" name="validate">S'inscrire</button>
        <br><br>
        <a href="./login.php">
            <p>J'ai déjà un compte, je me connecte.</p>
        </a>
    </form>
    <?php include 'includes/footer.php'; ?>
</body>

</html>