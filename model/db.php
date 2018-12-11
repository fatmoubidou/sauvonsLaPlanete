<?php
// Connexion à la bdd
function getDataBase() {
  try {
    $db = new PDO('mysql:host=localhost;dbname=sauvonsLaPlanete;charset=utf8', 'test', 'test');
  }
  catch (Exception $e){
    die('Erreur : ' . $e->getMessage());
  }
  return $db;
}

 ?>
