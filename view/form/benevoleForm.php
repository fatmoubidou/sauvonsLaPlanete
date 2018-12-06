<form class="needs-validation" method="post" action="" novalidate>
  <input type="hidden" name="id" value="<?php echo (isset($benevole))?$benevole["id"]:""; ?>">
  <?php if ($action != "delete"): ?>
  <div class="form-row">
    <div class="col-md-4 mb-3">
      <label for="name">Nom</label>
      <input type="text" class="form-control" name="name" placeholder="Nom" value="<?php echo (isset($benevole))?$benevole["name"]:""; ?>" required>
    </div>
    <div class="col-md-4 mb-3">
      <label for="firstName">Prénom</label>
      <input type="text" class="form-control" name="firstName" placeholder="Prénom" value="<?php echo (isset($benevole))?$benevole["firstName"]:""; ?>" required>
    </div>
    <div class="col-md-2 mb-3">
      <label for="age">Âge</label>
      <input type="number" class="form-control" name="age" placeholder="Âge" value="<?php echo (isset($benevole))?$benevole["age"]:""; ?>" required>
      <div class="invalid-feedback">Veuillez selectionner un âge.</div>
    </div>
    <div class="col-md-2 mb-3">
      <label for="availability">Disponibilité</label>
      <select class="form-control" name="availability">
        <option <?php echo (isset($benevole) && $benevole["availability"] == "1")?'selected="selected"':'';  ?> value="1">Disponible</option>
        <option <?php echo (isset($benevole) && $benevole["availability"] == "0")?'selected="selected"':'';  ?> value="0">Indisponible</option>
      </select>
    </div>
  </div>
  <div class="form-row">
    <div class="col-md-12 mb-3">
      <label for="comment">Commentaire</label>
      <textarea name="comment" class="form-control" rows="5" cols="80" ><?php echo (isset($benevole))?$benevole["comment"]:""; ?></textarea>
    </div>
  </div>
  <div class="form-row">
    <div class="col-md-6 mb-3">
      <label for="street">Rue</label>
      <input type="text" class="form-control" name="street" placeholder="Rue" value="<?php echo (isset($benevole))?$benevole["street"]:""; ?>" required>
      <div class="invalid-feedback">Veuillez saisir un nom de rue.</div>
    </div>
    <div class="col-md-6 mb-3">
      <label for="city">Ville</label>
      <input type="text" class="form-control" name="city" placeholder="Ville" value="<?php echo (isset($benevole))?$benevole["city"]:""; ?>" required>
      <div class="invalid-feedback">Veuillez saisir une ville.</div>
    </div>
  </div>
  <?php else: ?>
    <div class="alert alert-warning text-center" role="alert">
      <h3>Voulez-vous supprimer ce bénévole ?</h3>
      <h4><?php echo $benevole["name"]." ". $benevole["firstName"] ?></h4>
    </div>
  <?php  endif; ?>
  <div class="d-flex justify-content-end">
    <button name="action" class="<?php echo $buttonClass; ?>" type="submit"  value="<?php echo $buttonAction; ?>" ><?php echo $buttonTitle; ?></button>
  </div>
</form>
