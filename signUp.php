<?php
include 'includes/head.php';
include 'includes/navbar.php';
?>
<br><br>
<form class="container" method="POST">
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
</form>
<?php
include 'includes/layout.php';
