<?php
function getBenevoles($db,$tri,$city,$availability){
  if (!is_null($city) || !is_null($availability)) {$where = "WHERE ";}else {$where = "";}
  if (!is_null($city)) {$condition1 = "city = :city ";}else{$condition1 = "";}
  if (!is_null($city) && !is_null($availability)) {$and = "AND ";}else {$and = "";}
  if (!is_null($availability)) {$condition2 = "availability = :availability ";}else{$condition2 ="";}

  $requete = $db->prepare('SELECT * FROM benevole '.$where . $condition1 . $and . $condition2.' ORDER BY '.$tri.' asc');
  $requete->execute(array('availability' => $availability,'city' => $city));
  $result = $requete->fetchAll(PDO::FETCH_ASSOC);
  $requete->closeCursor();
  return $result;
}

function getBenevole($db,$id){
  $requete = $db->prepare('SELECT * FROM `benevole` WHERE id = ?');
  $requete->execute([$id]);
  $result = $requete->fetch(PDO::FETCH_ASSOC);
  $requete->closeCursor();
  return $result;
}

function getOptionCity($db){
  $requete = $db->query('SELECT distinct city FROM benevole');
  $result = $requete->fetchAll(PDO::FETCH_ASSOC);
  $requete->closeCursor();
  return $result;
}

function addBenevole($db,$form){
  $requete = $db->prepare('INSERT INTO benevole (name, firstName, age, availability, comment, street, city)
                                         VALUES (:name, :firstName, :age, :availability, :comment, :street, :city)');
  $result = $requete->execute(array('name' => $form["name"],
                                    'firstName' => $form["firstName"],
                                    'age' => $form["age"],
                                    'availability' => $form["availability"],
                                    'comment' => $form["comment"],
                                    'street' => $form["street"],
                                    'city' => $form["city"]));
  $requete->closeCursor();
  return $result;
}

function updateBenevole($db,$form){
  $requete = $db->prepare('UPDATE benevole SET name = :name, firstName = :firstName, age = :age, availability = :availability, comment = :comment, street = :street, city = :city WHERE id = :id');
  $result = $requete->execute(array('id' => $form["id"],
                                    'name' => $form["name"],
                                    'firstName' => $form["firstName"],
                                    'age' => $form["age"],
                                    'availability' => $form["availability"],
                                    'comment' => $form["comment"],
                                    'street' => $form["street"],
                                    'city' => $form["city"]));
  $requete->closeCursor();
  return $result;
}

function deleteBenevole($db,$id){
  $requete = $db->prepare('DELETE FROM benevole where id= ?');
  $result = $requete->execute(array($id));
  return $result;
}

 ?>
