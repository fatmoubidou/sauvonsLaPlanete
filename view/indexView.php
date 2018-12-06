<?php include "../view/template/header.php"; ?>
<?php //var_dump($benevoles); ?>
<div class="container">
  <div class="">
    <h2>Gestion des bénévoles</h2>
  </div>

  <div class="d-flex justify-content-between mb-2">
    <div >
      <a href="benevole.php?action=add" class="btn btn-primary">Ajouter</a>
    </div>
    <!-- Form table tri form -->
    <?php include "../view/form/tableTriForm.php"; ?>
  </div>

  <table class="table table-striped">
    <thead class="thead-dark">
      <tr>
        <th scope="col" class="col-1">N°</th>
        <th scope="col" class="col-3">Nom</th>
        <th scope="col" class="col-2">Prénom</th>
        <th scope="col" class="col-1">Age</th>
        <th scope="col" class="col-2">Ville</th>
        <th scope="col" class="col-1">Disponibilité</th>
        <th scope="col" class="col-1">Editer</th>
        <th scope="col" class="col-1">Supprimer</th>
      </tr>
    </thead>
    <tbody>
      <?php
          if (!empty($benevoles)) {
            foreach ($benevoles as $key => $value) { ?>
              <tr>
                <th scope="row"><?php echo $value["id"]; ?></th>
                <td><?php echo $value["name"]; ?></td>
                <td><?php echo $value["firstName"]; ?></td>
                <td><?php echo $value["age"]; ?></td>
                <td><?php echo $value["city"]; ?></td>
                <td><?php echo ($value["availability"])?"Disponible":"Indisponible"; ?></td>
                <td><a href="benevole.php?action=edit&id=<?php echo $value["id"]; ?>"><i class="fas fa-edit fa-2x"></i></a></td>
                <td><a href="benevole.php?action=delete&id=<?php echo $value["id"]; ?>"><i class="fas fa-times fa-2x"></i></a></td>
              </tr>
            <?php }
          }
       ?>

    </tbody>
  </table>
</div>


<?php include "../view/template/footer.php"; ?>
