<?php include "view/template/header.php"; ?>
<?php //var_dump($msg); ?>
<?php //var_dump($code); ?>
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
            echo afficheErrorMsg($_SESSION["codeMsg"][0],"Le message");
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
  <div class="d-flex justify-content-between mb-2">
    <div class="">
      <h2>Boite de reception</h2>
    </div>
    <div >
      <a <?php setHref("messages/send"); ?> class="btn btn-primary">Nouveau message</a>
    </div>
  </div>

    <!-- Affichage du tableau -->
  <table class="table table-striped">
    <thead class="thead-dark">
      <tr>
        <th scope="col" class="col-2">Expéditeur</th>
        <th scope="col" class="col-5">Objet</th>
        <th scope="col" class="col-2">Date</th>
        <th scope="col" class="col-1"><i class="fab fa-readme fa-2x"></i></th>
        <th scope="col" class="col-1"><i class="fas fa-archive fa-2x"></i></th>
        <th scope="col" class="col-1"><i class="fas fa-times fa-2x"></i></th>
      </tr>
    </thead>
    <tbody>
      <?php
          if (!empty($msg)) {
            foreach ($msg as $key => $value) {
              $date = new DateTime($value["dated"]);?>
              <tr>
                <td><?php echo $value["firstNameSender"]." ".$value["nameSender"]; ?></td>
                <td><?php echo $value["object"]; ?></td>
                <td><?php echo $date->format('d M. Y'); ?></td>
                <td><a  <?php setHref("messages/read", ["id"=>$value["id"]]); ?> data-toggle="tooltip" data-placement="right" title="Lire le message"><i class="fab fa-readme fa-2x"></i></a></td>
                <td><a  <?php setHref("messages/setArchived", ["id"=>$value["id"]]); ?>   <?php echo ($value["status"])?'title="Archivé" class="p-0 btn disabled"':'title="Archiver"'; ?>><i class="fas fa-archive fa-2x"></i></a></td>
                <td><a  <?php setHref("messages/delete", ["id"=>$value["id"]]); ?> data-toggle="tooltip" data-placement="right" title="Supprimer"><i class="fas fa-times fa-2x"></i></a></td>
              </tr>
            <?php }
          }
       ?>

    </tbody>
  </table>
</div>


<?php include "view/template/footer.php"; ?>
