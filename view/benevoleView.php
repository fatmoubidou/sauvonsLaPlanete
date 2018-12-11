<?php include "view/template/header.php";  ?>

<div class="container">
  <div class="d-flex justify-content-between mb-5">
    <h2><?php echo $title; ?></h2>
    <div class="">
      <a href="listBenevoles.php" class="btn btn-primary">Liste des bénévoles</a>
    </div>
  </div>
  <!-- Form benevole add or edit -->
  <?php include "view/form/benevoleForm.php"; ?>
</div>

<?php include "view/template/footer.php"; ?>
