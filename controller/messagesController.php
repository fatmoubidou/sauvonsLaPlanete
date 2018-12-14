<?php
require "model/messagesManager.php";
require "service/form.php";
require "service/errorMsg.php";


function allMessages(){ //tous les messages reçus
  if (getMessages($_SESSION["user"]["id"]))
    {$msg = getMessages($_SESSION["user"]["id"]);}
  else
    {$msg = NULL;}
  require "view/listMessagesView.php";
}

function allArchived(){ //tous les messages archivés
  if (getArchived($_SESSION["user"]["id"]))
    {$msg = getArchived($_SESSION["user"]["id"]);}
  else
    {$msg = NULL;}
  require "view/listMessagesView.php";
}

function archived(){ //archivé un msg
  if (isset($_GET["id"]) && !empty($_GET["id"])) {
    $id = intval($_GET["id"]);
    if (setArchived($id))//ARCHIVE
    {
      array_push($_SESSION["codeMsg"], "7");
      redirectTo("messages");
    }
    else
    {
      array_push($_SESSION["codeMsg"], "8");
      redirectTo("messages");
    }
  }

  require "view/listMessagesView.php";
}

function send(){
  if (getOptionBenevoles()){
    $listBenevole = getOptionBenevoles(); //select name benevole
  }
  $action = "add";
  $title = "Envoie d'un message";
  $buttonTitle = "Envoyer";
  $buttonClass = "btn btn-primary";
  if (isset($_POST)) {
    if (!empty($_POST)) {
      if (addMessage($_POST))//ADD
        {
          array_push($_SESSION["codeMsg"], "3"); //ajoute le code msg à la session code
          redirectTo("messages");
        }
      else
        {
          array_push($_SESSION["codeMsg"], "4");
          redirectTo("messages");
        }
    }
  }
  require "view/messageView.php";
}

function read(){
  $action = "read";
  $title = "Modification";
  if (isset($_GET["id"]) && !empty($_GET["id"])) {
    $id = intval($_GET["id"]);
    $msg = getMessage($id);
    $date = new DateTime($msg["dated"]);
  }
  require "view/messageView.php";
}

function delete(){
  $action = "delete";
  $title = "Suppression";
  $buttonTitle = "Supprimer";
  $buttonClass = "btn btn-warning";
  if (isset($_GET["id"]) && !empty($_GET["id"])) {
    $id = intval($_GET["id"]);
    $msg = getMessage($id);
    $date = new DateTime($msg["dated"]);
  }

  if (isset($_POST) && !empty($_POST)) {
      if (deleteMessage($_POST["id"]))//DELETE
        {
          array_push($_SESSION["codeMsg"], "5");
          redirectTo("messages");
        }
      else
        {
          array_push($_SESSION["codeMsg"], "6");
          redirectTo("messages");
        }
    }

  require "view/messageView.php";
}


 ?>
