<?php include "view/template/header.php";  ?>

<div class="container">
  <div class="d-flex justify-content-between">
    <h2><?php echo $title; ?></h2>
    <div class="">
      <a <?php setHref("benevoles"); ?> class="btn btn-primary">Liste des bénévoles</a>
    </div>
  </div>
  <!-- Form benevole add or edit -->
  <?php include "view/form/benevoleForm.php"; ?>
</div>

<?php include "view/template/footer.php"; ?>
