<?php
require "../model/db.php";
require "../model/benevolesManager.php";

if (getOptionCity($db)){
  $listCity = getOptionCity($db); //select city tri
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

if (getBenevoles($db,$tri,$city,$availability))
  {$benevoles = getBenevoles($db,$tri,$city,$availability);}
else
  {$benevoles = "";}

require "../view/indexView.php";

 ?>
