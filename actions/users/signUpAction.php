<?php

require 'actions/dataBase.php';
// Validation du formulaire
if (isset($_POST['validate'])) {

    // Vérifier si l'utilisateur a bien compléter tous les champs
    if (!empty($_POST['pseudo']) && !empty($_POST['name']) && !empty($_POST['password'])) {

        // Les données de l'utilisateur'
        $user_pseudo = htmlspecialchars($_POST['pseudo']);
        $user_name = htmlspecialchars($_POST['name']);
        $user_password = password_hash($_POST['password'], PASSWORD_DEFAULT);
        // $user_email = htmlspecialchars($_POST['email']); (a rajouter plus tard)

        // Vérifier si l'utilisateur existe deja sur le site
        $checkIfUserAlreadyExists = $db->prepare('SELECT pseudo FROM users WHERE pseudo = ?');
        $checkIfUserAlreadyExists->execute(array($user_pseudo));


        if ($checkIfUserAlreadyExists->rowCount() == 0) {

            // Insérer un utilisateur dans la base de données
            $insertUserOnWebsite = $db->prepare('INSERT INTO users(pseudo, name, password) VALUES (?, ?, ?)');
            $insertUserOnWebsite->execute(array($user_pseudo, $user_name,  $user_password));

            // Récupérer les informations de l'utilisateur
            $getInfosOfThisUserReq = $db->prepare('SELECT id, pseudo, name FROM users WHERE pseudo = ? AND name = ? AND password = ?');
            $getInfosOfThisUserReq->execute(array($user_pseudo, $user_name, $user_password));

            $usersInfos = $getInfosOfThisUserReq->fetch();

            // Authentifier l'utilisateur sur le site
            //Puis récupérer les donneés dans des variables globales $_SESSION
            $_SESSION['auth'] = true;
            $_SESSION['id'] = $usersInfos['id'];
            $_SESSION['pseudo'] = $usersInfos['pseudo'];
            $_SESSION['name'] = $usersInfos['name'];

            //    Rediriger l'utilisateur sur la page d'accueil une fois authenfié
            header('location: index.php');
        } else {
            $errorMsg = "L'utilisateur existe déjà sur le site";
        }
    } else {
        $errorMsg = "Veuillez compléter tous les champs...";
    }
}
