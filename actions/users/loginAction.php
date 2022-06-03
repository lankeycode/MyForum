<?php
require './actions/dataBase.php';

// Validation du formulaire
if (isset($_POST['validate'])) {

    // Vérifier si l'utilisateur a bien compléter tous les champs
    if (!empty($_POST['pseudo'])  && !empty($_POST['password'])) {

        // Les données de l'utilisateur'
        $user_pseudo = htmlspecialchars($_POST['pseudo']);
        $user_password = htmlspecialchars($_POST['password']);

        // Vérifier si l'utilisateur existe (si le pseudo est correct )
        $checkIfUserExists = $db->prepare('SELECT * FROM users WHERE pseudo = ?');
        $checkIfUserExists->execute(array($user_pseudo));

        if ($checkIfUserExists->rowCount() > 0) {

            // Récupérer les données de l'utilisateur'
            $usersInfos = $checkIfUserExists->fetch();
            if (password_verify($user_password, $usersInfos['password'])) {

                // Authentifier l'utilisateur sur le site
                //Puis récupérer les donneés dans des variables globales $_SESSION
                $_SESSION['auth'] = true;
                $_SESSION['id'] = $usersInfos['id'];
                $_SESSION['pseudo'] = $usersInfos['pseudo'];
                $_SESSION['name'] = $usersInfos['name'];


                // Rediriger l'utilisateur sur la page d'accueil
                header('location:index.php');
            } else {
                $errorMsg = "Votre mot de passe est incorrect";
            }
        } else {
            $errorMsg = "Votre pseudo est incorrect";
        }
    } else {
        $errorMsg = "Veuillez compléter tous les champs...";
    }
}
