<?php
//require "model/db.php";
require "model/benevolesManager.php";
require "service/form.php";
require "service/errorMsg.php";
 ?>

<?php
function connexion() {
  //$messages = errorsLogin();
  $code = "";
  if (isset($_POST)) {
    if (!empty($_POST)) {
      //if (checkValue($_POST)) {
        if (loginBenevole($_POST)) {

          redirectTo("benevoles");
        }
        else {
          $code = "1";
        }
      //}
    }
  }
   require "view/indexView.php";
 }


 function test() {
   echo "test";
 }
 ?>
