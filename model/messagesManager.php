<?php

function getMessages(){
  $db = getDataBase();
  $requete = $db->query('SELECT * FROM message');
  $result = $requete->fetchAll(PDO::FETCH_ASSOC);
  $requete->closeCursor();
  return $result;
}

function getMessage($id){
  $db = getDataBase();
  $requete = $db->prepare('SELECT * FROM `message` WHERE id = ?');
  $requete->execute([$id]);
  $result = $requete->fetch(PDO::FETCH_ASSOC);
  $requete->closeCursor();
  return $result;
}

function addMessage($form){
  $db = getDataBase();
  $requete = $db->prepare('INSERT INTO message (object, contents, dated, recipient, sender, status)
                                         VALUES (:object, :contents, :dated, :recipient, :sender, :status)');
  $result = $requete->execute(array('object' => $form["object"],
                                    'contents' => $form["contents"],
                                    'dated' => $form["dated"],
                                    'recipient' => $form["recipient"],
                                    'sender' => $form["sender"],
                                    'status' => $form["status"]));
  $requete->closeCursor();
  return $result;
}

function updateMessage($form){
  $db = getDataBase();
  $requete = $db->prepare('UPDATE message SET name = :name, firstName = :firstName, age = :age, availability = :availability, comment = :comment, street = :street, city = :city WHERE id = :id');
  $result = $requete->execute(array('id' => $form["id"],
                                    'object' => $form["object"],
                                    'contents' => $form["contents"],
                                    'dated' => $form["dated"],
                                    'recipient' => $form["recipient"],
                                    'sender' => $form["sender"],
                                    'status' => $form["status"]));
  $requete->closeCursor();
  return $result;
}

function deleteMessage($id){
  $db = getDataBase();
  $requete = $db->prepare('DELETE FROM message where id= ?');
  $result = $requete->execute(array($id));
  return $result;
}

 ?>
