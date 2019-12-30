<?php
include('db.php');

$pseudo = $_POST['pseudo'];
$msg = $_POST['message'];

$req = $bdd->prepare('INSERT INTO message(pseudo, message) VALUE (:pseudo, :message)');
$req->execute(array(
    'pseudo' => $pseudo,
    'message' => $msg
));



header('Location: index.php');