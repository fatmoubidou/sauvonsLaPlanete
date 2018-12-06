<?php
require "../model/db.php";
require "../model/benevolesManager.php";
require "../service/form.php";

if (isset($_GET["id"]) && !empty($_GET["id"])) {
  $id = intval($_GET["id"]);
}

if (isset($_GET["action"]) && !empty($_GET["action"])) {
  $action = $_GET["action"];
  $buttonAction = $action;
  switch ($action) {
    case 'add':
      $title = "Ajout";
      $buttonTitle = "Ajouter";
      $buttonClass = "btn btn-primary";
      break;
    case 'edit':
      $title = "Modification";
      $benevole = getBenevole($db,$id);
      $buttonTitle = "Enregistrer";
      $buttonClass = "btn btn-primary";
      break;
    case 'delete':
      $title = "Suppression";
      $benevole = getBenevole($db,$id);
      $buttonTitle = "Supprimer";
      $buttonClass = "btn btn-warning";
      break;
  }
}

if (isset($_POST)) {
  if (!empty($_POST)) {
    //if (checkValue($_POST)) {
      switch ($_POST["action"]) {
        case 'add':
          if (addBenevole($db, $_POST)) {
            //echo "ok add";
          }else
            {echo "ko add";}
          break;
        case 'edit':
          if(updateBenevole($db, $_POST))
            {$benevole = getBenevole($db,$_POST["id"]);
             //echo "ok";
            }
          else
            {echo "ko update";}
          break;
        case 'delete':
          if (deleteBenevole($db, $_POST["id"])) {
            //echo "ok delete";
          }else {
            echo "ko delete";
          }
          break;
      }
      // code...
    //}
    // code...
  }
  // code...
}

require "../view/benevoleView.php";
 ?>
