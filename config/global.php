<?php
//fichier de configuration globale, notamment utilisé dans le routeur et pour les redirection
function getGlobalConfig() {
  return $config = [
    "protocol" => "",
    "host" => "localhost/Lab/sauvonslaPlanete/",
    "status" => ["0", "1"],
    "defaultRoute" => ""
  ];
}
 ?>
