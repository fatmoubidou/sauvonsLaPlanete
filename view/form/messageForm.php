<?php
  //var_dump($_POST);
  //var_dump($msg);
?>
    <!-- Affichage du formulaire -->
    <form class="needs-validation w-50" method="post" action="" novalidate>
    <!-- ID du message -->
    <input type="hidden" name="id" value="<?php echo (isset($msg))?$msg["id"]:""; ?>">
    <?php if ($action != "delete"): ?>
      <div class="form-row">
        <!-- ID de l'expéditeur -->
        <input type="hidden" name="sender" value="<?php echo $_SESSION["user"]["id"]; ?>">

          <?php if ($action == "read"): ?>
            <div class="col-md-6 mb-3">
              <label for="senderMsg">Expéditeur</label>
              <input type="text" class="form-control" name="senderMsg" value="<?php echo (isset($msg))?$msg["firstNameSender"]." ".$msg["nameSender"]:""; ?>" readonly>
            </div>
            <div class="col-md-6 mb-3">
              <label for="dated">Date</label>
              <input type="text" class="form-control" name="dated" value="<?php echo (isset($msg))?$date->format('d M. Y H:i'):""; ?>" readonly>
            </div>
          <?php else: ?>
            <div class="col-md mb-3">
              <label for="recipient">Destinataire</label>
              <select class="form-control" name="recipient" required>
                <option value="">Choisir un destinataire</option>
                <?php
                foreach ($listBenevole as $key => $value) { ?>
                  <option <?php echo (isset($msg["recipient"]) && $msg["recipient"] == $value["id"])?'selected="selected"':'';  ?>value="<?php echo $value["id"]; ?>"><?php echo $value["firstName"]." ".$value["name"]; ?></option>
                <?php }
                 ?>
              </select>
              <div class="invalid-feedback">Veuillez choisir un destinataire.</div>
            </div>
          <?php endif; ?>
        </div>
        <div class="form-row">
          <div class="col-md mb-3">
            <label for="object">Objet</label>
            <input type="text" class="form-control" name="object" placeholder="Objet" value="<?php echo (isset($msg))?$msg["object"]:""; ?>" <?php echo ($action == "read")?"readonly":"required"; ?> >
            <div class="invalid-feedback">Veuillez saisir un objet.</div>
          </div>
        </div>
        <div class="form-row">
          <div class="col-md mb-3">
            <label for="contents">Message</label>
            <textarea name="contents" class="form-control" rows="10" cols="80" <?php echo ($action == "read")?"readonly":"required"; ?> ><?php echo (isset($msg))?$msg["contents"]:""; ?></textarea>
            <div class="invalid-feedback">Veuillez saisir un message.</div>
          </div>
        </div>
    <?php else: ?>
      <!-- SUPPRESSION -->
      <div class="alert alert-warning text-center" role="alert">
        <h3>Voulez-vous supprimer ce message ?</h3>
        <h4><?php echo $msg["object"]; ?></h4>
        <p><?php echo " envoyé à ".$msg["firstNameSender"]." ".$msg["nameSender"].", le ". $date->format('d M. Y') ?></p>
      </div>
    <?php  endif; ?>
    <?php if ($action != "read"): ?>
    <div class="d-flex justify-content-end mb-2">
      <button class="<?php echo $buttonClass; ?>" type="submit" ><?php echo $buttonTitle; ?></button>
    </div>
    <?php endif; ?>
  </form>
