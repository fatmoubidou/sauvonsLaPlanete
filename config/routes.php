<?php

//Function qui retourne un tableau contenant les routes de notre application
//Modèle des routes
//"NomDeLaRoute" => [
//  "Controller",
//  "Fonction",
//  Optionnel [
//    "parametre1" => ["typeAttendu", optionnel[valeurAttendu]],
//    "parametre2" => ["typeAttendu", optionnel[valeurAttendu]]
//  ]
// "role" => "role"
//]
function getRoutes() {
  return [
    "" => [
      "index",
      "connexion"
    ],
    "test" => [
      "index",
      "test"
    ],
    "benevoles" => [
      "listBenevoles",
      "affiche"
    ],
    "benevoleAdd" => [
      "benevole",
      "add"
    ],
    "benevoleUpdate" => [
      "benevole",
      "edit"
    ]
  ];
}
 ?>
