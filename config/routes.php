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
    // BENEVOLES
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
    // MESSAGES
    "messages" => [ //Les messages reçus
      "messages",
      "allMessages",
      "status" => "user"
    ],
    "messages/archived" => [ //Les messages archivés
      "messages",
      "allArchived",
      "status" => "user"
    ],
    "messages/send" => [ //ENVOYER un message
      "messages",
      "send",
      "status" => "user"
    ],
    "messages/read" => [
      "messages",
      "read",
      [
        "id" => ["integer"]
      ],
      "status" => "user"
    ],
    "messages/delete" => [
      "messages",
      "delete",
      [
        "id" => ["integer"]
      ],
      "status" => "user"
    ],
    "messages/setArchived" => [
      "messages",
      "archived",
      [
        "id" => ["integer"]
      ],
      "status" => "user"
    ],
    "logout" => [
      "index",
      "deconnect"
    ]
  ];
}
 ?>
