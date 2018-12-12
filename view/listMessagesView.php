<?php include "view/template/header.php"; ?>
<?php //var_dump($messages); ?>
<div class="container">
  <div class="">
    <h2>Gestion des messages</h2>
  </div>

  <div class="d-flex justify-content-between mb-2">
    <div >
      <a href="message.php?action=add" class="btn btn-primary">Ajouter</a>
    </div>

  </div>

  <table class="table table-striped">
    <thead class="thead-dark">
      <tr>
        <th scope="col" class="col-1">N°</th>
        <th scope="col" class="col-3">Objet</th>
        <th scope="col" class="col-2">Expéditeur</th>
        <th scope="col" class="col-1">Destinataire</th>
        <th scope="col" class="col-2">Date</th>
        <th scope="col" class="col-1">Statut</th>
        <th scope="col" class="col-1">Editer</th>
        <th scope="col" class="col-1">Supprimer</th>
      </tr>
    </thead>
    <tbody>
      <?php
          if (!empty($messages)) {
            foreach ($messages as $key => $value) { ?>
              <tr>
                <th scope="row"><?php echo $value["id"]; ?></th>
                <td><?php echo $value["object"]; ?></td>
                <td><?php echo $value["sender"]; ?></td>
                <td><?php echo $value["recipient"]; ?></td>
                <td><?php echo $value["dated"]; ?></td>
                <td><?php echo ($value["status"])?"Disponible":"Indisponible"; ?></td>
                <td><a href="message.php?action=edit&id=<?php echo $value["id"]; ?>"><i class="fas fa-edit fa-2x"></i></a></td>
                <td><a href="message.php?action=delete&id=<?php echo $value["id"]; ?>"><i class="fas fa-times fa-2x"></i></a></td>
              </tr>
            <?php }
          }
       ?>

    </tbody>
  </table>
</div>


<?php include "view/template/footer.php"; ?>
