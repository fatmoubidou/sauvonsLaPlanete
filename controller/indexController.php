<?php
require "model/benevolesManager.php";
require "service/form.php";
require "service/errorMsg.php";


 ?>

<?php
function login() {
  //$messages = errorsLogin();
  $code = "";
  if (isset($_POST)) {
    if (!empty($_POST)) {
      //if (checkValue($_POST)) {
        if (loginBenevole($_POST)) {
          $benevole = loginBenevole($_POST);
          initializeUserSession($benevole);
          if ($_SESSION["user"]["status"] === "admin") {
            redirectTo("benevoles");
          }else {
            redirectTo("messages");
          }

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

 function deconnect(){
   logout();
   redirectTo("login");
 }
 ?>
