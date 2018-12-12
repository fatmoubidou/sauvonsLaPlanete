<?php
//session_start();
require "model/messagesManager.php";

// if (!isLogged()) {
//   var_dump($_SESSION["user"]);
//   //redirectTo("login");
// } //teste si User connecté, si non redirection à page connexion

function allMessages(){
  if (getMessages())
    {$messages = getMessages();}
  else
    {$messages = "";}

  require "view/listMessagesView.php";
}

 ?>
