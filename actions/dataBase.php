<?php
try {
    session_start();
    $db = new PDO('mysql:host=localhost;dbname=forum;charset=utf8;', 'root', '');
} catch (Exception $e) {
    die('Une erreur a été trouvé : ' . $e->getMessage());
}
