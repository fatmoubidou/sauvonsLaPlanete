<?php
require "model/benevolesManager.php";



function affiche(){
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
    {$benevoles = "";}
    
  require "view/listBenevolesView.php";
}

 ?>
