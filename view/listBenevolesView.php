<?php include "view/template/header.php"; ?>
<?php //var_dump($benevoles); ?>
<?php //var_dump($_SESSION["codeMsg"]); ?>
<?php
//Affichage du message de confirmation ou d'erreur
if (isset($_SESSION["codeMsg"][0])) { ?>
  <!-- Modal -->
  <div id="myModal" class="modal fade" role="dialog">
    <div class="modal-dialog modal-dialog-centered">
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        <div class="modal-body">
          <div class="alert alert-success text-center mt-2" role="alert">
            <?php
            echo afficheErrorMsg($_SESSION["codeMsg"][0],"Le bénévole");
            array_pop($_SESSION["codeMsg"]); //retire le code de la session
            ?>
          </div>
        </div>
        <div class="modal-footer">
        </div>
      </div>
    </div>
  </div>
  <?php } ?>
<div class="container">
  <div class="">
    <h2>Gestion des bénévoles</h2>
  </div>

  <div class="d-flex justify-content-between mb-2">
    <div >
      <a <?php setHref("benevoles/add"); ?> class="btn btn-primary">Ajouter</a>
    </div>
    <!-- Form table tri form -->
    <?php include "view/form/tableTriForm.php"; ?>
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
                <td><a <?php setHref("benevoles/edit", ["id"=>$value["id"]]); ?>><i class="fas fa-edit fa-2x"></i></a></td>
                <td><a <?php setHref("benevoles/delete", ["id"=>$value["id"]]); ?>><i class="fas fa-times fa-2x"></i></a></td>
              </tr>
            <?php }
          }
       ?>

    </tbody>
  </table>
</div>


<?php include "view/template/footer.php"; ?>
