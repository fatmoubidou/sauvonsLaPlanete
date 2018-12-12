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
  $action = "add";
  $buttonAction = $action;
  $messages = errorsBenevole();
  $code = "";
  $title = "Ajout";
  $buttonTitle = "Ajouter";
  $buttonClass = "btn btn-primary";
  if (isset($_POST)) {
    if (!empty($_POST)) {
      if (addBenevole($_POST))
        {$code = "3";} //ADD
      else
        {$code = "4";}
    }
  }
  require "view/benevoleView.php";
}

function edit(){
  $action = "edit";
  $buttonAction = $action;
  $messages = errorsBenevole();
  $code = "";
  $title = "Modification";
  if (isset($_GET["id"]) && !empty($_GET["id"])) {
    $id = intval($_GET["id"]);
  }
  $benevole = getBenevole($id);
  $buttonTitle = "Enregistrer";
  $buttonClass = "btn btn-primary";
  if (isset($_POST)) {
    if (!empty($_POST)) {
      if(updateBenevole($_POST))
        {
          $benevole = getBenevole($_POST["id"]);
          $code = "1";//UPDATE
        }
      else
        {$code = "2";}
    }
  }
  require "view/benevoleView.php";
}

function delete(){
  $action = "delete";
  $buttonAction = $action;
  $messages = errorsBenevole();
  $code = "";
  $title = "Suppression";
  if (isset($_GET["id"]) && !empty($_GET["id"])) {
    $id = intval($_GET["id"]);
  }
  $benevole = getBenevole($id);
  $buttonTitle = "Supprimer";
  $buttonClass = "btn btn-warning";
  if (isset($_POST)) {
    if (!empty($_POST)) {
      if (deleteBenevole($_POST["id"]))
        {$code = "5";} //DELETE
      else
        {$code = "6";}
    }
  }
  require "view/benevoleView.php";
}

 ?>
