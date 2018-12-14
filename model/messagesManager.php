<?php
function getMessages($sender){
  $db = getDataBase();
  $requete = $db->prepare('SELECT m.*, b.name as nameSender, b.firstName as firstNameSender
                        FROM `message` as m
                        inner join benevole b on b.id = m.sender
                        WHERE m.recipient = ? AND m.status = ?');
  $requete->execute([$sender,"0"]);
  $result = $requete->fetchAll(PDO::FETCH_ASSOC);
  $requete->closeCursor();
  return $result;
}

function getArchived($sender){
  $db = getDataBase();
  $requete = $db->prepare('SELECT m.*, b.name as nameSender, b.firstName as firstNameSender
                        FROM `message` as m
                        inner join benevole b on b.id = m.sender
                        WHERE m.recipient = ? AND m.status = ?');
  $requete->execute([$sender,"1"]);
  $result = $requete->fetchAll(PDO::FETCH_ASSOC);
  $requete->closeCursor();
  return $result;
}

function setArchived($id){
  $db = getDataBase();
  $requete = $db->prepare('UPDATE message SET status = :status WHERE id = :id');
  $result = $requete->execute(array('id' => $id,
                                    'status' => "1"));
  $requete->closeCursor();
  return $result;

}

function getMessage($id){
  $db = getDataBase();
  $requete = $db->prepare('SELECT m.*, b.name as nameSender, b.firstName as firstNameSender
                          FROM `message` as m
                          inner join benevole b on b.id = m.sender
                          WHERE m.id = ?');
  $requete->execute([$id]);
  $result = $requete->fetch(PDO::FETCH_ASSOC);
  $requete->closeCursor();
  return $result;
}

function getOptionBenevoles(){
  $db = getDataBase();
  $requete = $db->query('SELECT distinct id, name, firstName FROM benevole');
  $result = $requete->fetchAll(PDO::FETCH_ASSOC);
  $requete->closeCursor();
  return $result;
}

function addMessage($form){
  $db = getDataBase();
  $requete = $db->prepare('INSERT INTO message (object, contents, dated, recipient, sender, status)
                                         VALUES (:object, :contents, :dated, :recipient, :sender, :status)');
  $result = $requete->execute(array('object' => $form["object"],
                                    'contents' => $form["contents"],
                                    'dated' => date("Y-m-d H:i:s"),
                                    'recipient' => $form["recipient"],
                                    'sender' => $form["sender"],
                                    'status' => "0"));
  $requete->closeCursor();
  return $result;
}

function updateMessage($form){
  $db = getDataBase();
  $requete = $db->prepare('UPDATE message SET object = :object, contents = :contents, dated = :dated, recipient = :recipient, sender = :sender, status = :status WHERE id = :id');
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
