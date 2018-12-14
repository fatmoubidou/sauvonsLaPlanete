<?php
//var_dump($_SESSION["user"]);
require "model/benevolesManager.php";
require "service/form.php";
require "service/errorMsg.php";

function allBenevoles(){
  if (getOptionCity()){
    $listCity = getOptionCity(); //select city tri
  }

  if (isset($_POST) && !empty($_POST)) {
    //var_dump($_POST);
    $tri = $_POST["tri"];
    $city = ($_POST["city"]!="0")?$_POST["city"]:NULL;
    $availability = $_POST["availability"];
  }else {
    $tri = "name";
    $city = NULL;
    $availability = NULL;
  }
  //var_dump(getBenevoles($db,$tri,$city,$availability));

  if (getBenevoles($tri,$city,$availability))
    {$benevoles = getBenevoles($tri,$city,$availability);}
  else
    {$benevoles = NULL;}

  require "view/listBenevolesView.php";
}


function add(){
  $action = "add"; //pour choix du formulaire
  $title = "Ajout";
  $buttonTitle = "Ajouter";
  $buttonClass = "btn btn-primary";
  if (isset($_POST) && !empty($_POST)) {
    if (addBenevole($_POST))//ADD
        {
          array_push($_SESSION["codeMsg"], "3"); //ajoute le code msg à la session code
          redirectTo("benevoles");
        }
    else
        {
          array_push($_SESSION["codeMsg"], "4");
          redirectTo("benevoles");
        }
  }
  require "view/benevoleView.php";
}

function edit(){
  $action = "edit";
  $title = "Modification";
  $buttonTitle = "Enregistrer";
  $buttonClass = "btn btn-primary";
  if (isset($_GET["id"]) && !empty($_GET["id"])) {
    $id = intval($_GET["id"]);
    $benevole = getBenevole($id);
  }

  if (isset($_POST) && !empty($_POST)) {
      if(updateBenevole($_POST))//UPDATE
        {
          array_push($_SESSION["codeMsg"], "1");
          redirectTo("benevoles");
        }
      else
        {
          array_push($_SESSION["codeMsg"], "2");
          redirectTo("benevoles");
        }
  }
  require "view/benevoleView.php";
}

function delete(){
  $action = "delete";
  $title = "Suppression";
  if (isset($_GET["id"]) && !empty($_GET["id"])) {
    $id = intval($_GET["id"]);
  }
  $benevole = getBenevole($id);
  $buttonTitle = "Supprimer";
  $buttonClass = "btn btn-warning";
  if (isset($_POST) && !empty($_POST)) {
    if (deleteBenevole($_POST["id"]))//DELETE
        {
          array_push($_SESSION["codeMsg"], "5");
          redirectTo("benevoles");
        }
    else
        {
          array_push($_SESSION["codeMsg"], "6");
          redirectTo("benevoles");
        }
  }
  require "view/benevoleView.php";
}

 ?>
