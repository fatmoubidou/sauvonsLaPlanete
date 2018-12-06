<?php
// Connexion à la bdd
  try
    {$db = new PDO('mysql:host=localhost;dbname=sauvonsLaPlanete;charset=utf8', 'test', 'test');}
  catch (Exception $e)
    {die('Erreur : ' . $e->getMessage());}

 ?>
