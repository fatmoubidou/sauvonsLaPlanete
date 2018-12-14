<?php

function errorsMsg($subject){
  return [
    ["id" => 1, "msg" => "".$subject." est modifié."],
    ["id" => 2, "msg" => "Une erreur est survenue. ".$subject." n'est pas modifié."],
    ["id" => 3, "msg" => "".$subject." est ajouté."],
    ["id" => 4, "msg" => "Une erreur est survenue. ".$subject." n'est pas ajouté."],
    ["id" => 5, "msg" => "".$subject." est supprimé."],
    ["id" => 6, "msg" => "Une erreur est survenue. ".$subject." n'est pas supprimé."],
    ["id" => 7, "msg" => "".$subject." est archivé."],
    ["id" => 8, "msg" => "Une erreur est survenue. ".$subject." n'est pas archivé."],
    ["id" => 0, "msg" => "Une erreur est survenue."]
  ];
}

 ?>
