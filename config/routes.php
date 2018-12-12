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
      "login"
    ],
    "login" => [
      "index",
      "login"
    ],
    "test" => [
      "index",
      "test"
    ],
    "benevoles" => [
      "benevoles",
      "allBenevoles",
      "status" => "admin"
    ],
    "benevoles/add" => [
      "benevoles",
      "add",
      "status" => "admin"
    ],
    "benevoles/edit" => [
      "benevoles",
      "edit",
      [
        "id" => ["integer"]
      ],
      "status" => "admin"
    ],
    "benevoles/delete" => [
      "benevoles",
      "delete",
      [
        "id" => ["integer"]
      ],
      "status" => "admin"
    ],
    "messages" => [
      "messages",
      "allMessages",
      "status" => "admin"
    ],
  ];
}
 ?>
