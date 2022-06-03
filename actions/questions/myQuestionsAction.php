<?php

require './actions/dataBase.php';

$getAllMyQuestions = $db->prepare("SELECT id, title, description FROM questions WHERE id_author = ? ORDER BY id DESC ");
$getAllMyQuestions->execute(array($_SESSION['id']));
